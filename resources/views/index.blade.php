@extends('layouts.master',
['title' => 'Best HR Consulting Services in India | Prakhar Consulting Group',
'keyword' => 'Best HR consulting services in India, HR solutions India, top HR consulting India, leadership hiring, staffing solutions India, HR consultancy',
'description' => 'Prakhar Consulting Group offers Best HR Consulting Services in India that help businesses in Permanent Staffing, Executive Search, Leadership Hiring, etc'
])
@section('contents')
<div class="slideshow-container" id="hero">
    <div class="slideshow" data-flex-fullscreen="true">
        <ul class="slides">
            <li>
                <img src="{{ asset('assets/img/PCGImages/banner_new.jpg') }}" data-position-y="top" alt="Corporate Training" title="Corporate Training" />
                <div class="flex-content-wrapper1 flexttect">
                    <div class="">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-center">
                                    <p class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white text-center">Empowering Your Business with Premier HR Consulting Services in India</b></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('assets/img/PCGImages/home/banner-2.jpg') }}" data-position-y="top" alt="Banner" title="Banner" height="300" />
                <div class="flex-content-wrapper1 flexttect">
                    <div class="">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-center">
                                    <p class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white text-center">India’s Best HR Consulting – Tailored to Propel Your Business</b></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('assets/img/PCGImages/home/banner-3.jpg') }}" data-position-y="top" alt="Banner" title="Banner" height="300" />
                <div class="flex-content-wrapper1 flexttect">
                    <div class="">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-center">
                                    <p class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white text-center">Transforming Your Workforce with Top HR Consulting Services in India</b></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h1>PCG: The Right Choice for HR Consulting Services in India</h1>
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/fcb.jpg') }}" width="600" height="200" alt="FCBO" title="FCBO">
                </div>

                <p class="text-justify mt-4">At <span class="whatwedotitile">PCG Global Consulting Pvt. Ltd.,</span> we connect businesses with exceptional talent across India, empowering growth and fostering success.</p>

                <p><span class="whatwedotitile">Our mission is simple:</span></p>

                <ul>
                    <li class="text-justify">Deliver the <span class="whatwedotitile">Best HR Consulting Services in India</span> for businesses seeking dynamic, goal-aligned talent.</li>
                    <li>Guide job seekers toward career opportunities that match their skills and aspirations</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">
    <div class="container">
        <div class="heading-title text-center">
            <h3>Industries We Serve</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <p class="text-center">With expertise spanning diverse sectors, we stay ahead of the curve in an evolving job market.</p>
                {{-- <p class="text-center"><span class="whatwedotitile">Our focus includes:</span></p> --}}
            </div>
            <div class="col-md-3 text-center">
                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/IT-and-Telecom.png') }}" alt="IT and Telecom" title="IT and Telecom" />
                        </div>
                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">IT and Telecom</span></p>
                    </a>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/Media-and-Entertainment.png') }}" alt="Media & Entertainment" title="Media & Entertainment" />
                        </div>
                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">Media & Entertainment</span></p>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/retail&e-commerce.png') }}" alt="Retail & E-commerce" title="Retail & E-commerce" />
                        </div>

                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">Retail & E-commerce</span></p>
                    </a>
                </div>

            </div>
            <div class="col-md-3">

                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/E-Governance.png') }}" alt="E-Governance" title="E-Governance" />
                        </div>
                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">E-Governance</span></p>
                    </a>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/Education-EdTech.png') }}" alt="Education & EdTech" title="Education & EdTech" />
                        </div>
                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">Education & EdTech</span></p>
                    </a>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/fmcg.png') }}" alt="FMCG" title="FMCG" />
                        </div>
                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">FMCG</span></p>
                    </a>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/automobiles.png') }}" alt="Automobiles" title="Automobiles" />
                        </div>
                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">Automobiles</span></p>
                    </a>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card m-4 shadow bg-white rounded we_serve">
                    <a href="{{ route('industriesWeServe') }}">
                        <div class="text-center">
                            <img class="pt-2" src="{{ asset('assets/img/PCGImages/home/manufacturing.png') }}" alt="Manufacturing" title="Manufacturing" />
                        </div>
                        <p class="mt-2 mb-3 text-center"><span class="whatwedotitile">Manufacturing</span></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="py-2"><span class="subheading"> What Sets Us Apart?</span></p>
                <p class="whatwedotitile">At PCG, we go beyond traditional recruitment with:</p>
                <ul>
                    <li class="text-justify"><span class="whatwedotitile">Tailored HR Solutions:</span> Customised strategies for businesses of all sizes.</li>
                    <li class="text-justify mt-3"><span class="whatwedotitile">Startup Expertise:</span> Trusted by India’s emerging businesses, we design scalable recruitment plans aligned with budget and culture.</li>
                    <li class="text-justify mt-3"><span class="whatwedotitile">End-to-End Services:</span> From talent acquisition to onboarding and retention strategies, we ensure your team thrives in today’s competitive market.</li>
                </ul>
            </div>
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/img/PCGImages/home/What-Sets-Us-Apart-450x290px.png') }}" title="business consulting" alt="business consulting">
            </div>
            <div class="col-md-12">
                <p class="mt-3"><span class="whatwedotitile">Your HR Partner for Success</span></p>

                <p class="text-justify">
                    Whether you’re hiring executives, managers, or skilled professionals, PCG connects you with the talent you need to achieve your goals. With years of expertise and a proven track record, we ensure a seamless recruitment experience tailored to your needs.
                </p>
                <p class="text-justify">
                    Let us help you build a brighter future for your business. Partner with <span class="whatwedotitile">PCG</span>, where talent meets opportunity.
                </p>
            </div>
        </div>
        <div class="row ctabutton">
            <div class="col-md-12">
                <div class="text-center">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
                        <span class="text-white"> Book your Call with Us Now</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background-image: linear-gradient(to right, rgb(9, 129, 120), rgb(31, 58, 87));">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="text-center heading-title1">
                    <h2 class="text-white">Why Do Businesses Choose Us For Recruitment Services in India?</h2>
                </div>
                <p class="text-justify text-white">
                    At PCG Global Consulting, we redefine recruitment by bridging the gap between businesses and exceptional talent from campuses across India. Our best <span class="yellow">Recruitment Services in India</span> are designed to provide businesses with access to the brightest young minds, ensuring a seamless transition from academic life to professional careers.
                </p>
            </div>
        </div>

        <div class="row mb-3 mt-3">
            <div class="col-md-12">
                <p class="text-center"><span class="text-white font-weight-bold">What sets us apart as a leader in Recruitment Services</span></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center">
                        <img class="m-2" src="{{ asset('assets/img/PCGImages/home/Employer-Candidate-Alignment.png') }}" title="Employer-Candidate Alignment" alt="Employer-Candidate Alignment">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center"><span class="whatwedotitile">Employer-Candidate Alignment</span></p>
                        <p class="text-center">We go beyond hiring to ensure a perfect fit for skills, attitudes, and company culture.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center">
                        <img class="m-2" src="{{ asset('assets/img/PCGImages/home/Strategic-Talent-Acquisition.png') }}" title="Strategic Talent Acquisition" alt="Strategic Talent Acquisition">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center"><span class="whatwedotitile">Strategic Talent Acquisition</span></p>
                        <p class="text-center px-2">Our personalised approach guarantees that fresh graduates are ready to drive organisational success.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center">
                        <img class="m-2" src="{{ asset('assets/img/PCGImages/home/In-Depth-Assessments.png') }}" title="In-Depth Assessments" alt="In-Depth Assessments">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center"><span class="whatwedotitile">In-Depth Assessments</span></p>
                        <p class="text-center px-2">Pre-screening ensures only the most qualified candidates reach your team.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center">
                        <img class="m-2" src="{{ asset('assets/img/PCGImages/home/Campus-Partnership.png') }}" title="Campus Partnerships" alt="Campus Partnerships">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center"><span class="whatwedotitile">Campus Partnerships</span></p>
                        <p class="text-center px-2">Collaborations with top colleges give access to diverse, high-potential talent pools.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <p class="text-white">With a holistic process, we don’t just fill positions; we build career pathways that contribute to long-term business growth, earning us a reputation as the <span class="yellow">Best Staffing Company in India</span>.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center heading-title">
            <h2>PCG: #1 HR Consulting and Staffing in India</h2>
        </div>

        <div class="">
            <div class="row">
                <div class="col-lg-12 text-left">
                    <p class="text-justify">
                        PCG is renowned for <span class="whatwedotitile">HR Consulting and Staffing in India</span> providing comprehensive recruitment solutions tailored to meet the dynamic needs of businesses.
                    </p>
                    <p class="text-justify">
                        From pre-placement training and skill assessments to post-placement support, our services ensure you onboard job-ready candidates who can contribute from day one.
                    </p>
                    <p class="text-justify">
                        As a trusted <span class="whatwedotitile">Manpower Consultancy in India</span>, we bridge the gap between educational institutions and corporate industries.
                    </p>
                </div>
            </div>
        </div>


    </div>
