@extends('layouts.master')
@section('contents')
<div class="slideshow-container" id="hero">
    <div class="slideshow" data-flex-fullscreen="true">
        <ul class="slides">
            <li>
                <img src="{{ asset('assets/img/cover-image.jpg') }}" data-position-y="top" alt="Corporate Training" title="Corporate Training" />
                <div class="flex-content-wrapper1 flexttect">
                    <div class="">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-lft">
                                    <div class="bannertextbold" data-animate="animate__fadeInDown">Welcome to Prakhar Consulting Group (PCG)</div>
                                    <h1 class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white">Finding. Connecting. Building Organisation. <br><b>Welcome to Prakhar Consulting Group (PCG) </b></span>
                                    </h1>
                                    {{-- <div class="bannertextbold" data-animate="animate__fadeInDown">to align with your business goals</div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('assets/img/mazenet-lms-banner.webp') }}" data-position-y="top" alt="Mazenet Lms" title="Mazenet Lms" />
                <div class="flex-content-wrapper1 flexttect">
                    <div class="">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-right">
                                    <div class="bannertextbold" data-animate="animate__fadeInDown">Welcome to Prakhar Consulting Group (PCG)</div>
                                    <h1 class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white">Finding. Connecting. Building Organisation. <br><b>Welcome to Prakhar Consulting Group (PCG) </b></span>
                                    </h1>
                                    {{-- <div class="bannertextbold" data-animate="animate__fadeInDown">custom solutions for peak performance</div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<section class="pt-2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left ">
                <div class="heading-title text-center  p-4">
                    <h2>About Prakhar Consulting Group </h2>
                </div>
                <div>
                    <img src="{{ asset('assets/img/FCBO.jpg') }}" alt="permanent staffing" title="permanent staffing">

                </div>

                <strong style="font-size:28px;">
                    {{-- <img src="{{ asset('assets/img/FCBO.jpg') }}" alt="permanent staffing" title="permanent staffing" height="150"> --}}

                    {{-- Finding. Connecting. Building Organisation. <strong class="text-color">Welcome to Prakhar Consulting Group (PCG)</strong> --}}
                
                </strong>
                <br /> <br />
                <p class="gap" data-gap-bottom="30">
                    Prakhar Consulting Group, a subsidiary of Prakhar Software Solutions Pvt. Ltd., is a premier consulting firm specializing in IT recruitment, consulting, and comprehensive business solutions. With a dynamic team of over 2200 professionals and a decade of industry leadership, we are dedicated to delivering excellence and innovation to our clients across India.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <img src="{{ asset('assets/img/our-presence-in-India.jpg') }}" alt="permanent staffing" title="permanent staffing" height="150">
                {{-- <img src="{{ asset('assets/img/permanent-staffing.png') }}" alt="permanent staffing" title="permanent staffing"> --}}

            </div>
            <div class="col-md-6 mb-4">
                <div class="heading-title text-center">
                    <h4>Our Mission </h4>
                </div>
                <p>
                    Our mission is to empower businesses by providing cutting-edge recruitment, consulting, and training services that enhance operational efficiency and drive sustainable growth.
                </p>
                <div class="heading-title text-center">
                    <h4>Certifications</h4>
                </div>
                <p>
                    Our commitment to quality and excellence is demonstrated through our prestigious certifications:
                </p>
               
                <ul>
                    <li><span class="whatwedotitile">CMMI Level III</span></li>
                    <li><span class="whatwedotitile">ISO 9001:2015</span></li>
                    <li><span class="whatwedotitile">ISO 27001:2013</span></li>
                    <li><span class="whatwedotitile">ISO 20000-1:2011</span></li>
                    <li><span class="whatwedotitile">ISO 45001:2018</span></li>
                </ul>
                <p>These certifications reflect our dedication to maintaining the highest standards in service delivery and client satisfaction.</p>
            </div>
            {{-- <div class="col-md-6 mt-4">
                
            </div>
            <div class="col-md-6 mt-4">
                <img src="{{ asset('assets/img/psspl-offering-to-the-world.jpg') }}" alt="permanent staffing" title="permanent staffing" height="200"> --}}

                {{-- <img src="{{ asset('assets/img/permanent-staffing.png') }}" alt="permanent staffing" title="permanent staffing"> --}}
            {{-- </div> --}}
        </div>
    </div>
</section>

<section class="section pt-5" id="ourservices">
    <div class="heading-title text-center">
        <h3>Services</h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <a href="{{ route('services') }}">
                    <img src="{{ asset('assets/img/talent-solutions.webp') }}" alt="Recruitment Services" title="Recruitment Services" />
                    <h5 class="whatwedotitile">Recruitment Services </h5>
                </a>
                <p class="whatwedodecs">Facilitate recruitment with our Human Capital Solutions and focus on your core business priorities.</p>

                <a href="{{ route('services') }}" class="btn btn-success mt-2 text-center"><span class="text-white">View More</span></a>
            </div>
            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <a href="{{ route('services') }}">
                    <img src="{{ asset('assets/img/corporate-training-service.webp') }}" alt="Training and Development" title="Training and Development" />
                    <h5 class="whatwedotitile">Training and Development </h5>
                </a>
                <p class="whatwedodecs">Empower your team to overcome challenges and stay ahead with our smart training programs</p>
                <a href="{{ route('services') }}" class="btn btn-success mt-2 text-center"><span class="text-white">View More</span></a>
            </div>
            <div class="col-md-12 col-lg-3 pt-3 pt-3 text-center">
                <a href="{{ route('services') }}">
                    <img src="{{ asset('assets/img/mangeitservices.webp') }}" alt="Consulting Services" title="Consulting Services" />
                    <h5 class="whatwedotitile">Consulting Services </h5>
                </a>
                <p class="whatwedodecs">Ensure smooth operations with our comprehensive IT services, covering infrastructure & cybersecurity solutions.</p>
                <a href="{{ route('services') }}" class="btn btn-success mt-2 text-center"> <span class="text-white">View More</span></a>

            </div>
            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <a href="{{ route('services') }}">
                    <img src="{{ asset('assets/img/mazenet-LMS-service.webp') }}" alt="Other Services" title="Other Services" />
                    <h5 class="whatwedotitile">Other Services </h5>
                </a>
                <p class="whatwedodecs">Transform learning with immersive online programs, empowering organizations to deliver cutting-edge training experiences.</p>
                <a href="{{ route('services') }}" class="btn btn-success mt-2 text-center" > <span class="text-white">View More</span></a>

            </div>
            <!-- <div class="col-md-12 col-lg-2  pt-3 pt-3">
              &nbsp;
              </div>
              
              <div class="col-md-12 col-lg-4  pt-3 pt-3">
              <a href="#"> <img src="img/assessment-as-service.webp" alt="Assessment as Service" title="Assessment as Service" />
                  <h5 class="whatwedotitile">Assessment as Service</h5></a>
              </div>-->
        </div>
    </div>
</section>
<div class="section testimonial-container pt-5">
    <div class="overlay-background"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="grid-md-5 grid-sm-2 no-wrap text-center">
                    <li>
                        <div class="counter-box no-margin-lg no-margin-md">
                            <img src="{{ asset('assets/img/workforce-development-company.png') }}" alt="Workforce Development Company" />
                            <div class="counter-content">
                                <span class="count-me number" data-to="10" data-speed="2500">10</span>
                                <span style="font-size: 25px; color: #fff; font-weight: 600;">+</span>
                                <!--<div> <sup style="font-size: 25px; position: absolute; top: 9px; left: 59%; color: #fff; font-weight: 600;">+<sup></sup></sup></div>-->
                                <h6 class="counter-title textwhite">Years of Expertise</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="counter-box no-margin-lg no-margin-md">
                            <img src="{{ asset('assets/img/tech-workforce-development-companies.png') }}" alt="tech workforce development companies" />
                            <div class="counter-content">
                                <span class="count-me number" data-to="300" data-speed="2500">300</span>
                                <span style="font-size: 25px; color: #fff; font-weight: 600;">+</span>
                                <!--<div> <sup style="font-size: 25px; position: absolute; top: 9px;  left: 63%; color: #fff; font-weight: 600;">+<sup></sup></sup></div>-->
                                <h6 class="counter-title textwhite">Corporate Clientele</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="counter-box no-margin-lg no-margin-md">
                            <img src="{{ asset('assets/img/onboarding-icons.png') }}" alt="Onboardings" />
                            <div class="counter-content">
                                <span class="count-me number" data-to="5000" data-speed="2500">5000 </span>
                                <span style="font-size: 25px; color: #fff; font-weight: 600;">+</span>
                                <!--<div> <sup style="font-size: 25px; position: absolute; top: 9px;  left: 68%; color: #fff; font-weight: 600;">+<sup></sup></sup></div>-->
                                <h6 class="counter-title textwhite">Onboardings</h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="counter-box no-margin-lg no-margin-md">
                            <img src="{{ asset('assets/img/sme-icon.png') }}" alt="SME" />
                            <div class="counter-content">
                                <span class="count-me number" data-to="2500" data-speed="2500">2500</span>
                                <span style="font-size: 25px; color: #fff; font-weight: 600;">+</span>
                                <!--<div> <sup style="font-size: 25px; position: absolute; top: 9px;  left: 76%; color: #fff; font-weight: 600;">+<sup></sup></sup></div>-->
                                <h6 class="counter-title textwhite">SME </h6>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="counter-box no-margin-lg no-margin-md">
                            <img src="{{ asset('assets/img/Professionals-Trained-icon.png') }}" alt="Professionals-Trained" />
                            <div class="counter-content">
                                <span style="font-size: 35px; font-weight: bold; color: #fff;">4.5 L </span>
                                <!--<div> <sup style="font-size: 25px; position: absolute; top: 9px;  left: 68%; color: #fff; font-weight: 600;">+<sup></sup></sup></div>-->
                                <h6 class="counter-title textwhite">Professionals Trained</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



<section class="section padtopzero clientsbackground d-none d-lg-block">
    <div class="container">
        <div class="col-md-12">
            <div class="heading-title text-center">
                <h3><strong class="text-color">300+ Corporate Clientele</strong></h3>
                <p>Some of the brands we work with</p>
            </div>
        </div>


        <div class="row pt-3">
            <div class="col-md-12">
                <div class="row align-items-center" align="center">
                    <div class="col-12 clientlist2">
                        <ul class="grid-md-6 grid-sm-2 no-wrap text-center">
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/2.png') }}" width="80" alt="" /></span></li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/13.png') }}" width="150" alt="" /></span> </li>

                            <li> <span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/5.png') }}" width="80" alt="" /></span> </li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/8.png') }}" width="140" alt="" /></span></li>
                            <li> <span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/7.png') }}" width="150" alt="" /></span> </li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/9.png') }}" width="45" alt="" /></span> </li>
                        </ul>


                        <ul class="grid-md-6 grid-sm-2 no-wrap text-center">

                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/15.png') }}" width="100" alt="" /></span> </li>

                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/12.png') }}" width="90" alt="" /></span> </li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/3.png') }}" width="100" alt="" /></span></li>

                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/14.png') }}" width="150" alt="" /></span> </li>

                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/24.png') }}" width="130" alt="" /></span> </li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/23.png') }}" width="80" alt="" /></span></li>
                        </ul>

                        <ul class="grid-md-6 grid-sm-2 no-wrap text-center">


                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/16.png') }}" width="80" alt="" /></span></li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/22.png') }}" width="90" alt="" /></span> </li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/18.png') }}" width="160" alt="" /></span> </li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/20.png') }}" width="110" alt="" /></span> </li>
                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/21.png') }}" width="80" alt="" /></span> </li>

                            <li><span class="imgorg imgred"><img loading="lazy" src="{{ asset('assets/img/lmsclients/17.png') }}" width="120" alt="" /></span> </li>

                        </ul>



                        <!-- Clients list -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section padtopzero clientsbackground d-sm-none">
    <div class="container">
        <div class="wptb-heading--subtitle two wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;">Some of the brands we work with</div>
        <div class="wptb-heading--title bluecolor clientshea wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;">100+ Corporate Clientele</div>
        <div class="row">
            <div class="clislider">
                <div class="clislide-track">
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/2.png') }}" alt="" /> </div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/3.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/5.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/7.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/8.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/15.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/3.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/5.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/7.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/8.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/15.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/21.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/22.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/23.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/24.png') }}" alt="" /></div>
                    <!-- same 9 clislides doubled (duplicate) -->
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/2.png') }}" alt="" /> </div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/3.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/5.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/7.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/8.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/15.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/3.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/5.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/7.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/21.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/22.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/23.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/24.png') }}" alt="" /></div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="clislider">
                <div class="clislide-track">

                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/12.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/13.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/14.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/9.png') }}" alt="" style="width: 42px;" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/16.png') }}" alt="" /> </div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/17.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/18.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/20.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/12.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/13.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/14.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/9.png') }}" alt="" style="width: 42px;" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/16.png') }}" alt="" /> </div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/17.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/18.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/20.png') }}" alt="" /></div>

                    <!-- same 9 clislides doubled (duplicate) -->
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/12.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/13.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/14.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/9.png') }}" alt="" style="width: 42px;" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/16.png') }}" alt="" /> </div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/17.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/18.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/20.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/12.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/13.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/14.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/9.png') }}" alt="" style="width: 42px;" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/16.png') }}" alt="" /> </div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/17.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/18.png') }}" alt="" /></div>
                    <div class="clislide"><img loading="lazy" src="{{ asset('assets/img/lmsclients/20.png') }}" alt="" /></div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- partial:index.partial.html -->
