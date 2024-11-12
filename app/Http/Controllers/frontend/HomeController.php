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

    public function permanentStaffing(){
        return view('services.permanent_staffing');
    }

    public function executiveSearch(){
        return view('services.executive_search');
    }

    public function leadershipHiring(){
        return view('services.leadership_hiring');
    }

    public function headHunting(){
        return view('services.head_hunting');
    }

    public function ItNonIthiring(){
        return view('services.it_non_it');
    }

    public function temporaryStaffing(){
        return view('services.temporary_staffing');
    }
    public function contractStaffing(){
        return view('services.contract_staffing');
    }

    public function contractToHire(){
        return view('services.contract_to_hire');
    }


    public function payrollProcessing(){
        return view('services.payroll_processing');
    }

    public function universities(){
        return view('services.universities');
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
