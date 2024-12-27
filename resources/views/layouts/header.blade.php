{{-- @if(\Request::route()->getName() == 'index') --}}
<header id="header">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12  mt-2">
                    <ul class="header-info pull-left">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="tel:8826665842">+918826665842</a></li>
                        <li>
                            <a href="mailto:connect@pcginternational.in"><i class="fa fa-envelope" aria-hidden="true"></i>connect@pcginternational.in</a>
                        </li>
                    </ul>
                    <div class="pull-right">
                        <ul class="header-social social-icon">
                            <li>
                                <a class="facebook-color" target="_blank" href="https://www.facebook.com/prakharconsultinggroup"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="linkedin-color" target="_blank" href="https://www.linkedin.com/company/prakhar-consulting-group-international/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a class="twitter-color" target="_blank" href="https://x.com/prakharconsult">
                                    &#x1D54F;
                                </a>
                            </li>
                            <li>
                                <a class="instagram-color" target="_blank" href="https://www.instagram.com/prakharconsultinggroup_hr/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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
                    <div class="header-logo ml-3">
                        <a href="{{route('index')}}">
                            <img src="{{ asset('assets/img/PCGhighlogo.png') }}" alt="Logo" title="Logo" loading="lazy"  />
                            <img class="logo-responsive" src="{{ asset('assets/img/PCGhighlogo.png') }}" alt="logo" title="Logo" loading="lazy"  />
                            <img class="logo-sticky" src="{{ asset('assets/img/PCGhighlogo.png') }}" alt="logo" title="Logo" loading="lazy" />
                        </a>
                    </div>
                    <nav class="menu-container">
                        <ul id="menu" class="sm me-menu">
                            <li>
                                <a href="{{ route('index') }}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a>Services <i class="fa fa-angle-down dropdown_services"></i></a>
                                <ul>
                                    <div class="contaier desktopview">
                                        <div class="row">

                                            <div class="col-md-8 vl">
                                                <p class="py-2  text-center univ_title">Organization </p>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div id="permanent">
                                                            <a href="{{route('permanentStaffing')}}">&nbsp; <span class="permanent_menu">Permanent Staffing</span></a>
                                                            <a href="{{route('executiveSearch')}}" class="text-indent"><i class="fa fa-angle-right"></i>&nbsp; Executive Search</a>
                                                            <a href="{{route('leadershipHiring')}}" class="text-indent"><i class="fa fa-angle-right"></i>&nbsp; Leadership Hiring</a>
                                                            <a href="{{route('headHunting')}}" class="text-indent"><i class="fa fa-angle-right"></i>&nbsp; Head Hunting</a>
                                                            <a href="{{route('ItNonIthiring')}}" class="text-indent"><i class="fa fa-angle-right"></i>&nbsp; IT/NOT-IT Hiring</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div id="temporary">
                                                            <a href="{{route('temporaryStaffing')}}">&nbsp; <span class="permanent_menu">Temporary Staffing</span></a>
                                                                
                                                            <a href="{{route('contractStaffing')}}" class="text-indent"><i class="fa fa-angle-right"></i>&nbsp; Contract Staffing</a>
                                                            <a href="{{route('contractToHire')}}"  class="text-indent"><i class="fa fa-angle-right"></i>&nbsp; Contract To Hire</a>
                                                            <a href="{{route('payrollProcessing')}}" class="text-indent"><i class="fa fa-angle-right"></i>&nbsp; Payroll Processing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <p class="py-2  text-center univ_title">Universities</p>
                                                <div id="universities">
                                                    <a href="{{ route('universities') }}" class="text-indent"><i class="fa fa-angle-right"></i> &nbsp; Universities</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <li class="mobileview1" style="display:none">
                                            <a>Organisation</span></a>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('permanentStaffing') }}">Permanent-Staffing</a>
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('executiveSearch')}}">Executive Search</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('leadershipHiring') }}">Leadership Hiring</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('headHunting') }}">Head Hunting</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('ItNonIthiring') }}">IT/NON-IT Hiring</a>
                                                        </li>
                                                    </ul>
                                                <li>
                                                    <a href="{{ route('temporaryStaffing') }}">Temporary Staffing</a>
                                                    <ul>
                                                        <li>
                                                            <a href="{{ route('contractStaffing') }}">Contract Staffing</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('contractToHire') }}">Contract-to-Hire (C2H) Hiring</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('contractToHire') }}">Payroll Processing</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                         <li class="mobileview1" style="display: none;">
                                            <a href="{{ route('universities') }}">Universities</a>
                                        </li> 
                                    </ul>
                             
                             
                            </li>
                            {{-- <li>
                                <a href="{{ route('industriesWeServe') }}">Industries we serve</a>
                            </li> --}}
                            <li>
                                <a href="{{ route('ourApproach') }}">Recruitment Approach</i></a>
                            </li>
                            <li>
                                <a href="{{ route('blogs') }}">Blog</a>
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
{{-- @else --}}
{{-- <header id="header" class="header-version2" > --}}
    <!-- header-top -->
    {{-- <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="header-info pull-left">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> Phone: <a href="tel:8826665842">+918826665842</a></li>
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
                                <a class="twitter-color" target="_blank" href="https://x.com/prakharconsult">
                                    &#x1D54F;
                                </a>
                            </li>
                            <li>
                                <a class="instagram-color" target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- header-top end here -->

    {{-- <div class="header-main" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-logo">
                        <a href="{{route('index')}}">
                            <img src="{{ asset('assets/img/PCGhighlogo.png') }}" alt="logo" title="Logo" />
                            <img class="logo-responsive" src="{{ asset('assets/img/PCGhighlogo.png') }}" title="Logo" alt="logo" />
                            <img class="logo-sticky" src="{{ asset('assets/img/PCGhighlogo.png') }}" alt="logo" title="Logo" />
                        </a>
                    </div>
                    <nav class="menu-container">
                        <ul id="menu" class="sm me-menu">
                            <li>

                                <a href="{{ route('index') }}"><i class="fa fa-home"></i> Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About Us</a>
                            </li>
                            <li>
                                <a>Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul>
                                    <li>
                                        <a>Organisation</a>
                                        <ul>
                                            <li>
                                                <a href="{{ route('permanentStaffing') }}">Permanent-Staffing</a>
                                                <ul>
                                                    <li>
                                                        <a href="{{route('executiveSearch')}}">Executive Search</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('leadershipHiring') }}">Leadership Hiring</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('headHunting') }}">Head Hunting</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('ItNonIthiring') }}">IT/NON-IT Hiring</a>
                                                    </li>

                                                </ul>

                                            <li>
                                                <a href="{{ route('temporaryStaffing') }}">Temporary Staffing</a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('contractStaffing') }}">Contract Staffing</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('contractToHire') }}">Contract-to-Hire (C2H) Hiring</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('payrollProcessing') }}">Payroll Processing</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{route('universities')}}">Universities</a>
                                    </li>

                                </ul>
                            </li> --}}
                            {{-- <li>
                                <a href="{{ route('industriesWeServe') }}">Industries we serve </a>
                            </li> --}}

                            {{-- <li>
                                <a href="{{ route('ourApproach') }}">Recruitment Approach</i></a>

                            </li>
                            <li>
                                <a href="{{ route('blogs') }}">Blog</a>                            
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
</header> --}}
{{-- 
@endif --}}
