@extends('layouts.master', ['title' => 'Services Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">Industries We Serve</h1>
               
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
                    <h2 class="text-center mt-4 p-4">Prakhar Consulting Group is committed to serving a diverse range of industries, including:</h2>
            </div>
              <div class="col-md-7">
                 <div class="wptb-slider--img">
                    <img src="{{ asset('assets/img/permanent-staffing.png') }}" alt="permanent staffing" title="permanent staffing">
                 </div>
              </div>
              <div class="col-md-5 order-first order-md-last">
                 <div class="wptb-video-content">
                
                    <ul>
                       <li><strong>Information Technology (IT) and Telecom : </strong>Our deep understanding of the IT and telecom sectors enables us to offer innovative solutions that meet the dynamic demands of these industries.</li>                             
                       <li><strong>Media : </strong>We help media companies harness digital transformation to reach wider audiences and create compelling content.</li>                             
                       <li><strong>Education and Edtech :</strong> Partnering with educational institutions and Edtech companies, we deliver solutions that enhance learning experiences and outcomes.</li>
                       <li><strong>E-commerce :</strong> We support e-commerce businesses in optimizing their operations and enhancing customer engagement through targeted strategies.</li>
                       <li><strong>Government Projects :</strong> With extensive experience in government projects, we provide solutions that drive efficiency and improve public service delivery.</li>

                    </ul>
                    <a href="#" class="btn">Start Hiring
                    <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                 </div>
              </div>
           </div>
        </div>
     </section>



</main>
@endsection
