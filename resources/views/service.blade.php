@extends('layouts.master', ['title' => 'Services Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">Services</h1>
               
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
            <div class="col-md-12">
                    <h2 class="text-center mt-4 p-4">Comprehensive Solutions for Business Success</h2>
            </div>
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/permanent-staffing.png') }}" alt="permanent staffing" title="permanent staffing">
                 </div>
              </div>
              <div class="col-md-5 order-first order-md-last">
                 <div class="wptb-video-content">
                    <div class="wptb-video-contenth2"><a href="#"><strong>Recruitment Services</strong></a> </div>
                    <ul>
                       <li><strong>Permanent Staffing : </strong>Our rigorous screening process ensures that candidates not only possess the necessary skills and qualifications but also align with your company culture, enhancing long-term success.</li>                             
                       <li><strong>Leadership Hiring : </strong>We specialize in strategic recruitment for high-level positions, sourcing visionary leaders to drive your organization's future success.</li>                             
                       <li><strong>Access to Specialized Skill Sets :</strong> With a vast network of professionals, we provide access to specialized skill sets across diverse industries.</li>

                    </ul>
                    <a href="#" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
           </div>
        </div>
     </section>

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
                    <div class="wptb-video-contenth2"><a href="#"><strong>Training and Development</strong></a> </div>
                    <ul>
                       <li><strong>Skill Development Programs :</strong> Our tailored training programs focus on capacity building and skill enhancement to empower your workforce with the latest knowledge and expertise.</li>
                       <li><strong>Collaborations with Educational Institutions: </strong>Through partnerships with leading engineering, management, and ITI colleges, we deliver industry-relevant training that meets specific organizational needs.</li>                      
                    </ul>
                    <a href="#enquiry" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/contract-staffing.png') }}" alt="contract staffing" title="contract staffing" style="border-radius:20px;">
                 </div>
              </div>
           </div>
        </div>
     </section>

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
                    <div class="wptb-video-contenth2"><a href="#"><strong>Consulting Services</strong></a> </div>
                    <ul>
                       <li><strong>Project Management Consultancy : </strong>We offer expert guidance in managing complex projects, ensuring timely delivery and optimal resource utilization.</li>
                       <li><strong>IT Consulting: </strong> Our consulting services encompass both IT and non-IT domains, providing bespoke solutions that drive operational efficiency and innovation.</li>
                       <li><strong>E-Governance Projects: </strong> With extensive experience in implementing e-governance solutions, we deliver services that enhance government operations and citizen engagement.</li>
                    </ul>
                    <a href="#enquiry" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section style="background: #f4f8fb; background-position: right; background-repeat: no-repeat;" id="other-services">
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
                    <div class="wptb-video-contenth2"><a href="#"><strong>Other Services</strong></a> </div>
                    <ul>
                       <li><strong>Software and Website Development : </strong>We develop custom software applications and websites that meet the unique needs of our clients, enhancing their digital presence and operational efficiency.</li>
                       <li><strong>IT Hardware and Software Solutions :</strong>Our comprehensive solutions include the provision of IT hardware, accessories, and licensed software to support business operations.</li>
                       <li><strong>Drone & Anti-Drone Technology Services :</strong> We offer cutting-edge drone technology services for surveillance, data collection, and analysis.</li>
                       <li><strong>Call Center and Data Center Services :</strong>Our robust infrastructure supports efficient call center and data center operations, ensuring seamless service delivery.</li>
                    </ul>
                    <a href="#enquiry" class="btn mb-5">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/train-and-hire.png') }}" alt="train and hire" title="train and hire" style="border-radius:20px;">
                 </div>
              </div>
           </div>
        </div>
     </section>



</main>
@endsection
