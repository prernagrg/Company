<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\App;
use App\Models\Card;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\Feature;
use App\Models\Services;
use App\Models\Site_config;
use App\Models\Skill;
use App\Models\Team;
use App\Models\Web;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $carousels = Carousel::query()->get()->all();
        $about = About::query()->get()->first();
        $services = Services::query()->limit(6)->get();
        $settings = Site_config::query()->get()->all();
        $clients = Client::query()->limit(8)->get();
        $apps = App::query()->limit(3)->get();
        $cards = Card::query()->limit(3)->get();
        $webs = Web::query()->limit(3)->get();
        return view('Company.index', compact('carousels', 'about', 'services', 'settings','clients','apps','cards','webs'));
    }
    public function about()
    {
        // $carousels = Carousel::query()->get()->all();
        $about = About::query()->get()->first();
        $teams = Team::query()->limit(4)->get();
        $skills = Skill::query()->limit(6)->get();
        $clients = Client::query()->limit(8)->get();
        return view('Company.about', compact( 'about','teams','skills', 'clients'));
    }

   public function services()
   {
    $services = Services::query()->limit(6)->get();
    $features = Feature::query()->limit(12)->get();
    return view('Company.services', compact('services', 'features'));
   }

   public function team()
   {
    $teams = Team::query()->limit(4)->get();
    return view('Company.team', compact('teams'));
   }
   public function portfolio()
   {
    $apps = App::query()->limit(3)->get();
    $cards = Card::query()->limit(3)->get();
    $webs = Web::query()->limit(3)->get();
    return view('Company.portfolio', compact('apps','cards','webs'));
   }
    public function contact()
    {

        $settings = Site_config::query()->get()->all();
        return view('Company.contact', compact('settings'));
    }
}