</section>
<section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">
    <div class="container">
        <div class="text-center heading-title">
            <h3>What Makes Us the Best in HR Consulting?</h3>
        </div>
        <div class="row">

            <div class="col-md-6">
                <ul>
                    <li><span class="whatwedotitile">End-to-End Recruitment Process:</span> We handle everything from candidate training to placement.</li>
                    <li><span class="whatwedotitile mt-3">Strong Industry-Academia Network:</span> Collaborations with top institutions and corporate leaders.</li>
                    <li><span class="whatwedotitile mt-3">Job-Ready Talent:</span> Focused on reducing onboarding time and boosting productivity.</li>
                    <li><span class="whatwedotitile mt-3">Future-Ready Hiring:</span> Helping you secure the leaders of tomorrow.</li>
                </ul>

            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/PCGImages/home/WhatMakes-Us-the-Best.png') }}" title="What Makes Us the Best consulting" alt="What Makes Us the Best consulting">
            </div>
            <div class="col-md-12 mt-4">
                <p class="text-justify">By partnering with <span class="whatwedotitile">PCG</span>, you’re not just hiring talent—you’re investing in a future-ready workforce that aligns with your organizational goals.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container py-5">
        <div class="text-center heading-title">
            <h2>Reliable Staffing Services in India for Short-Term Hiring Needs</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 text-left">

                <p class="text-justify">
                    At PCG, we excel in delivering temporary <span class="whatwedotitile">Staffing Services in India</span> that empower businesses to address their short-term workforce requirements seamlessly. Our expertise lies in providing Contract Staffing Solutions designed for flexibility, quality, and efficiency.
                </p>
                <p class="text-justify">
                    Whether you’re navigating seasonal demands, tackling special projects, or managing sudden workload spikes, our tailored staffing services ensure you access job-ready professionals who integrate effortlessly into your team.
                </p>
            </div>
        </div>
    </div>
