@extends('layouts.master', ['title' => 'Best HR Consulting Services in India | Prakhar Consulting Group', 'keyword' => 'Best HR consulting services in India, HR solutions India, top HR consulting India, leadership hiring, staffing solutions India, HR consultancy', 'description' => 'Prakhar Consulting Group offers Best HR Consulting Services in India that help businesses in Permanent Staffing, Executive Search, Leadership Hiring, etc'])
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
                                    <p class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white">Empowering Your Business with Premier HR Consulting Services in India</b></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('assets/img/PCGImages/banner2.jpg') }}" data-position-y="top" alt="Banner" title="Banner" />
                <div class="flex-content-wrapper1 flexttect">
                    <div class="">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-center">
                                    <p class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white">India’s Best HR Consulting – Tailored to Propel Your Business</b></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('assets/img/PCGImages/newBanner3.jpg') }}" data-position-y="top" alt="Banner" title="Banner" />
                <div class="flex-content-wrapper1 flexttect">
                    <div class="">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 text-center">
                                    <p class="bannertext" data-animate="animate__fadeInDown" data-animate-delay="650"><span class="text-white">Transforming Your Workforce with Top HR Consulting Services in India</b></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<section class="section pt-2 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <div class="heading-title text-center  p-4">
                    <h1>PCG: The Right Choice for HR Consulting Services in India</h1>
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/FCB.jpg') }}" width="600" height="200" alt="FCBO" title="FCBO">

                </div>

                <p class="text-justify mt-4">At <span class="whatwedotitile">PCG Global Consulting Pvt. Ltd.,</span>  we connect businesses with exceptional talent across India, empowering growth and fostering success.</p>
                
                <p><span class="whatwedotitile">Our mission is simple:</span></p>

                <ul>
                    <li class="text-justify">Deliver the <span class="whatwedotitile">Best HR Consulting Services in India</span> for businesses seeking dynamic, goal-aligned talent.</li>
                    <li>Guide job seekers toward career opportunities that match their skills and aspirations</li>
                </ul>
                <p><span class="whatwedotitile">Industries We Serve:</span></p>
                <p class="text-justify">With expertise spanning diverse sectors, we stay ahead of the curve in an evolving job market.</p>
                <p ><span class="whatwedotitile">Our focus includes:</span></p>
            </div>
            <div class="col-md-3">
                <div class="card  shadow p-3 bg-white rounded text-center we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">IT and Telecom</a></span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow p-3 bg-white rounded text-center we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">Media & Entertainment</a></span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow p-3 bg-white rounded text-center we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">Retail & E-commerce</a></span></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow p-3 bg-white rounded text-center we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">E-Governance</a></span></p>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card shadow p-3 bg-white rounded text-center we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">Education & EdTech</a></span></p>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card shadow p-3 bg-white rounded text-center we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">FMCG</a></span></p>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card shadow p-3 bg-white rounded text-center we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">Automobiles</a></span></p>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="card shadow p-3 bg-white text-center rounded we_serve">
                    <p class="mt-3"><span class="whatwedotitile"><a href="{{ route('industriesWeServe') }}">Manufacturing</a></span></p>
                </div>
            </div>
        </div>

        <div class="row mt-4 section">
            <div class="col-md-6">
                <p class="mt-3"><span class="whatwedotitile">What Sets Us Apart?</span></p>
                <p>At PCG, we go beyond traditional recruitment with:</p>

                <ul>
                    <li class="text-justify"><span class="whatwedotitile">Tailored HR Solutions:</span> Customised strategies for businesses of all sizes.</li>
                    <li class="text-justify"><span class="whatwedotitile">Startup Expertise:</span> Trusted by India’s emerging businesses, we design scalable recruitment plans aligned with budget and culture.</li>
                    <li class="text-justify"><span class="whatwedotitile">End-to-End Services:</span> From talent acquisition to onboarding and retention strategies, we ensure your team thrives in today’s competitive market.</li>
                </ul>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/PCGImages/business consulting.jpg') }}" title="business consulting" alt="business consulting">
            </div>

            <div class="col-md-12">
                <p class="mt-3"><span class="whatwedotitile">Your HR Partner for Success</span></p>
                
                <p class="text-justify">
                    Whether you’re hiring executives, managers, or skilled professionals, PCG connects you with the talent you need to achieve your goals. With years of expertise and a proven track record, we ensure a seamless recruitment experience tailored to your needs.
                </p>
                <p class="text-justify">
                    Let us help you build a brighter future for your business. Partner with <span class="whatwedotitile">PCG</span>, where talent meets opportunity.
                </p>

                <div class="d-flex align-items-center justify-content-center mt-4">
                    <a hef="{{ route('contactUs') }}"><button type="submit" name="submit_contact" class="btn btn-default" value="Submit" id="submit_contact">
                            Book your Call with Us Now
                        </button></a>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="text-center heading-title">
                    <h2>Why Do Businesses Choose Us For Recruitment Services in India?</h2>
                </div>
                <p class="text-justify">
                    At PCG Global Consulting, we redefine recruitment by bridging the gap between businesses and exceptional talent from campuses across India. Our best <span class="whatwedotitile">Recruitment Services in India</span> are designed to provide businesses with access to the brightest young minds, ensuring a seamless transition from academic life to professional careers. 
                </p>
                <p class="text-justify"><span class="whatwedotitile">What sets us apart as a leader in Recruitment Services:</span></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Employer-Candidate Alignment</span></p>
                    <p class="text-justify">We go beyond hiring to ensure a perfect fit for skills, attitudes, and company culture.</p>
                </div>

            </div>
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Strategic Talent Acquisition</span></p>
                    <p class="text-justify">Our personalised approach guarantees that fresh graduates are ready to drive organisational success.</p>
                </div>

            </div>
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center ">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">In-Depth Assessments</span></p>
                    <p class="text-justify">Pre-screening ensures only the most qualified candidates reach your team.</p>
                </div>

            </div>
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Campus Partnerships</span></p>
                    <p class="text-justify">Collaborations with top colleges give access to diverse, high-potential talent pools.</p>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <p>With a holistic process, we don’t just fill positions; we build career pathways that contribute to long-term business growth, earning us a reputation as the <span class="whatwedotitile">Best Staffing Company in India</span>.</p>
            </div>
        </div>
    </div>
