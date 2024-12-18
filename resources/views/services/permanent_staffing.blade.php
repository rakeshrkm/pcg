@extends('layouts.master',
[
'title' => 'Top Permanent Staffing Company in India | Permanent Hiring Solutions in India',
'keyword' => 'Top Permanent Staffing Company in India, Permanent Hiring Solutions India, Permanent Staffing Services, Recruitment Solutions, Staffing Agency India, HR Consulting, Talent Acquisition, Employment Services',
'description' => ' Prakhar Consulting Group is the Top Permanent Staffing Company in India, specializing in tailored Permanent Hiring Solutions in India'
])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h4 class="page-title text-white banner_text">Permanent Staffing </h4>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Main Wrapper-->
<main class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{ Breadcrumbs::render('Permanent_Staffing') }}
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-left ">
                    <div class="text-center heading-title">
                        <h1 class="text-center">Renowned as the Top Permanent Staffing Company in India</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <p class="text-center">
                        PCG is the <span class="whatwedotitile">Top Permanent Staffing Company in India</span>, providing tailored recruitment solutions that align skilled professionals with your organisational vision.
                    </p>
                    <p class="text-center">Focusing on building cohesive teams, we ensure long-term success for businesses across industries. </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">

        <div class="container">
            <div class="text-center heading-title">
                <h2>Why Are We the Best Permanent Recruitment Agency in India?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">We prioritize understanding your organisation’s unique needs to deliver exceptional hiring solutions. Known for being the<span class="whatwedotitile"> Best Permanent Recruitment Agency in India</span>, our recruitment strategies empower businesses to achieve sustainable growth.</p>
                </div>
            </div>


            <div class="row mt-4">
                <div class="col-md-12">
                    <ul class="">
                        <li>
                            {{-- <img src="{{ asset('assets/img/PCGImages/permanent-staffing/Strategic-Talent-Alignment.png') }}" title="Strategic Talent Alignment" alt="Strategic Talent Alignment" width="50"> --}}
                            <span class="whatwedotitile">Strategic Talent Alignment:</span> We match candidates not only based on skills but also on culture, values, and goals, ensuring a seamless fit.
                        </li>
                        <li class="mt-3">
                            {{-- <img src="{{ asset('assets/img/PCGImages/permanent-staffing/Comprehensive-Recruitment-Services.png') }}" title="Comprehensive Recruitment Services" alt="Comprehensive Recruitment Services" width="50"> --}}
                            <span class="whatwedotitile">Comprehensive Recruitment Services:</span> Our process includes:
                            <ul>
                                <li class="mt-3">
                                    {{-- <img src="{{ asset('assets/img/PCGImages/permanent-staffing/Candidate-Sourcing.png') }}" title="Candidate Sourcing" alt="Candidate Sourcing" width="50"> --}}
                                    <span class="whatwedotitile">Candidate Sourcing:</span> Leveraging our extensive network to find top-tier talent.</li>
                                <li class="mt-3">
                                    {{-- <img src="{{ asset('assets/img/PCGImages/permanent-staffing/In-Depth-Screening.png') }}" title="In-Depth Screening" alt="In-Depth Screening" width="50"> --}}
                                    <span class="whatwedotitile">In-Depth Screening:</span> Rigorous assessments to ensure quality.</li>
                                <li class="mt-3">
                                    {{-- <img src="{{ asset('assets/img/PCGImages/permanent-staffing/Expert-Insights.png') }}" title="Expert Insights" alt="Expert Insights" width="50"> --}}
                                    <span class="whatwedotitile">Expert Insights:</span> Market intelligence to guide successful placements.</li>
                            </ul>
                        </li>
                        <li class="mt-3">
                            {{-- <img src="{{ asset('assets/img/PCGImages/permanent-staffing/Industry-Expertise.png') }}" title="Industry Expertise" alt="Industry Expertise" width="50"> --}}
                            <span class="whatwedotitile">Industry Expertise:</span> From startups to large enterprises, we deliver tailored solutions to meet diverse hiring needs.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="text-center heading-title">
                <h2>Why Choose PCG for Permanent Hiring Solutions in India?</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">At PCG, we are adept at tailoring Permanent Hiring Solutions in India that help businesses build stable, skilled workforces that are aligned with their long-term goals.</p>
                    <p class="text-justify">Our expertise spans multiple industries, ensuring seamless recruitment processes that allow companies to focus on growth while we handle the complexities of hiring. If you also need <a href="{{ route('temporaryStaffing') }}" class="text-primary font-weight-bold">Temporary Staffing</a> services, PCG is the right choice to support you.</p>
                </div>
                <div class="col-md-12 mt-4">
                    <p class="py-2">
                        <span class="subheading">Our Methodology</span>
                    </p>

                </div>
                <div class="col-md-12 text-left">

                    
                    <div class="accordion" id="accordionExample">

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="text-left mt-2"><span class="whatwedotitile text-left">Client-Centric Approach</span></p>
                                        <hr>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body center">
                                    We deeply understand your organisational culture and values to ensure candidates seamlessly integrate and contribute effectively.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                        <p class="text-left mt-2"><span class="whatwedotitile text-left">Advanced Recruitment Techniques</span></p>
                                        <hr>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body center">
                                    Combining industry insights with cutting-edge assessment methods to identify top talent.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" style="background-image: linear-gradient(to right, rgb(9, 129, 120), rgb(31, 58, 87));">

        <div class="container">
            <div class="text-center typewriter heading-title1">
                <h3 class="text-white">Why Partner with Us?</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="me-list">
                        <li class="text-white "><span class="yellow">Industry Expertise:</span> Proficiency in sectors like IT, manufacturing, finance, and healthcare.</li>
                        <li class="text-white mt-3"><span class="yellow">Strategic Insights:</span> Access market trends and hiring strategies to stay competitive.</li>
                        <li class="text-white mt-3"><span class="yellow">Reliable Solutions:</span> Ensure retention and long-term success through bespoke hiring strategies.</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <p class="text-justify text-white">Choosing PCG means partnering with one of the <span class="yellow">Top Permanent Staffing Companies in India</span>. Let us help you build a high-performing team that drives growth and supports your strategic objectives.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="text-center heading-title">
                <h2>Permanent Staffing Services in India: Your Key to Lasting Success</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">We deliver <span class="whatwedotitile">Permanent Staffing Services in India</span> that empower businesses with skilled, reliable talent for long-term growth. Recognized as one of the most trusted <span class="whatwedotitile">Permanent Hiring Agencies in India</span>, we streamline the recruitment process to connect companies with professionals who are aligned with their goals and culture. You can also get in touch with us to seek services like <a href="{{ route('executiveSearch') }}" class="text-primary font-weight-bold">Executive Search</a>.</p>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-6">
                    <div class="mt-3">
                        <p class="py-2">
                            <span class="subheading">Why Choose Our Permanent Staffing Services?</span>
                        </p>
                        <ul>
                            <li class="text-justify"><span class="whatwedotitile">Tailored Recruitment Solutions:</span> Customised to meet your unique business needs.</li>
                            <li class="text-justify mt-3"><span class="whatwedotitile">End-to-End Support:</span> From candidate sourcing and screening to onboarding.</li>
                            <li class="text-justify mt-3"><span class="whatwedotitile">Cultural Fit:</span> Focused on identifying candidates who seamlessly integrate into your organisation.</li>
                            <li class="text-justify mt-3"><span class="whatwedotitile">Proven Expertise:</span> Leveraging industry experience and a vast professional network to ensure higher retention rates and a stable workforce.</li>

                        </ul>
                    </div>

                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/img/PCGImages/permanent-staffing/our-Permanent-Staffing-Services.jpg') }}" title="Tailored Recruitment Solutions" alt="Tailored Recruitment Solutions" height="400" width="450" class="img-zoom">
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/img/PCGImages/permanent-staffing/PCG-can-also-help-your-business.jpg') }}" title="Market Insights" alt="Market Insights" height="400" width="450" class="img-zoom">
                </div>
                <div class="col-md-6 mt-2">
                    <div class="col-md-12">
                        <p class="py-2">
                            <span class="subheading">PCG can also help your business in:</span>
                        </p>
                    </div>
                    <ul>
                        <li class="text-justify"><span class="whatwedotitile">Market Insights:</span> Stay competitive with data-driven hiring strategies.</li>
                        <li class="text-justify mt-3"><span class="whatwedotitile">Salary Benchmarking:</span> Attract top talent with industry-standard compensation.</li>
                        <li class="text-justify mt-3"><span class="whatwedotitile">Candidate Evaluations:</span> Thorough assessments to secure quality hires.</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>
</main>
@endsection

@section('scripts')
<script>
    $('.collapse').collapse();

</script>
@endsection