</section>
{{-- <section class="section" style="background-image: linear-gradient(to right, rgb(9, 129, 120), rgb(31, 58, 87));"> --}}
<section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">
    <div class="container">
        <div class="row py-2">
            <div class="col-md-12">
                <div class="text-center heading-title">
                    <h3 class="">What Makes Us Your Trusted Staffing Partner?</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center heading_background1">
                        <img class="py-3" src="{{ asset('assets/img/PCGImages/home/Customized-Workforce-Solutions.png') }}" title="Customized Workforce Solutions" alt="Customized Workforce Solutions">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center "><span class="whatwedotitile">Customized Workforce Solutions</span></p>
                        <p class="text-center">Adaptable to meet your unique business needs.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center heading_background2">
                        <img class="py-3" src="{{ asset('assets/img/PCGImages/home/Comprehensive-Talent-Pool.png') }}" title="Comprehensive Talent Pool" alt="Comprehensive Talent Pool">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center"><span class="whatwedotitile">Comprehensive Talent Pool</span></p>
                        <p class="text-center">Expertise across industries, including IT, engineering, and administration.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center heading_background1">
                        <img class="py-3" src="{{ asset('assets/img/PCGImages/home/Efficient-Recruitment-Process.png') }}" title="Efficient Recruitment Process" alt="Efficient Recruitment Process">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center"><span class="whatwedotitile">Efficient Recruitment Process</span></p>
                        <p class="text-center">We ensure candidates are screened, skill-assessed, and culturally aligned.</p>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card business-choose shadow">
                    <div class="text-center heading_background2">
                        <img class="py-3" src="{{ asset('assets/img/PCGImages/home/Enhanced-Productivity.png') }}" title="Enhanced Productivity" alt="Enhanced Productivity">
                    </div>
                    <div class="mt-2 px-2">
                        <p class="text-center mt-2"><span class="whatwedotitile">Enhanced Productivity</span></p>
                        <p class="text-center">Minimized onboarding time with a focus on job readiness.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row ctabutton mt-4">
            <div class="col-md-12">
                <div class="text-center mt-4">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
                        <span class="text-white text-white">Request Staffing Solutions</span>
                    </button>

                </div>
            </div>
        </div>


    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center heading-title">
            <h2>PCG: Your Premier Recruitment Partner in India</h2>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p class="text-justify">
                    PCG Global Consulting is your best <span class="whatwedotitile">Recruitment Partner in India</span> who is professional in delivering tailored hiring solutions, helping businesses secure top talent that aligns with their values, goals, and culture.
                </p>
                <p class="text-justify">With a focus on long-term success, we provide candidates who become integral contributors to your organisation’s growth.</p>
            </div>
        </div>
    </div>