</section>

<section class="section container">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left ">
                <div class="text-center heading-title">
                    <h2>PCG: #1 HR Consulting and Staffing in India</h2>
                </div>
                <p class="text-justify">
                    PCG is renowned for <span class="whatwedotitile">HR Consulting and Staffing in India</span> providing comprehensive recruitment solutions tailored to meet the dynamic needs of businesses. 

                </p>
                <p class="text-justify">
                    From pre-placement training and skill assessments to post-placement support, our services ensure you onboard job-ready candidates who can contribute from day one.
                </p>
                <p class="text-justify">
                    As a trusted <span class="whatwedotitile">Manpower Consultancy in India</span>, we bridge the gap between educational institutions and corporate industries. 
                </p>

                <div class="text-center heading-title">
                    <h3>What Makes Us the Best in HR Consulting?</h3>
                </div>
            </div>
            <div class="col-md-6">
                <ul>
                    <li><span class="whatwedotitile">End-to-End Recruitment Process:</span> We handle everything from candidate training to placement.</li>
                    <li><span class="whatwedotitile">Strong Industry-Academia Network:</span> Collaborations with top institutions and corporate leaders.</li>
                    <li><span class="whatwedotitile">Job-Ready Talent:</span> Focused on reducing onboarding time and boosting productivity.</li>
                    <li><span class="whatwedotitile">Future-Ready Hiring:</span> Helping you secure the leaders of tomorrow.</li>
                </ul>

            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/PCGImages/triadadvantage.png') }}" title="business consulting" alt="business consulting">
            </div>
            <div class="col-md-12 mt-4">
                <p class="text-justify">By partnering with <span class="whatwedotitile">PCG</span>, you’re not just hiring talent—you’re investing in a future-ready workforce that aligns with your organizational goals.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left ">
                <div class="text-center heading-title">
                    <h2>Reliable Staffing Services in India for Short-Term Hiring Needs</h2>
                </div>
                <p class="text-justify">
                    At PCG, we excel in delivering temporary <span class="whatwedotitile">Staffing Services in India</span> that empower businesses to address their short-term workforce requirements seamlessly. Our expertise lies in providing Contract Staffing Solutions designed for flexibility, quality, and efficiency.
                </p>
                <p class="text-justify">
                    Whether you’re navigating seasonal demands, tackling special projects, or managing sudden workload spikes, our tailored staffing services ensure you access job-ready professionals who integrate effortlessly into your team.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="text-center heading-title">
                    <h3>What Makes Us Your Trusted Staffing Partner?</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Customized Workforce Solutions</span></p>
                    <p class="text-justify">Adaptable to meet your unique business needs.</p>
                </div>

            </div>
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Comprehensive Talent Pool</span></p>
                    <p class="text-justify">Expertise across industries, including IT, engineering, and administration.</p>
                </div>

            </div>
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center ">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Efficient Recruitment Process</span></p>
                    <p class="text-justify">We ensure candidates are screened, skill-assessed, and culturally aligned.</p>
                </div>

            </div>
            <div class="col-md-3">
                <div class="p-2 card business-choose shadow">
                    <div class="text-center">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Enhanced Productivity</span></p>
                    <p class="text-justify">Minimized onboarding time with a focus on job readiness.</p>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="d-flex align-items-center justify-content-center">
                    <a hef="{{ route('contactUs') }}"><button type="submit" name="submit_contact" class="btn btn-default" value="Submit" id="submit_contact">
                            Request Staffing Solutions
                        </button></a>

                </div>
            </div>
        </div>

    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-left ">
                <div class="text-center heading-title">
                    <h2>PCG: Your Premier Recruitment Partner in India</h2>
                </div>
                <p class="text-justify">
                    PCG Global Consulting is your best <span class="whatwedotitile">ERecruitment Partner in India</span> who is professional in delivering tailored hiring solutions, helping businesses secure top talent that aligns with their values, goals, and culture.  
                </p>
                <p class="text-justify">With a focus on long-term success, we provide candidates who become integral contributors to your organisation’s growth.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center heading-title">
                    <h3>What Makes PCG Unstoppable?</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">End-to-End Recruitment Solutions:</span> From talent sourcing and screening to onboarding, we manage every step with precision.</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Customised Approach:</span> Recruitment strategies aligned with your unique organisational needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Industry-Specific Expertise:</span> Proven success in diverse sectors, ensuring a perfect fit for your team.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Resource Efficiency:</span> Save time and costs by accessing our vast network and streamlined processes.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Collaborative Partnership:</span> We work closely with you to exceed expectations and deliver measurable results.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">Recognized as the Best Recruitment Partner in India, we take pride in delivering a seamless recruitment experience that drives business success.</p>
            </div>
        </div>
    </div>
