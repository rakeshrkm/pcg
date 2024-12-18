@extends('layouts.master',
[
    'title' => 'Blog | Prakhar Consulting Group',
    'keyword' => 'Blog, Expert Insights, HR Consulting Services Blog',
    'description' => 'Get the expert insight about the HR Consulting Services, Stay updated with top HR strategies, trends, and solutions for businesses'
])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <p class="page-title text-white banner_text text-center">Blogs</p>
            </div>
        </div>
    </div>
</div>
<!-- Main Wrapper-->
<main class="wrapper">
    <section class="section" style="background-image: url({{ asset('assets/img/PCGImages/background.png') }});background-size:cover;">

        <div class="container">
            <div>
                <h1 class="text-left">Top Posts</h1>
            </div>
            <div class="row align-items-center mt-4 ">
                <div class="col-md-6">
                    <div class="blog_div">
                        <a href="{{ route('hrChallenges') }}">
                            <img src="{{ asset('assets/img/PCGImages/blog/10-HR-Challenges.jpg') }}" alt="Training and Development" title="Training and Development" />
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="blog_div">
                        <a href="{{ route('hrChallenges') }}">
                            <h2 class="">10 HR Challenges in Scaling Management Consulting Companies in India</h2>
                        </a>
                        <p><span class="whatwedotitile">Author:</span> <a href="https://www.linkedin.com/in/gauravbhatnagar08/" target="_blank" class="text-primary font-weight-bold">Gaurav Bhatnagar</a></p>

                        <p class="text-justify">"An organization’s workforce serves as its backbone, fueling every milestone and driving its success forward. In the highly competitive business landscape today ...</p>
                            <a href="{{ route('hrChallenges') }}"class="text-center">
                                <button type="button" class="btn btn-dark">
                                    <span class="text-white">Read More</span>
                                </button>
                            </a>
                    </div>
                </div>

                <div class="col-md-6 mt-4">
                    <div class="blog_div">
                        <a href="{{ route('permanentStaffingCompaniesBlog') }}">
                            <img src="{{ asset('assets/img/PCGImages/blog/Permanent-Staffing.jpg') }}" alt="Training and Development" title="Training and Development" />
                        </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="blog_div">
                        <a href="{{ route('permanentStaffingCompaniesBlog') }}">
                            <h2>Permanent Staffing Companies: Key to Building a Stable Workforce</h2>
                        </a>
                        <p><span class="whatwedotitile ">Author:</span> <a href="https://www.linkedin.com/in/mayank-puri-contentwriter/" target="_blank" class="text-primary font-weight-bold">Mayank Puri</a></p>

                        <p class="text-justify">A company’s workforce is its heartbeat, driving every milestone and achievement forward ...</p>
                            <a href="{{ route('permanentStaffingCompaniesBlog') }}" class="text-center">
                                <button type="button" class="btn btn-dark">
                                    <span class="text-white">Read More</span>
                                </button>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
