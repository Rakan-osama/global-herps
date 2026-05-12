<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    private function siteData(): array
    {
        $site = config('site');

        $site['header_nav_links'] = [
            ['label' => 'Home',       'url' => route('client.homepage')],
            ['label' => 'About',      'url' => route('client.about')],
            ['label' => 'Products',   'url' => route('client.products')],
            ['label' => 'Services',   'url' => route('client.services')],
            ['label' => 'Contact Us', 'url' => route('client.contact')],
        ];

        $site['footer_quick_links'] = [
            ['label' => 'Home',       'url' => route('client.homepage')],
            ['label' => 'About Us',   'url' => route('client.about')],
            ['label' => 'Products',   'url' => route('client.products')],
            ['label' => 'Services',   'url' => route('client.services')],
            ['label' => 'Contact Us', 'url' => route('client.contact')],
        ];

        $site['footer_product_links'] = [
            ['label' => 'Egyptian Mint', 'url' => route('client.products')],
            ['label' => 'Chamomile',     'url' => route('client.products')],
            ['label' => 'Anise Seeds',   'url' => route('client.products')],
            ['label' => 'Fenugreek',     'url' => route('client.products')],
            ['label' => 'Coriander',     'url' => route('client.products')],
        ];

        return $site;
    }

    public function home()
    {
        return view('client.pages.home.main', [
            'site' => $this->siteData(),
        ]);
    }

    public function about()
    {
        return view('client.pages.about.about', [
            'site'     => $this->siteData(),
            'sections' => [],
        ]);
    }

    public function products()
    {
        return view('client.pages.products.products', [
            'site' => $this->siteData(),
        ]);
    }

    public function services()
    {
        return view('client.pages.services.services', [
            'site'     => $this->siteData(),
            'services' => collect(),
            'sections' => [],
        ]);
    }

    public function contact()
    {
        return view('client.pages.contact.contactUs', [
            'site'     => $this->siteData(),
            'sections' => [],
        ]);
    }

    public function contactSubmit(Request $request)
    {
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:50',
            'country'     => 'required|string|max:100',
            'service'     => 'required|string|max:100',
            'description' => 'required|string|max:2000',
        ]);

        return back()->with('success', __('Your message has been sent. We will get back to you shortly.'));
    }
}