</section>

<section class="section " id="ourservices">
    <div class="container">
        <div class="text-center">
            <h3 class="text-center mb-4">Our Top Key Services</h3>
        </div>
        <p class="key-services text-justify">Our diverse range of services is crafted to address the unique needs of businesses across industries. Whether it’s Permanent Staffing, Payroll Processing, or advanced solutions like Drone & Anti-Drone Technology, we deliver tailored strategies to enhance efficiency, innovation, and organisational growth. Let our expertise support your journey toward sustained success.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/recrutment_services.jpg') }}" alt="Recruitment Services" title="Recruitment Services" />

                            <h5 class="whatwedotitile mt-4">Permanent Staffing </h5>
                        </div>
                        <div class="flip-card-back p-4">
                            <h5 class="whatwedotitile ">Permanent Staffing </h5>
                            <p class="whatwedodecs text-justify">PCG offers tailored permanent staffing solutions, helping you build a loyal, skilled workforce that aligns with your company’s goals.</p>

                                <a href="{{ route('permanentStaffing') }}" class="btn btn-success mt-4  text-center"><span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/Training_development.jpg') }}" alt="Training and Development" title="Training and Development" />
                            <h5 class="whatwedotitile mt-4">Executive Search </h5>
                        </div>
                        <div class="flip-card-back p-4">
                            <h5 class="whatwedotitile ">Executive Search </h5>
                            <p class="whatwedodecs text-justify">Trust PCG’s executive search expertise to connect you with visionary leaders who will drive strategic growth.</p>
                            <a href="{{ route('executiveSearch') }}" class="btn btn-success mt-4 text-center"><span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/leadership_hiring.jpg') }}" alt="Consulting Services" title="Consulting Services" />
                            <h5 class="whatwedotitile mt-4">Leadership Hiring </h5>
                        </div>
                        <div class="flip-card-back p-4">
                            <h5 class="whatwedotitile">Leadership Hiring </h5>
                            <p class="whatwedodecs text-justify">Our leadership hiring services identify and attract high-caliber executives to steer your organisation’s long-term success.</p>
                            <a href="{{ route('leadershipHiring') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/leadership_hiring.jpg') }}" alt="leadership hiring" title="leadership hiring" />
                            <h5 class="whatwedotitile mt-4">Head Hunting</h5>
                        </div>
                        <div class="flip-card-back p-4">
                            <h5 class="whatwedotitile">Head Hunting</h5>
                            <p class="whatwedodecs text-justify">PCG’s precise headhunting services target top talent for critical roles, ensuring a perfect fit for your team.</p>
                            <a href="{{ route('headHunting') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/it_nonit.jpg') }}" alt="Non IT" title="Non IT" />
                            <h5 class="whatwedotitile mt-4">IT/Non-IT Hiring</h5>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">IT/Non-IT Hiring</h5>
                            <p class="whatwedodecs text-justify">We provide comprehensive IT and Non-IT hiring solutions, meeting the diverse talent needs across multiple industries.</p>
                            <a href="{{ route('ItNonIthiring') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/PCGImages/campus_recruitment.jpg') }}" alt="Temporary Staffing" title="Temporary Staffing" />
                            <h5 class="whatwedotitile mt-4">Temporary Staffing</h5>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Temporary Staffing</h5>
                            <p class="whatwedodecs text-justify">PCG delivers flexible temporary staffing services for project-based or seasonal workforce requirements, ensuring agility in your operations.</p>
                            <a href="{{ route('temporaryStaffing') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/mazenet-LMS-service.webp') }}" alt="Contract Staffing" title="Contract Staffing" />
                            <h5 class="whatwedotitile mt-4">Contract Staffing</h5>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Contract Staffing</h5>
                            <p class="whatwedodecs text-justify">Our contract staffing solutions offer a scalable workforce to meet project deadlines, optimizing resources and performance.</p>
                            <a href="{{ route('contractStaffing') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/mazenet-LMS-service.webp') }}" alt="Contract-to-Hire (C2H) Hiring" title="Contract-to-Hire (C2H) Hiring" />
                            <h5 class="whatwedotitile mt-4">Contract-to-Hire (C2H) Hiring</h5>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Contract-to-Hire (C2H) Hiring</h5>
                            <p class="whatwedodecs text-justify">With C2H hiring, PCG allows you to assess talent thoroughly before making a permanent commitment.</p>
                            <a href="{{ route('contractToHire') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/mazenet-LMS-service.webp') }}" alt="Payroll Process" title="Payroll Process" />
                            <h5 class="whatwedotitile mt-4">Payroll Processing</h5>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile">Payroll Processing</h5>
                            <p class="whatwedodecs text-justify">Our streamlined payroll processing services ensure accurate, compliant payroll management, enhancing efficiency and reliability.</p>
                            <a href="{{ route('payrollProcessing') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/mazenet-LMS-service.webp') }}" alt="Campus Recruitment" title="Campus Recruitment" />
                            <h5 class="whatwedotitile mt-4">Universities</h5>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile mt-4">Universities</h5>
                            <p class="whatwedodecs text-justify">This service enhances student development, supports institutional recruitment, and prepares graduates for successful careers in the corporate world.</p>
                            <a href="{{ route('universities') }}" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="{{ asset('assets/img/mazenet-LMS-service.webp') }}" alt="Campus Recruitment" title="Campus Recruitment" />
                            <h5 class="whatwedotitile mt-4">Other Services</h5>
                        </div>
                        <div class="flip-card-back  p-4">
                            <h5 class="whatwedotitile mt-4">Other Services</h5>
                            <p class="whatwedodecs text-justify">Connect with our well-versed team who will tell you about our other services, such as Software and Website Development, Drone & Anti-Drone Technology Services, etc.</p>
                            <a href="#" class="btn btn-success mt-4 text-center"> <span class="text-white">View More</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-4 mb-4">
                <div class="cta2 mt-4"><a href="{{route('contactUs')}}" class="btn text-white">Start Your Journey with Us Today. <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a></div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="section testimonial-container pt-5">
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
<div class="container">
    <div class="col-md-12">
        <div class="text-center">
            <h2><strong class="text-color">Featured Clients</strong></h2>
            <p>Some of the brands we work with</p>
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

