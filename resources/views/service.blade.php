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
   {{-- <div class="mr-menu">
    <div class="mr-menu_overlay"></div>
    <button type="button" class="mr-menu_close"><i class="bi bi-x-lg"></i></button>
    <div class="logo"></div> <!-- Keep this div empty. Logo will come here by JavaScript -->
    <div class="mr_navmenu"></div> <!-- Keep this div empty. Menu will come here by JavaScript -->
</div> --}}
<!-- Main Wrapper-->
<main class="wrapper">
    <section style="background: url(../404.html), ; background-position: right; background-repeat: no-repeat;" id="recruitment-Services">
        <div class="container">
           <div class="row align-items-center">
            <div class="col-md-12">
                    <h2 class="text-center mt-4 p-4 ">Comprehensive Solutions for Business Success</h2>
            </div>
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/ServicesImages/Recruitment-services.png') }}" alt="Recruitment-services" title="Recruitment-services">
                 </div>
              </div>
              <div class="col-md-5 order-first order-md-last">
                 <div class="wptb-video-content">
                    <div class="wptb-video-contenth2"><a href="#"><strong>Recruitment Services</strong></a> </div>
                    <ul>
                       <li><span class="whatwedotitile">Permanent Staffing : </span>Our rigorous screening process ensures that candidates not only possess the necessary skills and qualifications but also align with your company culture, enhancing long-term success.</li>                             
                       <li><span  class="whatwedotitile">Leadership Hiring : </span>We specialize in strategic recruitment for high-level positions, sourcing visionary leaders to drive your organization's future success.</li>                             
                       <li><span class="whatwedotitile">Access to Specialized Skill Sets :</span> With a vast network of professionals, we provide access to specialized skill sets across diverse industries.</li>
                       <li><span class="whatwedotitile">Contract Staffing : </span>Need temporary staff for a project or specific timeframe? We provide skilled professionals who fit seamlessly into your team.</li>
                       <li><span class="whatwedotitile">Recruitment Process Outsourcing (RPO) : </span>Outsource your recruitment process to us and focus on what you do best. We manage everything from sourcing to onboarding.</li>

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
        <div class="container p-5">
           <div class="row align-items-center">
              <div class="col-md-6">
                 <div class="wptb-video-content">
                    <div class="wptb-video-contenth2"><a href="#"><strong class="lh-sm">Training and Development</strong></a> </div>
                    <ul>
                       <li><span class="whatwedotitile">Skill Development Programs :</span> Our tailored training programs focus on capacity building and skill enhancement to empower your workforce with the latest knowledge and expertise.</li>
                       <li><span class="whatwedotitile">Collaborations with Educational Institutions: </span>Through partnerships with leading engineering, management, and ITI colleges, we deliver industry-relevant training that meets specific organizational needs.</li>                      
                    </ul>
                    <a href="#enquiry" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/ServicesImages/Training-and-Development.png') }}" alt="contract staffing" title="contract staffing" style="border-radius:20px;">
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
                    <img src="{{ asset('assets/img/ServicesImages/consulting-servicesnew.png') }}" alt="source hire train and deploy" title="source hire train and deploy">
                 </div>
              </div>
              <div class="col-md-6 order-first order-md-last">
                 <div class="wptb-video-content">
                    <div class="wptb-video-contenth2"><a href="#"><strong>Consulting Services</strong></a> </div>
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

     <section style="background: #f4f8fb; background-position: right; background-repeat: no-repeat;" id="other-services">
        <div class="wptb-particle--one">
           <img src="../404.html" alt="">
        </div>
        <div class="wptb-particle--two">
           <img src="../404.html" alt="">
        </div>
        <div class="container">
           <div class="row align-items-center">
              <div class="col-md-6">
                 <div class="wptb-video-content">
                    <div class="wptb-video-contenth2"><a href="#"><strong>Other Services</strong></a> </div>
                    <ul>
                        <li><span class="whatwedotitile">Software and Website Development : </span>We develop custom software applications and websites that meet the unique needs of our clients, enhancing their digital presence and operational efficiency.</li>
                        <li><span class="whatwedotitile">IT Hardware and Software Solutions :</span>Our comprehensive solutions include the provision of IT hardware, accessories, and licensed software to support business operations.</li>
                        <li><span class="whatwedotitile">Drone & Anti-Drone Technology Services :</span> We offer cutting-edge drone technology services for surveillance, data collection, and analysis.</li>
                        <li><span class="whatwedotitile">Call Center and Data Center Services :</span>Our robust infrastructure supports efficient call center and data center operations, ensuring seamless service delivery.</li>
                        <li><span class="whatwedotitile">Industry-Specific Solutions : </span>We specialize in providing recruitment services tailored to the IT, Telecom, EdTech, Media, and E-commerce industries.</li>
                    </ul>
                    <a href="#enquiry" class="btn mb-5">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/ServicesImages/other-servicesnew.png') }}" alt="train and hire" title="train and hire" style="border-radius:20px; width:75%;margin-left:60px">
                 </div>
              </div>
           </div>
        </div>
     </section>



</main>
@endsection