</section>
<section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center heading-title">
                    <h3>What Makes PCG Unstoppable?</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="text-center">
                        <img class="" src="{{ asset('assets/img/PCGImages/home/End-to-End-Recruitment.png') }}" title="Customised Approach" alt="Customised Approach">
                    </div>
                    <div class="pl-2 What_Makes_PCG">
                        <p><span class="whatwedotitile">End-to-End Recruitment Solutions:</span> From talent sourcing and screening to onboarding.</p>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="d-flex">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/home/Customised-Approach.png') }}" title="Customised Approach" alt="Customised Approach">
                    </div>
                    <div class="pl-2 What_Makes_PCG">
                        <p><span class="whatwedotitile">Customised Approach:</span> Recruitment strategies aligned with your unique organisational needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/home/Industry-Specific-Expertise.png') }}" title="Industry-Specific Expertise" alt="Industry-Specific Expertise">
                    </div>
                    <div class="pl-2 What_Makes_PCG">
                        <p><span class="whatwedotitile">Industry-Specific Expertise:</span> Proven success in diverse sectors, ensuring a perfect fit for your team.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/home/Resource-Efficiency.png') }}" title="Resource Efficiency" alt="Resource Efficiency">
                    </div>
                    <div class="pl-2 What_Makes_PCG">
                        <p><span class="whatwedotitile">Resource Efficiency:</span> Save time and costs by accessing our vast network and streamlined processes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/home/Collaborative-Partnership.png') }}" title="Collaborative Partnership" alt="Collaborative Partnership">
                    </div>
                    <div class="pl-2 What_Makes_PCG">
                        <p><span class="whatwedotitile">Collaborative Partnership:</span> We work closely with you to exceed expectations and deliver measurable results.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <p class="text-justify">Recognized as the Best Recruitment Partner in India, we take pride in delivering a seamless recruitment experience that drives business success.</p>
            </div>
        </div>
    </div>
</section>

