/**
 * CMS Live Preview — realtime sync module
 *
 * Watches admin form inputs, debounces changes, POSTs draft to session,
 * then refreshes the preview iframe. Also sends postMessage focus
 * highlights to the iframe for a professional editing experience.
 */
(function () {
    'use strict';

    var DEBOUNCE_MS = 300;
    var DRAFT_URL   = '/admin/cms/preview-draft';

    var iframe    = document.getElementById('cms-preview-iframe');
    var indicator = document.getElementById('cms-preview-indicator');
    var sectionLabel = document.getElementById('cms-preview-section-label');

    if (!iframe) return;

    var csrfToken = (document.querySelector('meta[name="csrf-token"]') || {}).content
                 || (document.querySelector('input[name="_token"]') || {}).value
                 || '';

    var currentController = null;
    var debounceTimer     = null;
    var currentSectionKey = null;

    // ── Collect all section forms ────────────────────────────────────
    var sectionForms = document.querySelectorAll('[data-section-key]');

    sectionForms.forEach(function (form) {
        var inputs = form.querySelectorAll('input, textarea, select');

        inputs.forEach(function (input) {
            input.addEventListener('input',  function () { handleChange(form); });
            input.addEventListener('change', function () { handleChange(form); });

            // Focus: switch preview section + highlight via postMessage
            input.addEventListener('focus', function () {
                var sectionKey = form.dataset.sectionKey;
                var fieldName = input.name;

                // Switch preview to the focused section
                if (sectionKey && sectionKey !== currentSectionKey) {
                    currentSectionKey = sectionKey;
                    updateIframeSrc(sectionKey);
                    updateLabel(form);
                }

                // Send field highlight to iframe
                if (fieldName && iframe.contentWindow) {
                    iframe.contentWindow.postMessage({ type: 'focus', field: fieldName }, '*');
                }
            });
        });
    });

    // ── Handlers ─────────────────────────────────────────────────────
    function handleChange(form) {
        var sectionKey = form.dataset.sectionKey;

        // If the user switched to a different section, reload iframe
        if (sectionKey !== currentSectionKey) {
            currentSectionKey = sectionKey;
            updateLabel(form);
        }

        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function () { syncDraft(form, sectionKey); }, DEBOUNCE_MS);
    }

    function updateLabel(form) {
        if (sectionLabel) {
            var heading = form.querySelector('.card-header h5');
            sectionLabel.textContent = heading ? heading.textContent.trim() : currentSectionKey;
        }
    }

    function updateIframeSrc(sectionKey) {
        iframe.src = '/admin/cms/preview/section/' + sectionKey + '?t=' + Date.now();
    }

    function collectFormData(form) {
        var data   = {};
        var inputs = form.querySelectorAll('input, textarea, select');

        inputs.forEach(function (input) {
            if (!input.name) return;
            if (input.type === 'file') return; // handled separately

            if (input.type === 'checkbox') {
                data[input.name] = input.checked ? '1' : '0';
            } else {
                data[input.name] = input.value;
            }
        });

        return data;
    }

    // ── Sync draft to session, then reload iframe ────────────────────
    function syncDraft(form, sectionKey) {
        if (currentController) {
            currentController.abort();
        }
        currentController = new AbortController();

        if (indicator) indicator.classList.remove('d-none');

        var data = collectFormData(form);

        fetch(DRAFT_URL, {
            method: 'POST',
            headers: {
                'Content-Type':  'application/json',
                'X-CSRF-TOKEN':  csrfToken,
                'Accept':        'application/json',
            },
            body: JSON.stringify({ section_key: sectionKey, data: data }),
            signal: currentController.signal,
        })
        .then(function () {
            // Reload iframe to pick up new session draft
            updateIframeSrc(sectionKey);
        })
        .catch(function (err) {
            if (err.name !== 'AbortError') {
                console.error('Preview sync error:', err);
            }
        })
        .finally(function () {
            if (indicator) indicator.classList.add('d-none');
            currentController = null;
        });
    }

    // ── Intersection Observer: auto-switch preview on scroll ─────────
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                var sectionKey = entry.target.dataset.sectionKey;
                if (sectionKey && sectionKey !== currentSectionKey) {
                    currentSectionKey = sectionKey;
                    updateIframeSrc(sectionKey);
                    updateLabel(entry.target);
                }
            }
        });
    }, { threshold: 0.5 });

    sectionForms.forEach(function (form) { observer.observe(form); });

    // ── Initialize with first visible section ────────────────────────
    if (sectionForms.length > 0) {
        var first = sectionForms[0];
        currentSectionKey = first.dataset.sectionKey;
        updateIframeSrc(currentSectionKey);
        updateLabel(first);
    }

    // ── Scale toggle buttons ───────────────────────────────────────
    var stage  = document.getElementById('cmsPreviewStage');
    var canvas = document.getElementById('cmsPreviewCanvas');
    var scaleBtns = document.querySelectorAll('.cms-preview-scale-btns .btn[data-scale]');

    scaleBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (!canvas || !stage) return;

            // Get old scale from computed style
            var computedStyle = getComputedStyle(canvas);
            var oldScale = parseFloat(computedStyle.getPropertyValue('--preview-scale')) || 0.5;
            var newScale = parseFloat(btn.dataset.scale) || 0.5;

            // Store current scroll position
            var oldScrollTop  = stage.scrollTop;
            var oldScrollLeft = stage.scrollLeft;

            // Update active button
            scaleBtns.forEach(function (b) { b.classList.remove('active'); });
            btn.classList.add('active');

            // Apply new scale to canvas
            canvas.style.setProperty('--preview-scale', newScale);

            // Preserve scroll position relative to scale change
            if (oldScale !== 0) {
                var ratio = newScale / oldScale;
                stage.scrollTop  = oldScrollTop  * ratio;
                stage.scrollLeft = oldScrollLeft * ratio;
            }
        });
    });

    // ── Preview panel toggle ───────────────────────────────────────
    var toggleCb = document.getElementById('previewToggle');
    var layout   = document.getElementById('cmsSplitLayout');

    if (toggleCb && layout) {
        toggleCb.addEventListener('change', function () {
            layout.classList.toggle('preview-hidden', !this.checked);
        });
    }
})();
