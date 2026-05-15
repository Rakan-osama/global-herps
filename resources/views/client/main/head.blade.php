 <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description"
      content="Global Herbs is an Egyptian company specialized in growing, processing and exporting premium mint, herbs, spices and seeds to international markets with consistent quality and reliable service.">
   <meta name="keywords"
      content="global herbs, egyptian herbs, egyptian mint, chamomile export, anise seeds, fenugreek export, coriander seeds, herbs export egypt, spices export, dried herbs egypt, tea herbs, herb supplier egypt">
   <meta name="author" content="Global Herbs">
   <title>Global Herbs</title>
   <link rel="apple-touch-icon" href="{{ asset('client/assets/images/favicon-green.jpeg') }}">
   <link rel="shortcut icon" href="{{ asset('client/assets/images/favicon-green.jpeg') }}">
   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com/">
   <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Rethink+Sans:ital,wght@0,400..800;1,400..800&amp;display=swap"
      rel="stylesheet">
   <!-- CSS Files -->
   <link rel="stylesheet" href="{{ asset('client/assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('client/assets/css/fancybox.css') }}">
   <link rel="stylesheet" href="{{ asset('client/assets/css/swiper-bundle.min.css') }}">
   <link rel="stylesheet" href="{{ asset('client/assets/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('client/assets/css/jarallax.min.css') }}">
   <link rel="stylesheet" href="{{ asset('client/assets/css/nice-select.css') }}">
   <link rel="stylesheet" href="{{ asset('client/assets/css/jquery.datepicker.css') }}">
   <link rel="stylesheet" href="{{ asset('client/assets/css/jquery.timepicker.min.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

   <!-- Style CSS -->
   <link rel="stylesheet" href="{{ asset('client/assets/css/style.css') }}">
   <style>