<section class="section ">
    <div class="container">
        <div class="text-center heading-title">
            <h3 class="text-center">Our Top Key Services</h3>
        </div>
        <p class="key-services text-justify">Our diverse range of services is crafted to address the unique needs of businesses across industries. Whether it’s Permanent Staffing, Payroll Processing, or advanced solutions like Drone & Anti-Drone Technology, we deliver tailored strategies to enhance efficiency, innovation, and organisational growth. Let our expertise support your journey toward sustained success.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/recrutment_services.jpg') }}" alt="Recruitment Services" title="Recruitment Services" />
                            <p class="whatwedotitile text-center mx-4">Permanent Staffing </p>
                        </div>
                        <div class="flip-card-back p-4">
                            <p class="whatwedotitile text-center">Permanent Staffing</p>
                            <p class="whatwedodecs text-justify">PCG offers tailored permanent staffing solutions, helping you build a loyal, skilled workforce that aligns with your company’s goals.</p>
                            <a href="{{ route('permanentStaffing') }}" class="btn btn-success mt-4  text-center"><span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-3 text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/Training_development.jpg') }}" alt="Training and Development" title="Training and Development" />
                            <p class="whatwedotitile text-center">Executive Search </p>
                        </div>
                        <div class="flip-card-back p-4">
                            <h5 class="whatwedotitile ">Executive Search </h5>
                            <p class="whatwedodecs text-justify">Trust PCG’s executive search expertise to connect you with visionary leaders who will drive strategic growth.</p>
                            <a href="{{ route('executiveSearch') }}" class="btn btn-success mt-4 text-center"><span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3 text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/leadership_hiring.jpg') }}" alt="Consulting Services" title="Consulting Services"  />
                            <p class="whatwedotitile text-center">Leadership Hiring </p>
                        </div>
                        <div class="flip-card-back p-4">
                            <h5 class="whatwedotitile">Leadership Hiring </h5>
                            <p class="whatwedodecs text-justify">Our leadership hiring services identify and attract high-caliber executives to steer your organisation’s long-term success.</p>
                            <a href="{{ route('leadershipHiring') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3 text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/home/head-hunting.png') }}" alt="Head Hunting" title="Head Hunting" />
                            <p class="whatwedotitile text-center">Head Hunting</p>
                        </div>
                        <div class="flip-card-back p-4">
                            <h5 class="whatwedotitile">Head Hunting</h5>
                            <p class="whatwedodecs text-justify">PCG’s precise headhunting services target top talent for critical roles, ensuring a perfect fit for your team.</p>
                            <a href="{{ route('headHunting') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/it_nonit.jpg') }}" alt="IT/Non-IT Hiring" title="IT/Non-IT Hiring" />
                            <p class="whatwedotitile text-center">IT/Non-IT Hiring</p>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">IT/Non-IT Hiring</h5>
                            <p class="whatwedodecs text-justify">We provide comprehensive IT and Non-IT hiring solutions, meeting the diverse talent needs across multiple industries.</p>
                            <a href="{{ route('ItNonIthiring') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-3  text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/campus_recruitment.jpg') }}" alt="Temporary Staffing" title="Temporary Staffing" />
                            <p class="whatwedotitile text-center ">Temporary Staffing</p>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Temporary Staffing</h5>
                            <p class="whatwedodecs text-justify">PCG delivers flexible temporary staffing services for project-based or seasonal workforce requirements, ensuring agility in your operations.</p>
                            <a href="{{ route('temporaryStaffing') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-3  text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/home/contract-staffing.png') }}" alt="Contract Staffing" title="Contract Staffing" />
                            <p class="whatwedotitile text-center">Contract Staffing</p>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Contract Staffing</h5>
                            <p class="whatwedodecs text-justify">Our contract staffing solutions offer a scalable workforce to meet project deadlines, optimizing resources and performance.</p>
                            <a href="{{ route('contractStaffing') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/home/connect-to-hire.png') }}" alt="Contract-to-Hire (C2H) Hiring" title="Contract-to-Hire (C2H) Hiring" />
                            <p class="whatwedotitile text-center ">Contract-to-Hire (C2H) Hiring</p>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Contract-to-Hire (C2H) Hiring</h5>
                            <p class="whatwedodecs text-justify">With C2H hiring, PCG allows you to assess talent thoroughly before making a permanent commitment.</p>
                            <a href="{{ route('contractToHire') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3 text-center">
                <div class="flip-card  mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/home/payroll.png') }}" alt="Payroll Processing" title="Payroll Processing" />
                            <p class="whatwedotitile text-center">Payroll Processing</p>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Payroll Processing</h5>
                            <p class="whatwedodecs text-justify">Our streamlined payroll processing services ensure accurate, compliant payroll management, enhancing efficiency and reliability.</p>
                            <a href="{{ route('payrollProcessing') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3 text-center">
                <div class="flip-card mt-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/home/universities.png') }}" alt="Universities" title="Universities" />
                            <p class="whatwedotitile text-center ">Universities</p>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile mt-4">Universities</h5>
                            <p class="whatwedodecs text-justify">This service enhances student development, supports institutional recruitment, and prepares graduates for successful careers in the corporate world.</p>
                            <a href="{{ route('universities') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row ctabutton mt-4">
            <div class="col-md-12 m-4">
                <div class="text-center">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModalCenter">
                        <span class="text-white">Start Your Journey with Us Today</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<section>
    <div class="testimonial-container">
        <div class="overlay-background fixed"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="grid-md-5 grid-sm-2 no-wrap text-center">
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <img src="{{ asset('assets/img/workforce-development-company.png') }}" alt="Workforce Development Company" title="Workforce Development Company" />
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
                                <img src="{{ asset('assets/img/tech-workforce-development-companies.png') }}" alt="tech workforce development companies" title="tech-workforce-development-companies.png" />
                                <div class="counter-content">
                                    <span class="count-me number" data-to="100" data-speed="2500">100</span>
                                    <span style="font-size: 25px; color: #fff; font-weight: 600;">+</span>
                                    <h6 class="counter-title textwhite">Corporate Clients</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <img src="{{ asset('assets/img/onboarding-icons.png') }}" alt="onboarding-icons" title="onboarding-icons" />
                                <div class="counter-content">
                                    <span class="count-me number" data-to="5000" data-speed="2500">5000 </span>
                                    <span style="font-size: 25px; color: #fff; font-weight: 600;">+</span>
                                    <h6 class="counter-title textwhite">Onboardings</h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <img src="{{ asset('assets/img/sme-icon.png') }}" alt="SME" title="SME" />
                                <div class="counter-content">
                                    <span class="count-me number" data-to="2500" data-speed="2500">2500</span>
                                    <span style="font-size: 25px; color: #fff; font-weight: 600;">+</span>
                                    <h6 class="counter-title textwhite">SME </h6>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="counter-box no-margin-lg no-margin-md">
                                <img src="{{ asset('assets/img/Professionals-Trained-icon.png') }}" alt="Professionals-Trained" title="Professionals Trained" />
                                <div class="counter-content">
                                    <span style="font-size: 35px; font-weight: bold; color: #fff;">4.5 L </span>
                                    <h6 class="counter-title textwhite">Professionals Trained</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">

    <div class="container">
        <div class="col-md-12">
            <div class="text-center heading-title">
                <h2>Featured Clients</h2>
                {{-- <p>Some of the brands we work with</p> --}}
            </div>
        </div>
    </div>

    <div class="body">
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/1Point1-Logo.png') }}" alt="Point1-Logo" title="Point1-Logo">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/Boond-Logo.png') }}" alt="Boond-Logo" title="Boond-Logo">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/siyaram logo.png') }}" alt="siyaram logo" title="siyaram logo">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/Shaadi.jpg') }}" alt="Shaadi" title="Shaadi">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/Element.jpg') }}" alt="Element" title="Element">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/planet electric.png') }}" alt="planet electric" title="planet electric">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/uttam toyota.png') }}" alt="uttam toyota" title="uttam toyota">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/habitat design.png') }}" alt="habitat design" title="habitat design">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/ishan-logo.png') }}" alt="ishan-logo" title="ishan-logo">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/logo.png') }}" alt="logo" title="logo">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/moglix-logo.png') }}" alt="moglix-logo" title="moglix-logo">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/netsys.jpeg') }}" alt="Netsys" title="Netsys">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/vishal builders.png') }}" alt="vishal builders" title="vishal builders">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/swarovski.jpg') }}" alt="swarovski" title="swarovski">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/sncone.jpg') }}" alt="sncone" title="sncone">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/thrive co.png') }}" alt="thrive co" title="thrive co">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/trending runks.png') }}" alt="trending runks" title="trending runks">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/vencore global.png') }}" alt="vencore global" title="vencore global">
                </div>
                <div class="slide">
                    <img class="img-fluid mx-auto d-block" src="{{ asset('assets/img/lmsclients/ymy infratech.png') }}" alt="ymy infratech" title="ymy infratech">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section container" id="ourservices">
    <div class="text-center heading-title">
        <h2>Latest Blog / News</h2>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-lg-2 pt-3">
            </div>
            <div class="col-md-12 col-lg-4 pt-3">
                <a href="{{ route('hrChallenges') }}">
                    <img src="{{ asset('assets/img/PCGImages/blog/10-HR-Challenges.jpg') }}" alt="Training and Development" title="Training and Development" />
                </a>
                <div class="shadow p-4 ">
                    <div class="">
                        <a href="{{ route('hrChallenges') }}">
                            <h5 class="whatwedotitile text-left">10 HR Challenges in Scaling Management Consulting Companies in India</h5>
                        </a>
                    </div>
                  
                    <p><span class="whatwedotitile">Author:</span> <a href="https://www.linkedin.com/in/gauravbhatnagar08/" target="_blank" class="text-primary font-weight-bold">Gaurav Bhatnagar</a></p>
                    <a href="{{ route('hrChallenges') }}" class="btn btn-success mt-2 text-center"><span class="text-white">Read More</span></a>
                </div>
            </div>

            <div class="col-md-12 col-lg-4  pt-3">
                <a href="{{ route('permanentStaffingCompaniesBlog') }}">
                    <img src="{{ asset('assets/img/PCGImages/blog/Permanent-Staffing.jpg') }}" alt="Training and Development" title="Training and Development" />
                </a>
                <div class="shadow p-4">
                    <div class="">
                        <a href="{{ route('permanentStaffingCompaniesBlog') }}">
                            <h5 class="whatwedotitile text-left">Permanent Staffing Companies: Key to Building a Stable Workforce </h5>
                        </a>
                    </div>
                   
                    <p><span class="whatwedotitile">Author:</span> <a href="https://www.linkedin.com/in/mayank-puri-contentwriter/" target="_blank" class="text-primary font-weight-bold">Mayank Puri</a></p>
    
                    <a href="{{ route('permanentStaffingCompaniesBlog') }}" class="btn btn-success mt-2 text-center"> <span class="text-white">Read More</span></a>
                </div>
            </div>
             <div class="col-md-12 col-lg-3 pt-3">
            </div>
        </div>
    </div>
