<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Dash;
use App\Main;
use App\Service;
use App\Category;
use App\Portfolio;
use App\Testimonial;
use App\Team;
use App\About;
use App\Description;
use Symfony\Component\Console\Descriptor\Descriptor;

class PagesController extends Controller
{
    public function index(){

        $data = Dash::First();
        $main = Main::First();
        $services = Service::All();
        $categories = Category::All();
        $portfolios = Portfolio::All();
        $testimonials = Testimonial::All();
        $teams = Team::All();
        $description = Description::first();



        return view('frontend.index', compact('data', 'main', 'services', 'categories', 'portfolios','testimonials','teams','description'));

    }
    public function about(){

        $data = Dash::First();
        $about = About::First();

        return view('frontend.about', compact('data','about'));

    }
    public function service($id){

        $data = Dash::First();
        $service = Service::find($id);

        return view('frontend.service', compact('data', 'service'));

    }
}


