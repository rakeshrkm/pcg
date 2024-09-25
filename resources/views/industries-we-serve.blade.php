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
                 <div class="wptb-slider--img p-2">
                    <img class="shadow p-3 mb-5 bg-body rounded" src="{{ asset('assets/img/psspl-offering-to-the-world.jpg') }}" alt="permanent staffing" title="permanent staffing" height="50">
                 </div>
              </div>
              <div class="col-md-5 order-first order-md-last">
                 <div class="wptb-video-content">
                    <ul>
                       <li><span class="whatwedotitile">Information Technology (IT) and Telecom : </span>Our deep understanding of the IT and telecom sectors enables us to offer innovative solutions that meet the dynamic demands of these industries.</li>                             
                       <li><span class="whatwedotitile">Media : </span>We help media companies harness digital transformation to reach wider audiences and create compelling content.</li>                             
                       <li><span class="whatwedotitile">Education and Edtech : </span> Partnering with educational institutions and Edtech companies, we deliver solutions that enhance learning experiences and outcomes.</li>
                       <li><span class="whatwedotitile">E-commerce : </span> We support e-commerce businesses in optimizing their operations and enhancing customer engagement through targeted strategies.</li>
                       <li><span class="whatwedotitile">Government Projects : </span> With extensive experience in government projects, we provide solutions that drive efficiency and improve public service delivery.</li>
                       <li><span class="whatwedotitile">Case Studies :</span> Share real-world examples of how your firm has successfully helped clients in these industries.</li>
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