</section>
<section class="section" style="background-image: linear-gradient(to right, rgb(9, 129, 120), rgb(31, 58, 87));">

    <div class="container">
        <div class="text-center heading-title1">
            <h3 class="text-white font-weight-bold">What are our Clients Say's</h3>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- Swiper Slide 1 -->
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <div class="image_client">
                                <img src="{{ asset('assets/img/PCGImages/home/Boond-Logo-PNG-1.png') }}" alt="image" />
                            </div>
                            <div class="my-2 company-text">
                                <p class="card-text">"Finding the right Business Development Manager was a real challenge for us. We’d worked with multiple consultants, but none seemed able to connect us with the right fit. Then we partnered with Prakhar Consulting Group, and it made all the difference. Their expertise and deep understanding of our needs led us to the ideal candidate, who has since proven to be an invaluable addition to our team. If you're looking for a consulting partner who truly understands your hiring needs and delivers quality talent, we highly recommend Prakhar Consulting Group."</p>
                            </div>
                            <div class="company-title">
                                <h5 class="card-title text-center mt-2">Boond Engineering</h5>    
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Swiper Slide 2 -->
                {{-- <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('assets/img/PCGImages/home/GEMLogo.png') }}" alt="image" class="GemLogo" width="50" />
                <p class="card-text mt-2">"Prakhar Consulting Group has a remarkable team of talented professionals dedicated to delivering results. We entrusted them with our search for a Store Manager, and they met our needs perfectly. Unlike many consulting firms, Prakhar Consulting took the time to understand our specific requirements, and they delivered a qualified candidate exactly when promised. Their responsiveness, attention to detail, and commitment to excellence truly set them apart. We are highly satisfied with the experience and wholeheartedly recommend Prakhar Consulting Group to any business seeking reliable, timely, and effective recruitment solutions."</p>
                <h5 class="card-title text-center mt-2">Best Seller</h5>

            </div>
        </div>
    </div> --}}

    <!-- Swiper Slide 3 -->
    <div class="swiper-slide">
        <div class="card">

            <div class="card-body">
                <div class="image_client">
                    <img src="{{ asset('assets/img/PCGImages/home/GEMLogo.png') }}" alt="image" class=""  />
                </div>
                <div class="my-2 company-text">
                    <p class="card-text mt-2">"Prakhar Consulting Group provides outstanding recruitment services that truly make a difference. When we needed candidates for Accounting and Data Entry Operator roles, their professional team stepped in and delivered on time with a perfect match for our requirements. Their efficiency and commitment to understanding our needs have impressed us greatly. They will be our top choice for any future recruitment needs, as we trust their expertise and dedication to finding the right talent. For any business in need of dependable recruitment support, we highly recommend Prakhar Consulting Group."</p>
                </div>
                <div class="company-title">
                    <h5 class="card-title text-center mt-2">GEM Enviro</h5>    
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper Slide 4 -->
    <div class="swiper-slide">
        <div class="card">

            <div class="card-body">
                <div class="image_client">
                        <img src="{{ asset('assets/img/PCGImages/home/sigma.png') }}" alt="image" class="" />
                </div>
                <div class="my-2 company-text">
                    <p class="card-text mt-2">"Working with Prakhar Consulting Group has been a rewarding experience for Sigma University. When we needed to fill two professor positions at our Vadodara branch, their team’s support was instrumental in finding the right candidates. Prakhar Consulting Group showed a deep understanding of our academic requirements and provided skilled professionals who fit seamlessly into our faculty. Their responsiveness and dedication to meeting our hiring goals were outstanding, making the entire process smooth and efficient.”</p>
                </div>
                <div class="company-title">
                    <h5 class="card-title text-center">Sigma University</h5>    
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper Slide 5 -->
    <div class="swiper-slide">
        <div class="card">
            <div class="card-body">
                <div class="image_client">
                    <img src="{{ asset('assets/img/PCGImages/home/chirn.png') }}" alt="image" class="" />
                </div>
                <div class="my-2 company-text">
                    <p class="card-text mt-2">"Our outdated hiring strategies led to long-standing vacancies and high recruitment costs, creating challenges for our team. With a revamped hiring process, we now fill positions faster and more efficiently, which has greatly improved team performance and morale. Thanks to Prakhar Consulting Group here for their ultimate hiring process. We highly recommend Prakhar Consulting Group (PCG) to any organization looking to upgrade their hiring approach and see better results."</p>
                </div>
                <div class="company-title">
                    <h5 class="card-title text-center">Chiranjeevi Group</h5>    
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div>
    </div>
