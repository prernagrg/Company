<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\App;
use App\Models\Blog;
use App\Models\Blog_single;
use App\Models\Card;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\Cmnt_rly;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Feature;
use App\Models\Portfolio_detail;
use App\Models\Portfolio_img;
use App\Models\Pricing;
use App\Models\Recent_post;
use App\Models\Services;
use App\Models\Site_config;
use App\Models\Skill;
use App\Models\Team;
use App\Models\Testimonial;
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
        $testimonials = Testimonial::query()->limit(6)->get();
        return view('Company.about', compact( 'about','teams','skills', 'clients', 'testimonials'));
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

   public function testimonials()
   {
    $testimonials = Testimonial::query()->limit(6)->get();
    return view('Company.testimonials', compact('testimonials'));
   }

   public function pricing()
   {
    $pricings = Pricing::query()->limit(4)->get();
    $faqs = Faq::query()->limit(5)->get();
    return view('Company.pricing',compact('pricings','faqs'));
   }

   public function portfolioDetails()
   {
    $portfolio_imgs = Portfolio_img::query()->limit(3)->get();
    $portfolio_detail = Portfolio_detail::query()->get()->first();
    return view('Company.portfolio-details', compact('portfolio_imgs','portfolio_detail'));
   }
   public function blogs()
   {
    $blogs = Blog::query()->limit(4)->get();
    $recent_posts = Recent_post::query()->limit(5)->get();
    return view('Company.blog',compact('blogs','recent_posts'));
   }
   public function blog_single()
   {
    $blog_single = Blog_single::query()->get()->first();
    $blog = Blog::query()->get()->first();
    $testimonial = Testimonial::query()->get()->first();
    $comments = Comment::query()->limit(4)->get();
    $cmnt_rlys = Cmnt_rly::query()->get()->first();
    $recent_posts = Recent_post::query()->limit(5)->get();
    return view('Company.blog-single',compact('blog_single','blog','testimonial','comments','cmnt_rlys','recent_posts'));
   }
    public function contact()
    {

        $settings = Site_config::query()->get()->all();
        return view('Company.contact', compact('settings'));
    }
}