/* ── Products page: filter tabs ──────────────────── */
.prod-filter-wrap { padding: 0 10px; }
.prod-filter-tabs {
    display: inline-flex;
    gap: 0;
    background: #f1f5f0;
    border-radius: 50px;
    padding: 6px;
    box-shadow: 0 2px 12px rgba(0,0,0,0.08);
}
.prod-tab-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 12px 28px;
    border: none;
    background: transparent;
    border-radius: 50px;
    font-size: 15px;
    font-weight: 600;
    color: #606f7b;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    white-space: nowrap;
}
.prod-tab-btn .tab-icon { font-size: 16px; }
.prod-tab-btn .tab-count {
    background: rgba(0,0,0,0.08);
    border-radius: 20px;
    font-size: 12px;
    font-weight: 700;
    padding: 2px 8px;
    transition: background 0.3s ease, color 0.3s ease;
}
.prod-tab-btn.active {
    background: var(--primary, #2ea140);
    color: #fff;
    box-shadow: 0 4px 14px rgba(46,161,64,0.35);
}
.prod-tab-btn.active .tab-count { background: rgba(255,255,255,0.25); color: #fff; }
.prod-tab-btn:not(.active):hover { background: #e4ede5; color: #2ea140; }
.prod-card {
    display: flex;
    flex-direction: column;
    height: 100%;
    border-radius: 14px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 2px 16px rgba(0,0,0,0.07);
    text-decoration: none;
    color: inherit;
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}
.prod-card:hover { transform: translateY(-6px); box-shadow: 0 12px 32px rgba(0,0,0,0.13); color: inherit; text-decoration: none; }
.prod-card-img { position: relative; width: 100%; height: 200px; overflow: hidden; flex-shrink: 0; }
.prod-card-img img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; transition: transform 0.5s ease; }
.prod-card:hover .prod-card-img img { transform: scale(1.06); }
.prod-category-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: var(--primary, #2ea140);
    color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    padding: 4px 10px;
    border-radius: 20px;
}
.prod-category-badge.herbs  { background: #1a8a30; }
.prod-category-badge.spices { background: #c0392b; }
.prod-card-body { display: flex; flex-direction: column; flex-grow: 1; padding: 18px 20px 20px; border-top: 2px solid #f1f5f0; }
.prod-card-title { font-size: 17px; font-weight: 700; margin: 0 0 8px; color: #1a2e1a; line-height: 1.3; }
.prod-card-desc {
    font-size: 13px; color: #606f7b; line-height: 1.6; flex-grow: 1; margin: 0 0 14px;
    display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;
}
.prod-card-link { display: inline-flex; align-items: center; gap: 6px; font-size: 13px; font-weight: 700; color: var(--primary, #2ea140); transition: gap 0.2s ease; }
.prod-card:hover .prod-card-link { gap: 10px; }
.prod-grid { animation: fadeInGrid 0.35s ease; }
@keyframes fadeInGrid { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
@media (max-width: 767px) { .prod-tab-btn { padding: 10px 18px; font-size: 14px; } .prod-card-img { height: 180px; } }
@media (max-width: 480px) { .prod-filter-tabs { flex-direction: column; border-radius: 14px; width: 100%; } .prod-tab-btn { justify-content: center; border-radius: 10px; } .prod-card-img { height: 160px; } }

/* ── Product detail page ──────────────────────────── */
.pd-hero { position: relative; height: 480px; display: flex; align-items: flex-end; overflow: hidden; }
.pd-hero-img { position: absolute; inset: 0; }
.pd-hero-img img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; }
.pd-hero-overlay { position: absolute; inset: 0; background: linear-gradient(to top, rgba(10,30,10,0.80) 0%, rgba(10,30,10,0.20) 60%, transparent 100%); }
.pd-hero-content { position: relative; z-index: 2; padding-bottom: 48px; }
.pd-category-chip { display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; padding: 5px 14px; border-radius: 20px; margin-bottom: 14px; background: var(--primary, #2ea140); color: #fff; }
.pd-chip-herbs  { background: #1a8a30; }
.pd-chip-spices { background: #c0392b; }
.pd-hero-title { font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 800; color: #fff; margin: 0 0 14px; line-height: 1.15; }
.pd-breadcrumb .breadcrumb-item a { color: rgba(255,255,255,0.75); }
.pd-breadcrumb .breadcrumb-item.active { color: #fff; }
.pd-breadcrumb .breadcrumb-item + .breadcrumb-item::before { color: rgba(255,255,255,0.5); }
.pd-block { margin-bottom: 42px; }
.pd-label { display: inline-block; font-size: 12px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; color: var(--primary, #2ea140); margin-bottom: 8px; }
.pd-section-title { font-size: clamp(1.5rem, 3vw, 2rem); font-weight: 800; color: #1a2e1a; margin: 0 0 16px; }
.pd-sub-title { font-size: 1.15rem; font-weight: 700; color: #1a2e1a; margin: 0 0 20px; }
.pd-full-desc { font-size: 15.5px; line-height: 1.8; color: #4a5a4a; margin: 0; }
.pd-features-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; }
.pd-feature-item { display: flex; align-items: center; gap: 12px; background: #f7faf7; border: 1px solid #e4ede5; border-radius: 10px; padding: 14px 16px; font-size: 14px; font-weight: 600; color: #2a3a2a; transition: border-color 0.2s, background 0.2s; }
.pd-feature-item:hover { background: #edf6ee; border-color: #2ea140; }
.pd-feature-icon { width: 30px; height: 30px; border-radius: 50%; background: var(--primary, #2ea140); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 11px; flex-shrink: 0; }
.pd-uses-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 12px; }
.pd-use-item { display: flex; align-items: center; gap: 10px; padding: 12px 16px; background: #fff; border-radius: 10px; border-left: 3px solid var(--primary, #2ea140); box-shadow: 0 2px 8px rgba(0,0,0,0.05); font-size: 14px; color: #2a3a2a; }
.pd-use-icon { color: var(--primary, #2ea140); font-size: 14px; flex-shrink: 0; }
.pd-img-card { width: 100%; height: 260px; border-radius: 16px; overflow: hidden; margin-bottom: 24px; box-shadow: 0 8px 28px rgba(0,0,0,0.12); }
.pd-img-card img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; }
.pd-spec-card { background: #fff; border-radius: 14px; border: 1px solid #e4ede5; padding: 24px; margin-bottom: 20px; box-shadow: 0 2px 12px rgba(0,0,0,0.05); }
.pd-spec-title { font-size: 16px; font-weight: 700; color: #1a2e1a; margin: 0 0 18px; padding-bottom: 12px; border-bottom: 2px solid #f1f5f0; }
.pd-spec-table { width: 100%; border-collapse: collapse; }
.pd-spec-table tr td { padding: 10px 0; font-size: 14px; border-bottom: 1px solid #f1f5f0; vertical-align: top; }
.pd-spec-table tr:last-child td { border-bottom: none; }
.pd-spec-table tr td:first-child { color: #606f7b; font-weight: 600; width: 45%; }
.pd-spec-table tr td:last-child { color: #1a2e1a; font-weight: 500; }
.pd-cta-card { background: linear-gradient(135deg, #1a8a30 0%, #2ea140 100%); border-radius: 14px; padding: 28px 24px; color: #fff; }
.pd-cta-card h4 { font-size: 18px; font-weight: 700; color: #fff; margin: 0 0 10px; }
.pd-cta-card p { font-size: 14px; color: rgba(255,255,255,0.85); margin: 0 0 20px; line-height: 1.6; }
.pd-cta-btn { background: #fff; color: #1a8a30; font-weight: 700; font-size: 14px; border-radius: 50px; padding: 12px 20px; border: none; transition: background 0.2s, transform 0.2s; display: flex; align-items: center; justify-content: center; }
.pd-cta-btn:hover { background: #f0fdf1; color: #1a8a30; transform: translateY(-2px); }
.pd-back-link { display: block; text-align: center; margin-top: 14px; font-size: 13px; font-weight: 600; color: rgba(255,255,255,0.80); text-decoration: none; transition: color 0.2s; }
.pd-back-link:hover { color: #fff; }
@media (max-width: 991px) { .pd-hero { height: 380px; } .pd-features-grid, .pd-uses-grid { grid-template-columns: 1fr 1fr; } }
@media (max-width: 767px) { .pd-hero { height: 320px; } .pd-hero-content { padding-bottom: 32px; } .pd-features-grid { grid-template-columns: 1fr; } .pd-uses-grid { grid-template-columns: 1fr; } .pd-img-card { height: 220px; } }
@media (max-width: 575px) { .pd-hero { height: 270px; } .pd-hero-title { font-size: 1.7rem; } }

/* ── Services page: card thumb images ────────────── */
.service-card2 .serv-thumb { height: 220px; }
.service-card2 .serv-thumb img { width: 100%; height: 100%; object-fit: cover; object-position: center; display: block; }
@media (max-width: 991px) { .service-card2 .serv-thumb { height: 190px; } }
@media (max-width: 575px) { .service-card2 .serv-thumb { height: 170px; } }
   </style>