</section>



{{-- <div class="mt-5">
    <div class="container wptb-newsletter">
        <div class="cta">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h4 class="newstitle  mt-5">We're not just hiring <br> We're solving!</h4>
                    <p class="color--white cta2">Overcome all the challenges in the staffing processes with our world-class staffing solutions that help you discover top global talent, train them for your requirements, and get onboarded in less than a week!</p>

                    <div class="cta2 mb-5">
                        <a href="#" class="btn text-white" data-toggle="modal" data-target="#exampleModalCenter">Get Started Now <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <img src="{{ asset('assets/img/PCGImages/talent-solutions.png') }}" class="ctaimg" alt="talent solution" title="talent solution">
                </div>
            </div>
        </div>
    </div>
</div> --}}



<section class="section">

    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-4">
                <img class="p-2" src="{{ asset('assets/img/our-presence-in-India.jpg') }}" alt="our-presence-in-India" title="our-presence-in-India" height="150">
            </div>
            <div class="col-md-6 mb-4">
                <div class="text-center heading-title">
                    <h4>Certifications and Achievements</h4>
                </div>
                <p>
                    Our commitment to quality and excellence is demonstrated through our prestigious certifications:
                </p>

                <ul>
                    <li><span class="whatwedotitile">CMMI Level III</span></li>
                    <li><span class="whatwedotitile">ISO 9001:2015 Certified</span></li>
                    <li><span class="whatwedotitile">ISO 27001:2013 Certified</span></li>
                    <li><span class="whatwedotitile">ISO 20000-1:2011</span></li>
                    <li><span class="whatwedotitile">ISO 45001:2018</span></li>
                    <li><span class="whatwedotitile">Awarded Best E-Governance Job Portal in 2021</span></li>
                </ul>
                <p>These certifications reflect our dedication to maintaining the highest standards in service delivery and client satisfaction.</p>
            </div>
        </div>
    </div>
