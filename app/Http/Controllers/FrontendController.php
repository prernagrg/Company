<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Carousel;
use App\Models\Services;
use App\Models\Site_config;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $carousels = Carousel::query()->get()->all();
        $about = About::query()->get()->first();
        $services = Services::query()->limit(8);
        $settings = Site_config::query()->get()->all();
        return view('Company.index', compact('carousels', 'about', 'services', 'settings'));
    }
    public function about()
    {
        $carousels = Carousel::query()->get()->all();
        $about = About::query()->get()->first();
        $services = Services::query()->limit(8);
        $settings = Site_config::query()->get()->all();
        return view('Company.about', compact('carousels', 'about', 'services', 'settings'));
    }
    public function contact()
    {

        $settings = Site_config::query()->get()->all();
        return view('Company.contact', compact('settings'));
    }
}
