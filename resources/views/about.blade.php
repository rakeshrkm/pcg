@extends('layouts.master', ['title' => 'About Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">About Us</h1>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 text-center">
                <span style="font-size:28px;" class="text-center">
                    <span class="text-color">"Your Strategic Partner in Recruitment and Business Success"</span>
                </span>
                <br /> <br />
                <p class="gap" data-gap-bottom="30">
                    With over a decade of excellence, Prakhar Consulting Group (PCG) is your trusted partner in navigating the complexities of talent acquisition and business growth.
                </p>

                <p class="gap" data-gap-bottom="30">
                    Prakhar Consulting Group (PCG) is renowned for its expertise in IT recruitment and consulting services. As a subsidiary of Prakhar Software Solutions Pvt. Ltd., a company valued at over 100 crore, we bring robust experience and proven methodologies to deliver high-quality services across various industries.
                </p>

            </div>
        </div>
    </div>
</section>

<section class="section pt-2 container" id="ourservices">
    <div class="heading-title text-center">
        <h2>Company Overview</h2>
    </div>

    <div class="row">
        <div class="col-md-12">
            <p>Prakhar Consulting Group (PCG) is a subsidiary of Prakhar Software Solutions Pvt. Ltd., a company with a valuation exceeding 100 crore. With a robust team of over 2200 professionals, we have successfully delivered projects of national importance to both government and corporate clients across India. Our seasoned HR recruiters have excelled in diverse industry hiring, having placed over 4500 candidates nationwide.</p>
        </div>
    </div>
</section>

{{-- <section class="section pt-2 container" id="ourservices">
    <div class="heading-title text-center">
        <h2>Our Mission & Vision</h2>
    </div>
    <p>At Prakhar Consulting Group, our mission is to empower businesses with exceptional talent while helping individuals find their ideal career paths. We envision a future where recruitment is not just about filling positions but fostering lasting relationships.</p>
    <div class="col-md-12 col-lg-12">
        <h3>Our Values</h3>                       
        <div class="row">
            <div class="col-md-12 col-lg-6">
               
                <ul>
                    <li><span class="whatwedotitile">Excellence : </span>We strive for the highest standards in everything we do.</li>
                    <li><span class="whatwedotitile">Integrity : </span>We uphold transparency and honesty in all our dealings.</li>
                    <li><span class="whatwedotitile">Innovation : </span>We constantly seek new ways to solve challenges and create value.</li>
                    <li><span class="whatwedotitile">Collaboration : </span>We believe in building strong, lasting partnerships with our clients.</li>
                </ul>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="content-box left small">
                    <div class="icon-shape-disable">
                        <img src="{{ asset('assets/img/vision-icon.png') }}">
                    </div>
                    <h5 class="disableh5">Our Vision</h5>
                    <p>"To be the leading recruitment and consulting firm known for excellence, innovation, and integrity."</p>
                </div>
                <div class="content-box left small no-margin">
                    <div class="icon-shape-disable">
                        <img src="{{ asset('assets/img/mission-icon.png') }}">
                    </div>
                    <h5 class="disableh5">Our Mission</h5>
                    <p>"To empower businesses with strategic recruitment solutions that drive success and foster long-term growth."</p>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section class="section pt-2 container" id="ourservices">
    <div class="heading-title text-center">
        <h2>Our Mission & Vision</h2>
        <p>At Prakhar Consulting Group, our mission is to empower businesses with exceptional talent while helping individuals find their ideal career paths. We envision a future where recruitment is not just about filling positions but fostering lasting relationships.</p>
    </div>
    <div class="row px-5">
        <div class="col-md-6 col-lg-5 border shadow p-3 mb-5 bg-white rounded">
            <div class="content-box left small">
                <div class="icon-shape-disable">
                    <img src="{{ asset('assets/img/vision-icon.png') }}">
                </div>
                <h5 class="disableh5">Our Vision</h5>
                <p class="mt-2">"To be the leading recruitment and consulting firm known for excellence, innovation, and integrity."</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-5 border shadow p-3 mb-5 bg-white rounded ml-5">
            <div class="content-box left small no-margin">
                <div class="icon-shape-disable">
                    <img src="{{ asset('assets/img/mission-icon.png') }}">
                </div>
                    <h5 class="disableh5">Our Mission</h5>
                <p class="mt-2">"To empower businesses with strategic recruitment solutions that drive success and foster long-term growth."</p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12 col-lg-6">   
            <ul>
                <li><span class="whatwedotitile">Excellence : </span>We strive for the highest standards in everything we do.</li>
                <li><span class="whatwedotitile">Integrity : </span>We uphold transparency and honesty in all our dealings.</li>
                <li><span class="whatwedotitile">Innovation : </span>We constantly seek new ways to solve challenges and create value.</li>
                <li><span class="whatwedotitile">Collaboration : </span>We believe in building strong, lasting partnerships with our clients.</li>
            </ul>
        </div>
    </div>
</section>



<section class="section pt-2 container" id="ourservices" >
    <div class="heading-title text-center">
        <h2>The Prakhar Consulting Group Story</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>Founded in 2024, Prakhar Consulting Group started with a single goal in mind – to revolutionize the recruitment industry. Over the years, we've grown into a trusted partner for numerous organizations, thanks to our commitment to excellence and innovation.</p>
        </div>
    </div>
</section>


{{-- <section class="pt-5" id="casestudy">
    <div class="container">
        <div class="row border bg-dark">
            <div class="col-md-12 border bg-success">
                <div class="heading-title text-center">
                    <h2><strong class="text-color">Why Choose Prakhar Consulting Group?</strong></h2>
                    
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
</section> --}}

<section class="pt-5" id="casestudy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title text-center">
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
                        <p>With over ten years in the industry, PCG has established itself as a leader in IT consulting and recruitment services.</p>
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
                        <p>Access to a database of over 300,000 resumes and a LinkedIn network exceeding 100,000 professionals.</p>
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
                        <p>With over ten years in the industry, PCG has established itself as a leader in IT consulting and recruitment services.</p>
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
                        <p>Access to a database of over 300,000 resumes and a LinkedIn network exceeding 100,000 professionals.</p>
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
                        <p>With over ten years in the industry, PCG has established itself as a leader in IT consulting and recruitment services.</p>
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
                        <p>Access to a database of over 300,000 resumes and a LinkedIn network exceeding 100,000 professionals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section pt-2 container" id="ourservices">
    <div class="heading-title text-center">
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
</section>


<section class="section pt-2 container" id="ourservices">
    <div class="heading-title text-center">
        <h2 >Awards & Recognitions</h2>
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
</section>


<section class="section pt-2 container" id="ourservices">
    <div class="heading-title text-center">
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
</section>
@endsection