<section class="section pt-5 container" id="ourservices">
    <div class="text-center">
        <h2>Latest Blog / News</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <a href="{{ route('hrChallenges') }}">
                    <img src="{{ asset('assets/img/PCGImages/blog/10-HR-Challenges.jpg') }}" alt="Training and Development" title="Training and Development" />
                    <h5 class="whatwedotitile">10 HR Challenges in Scaling Management Consulting Companies in India</h5>
                </a>
                <a href="{{ route('hrChallenges') }}" class="btn btn-success mt-2 text-center"><span class="text-white">View More</span></a>
            </div>
            
            <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                <a href="{{ route('trainingAndDevelopment') }}">
                    <img src="{{ asset('assets/img/PCGImages/blog/Permanent-Staffing.jpg') }}" alt="Training and Development" title="Training and Development" />
                    <h5 class="whatwedotitile">Permanent Staffing Companies: Key to Building a Stable Workforce </h5>
                </a>
                <a href="{{ route('permanentStaffingCompaniesBlog') }}" class="btn btn-success mt-2 text-center"> <span class="text-white">View More</span></a>

            </div>
        </div>
    </div>
</section>
<div class="container mt-5">
    <!-- Swiper Slider -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <!-- Swiper Slide 1 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Boond Engineering</h5>
                        <p class="card-text">"Finding the right Business Development Manager was a real challenge for us. We’d worked with multiple consultants, but none seemed able to connect us with the right fit. Then we partnered with Prakhar Consulting Group, and it made all the difference. Their expertise and deep understanding of our needs led us to the ideal candidate, who has since proven to be an invaluable addition to our team. If you're looking for a consulting partner who truly understands your hiring needs and delivers quality talent, we highly recommend Prakhar Consulting Group."</p>
                    </div>
                </div>
            </div>

            <!-- Swiper Slide 2 -->
            <div class="swiper-slide">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Best Seller</h5>
                        <p class="card-text">"Prakhar Consulting Group has a remarkable team of talented professionals dedicated to delivering results. We entrusted them with our search for a Store Manager, and they met our needs perfectly. Unlike many consulting firms, Prakhar Consulting took the time to understand our specific requirements, and they delivered a qualified candidate exactly when promised. Their responsiveness, attention to detail, and commitment to excellence truly set them apart. We are highly satisfied with the experience and wholeheartedly recommend Prakhar Consulting Group to any business seeking reliable, timely, and effective recruitment solutions."</p>
                    </div>
                </div>
            </div>

            <!-- Swiper Slide 3 -->
            <div class="swiper-slide">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">GEM Enviro</h5>
                        <p class="card-text">"Prakhar Consulting Group provides outstanding recruitment services that truly make a difference. When we needed candidates for Accounting and Data Entry Operator roles, their professional team stepped in and delivered on time with a perfect match for our requirements. Their efficiency and commitment to understanding our needs have impressed us greatly. They will be our top choice for any future recruitment needs, as we trust their expertise and dedication to finding the right talent. For any business in need of dependable recruitment support, we highly recommend Prakhar Consulting Group."</p>
                    </div>
                </div>
            </div>

            <!-- Swiper Slide 4 -->
            <div class="swiper-slide">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Sigma University</h5>
                        <p class="card-text">"Working with Prakhar Consulting Group has been a rewarding experience for Sigma University. When we needed to fill two professor positions at our Vadodara branch, their team’s support was instrumental in finding the right candidates. Prakhar Consulting Group showed a deep understanding of our academic requirements and provided skilled professionals who fit seamlessly into our faculty. Their responsiveness and dedication to meeting our hiring goals were outstanding, making the entire process smooth and efficient.”</p>
                    </div>
                </div>
            </div>

            <!-- Swiper Slide 5 -->
            <div class="swiper-slide">
                <div class="card">

                    <div class="card-body">
                        <h5 class="card-title">Chiranjeevi Group</h5>
                        <p class="card-text">"Our outdated hiring strategies led to long-standing vacancies and high recruitment costs, creating challenges for our team. With a revamped hiring process, we now fill positions faster and more efficiently, which has greatly improved team performance and morale. Thanks to Prakhar Consulting Group here for their ultimate hiring process. We highly recommend Prakhar Consulting Group (PCG) to any organization looking to upgrade their hiring approach and see better results."</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
    </div>
</div>

<div class="mt-5">
    <div class="container wptb-newsletter">
        <div class="cta">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h4 class="newstitle  mt-5">We're not just hiring <br> We're solving!</h4>
                    <p class="color--white cta2">Overcome all the challenges in the staffing processes with our world-class staffing solutions that help you discover top global talent, train them for your requirements, and get onboarded in less than a week!</p>
                    <div class="cta2 mb-5"><a href="#enquiry" class="btn">Get Started Now <span class="btn-arrow-hover"><i class="bi bi-arrow-up-right"></i><i class="bi bi-arrow-up-right"></i></span></a></div>
                </div>
                <div class="col-lg-5 p-0">
                    <img src="{{ asset('assets/img/PCGImages/talent-solutions.png') }}" class="ctaimg" alt="talent solution" title="talent solution">
                </div>
            </div>
        </div>
    </div>
</div>



<section class="section" id="ourservices">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-4">
                <img src="{{ asset('assets/img/our-presence-in-India.jpg') }}" alt="our-presence-in-India" title="our-presence-in-India" height="150">
            </div>
            <div class="col-md-6 mb-4">
                <div class="text-center">
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


@endsection
