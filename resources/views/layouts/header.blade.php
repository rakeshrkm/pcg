@if(\Request::route()->getName() == 'index')
<header id="header">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 head_details">
                    <ul class="header-info pull-left">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="tel:911140104369">+91 11 4010 4369</a></li>
                        <li>
                            <a href="mailto:info@pcginternational.in"><i class="fa fa-envelope" aria-hidden="true"></i> info@pcginternational.in</a>
                        </li>
                    </ul>
                    <div class="pull-right">
                        <ul class="header-social social-icon">
                            <li>
                                <a class="facebook-color" target="_blank" href="https://www.facebook.com/prakharconsultinggroup"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="linkedin-color" target="_blank" href="https://www.linkedin.com/company/prakhar-consulting-group"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="twitter-color" target="_blank" href="https://x.com/prakharconsult">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(8.53333,8.53333)">
                                                <path d="M26.37,26l-8.795,-12.822l0.015,0.012l7.93,-9.19h-2.65l-6.46,7.48l-5.13,-7.48h-6.95l8.211,11.971l-0.001,-0.001l-8.66,10.03h2.65l7.182,-8.322l5.708,8.322zM10.23,6l12.34,18h-2.1l-12.35,-18z"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="instagram-color" target="_blank" href="https://www.instagram.com/prakharconsultinggroup_hr/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <!--<li>
                    <a href="contact-us" class="btn btn-default" style="width: auto;
                    height: auto;
                    padding-top: 0;
                    padding-bottom: 0;
                    padding-left: 15px;
                    padding-right: 15px;
                    margin-top: 0;
                    ">Enquire Now</a>
                    
                    </li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top end here -->
    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 head_details">
                    <div class="header-logo">
                        <a href="{{route('index')}}">
                            {{-- <img src="{{ asset('assets/img/pcg-web-logo.png') }}" alt="logo" loading="lazy" width="250" height="42" /> --}}
                            <img src="{{ asset('assets/img/pcg-web-logo.png') }}" alt="logo" loading="lazy" width="300" height="200" />
                            <img class="logo-responsive" src="{{ asset('assets/img/pcg-logo.jpg') }}" alt="logo" loading="lazy" width="300" height="200" />
                            <img class="logo-sticky" src="{{ asset('assets/img/pcg-logo.jpg') }}" alt="logo" loading="lazy" width="300" height="200" />
                        </a>
                    </div>
                    <nav class="menu-container">
                        <ul id="menu" class="sm me-menu" >
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('services')}}">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul>
                                    <li><a href="{{route('recruitmentServices')}}">Recruitment Services</a></li>
                                    <li>
                                        <a href="{{route('trainingAndDevelopment')}}">Training and Development</a>
                                    </li>
                                    <li>
                                        <a href="{{route('consultingServices')}}"> Consulting Services</a>
                                    </li>
                                    <li>
                                        <a href="{{route('otherServices')}}"> Other Services</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('industriesWeServe') }}">Industries we serve</a>
                            </li>
                            <li>
                                <a href="{{ route('ourApproach') }}">Our Approach</i></a>
                            </li>
                            <li>
                                <a href="#ourservices">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('career') }}">Career</a>
                            </li>
                            <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
@else
<header id="header" class="header-version2">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="header-info pull-left">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="tel:911140104369">+91 1140104369</a></li>
                        <li>
                            <a href="mailto:connect@pcginternational.in"><i class="fa fa-envelope" aria-hidden="true"></i>connect@pcginternational.in</a>
                        </li>

                    </ul>
                    <div class="pull-right">
                        <ul class="header-social social-icon">
                            <li>
                                <a class="facebook-color" target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="linkedin-color" target="_blank" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="twitter-color" target="_blank" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="18" height="18" viewBox="0,0,256,256">
                                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <g transform="scale(8.53333,8.53333)">
                                                <path d="M26.37,26l-8.795,-12.822l0.015,0.012l7.93,-9.19h-2.65l-6.46,7.48l-5.13,-7.48h-6.95l8.211,11.971l-0.001,-0.001l-8.66,10.03h2.65l7.182,-8.322l5.708,8.322zM10.23,6l12.34,18h-2.1l-12.35,-18z"></path>
                                            </g>
                                        </g>
                                    </svg></a>
                            </li>
                            <li>
                                <a class="instagram-color" target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top end here -->

    <div class="header-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/pcg-web-logo.png') }}" alt="logo" />
                            <img class="logo-responsive" src="{{ asset('assets/img/pcg-web-logo.png') }}" alt="logo" />
                            <img class="logo-sticky" src="{{ asset('assets/img/pcg-web-logo.png') }}" alt="logo" />
                        </a>
                    </div>
                    <nav class="menu-container" id="manuId">
                        <ul id="menu" class="sm me-menu">
                            <li>
                            
                                <a href="{{ route('index') }}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{route('services')}}">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul>
                                    <li><a href="{{route('recruitmentServices')}}">Recruitment Services</a></li>
                                    <li>
                                        <a href="{{route('trainingAndDevelopment')}}">Training and Development</a>
                                    </li>
                                    <li>
                                        <a href="{{route('consultingServices')}}"> Consulting Services</a>
                                    </li>
                                    <li>
                                        <a href="{{route('otherServices')}}"> Other Services</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('industriesWeServe') }}">Industries we serve </a>
                            </li>
                          
                            <li>
                                <a href="{{ route('ourApproach') }}">Our Approach</i></a>
                               
                            </li>
                            <li>
                                <a href="#ourservices">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('career') }}">Career</a>
                            </li>
                            <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                        </ul>
                        {{-- <div class="additional-menu">
                            <a href="#" class="btn btn-default">Enquire Now</a>
                            <a href="#" class="btn btn-default">Open Jobs</a>
                            <!-- <a class="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                <div class="search-panel">
                    <form action="https://www.mazenet.com/search" class="form-search form-search-rounded">
                        <div class="input-group-placeholder addon-right">
                            <input name="search" type="text" class="form-control" placeholder="Search here.." />
                        </div>
                    </form>
                </div>-->
                        </div> --}}
                    </nav>

                </div>
            </div>
        </div>
    </div>
</header>
@endif
