@extends('layouts.master',
[
    'title' => 'Top HR Consultants in India | Prakhar Consulting Group',
    'keyword' => 'Top HR Consultants in India, HR Consulting Services India, Talent Acquisition India, Leadership Hiring, HR Solutions, Workforce Management',
    'description' => 'Prakhar Consulting Group: Trusted HR Consultants in India, specializing in custom Staffing Solutions, Leadership Hiring, and Talent Acquisition for your business success'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <p class="page-title text-white banner_text text-center">About Us</p>
            </div>
        </div>
    </div>
</div>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title text-center">
                    <h1>PCG Global Consulting: One of the Leading HR Consultants in India</h1>
                </div>

                <p class="text-justify shadow p-4">
                    PCG Global Consulting Pvt. Ltd., a subsidiary of Prakhar Software Solutions Pvt. Ltd., stands proudly among the <span class="whatwedotitile">Top HR Consultants in India</span>. Rooted in our parent organisation’s success in e-governance, skill development, and drone technology, we bring a proven track record of innovation and excellence to the corporate world.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="heading-title text-center">
            <h2>Why We Are Your Best HR Partner?</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li class="text-justify"><span class="whatwedotitile">Robust Expertise:</span> A team of 2200+ professionals delivering tailored HR solutions across industries.</li>
                    <li class="text-justify"><span class="whatwedotitile">Extensive Reach:</span> Presence in 14 skill development centers nationwide, enabling workforce transformation.</li>
                    <li class="text-justify"><span class="whatwedotitile">Proven Success:</span> Over 4,500 candidates placed through data-driven recruitment strategies.</li>
                    <li class="text-justify"><span class="whatwedotitile">Customised Solutions:</span> End-to-end HR consulting, recruitment, and staffing tailored to your needs.</li>
                    <li class="text-justify"><span class="whatwedotitile">Commitment to Transparency:</span> Ethical practices and long-term partnerships ensure client satisfaction.</li>
                </ul>
              
            </div>
            <div class="col-md-6">
                Use icons like a map for nationwide presence, a briefcase for placements, and a chart for expertise.
            </div>
            {{-- <div class="col-md-3">
                <div class="p-4 card business-choose shadow">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/about/Enhanced-Productivity.png') }}" title="Enhanced Productivity" alt="Enhanced Productivity">
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Robust Expertise</span></p>
                    <p class="text-justify">A team of 2200+ professionals delivering tailored HR solutions across industries.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 card business-choose shadow">
                    <div class="text-center ">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <p class="text-center mt-2"><span class="whatwedotitile">Extensive Reach</span></p>
                    <p class="text-justify">Presence in 14 skill development centers nationwide, enabling workforce transformation.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-4 card business-choose shadow">
                        <div class="text-center">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                                <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <p class="text-center mt-2"><span class="whatwedotitile">Proven Success</span></p>
                        <p class="text-justify">Over 4,500 candidates placed through data-driven recruitment strategies.</p>
                </div>
            </div>
            <div class="col-md-3">
                    <div class="p-4 card business-choose shadow">
                        <div class="text-center ">
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                                <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <p class="text-center mt-2"><span class="whatwedotitile">Customised Solutions</span></p>
                        <p class="text-justify">End-to-end HR consulting, recruitment, and staffing tailored to your needs.</p>
                    </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="p-4 card business-choose shadow">
                    <div class="text-center ">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        </div>
                        <p class="text-center mt-2"><span class="whatwedotitile">Commitment to Transparency</span></p>
                        <p class="text-justify">Ethical practices and long-term partnerships ensure client satisfaction.</p>
                    </div>
                 </div>
            </div> --}}
            <div class="col-md-12 mt-2">
                <p class="text-justify">At PCG, we bridge the gap between employers and top talent, delivering <span class="whatwedotitile">HR Consulting and Staffing Services in India</span> that drive business success. Our focus on cultural fit, skill alignment, and workforce agility ensures exceptional outcomes for both organisations and job seekers.</p>
            </div>
            <div class="col-md-12 mt-4">
                <div class="d-flex align-items-center justify-content-center">
                    <a hef="{{ route('contactUs') }}"><button type="submit" name="submit_contact" class="btn btn-default text-white" value="Submit" id="submit_contact">
                            Get in Touch
                        </button></a>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="heading-title text-center">
            <h2>Transform Your Team with Our Ultimate Hiring Solutions in India</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">At PCG, we will help deliver tailored <span class="whatwedotitile">Hiring Solutions in India</span> that redefine traditional recruitment. Our process focuses on aligning leadership talent with your organisation’s vision, culture, and strategic goals, ensuring every hire is not just a placement but a valuable asset.</p>
            </div>
        </div>
        <div class="heading-title text-center">
            <h3>Why Choose Our Hiring Solutions?</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/about/Strategic-Talent-Alignment.png') }}" alt="Strategic Talent Alignment" title="Strategic Talent Alignment" />
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Strategic Talent Alignment:</span> We prioritize leadership candidates who align with your company’s values, ensuring long-term success.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/about/Market-Driven-Insights.png') }}" alt="Market-Driven Insights" title="Market-Driven Insights" />
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Market-Driven Insights:</span> Thorough market research and industry benchmarking enable us to identify top-tier professionals who bring innovation and growth.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/about/Extensive-Industry-Network.png') }}" alt="Extensive Industry Network" title="Extensive Industry Network" />
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Extensive Industry Network:</span> Tap into a vast pool of passive candidates and senior executives, leveraging deep industry connections.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/about/Advanced-Talent-Assessment.png') }}" alt="Advanced Talent Assessment" title="Advanced Talent Assessment" />
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Advanced Talent Assessment:</span> Our process includes behavioral interviews, leadership simulations, and assessment tools to ensure precision in matching talent.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center gap-8">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/PCGImages/about/Post-Placement-Integration.png') }}" alt="Post-Placement Integration" title="Post-Placement Integration" />
                    </div>
                    <div class="ml-3">
                        <p><span class="whatwedotitile">Post-Placement Integration:</span> Seamless support ensures a smooth transition for leaders, mitigating turnover risks and strengthening organisational stability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
               <p class="text-justify"> Unlike many HR firms, we focus on quality over quantity. Our leadership hiring solutions are designed to create a stable leadership pipeline, foster innovation, and drive long-term business growth.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center heading-title">
            <h3>Our In-House Platforms</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">Our in-house platforms redefine how talent, businesses, and industry leaders connect. Explore our unique offerings designed to empower professionals and organisations alike.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/PCGImages/about/naukriyan.png') }}" alt="Naukriyan.com" title="Naukriyan.com" />
            </div>
            <div class="col-md-6">
                <p class="mt-3"><span class="whatwedotitile">Naukriyan.com</span></p>
                <p>Naukriyan.com bridges the gap between job seekers and employers, offering opportunities in <span class="whatwedotitile">e-governance</span> and <span class="whatwedotitile">corporate sectors</span>.</p>
                <ul>
                    <li class="text-justify"><span class="whatwedotitile">For Job Seekers:</span> Access jobs tailored to your skills and aspirations.</li>
                    <li class="text-justify"><span class="whatwedotitile">For Employers:</span> Discover top-tier talent across industries with ease. This platform simplifies recruitment and job hunting, transforming careers across India.</li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <p class="mt-3"><span class="whatwedotitile">Naukriyan Guftgu</span></p>
                <p>Naukriyan Guftgu is an engaging <span class="whatwedotitile">corporate talk show</span> featuring discussions with industry leaders and visionaries.</p>
                <ul>
                    <li class="text-justify"><span class="whatwedotitile">Key Themes:</span> Leadership strategies, workplace culture, and inspiring career journeys.</li>
                    <li class="text-justify"><span class="whatwedotitile">For Professionals:</span> Unlock actionable insights and fresh perspectives on corporate dynamics.<p>This platform offers an exclusive look into what drives today’s leaders and organisations.</p></li>
                </ul>
            </div>

            <div class="col-md-6">
                <img src="{{ asset('assets/img/PCGImages/about/guftgu.png') }}" alt="Naukriyan.com" title="Naukriyan.com" />
            </div>
        </div>
       
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/PCGImages/about/gravity-international.png') }}" alt="The Gravity International" title="The Gravity International" />
            </div>

            <div class="col-md-6">
                <p class="mt-3"><span class="whatwedotitile">The Gravity International</span></p>
                <p class="text-justify"><span class="whatwedotitile">The Gravity International</span> is a premier <span class="whatwedotitile">e-magazine</span> for professionals, entrepreneurs, and leaders.</p>
                <ul>
                    <li class="text-justify"><span class="whatwedotitile">What It Offers:</span> Thought-provoking articles on industry trends, leadership, and personal growth.</li>
                    <li class="text-justify"><span class="whatwedotitile">Why It Matters:</span>  Equip yourself with insights and tools to thrive in a competitive, fast-changing world.
                        Stay ahead with content designed to inspire and elevate your professional journey.</li>
                </ul>
            </div>

           
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="heading-title text-center">
            <h2 class="text-center">Our Mission & Vision</h2>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="content-box left border shadow p-3 mb-5 bg-white rounded mission_vission">
                    <h4 class="disableh5 text-center mb-2"> <img src="{{ asset('assets/img/mission-icon.png') }}" alt="Our Mission" title="Our Mission"> Our Mission</h4>
                    <ul class="pt-2">
                        <li>
                            <p class="text-justify"> 
                                At <span class="whatwedotitile">PCG Global  Consulting</span>, our mission is to be the driving force behind successful organisations by connecting them with exceptional talent. We aim to deliver <span class="whatwedotitile">Customised HR Solutions</span> that empower businesses to achieve growth and professionals to unlock their potential.
                            </p>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="content-box left no-margin border shadow p-3 mb-5 bg-white rounded ml-5 mission_vission">
                    <h4 class="disableh5 text-center mb-2"><img src="{{ asset('assets/img/vision-icon.png') }}" alt="Our Vision" title="Our Vision"> Our Vision</h4>
                    <ul class="pt-2">
                        <li>
                            <p class="text-justify">Our vision is to become the most trusted partner for businesses and professionals, fostering progress and innovation across industries. We envision a world where every company has access to the right talent, and every professional finds a meaningful career.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="section">
    <div class="container">
        <div class="text-center">
            <h2>The Prakhar Consulting Group Story</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">Founded in 2024, Prakhar Consulting Group started with a single goal in mind – to revolutionize the recruitment industry. Over the years, we've grown into a trusted partner for numerous organizations, thanks to our commitment to excellence and innovation.</p>
            </div>
        </div>
    </div>

</section> --}}

