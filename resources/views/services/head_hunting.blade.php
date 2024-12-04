@extends('layouts.master',
[
    'title' => 'Head Hunting Firms & Recruitment Experts | Prakhar Consulting Group',
    'keyword' => 'Head Hunting Firms, Head Hunting in Recruitment, Recruitment Head Hunters, Executive Search, Talent Acquisition Specialists',
    'description' => 'Prakhar Consulting Group: Leading Head Hunting Firm specializing in Head Hunting in Recruitment to connect top talent with companies seeking excellence'
])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <p class="page-title text-white banner_text">Head Hunting</p>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Main Wrapper-->
<main class="wrapper">
    <section>
        <div class="container">
            {{ Breadcrumbs::render('headHunting') }}
            <div class="row align-items-center">
                <div class="col-md-12 text-center heading-title">
                    <h1 class="text-center">Top Head Hunting Firm: Connecting You with Elite Talent</h1>
                </div>
                <div class="col-md-12"> 
                    <p class="text-justify">As a leading <span class="whatwedotitile">Head Hunting Firm in India</span>, PCG specializes in identifying and recruiting top-tier professionals for high-impact roles. </p>
                    <p class="text-justify">Our proactive approach targets skilled individuals who bring exceptional expertise and leadership qualities, even if they are not actively seeking new opportunities.</p>
                    <p class="text-justify">This ensures businesses gain access to elite candidates who can drive growth, innovation, and long-term success.</p>
                    <p class="text-justify">When businesses search for a <span class="whatwedotitile">“Reliable Headhunter Agency Near Me,”</span> we stand out as the trusted partner delivering precision, transparency, and results. Even we are the best choice for <a href="{{ route('leadershipHiring') }}" class="text-primary font-weight-bold">Leadership Hiring</a>. </p>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="text-center heading-title">
            <h3>Our Headhunting Process for Businesses</h3>
        </div>

        <div class="row">
            <div class="col-md-4">
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
                    <p class="text-center mt-2"><span class="whatwedotitile">Extensive Talent Network</span></p>
                    <p class="text-justify">Leveraging our vast professional network and advanced tools to locate high-calibre candidates.</p>
                </div>

            </div>
            <div class="col-md-4">
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
                    <p class="text-center mt-2"><span class="whatwedotitile">Targeted Search</span></p>
                    <p class="text-justify">Identifying passive talent with the expertise and leadership qualities required for high-stakes roles.</p>
                </div>

            </div>
            <div class="col-md-4">
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
                    <p class="text-center mt-2"><span class="whatwedotitile">Rigorous Evaluation</span></p>
                    <p class="text-justify">Conducting thorough assessments to ensure candidates meet technical, cultural, and strategic requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="text-center heading-title">
            <h2>Why Choose Our Headhunting Services? </h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p-4 shadow">
                    <p class="text-justify">At <span class="whatwedotitile">PCG</span>, our <span class="whatwedotitile">Headhunting Services</span> go beyond filling roles. We prioritize understanding your strategic goals, company culture, and specific requirements to ensure we connect you with candidates who are technically skilled and aligned with your vision and values.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="text-center heading-title">
            <h2>Head Hunting in Recruitment: Building Leadership Excellence</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p-4 shadow">
                    <p class="text-justify"><span class="whatwedotitile">Head Hunting in Recruitment</span> is a strategic and specialized process designed to identify and secure top-tier talent for critical executive roles. This method focuses on sourcing candidates with unique expertise and leadership qualities, ensuring businesses are equipped with transformational leaders capable of driving growth and operational success.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="container">
        <div class="text-center heading-title">
            <h2>Why Head Hunting Differs from General Recruitment?</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify">Unlike general recruitment, headhunting is a targeted and proactive approach. Skilled recruiters identify and engage highly qualified professionals, including those not actively seeking new opportunities, but who are perfectly suited for leadership positions.</p>
            </div>
        </div>
        <div class="row mt-2">

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
                        <p><span class="whatwedotitile">Drive Innovation and Strategic Change</span></p>
                        <p class="text-justify">Headhunted executives bring fresh perspectives and strategic vision to transform organisations.</p>
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
                        <p><span class="whatwedotitile">Align with Company Values and Vision</span></p>
                        <p class="text-justify">Leadership hires align seamlessly with organisational culture and long-term goals.</p>
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
                        <p><span class="whatwedotitile">Deliver Measurable Business Growth</span></p>
                        <p class="text-justify">Executives sourced through headhunting strategies are key drivers of business performance and success.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <section class="container">
        <div class="text-center heading-title">
            <h3>PCG: Trusted Headhunting Experts in India</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="p-4">
                    <p>As one of the leading <span class="whatwedotitile">Headhunting Recruitment Companies</span>, PCG is committed to precision, quality, and confidentiality.</p>
                    <p>Our team of <span class="whatwedotitile">Top Executive Headhunters</span> collaborates closely with clients to understand their goals, culture, and specific leadership requirements. This ensures we find candidates who combine technical expertise with strategic insight and cultural alignment.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="text-center heading-title">
            <h2>Top Executive Headhunting Services for Strategic Talent Needs</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-justify"><span class="whatwedotitile">Executive Headhunting Services</span> provide organisations with a competitive edge by sourcing senior leaders with unique expertise, vision, and alignment with organisational goals. At PCG, we help businesses secure transformative leaders who drive growth, innovation, and change. We can also be your first priority if you choose us for <a href="{{route('contractStaffing')}}" class="text-primary font-weight-bold">Contract Staffing</a> service.</p>
                <p><span class="whatwedotitile">Why Choose Executive Headhunting?</span></p>
            </div>
            <div class="col-md-12">
                <div class="d-flex gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3 mt-3">
                        <p class="text-justify"><span class="whatwedotitile">Targeted Talent Acquisition:</span> Identifying and engaging top-tier professionals for high-impact roles.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3 mt-3">
                        <p class="text-justify"><span class="whatwedotitile">Strategic Leadership Focus:</span> Aligning leaders with your company’s mission and long-term vision.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex gap-8">
                    <div>
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                            <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div class="ml-3 mt-3">
                        <p class="text-justify"><span class="whatwedotitile">Comprehensive Evaluation:</span> Ensuring candidates meet technical, strategic, and cultural requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <div class="text-center heading-title">
                <h3>Why Partner with PCG?</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">As a leading <span class="whatwedotitile">Headhunter Job Agency</span>, we are committed to:</p>
                </div>
                <div class="col-md-6">
                    <div class="d-flex gap-8">
                        <div>
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                                <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-3 mt-3">
                            <p class="text-justify">Delivering visionary leaders who make meaningful impacts.</p>
                        </div>
                    </div>
                    <div class="d-flex gap-8">
                        <div>
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                                <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-3 mt-3">
                            <p class="text-justify">Exceeding expectations with tailored solutions.</p>
                        </div>
                    </div>

                    <div class="d-flex gap-8">
                        <div>
                            <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeInherit mui-1sos593" focusable="false" aria-hidden="true" viewBox="0 0 64 64" data-testid="Language.svgIcon" name="Language" width="64" height="64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.5 59.5C47.4117 59.5 59.5 47.4117 59.5 32.5C59.5 17.5883 47.4117 5.5 32.5 5.5C17.5883 5.5 5.5 17.5883 5.5 32.5C5.5 47.4117 17.5883 59.5 32.5 59.5Z" stroke="#4A65EE" stroke-width="3" stroke-miterlimit="10"></path>
                                <path d="M7.5 40.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M7.5 24.5H57.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M36.5 6.5C36.5 6.5 42.5 14.5 42.5 32.5C42.5 50.5 36.5 58.5 36.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M28.5 6.5C28.5 6.5 22.5 14.5 22.5 32.5C22.5 50.5 28.5 58.5 28.5 58.5" stroke="#4A65EE" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-3 mt-3">
                            <p class="text-justify">Supporting businesses in building strong leadership foundations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/PCGImages/triadadvantage.png') }}" title="business consulting" alt="business consulting">
                </div>
            </div>
        </div>
    </section>


</main>
@endsection