<section class="testimonial-area">
    <div class="container">
        <div class="col-md-12">
            <div class="heading-title text-center">
                <h3>What <strong class="text-darkcolor">Our Clients</strong> Say</h3>
            </div>
        </div>

        <div class="testimonial-content owl-carousel">
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>All our upskilling requirements including extra additions to curriculum were smoothly arranged. This included use-cases of Terraform with AWS and Azure. The trainer was able to help our employees navigate across each practice troubleshooting exercise. Credits to Mazenet team for completing Terraform upskilling session with ease! I would definitely recommend Mazenet to anyone looking for a great upskilling experience.

                </p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>-LEADING FORTUNE 500 MNC</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>The Jasper upskilling session by Mazenet for our employees was top-notch. The trainer not only had hands-on experience but also understood the mindset of the participants. Overall, the upskilling session exceeded our expectations. <br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>-$1.5B IT MNC client</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4.5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Although we reached out to Mazenet at the last moment for our upskilling requirement, a complete customized advanced C++ Training was swiftly crafted before the schedule. The trainer was also able to smoothly guide our employees through SFINAE, CRTP, RAII concepts. We commend the Mazenet team for completing it on time seamlessly.<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>-$80.58B Multinational Conglomerate client</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>


            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>We appreciate the Mazenet team for an end-to-end .NET upskilling session for our 250 employees. Mazenet also seamlessly fulfilled our customized requirements necessary for our upcoming project. We additionally want to credit the trainer who supported our employees during the training session. Overall, this upskilling session was highly productive.<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>$75M IT MNC CLIENT ON OUR RECENT UPSKILLING SESSION</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4.5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>The upskilling session exceeded our expectations. The trainer took the initial 10 days to settle with our employees and to relate with them, but eventually picked up and provided top-notch strategic people management training for our employees; the trainer was able to make our employees ready to take the lead as the next generation managers.</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>-$50M WORLD’S LEADING IT MNC CLIENT ON OUR RECENT UPSKILLING SESSION</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Thank you for helping with our request to conduct an IICS training for all Caremore ETL developers on very short notice. The training was really good, and we received very positive feedback from all our team members who participated.<br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>-$18.5M MNC CLIENT ON OUR RECENT UPSKILLING SESSION</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4.5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>We had approached Mazenet with 20+ open positions for SAP & Cyber Security domains to fill roles in the specific regions like Coimbatore, Hyderabad & Pune. They have really done a brilliant job by putting the most experienced resources in the task along with an AI system to close the positions within TAT. The impressive point is the hiring ratio they are maintaining (3:1). Highly recommended Mazenet for any bulk hiring or hiring for advanced skills.</p>
                <div class="client-info">

                    <div class="client-details">
                        <span>
                            <div class="bh-stars" data-bh-rating="5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>We reached out to Mazenet with an urgent requirement for TDM, a niche skill for which finding the right candidate is challenging. But to our surprise, within just 3 days, they identified a highly qualified Indian candidate residing in the UK and promptly shared their profile with us. They even pitched in the onboarding process and the candidate was deployed into the project. We had a remarkable hiring experience with Mazenet whose team expedited the process efficiently with AI tools.</p>
                <div class="client-info">

                    <div class="client-details">
                        <span>
                            <div class="bh-stars" data-bh-rating="5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>We had a great experience with Mazenet while hiring a Senior Data Scientist and Python Fullstack Developer. Mazenet delivered accurate and high-quality profiles within just 2 days. The interview process was smooth and completed in a week. Good job to the team.<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <span>
                            <div class="bh-stars" data-bh-rating="5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Our participants loved it! Engaging sessions, comprehensive content, and effective delivery. Abishek & Uddhav were fantastic trainers. Thank you for your excellent work—we look forward to more! <br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>FSS</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>Amidst post-pandemic global recession, HCL's collaboration with Mazenet LMS and skilled trainers effectively addressed workforce management challenges. <br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>HCL</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>EY's collaboration with Mazenet LMS strategically identified and prepared skilled resources. Structured training, real projects, and automated assessments met industry needs, showcasing effective corporate-educational partnership. <br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>EY</h6>
                        <span>
                            <div class="bh-stars" data-bh-rating="4.5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>
            <!-- Single Testimonial -->
            <div class="single-testimonial">
                <div class="round-1 round"></div>
                <div class="round-2 round"></div>
                <p>The enduring partnership of UST Global and Mazenet adapts to global tech needs. LMS-enabled learning and advanced reporting fuel growth, keeping employees tech-savvy and competitive. <br />&nbsp;<br />&nbsp;<br />&nbsp;<br />&nbsp;</p>
                <div class="client-info">

                    <div class="client-details">
                        <h6>UST Global </h6><span>
                            <div class="bh-stars" data-bh-rating="5">
                                <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                                <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
                                    <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
                                    <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" /></svg>

                            </div>
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<div class="">
    <div class="container wptb-newsletter">
       <div class="cta">
          <div class="row align-items-center">
             <div class="col-lg-7">
                <h4 class="newstitle cta1 mt-5" style="visibility: visible; animation-name: fadeInLeft;">We're not just hiring <br> We're solving!</h4>
                <p class="color--white cta2">Overcome all the challenges in the staffing processes with our world-class staffing solutions that help you discover top global talent, train them for your requirements, and get  onboarded in less than a week!</p>
                <div class="cta2 mb-5"><a href="#enquiry" class="btn">Get Started Now <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a></div>
             </div>
             <div class="col-lg-5 p-0">
                <img src="{{ asset('assets/img/talent-solutions.png') }}" class="ctaimg" alt="talent solution" title="talent solution">
             </div>
          </div>
       </div>
    </div>
 </div>
