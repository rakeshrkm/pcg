@extends('layouts.master', ['title' => 'Services Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">Recruitment Services</h1>
            </div>
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
    <section style="background: url(../404.html), #f4f8fb; background-position: right; background-repeat: no-repeat;" id="recruitment-Services">
        <div class="container">
           <div class="row align-items-center">
            <!-- <div class="col-md-12">
                    <h2 class="text-center mt-4 p-4 ">Comprehensive Solutions for Business Success</h2>
            </div> -->
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/ServicesImages/Recruitment-services.png') }}" alt="permanent staffing" title="permanent staffing">
                 </div>
              </div>
              <div class="col-md-5 order-first order-md-last">
                 <div class="wptb-video-content">
                    <!-- <div class="wptb-video-contenth2"><a href="#"><strong>Recruitment Services</strong></a> </div> -->
                    <ul>
                       <li><span class="whatwedotitile">Permanent Staffing : </span>Our rigorous screening process ensures that candidates not only possess the necessary skills and qualifications but also align with your company culture, enhancing long-term success.</li>                             
                       <li><span  class="whatwedotitile">Leadership Hiring : </span>We specialize in strategic recruitment for high-level positions, sourcing visionary leaders to drive your organization's future success.</li>                             
                       <li><span class="whatwedotitile">Access to Specialized Skill Sets :</span> With a vast network of professionals, we provide access to specialized skill sets across diverse industries.</li>
                       <li><span class="whatwedotitile">Contract Staffing : </span>Need temporary staff for a project or specific timeframe? We provide skilled professionals who fit seamlessly into your team.</li>
                       <li><span class="whatwedotitile">Recruitment Process Outsourcing (RPO) : </span>Outsource your recruitment process to us and focus on what you do best. We manage everything from sourcing to onboarding.</li>

                    </ul>
                    <!-- <a href="#" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a> -->
                 </div>
              </div>
           </div>
        </div>
     </section>

</main>
@endsection
