@extends('layouts.master', ['title' => 'Services Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">Consulting Services</h1>
               
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
    

     <section class="wptb-why-choose" id="consulting-services">
        <div class="wptb-why-choose-particle">
           <div class="wptb-why-choose-particle--item first"> 
              <img src="../404.html" class="img-fluid" alt="">
           </div>
           <div class="wptb-why-choose-particle--item second"> 
              <img src="../404.html" class="img-fluid" alt="">
           </div>
        </div>
        <div class="container">
           <div class="row align-items-center justify-content-between">
              <div class="col-md-6">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/source-hire-train-and-deploy.png') }}" alt="source hire train and deploy" title="source hire train and deploy">
                 </div>
              </div>
              <div class="col-md-6 order-first order-md-last">
                 <div class="wptb-video-content">
                    <!-- <div class="wptb-video-contenth2"><a href="#"><strong>Consulting Services</strong></a> </div> -->
                    <ul>
                       <li><span class="whatwedotitile">Project Management Consultancy : </span>We offer expert guidance in managing complex projects, ensuring timely delivery and optimal resource utilization.</li>
                       <li><span class="whatwedotitile">IT Consulting : </span> Our consulting services encompass both IT and non-IT domains, providing bespoke solutions that drive operational efficiency and innovation.</li>
                       <li><span class="whatwedotitile">E-Governance Projects : </span> With extensive experience in implementing e-governance solutions, we deliver services that enhance government operations and citizen engagement.</li>
                       <li><span class="whatwedotitile">Executive Search : </span>Our executive search services are designed to identify top leaders who can drive your business forward.</li>
                        <li><span class="whatwedotitile">Talent Consulting : </span>We offer strategic consulting services to optimize your talent acquisition processes, from employer branding to candidate experience.</li>
                    </ul>
                    <a href="#enquiry" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
           </div>
        </div>
     </section>

   
</main>
@endsection
