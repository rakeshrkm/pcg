@extends('layouts.master', ['title' => 'Services Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">Training and Development</h1>
               
            </div>
        </div>
    </div>
</div>

   <!-- Mobile Responsive Menu -->
   {{-- <div class="mr-menu">
    <div class="mr-menu_overlay"></div>
    <button type="button" class="mr-menu_close"><i class="bi bi-x-lg"></i></button>
    <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
    <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->
</div> --}}
<!-- Main Wrapper-->
<main class="wrapper">
    
     <section class="pt-0" style="background: #f4f8fb; background-position: right; background-repeat: no-repeat;" id="training-and-Development">
        <div class="wptb-particle--one">
           <img src="../404.html" alt="">
        </div>
        <div class="wptb-particle--two">
           <img src="../404.html" alt="">
        </div>
        <div class="container">
           <div class="row align-items-center">
              <div class="col-md-5">
                 <div class="wptb-video-content">
                    <!-- <div class="wptb-video-contenth2"><a href="#"><strong>Training and Development</strong></a> </div> -->
                    <ul>
                       <li><span class="whatwedotitile">Skill Development Programs :</span> Our tailored training programs focus on capacity building and skill enhancement to empower your workforce with the latest knowledge and expertise.</li>
                       <li><span class="whatwedotitile">Collaborations with Educational Institutions: </span>Through partnerships with leading engineering, management, and ITI colleges, we deliver industry-relevant training that meets specific organizational needs.</li>                      
                    </ul>
                    <a href="#enquiry" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/ServicesImages/Training-and-Development.png') }}" alt="contract staffing" title="contract staffing" style="border-radius:20px;">
                 </div>
              </div>
           </div>
        </div>
     </section>
     
</main>
@endsection