{{-- <section class="pt-5" id="casestudy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2><strong class="text-color">Why Choose Prakhar Consulting Group?</strong></h2>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs1.png') }}" alt="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" title="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" />
                    <div class="feature-content">
                        <span><a href="#" class="font-weight-bold">Decade of Excellence</a></span>
                        <p class="text-justify">With over ten years in the industry, PCG has established itself as a leader in IT consulting and recruitment services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs3.png') }}" alt="Condensed 12-hour DataStage
                    Training With Labs Service" title="Condensed 12-hour DataStage
                    Training With Labs Service" />
                    <div class="feature-content">
                        <span><a href="#" class="font-weight-bold">Extensive Professional Network</a></span>
                        <p class="text-justify">Access to a database of over 300,000 resumes and a LinkedIn network exceeding 100,000 professionals.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs1.png') }}" alt="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" title="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" />
                    <div class="feature-content">
                        <span><a href="#" class="font-weight-bold">Decade of Excellence</a></span>
                        <p class="text-justify">With over ten years in the industry, PCG has established itself as a leader in IT consulting and recruitment services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs3.png') }}" alt="Condensed 12-hour DataStage
                    Training With Labs Service" title="Condensed 12-hour DataStage
                    Training With Labs Service" />
                    <div class="feature-content">
                        <span><a href="#" class="font-weight-bold">Extensive Professional Network</a></span>
                        <p class="text-justify">Access to a database of over 300,000 resumes and a LinkedIn network exceeding 100,000 professionals.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs1.png') }}" alt="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" title="Successful Alicloud Training with Lab
                    Despite Alicloud Policy Change" />
                    <div class="feature-content">
                        <span><a href="#" class="font-weight-bold">Decade of Excellence</a></span>
                        <p class="text-justify">With over ten years in the industry, PCG has established itself as a leader in IT consulting and recruitment services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="feature icon-right">
                    <img src="{{ asset('assets/img/cs3.png') }}" alt="Condensed 12-hour DataStage
                    Training With Labs Service" title="Condensed 12-hour DataStage
                    Training With Labs Service" />
                    <div class="feature-content">
                        <span><a href="#" class="font-weight-bold">Extensive Professional Network</a></span>
                        <p class="text-justify">Access to a database of over 300,000 resumes and a LinkedIn network exceeding 100,000 professionals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- <section class="section">
    <div class="container">
        <div class="text-center">
            <h2>Our Team</h2>
        </div>
        <p class="text-center">Meet the experts driving our success</p>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                    <a href="{{ route('services') }}">
                        <img src="{{ asset('assets/img/talent-solutions.webp') }}" alt="Talent Solutions" title="Talent Solutions" />
                        <h5 class="whatwedotitile">Rakesh Kumar Maurya</h5>


                    </a>
                    <p class="whatwedodecs">PHP Developer</p>

                </div>
                <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                    <a href="{{ route('services') }}">
                        <img src="{{ asset('assets/img/talent-solutions.webp') }}" alt="Talent Solutions" title="Talent Solutions" />
                        <h5 class="whatwedotitile">Ramesh</h5>


                    </a>
                    <p class="whatwedodecs">SEO</p>

                </div>
                <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                    <a href="{{ route('services') }}">
                        <img src="{{ asset('assets/img/talent-solutions.webp') }}" alt="Talent Solutions" title="Talent Solutions" />
                        <h5 class="whatwedotitile">Rakesh Kumar Maurya</h5>


                    </a>
                    <p class="whatwedodecs">Sr PHP Developer</p>

                </div>
                <div class="col-md-12 col-lg-3  pt-3 pt-3 text-center">
                    <a href="{{ route('services') }}">
                        <img src="{{ asset('assets/img/talent-solutions.webp') }}" alt="Talent Solutions" title="Talent Solutions" />
                        <h5 class="whatwedotitile">Kundan Kumar</h5>


                    </a>
                    <p class="whatwedodecs">Manager </p>

                </div>

            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="section">
    <div class="container">
        <div class="text-center">
            <h2>Awards & Recognitions</h2>
        </div>
        <div class="row">

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="shadow p-2 mb-3 bg-body rounded">
                    <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                        <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                    </a>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 text-center mt-4">
                <a href="#" target="_blank"><button type="button" class="btn btn-base text-white">View More</button></a>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="section pt-2 container" id="ourservices">
    <div class="text-center">
        <h2>Media & Press</h2>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="shadow p-2 mb-3 bg-body rounded">
                <a href="{{  asset('assets/img/talent-solutions.webp')}}" target="_blank" rel="prettyPhoto[gallery1]">
                    <img src="{{  asset('assets/img/talent-solutions.webp')}}" width="100%" height="auto" alt="Red round shape">
                </a>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 text-center mt-4">
            <a href="#" target="_blank"><button type="button" class="btn btn-base text-white">View More</button></a>
        </div>
    </div>
</section> --}}
@endsection
