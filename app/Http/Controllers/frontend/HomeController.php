<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function service(){
        return view('service');
    }

    public function industriesWeServe(){
        return view('industries-we-serve');
    }

    public function ourApproach(){
        return view('our-approach');
    }

    public function contactUs(){
        return view('contact');
    }

    public function career(){
        return view('career');
    }
}
