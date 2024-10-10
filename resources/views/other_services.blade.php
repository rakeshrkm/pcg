@extends('layouts.master', ['title' => 'Services Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">Other Services</h1>
               
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
                    <!-- <div class="wptb-video-contenth2"><a href="#"><strong>Other Services</strong></a> </div> -->
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
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/ServicesImages/other-servicesnew.png') }}" alt="train and hire" title="train and hire" style="border-radius:20px;">
                 </div>
              </div>
           </div>
        </div>
     </section>



</main>
@endsection
