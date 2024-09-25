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

    public function recruitmentServices(){
        return view('recruitment_services');
    }

    public function trainingAndDevelopment(){
        return view('training_development');
    }

    public function consultingServices(){
        return view('consulting_services');
    }
    public function otherServices(){
        return view('other_services');
    }
}
