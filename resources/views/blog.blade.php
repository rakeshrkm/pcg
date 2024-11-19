@extends('layouts.master', ['title' => 'Services Prakhar Software Consulting Pvt Ltd'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <p class="page-title text-white banner_text">Blogs</p>
            </div>
        </div>
    </div>
</div>
<!-- Main Wrapper-->
<main class="wrapper">
    <section style="background: url(../404.html), ; background-position: right; background-repeat: no-repeat;" id="recruitment-Services">
        <div class="container">
            <div class="row align-items-center mt-4">
                <div class="col-md-4">
                    <div class="blog_div shadow p-3 mb-5 bg-body rounded blog_heigh">
                        <img src="{{ asset('assets/img/corporate-training-service.webp') }}" alt="Training and Development" title="Training and Development" />
                        <p class="mt-2 text-justify"><span class="whatwedotitile">10 HR Challenges in Scaling Management Consulting Companies in India</span></p>
                        <p class="text-justify">Scaling a business in India presents a unique set of challenges, particularly in ...</p>
                        <div class="text-center">
                            <a href="{{ route('hrChallenges') }}" target="_blank" class="text-center">
                                <button type="button" class="btn btn-dark">
                                    <span class="text-white">Read More</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog_div shadow p-3 mb-5 bg-body rounded blog_heigh">
                        <img src="{{ asset('assets/img/corporate-training-service.webp') }}" alt="Training and Development" title="Training and Development" />
                        <p class="mt-2 text-justify"><span class="whatwedotitile">Permanent Staffing Companies: Key to Building a Stable Workforce</span></p>
                        <p class="text-justify">A company’s workforce is its heartbeat, driving every milestone and achievement forward ...</p>
                        <div class="text-center">
                            <a href="https://naukriyan.com/job_details/1011" target="_blank" class="text-center">
                                <button type="button" class="btn btn-dark">
                                    <span class="text-white">Read More</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