</section>
<!-- partial -->

{{-- Modal --}}



<div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Book your FREE APPOINTMENT, Now!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="text-white">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="myForm" method="POST">
                    <div class="row">
                @csrf
                <div class="col-md-12">
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                </div>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name<span class="required">*</span></label>
                                    <input type="text" placeholder="Your Name*" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number<span class="required">*</span></label>
                                    <input type="text" name="mobile" id="mobile" minlength="10" maxlength="10" onkeypress="return isNumberKey(event)" pattern=".{10,10}" placeholder="Your Number*" class="form-control" onpaste="return false;">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address<span class="required">*</span></label>
                                    <input type="text" placeholder="Your Mail*" name="email" id="emails" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Our Services <span class="required">*</span></label>
                                <select id="our-services" name="services">
                                    <option value=""> -- Select Option -- </option>
                                    <option value="Permanent Staffing">Permanent Staffing</option>
                                    <option value="Executive Search">Executive Search</option>
                                    <option value="Leadership Hiring">Leadership Hiring</option>
                                    <option value="Head Hunting">Head Hunting</option>
                                    <option value="IT/Non-IT Hiring">IT/Non-IT Hiring</option>
                                    <option value="Temporary Staffing">Temporary Staffing </option>
                                    <option value="Contract Staffing">Contract Staffing </option>
                                    <option value="Contract-to-Hire(C2H) Hiring">Contract-to-Hire(C2H) Hiring</option>
                                    <option value="Payroll Process">Payroll Process</option>
                                    <option value="Campus Recruitment">Campus Recruitment</option>
                                    <option value="Other Services">Other Services</option>
                                </select>
                                @error('services')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Message<span class="required">*</span></label><br />
                                    <textarea class="form-control" placeholder="Comments" name="comment" id="comment" rows="2" onpaste="return false;" maxlength="300"></textarea>
                                </div>
                                @error('comment')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label>Google Recaptcha</label><br />
                                    <div class="g-recaptcha mt-2" data-sitekey="6Lcz3pEqAAAAAFGfZqdrib6sQJzjaJiWc056nU0_">
                                        @if ($errors->has('g-recaptcha-response'))
                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div> --}}
            </div>
            </div>
        <div class="modal-footer">
            <div class="col-md-12 text-center" id="submit">
                <button type="submit" class="btn btn-secondary btn-submit text-center">Submit</button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

{{--   
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Book your FREE APPOINTMENT, Now!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">rakesh</div>
                        <div class="col-md-6">Ravi</div>
                  
                    </div>
              
                      
                       
                </div>
            </form>
            </div>
        </div>
    </div>
</div> --}}


@endsection
@section('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function(e) {
        e.preventDefault();
        var name = $("#name").val();
        var email = $("#emails").val();
        var mobile = $("#mobile").val();
        var services = $("#our-services").val();
        var comment = $("#comment").val();
        $.ajax({
            type: 'POST'
            , url: "{{route('enquiry')}}"
            , data: {
                name: name
                , email: email
                , mobile: mobile
                , services: services
                , comment: comment
            }
            , success: function(data) {

                console.log(data);

                if ($.isEmptyObject(data.error)) {

                    alert(data.success);
                    $('#myForm')[0].reset();
                    location.reload();
                } else {
                    printErrorMsg(data.error);
                }

            }

        });
    });

    function printErrorMsg(msg) {

        $(".print-error-msg").find("ul").html('');

        $(".print-error-msg").css('display', 'block');

        $.each(msg, function(key, value) {

            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');

        });

    }

</script>
@endsection