<!-- partial -->

<section class="pt-5" id="casestudy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title text-center">
                    <h3><strong class="text-color">Why Choose Prakhar Consulting Group?</strong></h3>
                    
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs1.png') }}" alt="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" title="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" />
                    <div class="feature-content">
                        <h5><a href="#">Decade of Excellence</a>
                        </h5>
                        <p>With over ten years in the industry, PCG has established itself as a leader in IT consulting and recruitment services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs2.png') }}" alt="Mazenet Successfully Delivered AWS IAM Corporate Training
                    With Lab Facilities For A Leading Japanese Client" title="Mazenet Successfully Delivered AWS IAM Corporate Training
                    With Lab Facilities For A Leading Japanese Client" />
                    <div class="feature-content">
                        <h5><a href="#">Award-Winning Solutions</a></h5>
                        <p>Recognized for our outstanding e-governance job portal, awarded Best E-Governance Portal in 2021.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs3.png') }}" alt="Condensed 12-hour DataStage
                    Training With Labs Service" title="Condensed 12-hour DataStage
                    Training With Labs Service" />
                    <div class="feature-content">
                        <h5><a href="#">Extensive Professional Network</a>
                        </h5>
                        <p>Access to a database of over 300,000 resumes and a LinkedIn network exceeding 100,000 professionals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs4.png') }}" alt="An MNC client hired 7 SAP Logistics & SAP Ariba
                    Spend Analysis consultants in just 6 days with Mazenet" title="An MNC client hired 7 SAP Logistics & SAP Ariba
                    Spend Analysis consultants in just 6 days with Mazenet" />
                    <div class="feature-content">
                        <h5><a href="#">Expert Workforce</a>
                        </h5>
                        <p>Our team of 2200+ skilled professionals ensures the delivery of high-impact projects nationwide.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs5.png') }}" alt="25 Google Ads Executives in 7 Days" title="25 Google Ads Executives in 7 Days" />
                    <div class="feature-content">
                        <h5><a href="#">Train and Hire : 25 Google Ads Executives in 7 Days</a></h5>
                        <p>A leading Fortune 500 IT multinational corporation entrusted us with a formidable task: recruiting 25 Google Ads Process Executives with impeccable...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs6.png') }}" alt="Mazenet's Recruitment Feat: Teaming Up with
                    Fortune 500 IT Firm to Fill 12 Critical IT Roles in 2 weeks" title="Mazenet's Recruitment Feat: Teaming Up with
                    Fortune 500 IT Firm to Fill 12 Critical IT Roles in 2 weeks" />
                    <div class="feature-content">
                        <h5><a href="#">Rapid and Reliable Results</a>
                        </h5>
                        <p>We guarantee reduced attrition and swift turnaround times, ensuring success for our clients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection