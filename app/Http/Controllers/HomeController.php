<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function aboutus(){
        return view('about');
    }

    public function propertylist(){
        return view('property.list');
    }

    public function propertytype(){
        return view('property.type');
    }

    public function propertyagent(){
        return view('property.agent');
    }

    public function testimonial(){
        return view('testimonial');
    }

    public function contactus(){
        return view('contact');
    }
}
