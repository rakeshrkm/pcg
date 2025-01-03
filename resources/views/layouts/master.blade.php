<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8" />
    <title>{{ isset($title) ? $title : 'Prakhar software consulting group'}}</title>
    <meta name="description" content="{{isset($description) ? $description : 'Prakhar software consulting group'}}" />
    <meta name="keywords" content="{{ isset($keyword) ? $keyword : 'Prakhar software consulting group'}}" />
    <meta http-equiv="Content-Type" con tent="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="{{Request::url()}}" />
    <meta name="language" content="english" />
    <meta name="Distribution" content="Global" />
    <meta name="Rating" content="general" />
    <meta name="search engines" content="AL" />
    <meta name="google-site-verification" content="vl624ubIqWTWlzizQTRyEoun56fbQt3WfGDzlilX8IU" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/foundstrap.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/iconcrafts.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- css plugin -->
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/smartmenu.min.css') }}" />

    <!-- theme stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/pcg-web-logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.css') }}" />
    <!--chatboat-->
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/chatBot.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/timeline.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/bot.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ asset('assets/css/style-career.css') }}" rel="stylesheet" type="text/css" />  --}}
    {{-- contact us --}}
    <link rel="stylesheet" href="{{ asset('assets/css/appointment/materialize.min.css') }}">
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>  

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://www.mazenet.com/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/appointment/style.css') }}"> --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>



<script async src="https://www.googletagmanager.com/gtag/js?id=G-G2WKTVBEYZ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-G2WKTVBEYZ');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MXB4FS53');</script>
<!-- End Google Tag Manager -->

<script>
    {
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "PCG Global Consulting Pvt. Ltd.",
  "url": "https://pcginternational.in/",
  "logo": "https://pcginternational.in/index.php",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "B-1/44, LGF, Malviya Nagar, Near Tikona Park",
    "addressLocality": "New Delhi",
    "addressRegion": "Delhi",
    "postalCode": "110017",
    "addressCountry": "India"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 28.573730,
    "longitude": 77.239070
  },
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "+91 88266 60308",
      "contactType": "customer service"
    },
    {
      "@type": "ContactPoint",
      "telephone": "+91 88266 65842",
      "contactType": "customer service"
    }
  ],
  "email": "connect@pcginternational.in",
  "sameAs": [
    "https://www.facebook.com/prakharconsultinggroup",
    "https://www.instagram.com/prakharconsultinggroup_hr/",
    "https://www.linkedin.com/company/prakhar-consulting-group-international/",
    "https://x.com/prakharconsult"
  ],
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      "opens": "09:30",
      "closes": "18:30"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Sunday",
      "opens": "00:00",
      "closes": "00:00"
    }
  ],
  "description": "PCG Global Consulting Pvt. Ltd. is a leading Recruitment Agency, Staffing Firm, and HR Consultancy specializing in Permanent Staffing, Temporary Staffing, and University Hiring.",
  "serviceOffered": [
    {
      "@type": "Service",
      "name": "Permanent Staffing"
    },
    {
      "@type": "Service",
      "name": "Temporary Staffing"
    },
    {
      "@type": "Service",
      "name": "University Hiring"
    }
  ]
}
</script>


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MXB4FS53"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- Chat bot UI start -->
    <div class="chat-screen">
        <div class="chat-header">
            <div class="chat-header-title">
                Let’s chat? - We're online
            </div>
        </div>
        <div class="chat-mail">
            <div class="chat-body row">
                <div class="chat-start chat-time"></div>
                <div class="chat-bubble you">
                    <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                    Greetings from Mazenet! Please share a few details about yourself.</div>

                <!-- welcome name  ---->

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-12 pl-0 username_div mt-2">
                        <div class="form-group">
                            <input type="text" id="user_name" class="form-control" name="user_name" placeholder="Enter Your Name" required="" autocomplete="off" title="Name">
                        </div>
                    </div>
                    <div class="col-md-12 pl-0 email_div d-none">
                        <div class="form-group">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required="" autocomplete="off" title="Email Address">
                            <span id="mail_error" class="text-danger botque" style="display: none;"></span>
                        </div>
                    </div>
                    <div class="col-md-12 pl-0 ph_no_div d-none">
                        <div class="form-group">
                            <input type="text" id="phone" onpaste="return false;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" maxlength="10" class="form-control" name="phone" placeholder="Mobile Number" required="" autocomplete="off" title="Enter your phone no">
                            <span id="phone_error" class="text-danger botque" style="display: none;"></span>
                        </div>
                    </div>
                </div>
                <span class="chat-bubble you" id="typing-effect-top" style="display: none;">
                    <span style="margin-right: 5px;">
                        <img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28">
                    </span>
                    <img src="{{ asset('assets/img/Ellipsis-3.4s-134px.gif') }}" style="width:30px;">
                </span>
                <div class="send-button d-none">
                    <div class="col-md-12 d-flex">
                        <button id="send-button-icon" class="btn btn-primary btn-rounded btn-block ">
                            <i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;color:white;"></i>
                            Send
                        </button>
                    </div>
                </div>
                <!-- welcome name  ---->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="">

                <div class="questions-div  sub-question0" style="display:none;">
                    <div class="chat-bubble you question1 ">
                        <span style="margin-right: 5px;">
                            <img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28">
                        </span>
                        What can we help you with? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="1" data-subquestion-no="0" data-base="1" data-from="Corporate Training">Corporate Training</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="1" data-subquestion-no="0" data-base="1" data-from="Train & Hire">Train & Hire</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="1" data-subquestion-no="0" data-base="1" data-from="Staffing">Staffing</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="1" data-subquestion-no="0" data-base="1" data-from="Mazenet LMS">Mazenet LMS</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="1" data-subquestion-no="0" data-base="1" data-from="Lab as a Service
">Lab as a Service</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" mb-5">
                    <span class="chat-bubble me question-reply1 user_reply  reply-sub-question0" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Corporate Training">

                <div class="questions-div Corporate Training sub-question1" style="display:none;">
                    <div class="chat-bubble you question2 CorporateTraining">
                        {{-- <span style="margin-right: 5px;">
                            <img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28">
                        </span> --}}
                        What type of training are you looking for? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="2" data-subquestion-no="1" data-base="" data-from="Corporate Training">Induction</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="2" data-subquestion-no="1" data-base="" data-from="Corporate Training">Lateral</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="2" data-subquestion-no="1" data-base="" data-from="Corporate Training">Niche</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="2" data-subquestion-no="1" data-base="" data-from="Corporate Training">Super Niche</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="CorporateTraining mb-5">
                    <span class="chat-bubble me question-reply2 user_reply Corporate Training reply-sub-question1" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Train & Hire">

                <div class="questions-div Train & Hire sub-question1" style="display:none;">
                    <div class="chat-bubble you question7 Train">
                        <span style="margin-right: 5px;">
                            <img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        What type of resources are you looking for? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="7" data-subquestion-no="1" data-base="" data-from="Train & Hire">Lateral/Experienced</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="7" data-subquestion-no="1" data-base="" data-from="Train & Hire">Induction/Fresher</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Train mb-5">
                    <span class="chat-bubble me question-reply7 user_reply Train & Hire reply-sub-question1" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Staffing">

                <div class="questions-div Staffing sub-question1" style="display:none;">
                    <div class="chat-bubble you question11 Staffing">
                        <span style="margin-right: 5px;">
                            <img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28">
                        </span>
                        What is the type of Staffing service you are looking for? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="11" data-subquestion-no="1" data-base="" data-from="Staffing">Permanent Staffing</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="11" data-subquestion-no="1" data-base="" data-from="Staffing">Temporary staffing</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="11" data-subquestion-no="1" data-base="" data-from="Staffing">Hire, Train & Deploy</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Staffing mb-5">
                    <span class="chat-bubble me question-reply11 user_reply Staffing reply-sub-question1" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Mazenet LMS">

                <div class="questions-div Mazenet LMS sub-question1" style="display:none;">
                    <div class="chat-bubble you question14 MazenetLMS">
                        <span style="margin-right: 5px;">
                            <img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28">
                        </span>
                        What do you wish to explore? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="14" data-subquestion-no="1" data-base="" data-from="Mazenet LMS">Features</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="14" data-subquestion-no="1" data-base="" data-from="Mazenet LMS">Pricing</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="14" data-subquestion-no="1" data-base="" data-from="Mazenet LMS">Request a demo</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="MazenetLMS mb-5">
                    <span class="chat-bubble me question-reply14 user_reply Mazenet LMS reply-sub-question1" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <div class="lms_description d-none">
                    <div class="form-group">
                        <label for="lms_description" style="color:#83b541;">Explore other features</label>
                        <input type="text" class="form-control" id="lms_description" data-ques-id="14" placeholder="Type your other features" data-subquestion-no="1" data-from="">
                    </div>
                    <div class="send-lms-desc">
                        <div class="col-md-12 mb-2 d-flex">
                            <button id="send-lms-desc" class="btn btn-primary btn-rounded btn-block"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"></i>Send</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 question-for-datepicker14 d-none datepicker" id="MazenetLMSdatepicker">
                    <div class="form-group">
                        <span style="color:#83b541;">Book a time slot </span>
                        <input type="text" data-ques-id="14" data-subquestion-no="1" class="form-control demo-book-text" name="" placeholder="Book a time slot" required="" autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-2 d-flex">
                        <button class="btn btn-primary btn-rounded btn-block demo-book-btn" data-ques-id="14"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"></i>Book</button>
                    </div>
                </div>
                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Lab as a Service">

                <div class="questions-div Lab as a Service sub-question1" style="display:none;">
                    <div class="chat-bubble you question15 LabasaService">
                        <span style="margin-right: 5px;">
                            <img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        Looking for virtual labs to upskill my team.Great! Need more information about our Virtual LABS? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="15" data-subquestion-no="1" data-base="" data-from="Lab as a Service">Click here to check the lab availability</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="15" data-subquestion-no="1" data-base="" data-from="Lab as a Service">Request a demo</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="15" data-subquestion-no="1" data-base="" data-from="Lab as a Service">Talk to an expert</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="LabasaService mb-5">
                    <span class="chat-bubble me question-reply15 user_reply Lab as a Service reply-sub-question1" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <div class="col-md-12 question-for-datepicker15 d-none datepicker" id="LabasaServicedatepicker">
                    <div class="form-group">
                        <span style="color:#83b541;">Book a time slot </span>
                        <input type="text" data-ques-id="15" data-subquestion-no="1" class="form-control demo-book-text" name="" placeholder="Book a time slot" required="" autocomplete="off">
                    </div>
                    <div class="col-md-12 mb-2 d-flex">
                        <button class="btn btn-primary btn-rounded btn-block demo-book-btn" data-ques-id="15"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"></i>Book</button>
                    </div>
                </div>
                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Corporate Training">

                <div class="questions-div Corporate Training sub-question2" style="display:none;">
                    <div class="chat-bubble you question5 CorporateTraining">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        What is your team size? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="5" data-subquestion-no="2" data-base="" data-from="Corporate Training">0-25</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="5" data-subquestion-no="2" data-base="" data-from="Corporate Training">26-100</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="5" data-subquestion-no="2" data-base="" data-from="Corporate Training">101-149</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="5" data-subquestion-no="2" data-base="" data-from="Corporate Training">150+</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="CorporateTraining mb-5">
                    <span class="chat-bubble me question-reply5 user_reply Corporate Training reply-sub-question2" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Train & Hire">

                <div class="questions-div Train & Hire sub-question2" style="display:none;">
                    <div class="chat-bubble you question8 Train">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        Please mention your preferred technology stack </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <div class="tech-stack2 tech-stack-question8 d-none tech-stack-div">
                                    <div class="form-group">
                                        <input type="text" class="form-control tech-stack-text" data-ques-id="8" placeholder="Type your details" data-subquestion-no="2" data-from="Train & Hire">
                                    </div>
                                    <div class="send-tech-stack">
                                        <div class="col-md-12 mb-2 d-flex">
                                            <button class="btn btn-primary btn-rounded btn-block tech-stack-btn"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"> Send</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Train mb-5">
                    <span class="chat-bubble me question-reply8 user_reply Train & Hire reply-sub-question2" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Staffing">

                <div class="questions-div Staffing sub-question2" style="display:none;">
                    <div class="chat-bubble you question12 Staffing">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        How many resources do you need? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="12" data-subquestion-no="2" data-base="" data-from="Staffing">10-25</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="12" data-subquestion-no="2" data-base="" data-from="Staffing">26-50</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="12" data-subquestion-no="2" data-base="" data-from="Staffing">51-100</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="12" data-subquestion-no="2" data-base="" data-from="Staffing">100+</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Staffing mb-5">
                    <span class="chat-bubble me question-reply12 user_reply Staffing reply-sub-question2" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Corporate Training">

                <div class="questions-div Corporate Training sub-question3" style="display:none;">
                    <div class="chat-bubble you question4 CorporateTraining">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        What technology stack are you looking for? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <div class="tech-stack3 tech-stack-question4 d-none tech-stack-div">
                                    <div class="form-group">
                                        <input type="text" class="form-control tech-stack-text" data-ques-id="4" placeholder="Type your details" data-subquestion-no="3" data-from="Corporate Training">
                                    </div>
                                    <div class="send-tech-stack">
                                        <div class="col-md-12 mb-2 d-flex">
                                            <button class="btn btn-primary btn-rounded btn-block tech-stack-btn"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"> Send</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="CorporateTraining mb-5">
                    <span class="chat-bubble me question-reply4 user_reply Corporate Training reply-sub-question3" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Train & Hire">

                <div class="questions-div Train & Hire sub-question3" style="display:none;">
                    <div class="chat-bubble you question9 Train">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        How many trained resources do you need? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="9" data-subquestion-no="3" data-base="" data-from="Train & Hire">10-25</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="9" data-subquestion-no="3" data-base="" data-from="Train & Hire">26-50</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="9" data-subquestion-no="3" data-base="" data-from="Train & Hire">51-100</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="9" data-subquestion-no="3" data-base="" data-from="Train & Hire">100+</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Train mb-5">
                    <span class="chat-bubble me question-reply9 user_reply Train & Hire reply-sub-question3" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Staffing">

                <div class="questions-div Staffing sub-question3" style="display:none;">
                    <div class="chat-bubble you question13 Staffing">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        Please mention your preferred technology stack </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <div class="tech-stack3 tech-stack-question13 d-none tech-stack-div">
                                    <div class="form-group">
                                        <input type="text" class="form-control tech-stack-text" data-ques-id="13" placeholder="Type your details" data-subquestion-no="3" data-from="Staffing">
                                    </div>
                                    <div class="send-tech-stack">
                                        <div class="col-md-12 mb-2 d-flex">
                                            <button class="btn btn-primary btn-rounded btn-block tech-stack-btn"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"> Send</i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Staffing mb-5">
                    <span class="chat-bubble me question-reply13 user_reply Staffing reply-sub-question3" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Corporate Training">

                <div class="questions-div Corporate Training sub-question4" style="display:none;">
                    <div class="chat-bubble you question6 CorporateTraining">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        Do you have any specific requirement to share with us through Chat? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="6" data-subquestion-no="4" data-base="" data-from="Corporate Training">Yes</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="6" data-subquestion-no="4" data-base="" data-from="Corporate Training">No</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="CorporateTraining mb-5">
                    <span class="chat-bubble me question-reply6 user_reply Corporate Training reply-sub-question4" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <!------ train and hire others description end --------->

                <div class="requirements d-none mt-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="requirements" data-ques-id="6" placeholder="Type your requirements" data-subquestion-no="4" data-from="">
                    </div>
                    <div class="send-requirements">
                        <div class="col-md-12 mb-2 d-flex">
                            <button id="send-requirements" class="btn btn-primary btn-rounded btn-block"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"></i>Send</button>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="corporate_count" value="4">
                <input type="hidden" id="train_count" value="4">
                <input type="hidden" id="staffing_count" value="3">
                <input type="hidden" id="lms_count" value="1">
                <input type="hidden" id="lab_count" value="1">

                <input type="hidden" class="sub_question_for" value="Train & Hire">

                <div class="questions-div Train & Hire sub-question4" style="display:none;">
                    <div class="chat-bubble you question10 Train">
                        <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                        When would you like to start the training? </div>
                    <div class="chat-bubble you2 options">
                        <div class="msg-quick-reply">
                            <div class="btn-wrap">
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="10" data-subquestion-no="4" data-base="" data-from="Train & Hire">Immediately</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="10" data-subquestion-no="4" data-base="" data-from="Train & Hire">This Quarter</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="10" data-subquestion-no="4" data-base="" data-from="Train & Hire">Next Quarter</button>
                                </span>
                                <span class="d-sm-inline-block">
                                    <button class="btn js-quick-reply" data-ques-id="10" data-subquestion-no="4" data-base="" data-from="Train & Hire">Others</button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Train mb-5">
                    <span class="chat-bubble me question-reply10 user_reply Train & Hire reply-sub-question4" style="display:none;"></span>
                </div>

                <!------ train and hire others description start --------->
                <div class="training_others  d-none mt-2">
                    <div class="form-group">
                        <input type="text" class="form-control" id="train_others" data-ques-id="10" placeholder="When do you want to start training?" data-subquestion-no="4" data-from="">
                    </div>
                    <div class="send_others_training">
                        <div class="col-md-12 mb-2 d-flex">
                            <button id="send_others_training" class="btn btn-primary btn-rounded btn-block"><i class="fa fa-paper-plane mr-2" aria-hidden="true" style="font-size: 14px;"></i>Send</button>
                        </div>
                    </div>
                </div>
                <!------ train and hire others description end --------->

                <span class="chat-bubble you typing-effect" style="display:none;">
                    <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28"></span>
                    <img src="{{ asset('assets/img/Ellipsis-3.4s-134px.gif') }}" style="width:30px;">
                </span>
                <div class="chat-bubble you thanks thank-div" style="display:none">
                    <span style="margin-right: 5px;"><img src="{{ asset('assets/img/chatbot-icon.png') }}" width="28" height="28">
                    </span>Thank you for sharing your query. Our team will respond to your inquiry shortly.
                    If you wish to connect with our team, you can drop an email to 
                    <a href="mailto:info@mazenetsolution.com" style="color:blue">info@mazenetsolution.com </a>or call on +91-7397723052
                </div>

            </div>
            <div class="row justify-content-around">
                <div>
                    <button class="btn btn-primary btn-rounded btn-block font-s-12  chat-end">End Chat</button>
                </div>
                <div>
                    <button class="btn btn-primary btn-rounded btn-block font-s-12  chat-back">Go To Main Menu</button>
                </div>
            </div>
            <div class="col-md-12">
                <div class="powered-by">Powered by Mazenet</div>
            </div>
        </div>
    </div>
    </div>
   

    <!-- Chat Bot UI Ends -->

    @include('layouts.header')
    @yield('contents')
   
    @include('layouts.footer')


    

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/css/appointment/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/js/page-redirect.js') }}"></script> <!-- javascript here -->
    {{-- <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script> --}}
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJ7vR7u5Tw1Ii8qA0mAsKVUvSnoidOkhE"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.smartmenus.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.min.js') }}"></script>

    <!-- javascript plugin -->
    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
    <!--script src="js/jquery.maps.js"></script-->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>



    <script src="../www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('assets/js/training.js') }}"></script>
    
    
    




    @yield('scripts')
    <!--script>
	$(document).ready(function(){
	$("#myModal").modal('show');
	});
</script-->

    <script>
        // setTimeout(function() {
        //     $('#exampleModalCenter').modal({
        //         backdrop: 'static'
        //         , keyboard: false
        //         // https://stackoverflow.com/questions/16152073/prevent-bootstrap-modal-from-disappearing-when-clicking-outside-or-pressing-esca  
        //     });
        // }, 10000);

        // 
        
    $(function() {

	"use strict";

$(".section-faq .questions .active .answer").slideDown();

$(".section-faq .questions .single-question > div").on("click", function() {
    $(".section-faq .questions .single-question .answer").slideUp();
    if($(this).parent().hasClass("active")) {
        $(this).parent().removeClass("active");
    }
    else {
        $(".section-faq .questions .single-question").removeClass("active");
        $(this).parent().addClass("active");
        $(this).next(".answer").slideDown();
    }
});

});



       

        $(document).ready(function() {
            window.onload = function() {
                var $recaptcha = document.querySelector('.g-recaptcha-response');
                if ($recaptcha) {
                    $recaptcha.setAttribute("required", "required");
                }
            };
            

            $(".btn-val").click(function(){
                alert("hello world")

            })

            $("#form_popup").submit(function(e) {
                $('#form_popup_submit').hide();
            });

            $("#form_contact").submit(function(e) {
                $('#submit_contact').hide();
            });

            $("#lms_form").submit(function(e) {
                $('#submit_lms').hide();
            });
            $("#form_trainer").submit(function(e) {
                $('#submit_trainer').hide();
            });
        });
        const cookieBox = document.getElementById('exampleModalCenter');
        const cookieButton = document.getElementById('close-button');

        if (!Cookies.get('cookie-box')) {
            cookieBox.classList.remove('cookie-box--hide');
            cookieButton.onclick = function() {
                Cookies.set('cookie-box', true, {
                    expires: 7
                });
                cookieBox.classList.add('cookie-box--hide');
            }
        }


        

    </script>


    <script type='text/javascript'>
        setTimeout(function() {
                    var headID = document.getElementsByTagName( & quot; header & quote;)[0];
                    var newScript = document.getElementsByTagName( & #39;script&# 39;)
                    newScript.type = & #39;text/javascript&# 39;;
                    newscript.src = & #39;https://code.jquery.com/ui/1.12.1/jquery-ui.js';
		newscript.src = & #39;https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css';
		newscript.src = & #39;https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css';
		newscript.src = & #39;https://www.googletagmanager.com/gtag/js?id= G - NSDMBQ2Q58 & l = dataLayer & cx = c ';
                    newscript.src = & #39;https://www.gstatic.com/recaptcha/releases/fGZmEzpfeSeqDJiApS_XZ4Y2/recaptcha__en.js;
		newscript.src = & #39;https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js';
		newscript.src = & #39;https://www.mazenet.com/mt/js/bootstrap.bundle.min.js';
		newscript.src = & #39;https://www.mazenet.com/mt/js/select2.min.js';
		headID.appendchild(newScript);
	},3000);

    </script>


    <script>
        // 
        const swiper = new Swiper('.swiper-container', {
    loop: true,
    slidesPerView: 3,
    spaceBetween: 40,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
       
      // For medium-sized screens
      768: {
        slidesPerView: 3, // Show 2 cards on smaller screens
      },
      // For small screens
      320: {
        slidesPerView: 1, // Show 1 card on very small screens
      },
    },
     });
        $(document).ready(function() {
            //Toggle fullscreen
            $(".chat-bot-icon").click(function(e) {
                $(this).children('img').toggleClass('hide');
                $(this).children('svg').toggleClass('animate');
                $('.chat-screen').toggleClass('show-chat');
            });

            /*  $('.chat-mail button').click(function () {
            	$('.chat-mail').addClass('hide');
            	$('.chat-body').removeClass('hide');
            	$('.chat-input').removeClass('hide');
            	$('.chat-header-option').removeClass('hide');
            	});
            	$('.end-chat').click(function () {
            	$('.chat-body').addClass('hide');
            	$('.chat-input').addClass('hide');
            	$('.chat-session-end').removeClass('hide');
            	$('.chat-header-option').addClass('hide');
            }); */
        });

        $(function() {
            var user_id = localStorage.getItem('chat_user_id');
            var corporate_question_count = $('#corporate_count').val();
            var train_question_count = $('#train_count').val();
            var staffing_question_count = $('#staffing_count').val();
            var lms_question_count = $('#lms_count').val();
            var train_question_count = $('#train_count').val();
            var lab_question_count = $('#lab_count').val();
            var c_time = new Date().getHours();
            var user_time = localStorage.getItem('time');
            if (parseInt(user_time) + 1 <= c_time) {
                localStorage.removeItem('chat_user_id');
                localStorage.removeItem('time');
            }

            $.ajax({
                url: 'chat.php'
                , type: 'POST'
                , data: {
                    get_chat_history_id: user_id
                }
                , dataType: 'JSON'
                , success: function(res) {
                    for (i = 0; i < res.length; i++) {
                        if (i == 0) {
                            $('#user_name').val(res[i].user_name);
                            $('#email').val(res[i].email);
                            $('#phone').val(res[i].phone_no);
                            $('#email').parents('.email_div').removeClass('d-none');
                            $('#phone').parents('.ph_no_div').removeClass('d-none');
                            $('#user_name').prop('readonly', true);
                            $('#email,#phone').prop('readonly', true);
                            $('.send-button').addClass('d-none');
                        }
                        $('.question' + res[i].question_id).parent('.questions-div').show("200");
                        $('.question' + res[i].question_id).parent('.questions-div').css('pointer-events', 'none');
                        if ($('.question-reply' + res[i].question_id).is(':hidden')) {
                            $('.question-reply' + res[i].question_id).text(res[i].answer).show("200");
                        }
                        console.log(res[i].question_id);
                        if (res[i].question_id == 5 || res[i].question_id == 7 || res[i].question_id == 12) {
                            $('.tech-stack-question' + res[i].question_id).removeClass('d-none');
                            $('.tech-stack-question' + res[i].question_id).find('.tech-stack-text').val(res[i].answer);
                            $('.tech-stack-question' + res[i].question_id).find('.tech-stack-text').prop('readonly', true);
                            $('.tech-stack-question' + res[i].question_id).children('.send-tech-stack').hide();
                        }

                        if (res[i].answer == "Request a demo" || res[i].answer.includes('Request demo')) {
                            if (!$('.question-for-datepicker' + res[i].question_id).hasClass('d-none')) {
                                var replace_string = 'Request demo for LMS:';
                                // $('.LMS_thanks').show();
                                if (res[0].answer.includes('Lab as a Service')) {
                                    replace_string = 'Request demo for LAB:';
                                    // $('.LMS_thanks').hide();
                                }
                                $('.thanks').show();
                                $('.question-for-datepicker' + res[i].question_id).find('.demo-book-text').val(res[i].answer.replace(replace_string, ''));
                                $('.question-for-datepicker' + res[i].question_id).find('.demo-book-text').css("pointer-events", "none");
                                $('.question-for-datepicker' + res[i].question_id).find('.demo-book-btn').css("pointer-events", "none");
                            }
                            $('.question-for-datepicker' + res[i].question_id).removeClass('d-none');
                        }

                        if (res[i].answer == "Features" || res[i].answer.includes('Features description for LMS:')) {
                            $('.lms_description').removeClass('d-none');
                            if (res[i].answer != "Features") {
                                $('#lms_description').val(res[i].answer.replace('Features description for LMS:', ''));
                                $('#lms_description').css("pointer-events", "none");
                                $('.send-lms-desc').hide();
                                $('.thanks').show("200");
                            }
                        }

                        if (res[i].answer == "If yes, please let me know in the chat" || res[i].answer.includes('Specific Requirements for CT:')) {
                            $('.requirements').removeClass('d-none');
                            if (res[i].answer != "If yes, please let me know in the chat") {
                                $('#requirements').val(res[i].answer.replace('Specific Requirements for CT:', ''));
                                $('#requirements').css("pointer-events", "none");
                                $('.send-requirements').hide();
                                $('.thanks').show("200");
                            }
                        }

                        // Others training text box show load time start
                        if (res[i].answer == "Others" || res[i].answer.includes('Others training for T&H:')) {
                            $('.training_others').removeClass('d-none');
                            if (res[i].answer != "Others") {
                                $('#train_others').val(res[i].answer.replace('Others training for T&H:', ''));
                                $('#train_others').css("pointer-events", "none");
                                $('.send_others_training').hide();
                                $('.thanks').show("200");
                            }
                        }
                        // Others training text box show load time end

                        if (i == (res.length - 1)) {
                            var next_ques = parseInt(res[i].sub_question_no) + 1;
                            if (res[0].answer == 'Corporate Training') {
                                if (next_ques <= corporate_question_count) {
                                    $('.CorporateTraining').parent('.sub-question' + next_ques).show("200");
                                    if (next_ques == 3) {
                                        $('.tech-stack' + next_ques).removeClass('d-none');
                                    }
                                } else {
                                    $('.thanks').show("200");
                                }
                            } else if (res[0].answer == "Train & Hire") {
                                if (next_ques <= train_question_count) {
                                    $(".Train").parent('.sub-question' + next_ques).show("200");
                                    if (next_ques == 2) {
                                        $('.tech-stack' + next_ques).removeClass('d-none');
                                    }
                                } else {
                                    $('.thanks').show("200");
                                }
                            } else if (res[0].answer == "Staffing") {
                                if (next_ques <= staffing_question_count) {
                                    $('.Staffing').parent('.sub-question' + next_ques).show("200");
                                    if (next_ques == 3) {
                                        $('.tech-stack' + next_ques).removeClass('d-none');
                                    }
                                } else {
                                    $('.thanks').show("200");
                                }
                            } else if (res[0].answer == "Mazenet LMS") {
                                if (next_ques <= lms_question_count) {
                                    $('.MazenetLMS').parent('.sub-question' + next_ques).show("200");
                                } else if (res[i].answer == "Features") {
                                    $('.lms_description').removeClass('d-none');
                                } else {
                                    if (res[i].answer != "Request a demo" && res[i].answer != "Features") {
                                        $('.thanks').show("200");
                                    }
                                }
                            } else {
                                if (next_ques <= lab_question_count) {
                                    $('.LabasaService').parent('.sub-question' + next_ques).show("200");
                                } else {
                                    if (res[i].answer != "Request a demo") {
                                        $('.thanks').show("200");
                                    }
                                }
                            }

                        }

                    }
                    if (res.length > 0) {
                        $(".chat-bot-icon").trigger('click');
                        $(".chat-body").animate({
                            scrollTop: $('.chat-body').prop('scrollHeight') + $('.chat-body').prop('scrollHeight')
                        }, 2000);
                    }
                }
            });


        });

        $('.chat-end').click(function() {
            $('.chat-screen').toggleClass('show-chat');
            $('.questions-div').hide();
            $('#user_name,#email,#phone').val('');
            $('#user_name,#email,#phone').prop('readonly', false);
            $('#user_name,#email,#phone').css('border-color', '#e1e1e1');
            $('.email_div').addClass('d-none');
            $('.ph_no_div').addClass('d-none');
            $('.user_reply').val('');
            $('.user_reply').hide();
            $('.thanks').hide();
            // $('.LAB_thanks').hide();
            // $('.LMS_thanks').hide();
            $('.trainhire_thanks').hide();
            $('.lms_description').addClass('d-none');
            $('.send-lms-desc').show();
            $('.datepicker').addClass('d-none');
            $('.tech-stack-text').prop('readonly', false);
            $('.tech-stack-text').val('');
            $('.tech-stack-div').addClass('d-none');
            $('.send-tech-stack').show();
            $('.send-button').addClass('d-none');
            $('.tech-stack-div').addClass('d-none');
            $('.requirements').addClass('d-none');
            $('.send-requirements').show();
            $('.training_others').addClass('d-none');
            $('.send_others_training').show();
            $('.train_others_reply').remove();
            $('*').filter(function() {
                if ($(this).css('pointer-events') == "none") {
                    $(this).css('pointer-events', "auto");
                }
            });
            localStorage.removeItem('chat_user_id');
        });

        


        $('#user_name').focus(function() {
            $('.send-button').removeClass('d-none');
            $('.email_div').removeClass('d-none');
            $('.ph_no_div').removeClass('d-none');
            $(this).css('border-color', '#add5fc');
        });

        $('#user_name').keyup(function(e) {
            var data = $(this).val();
            if (data != "") {
                $(this).css('border-color', '#add5fc');
                if (e.key == "Enter") {
                    $(this).prop('readonly', true);
                    $('#email').focus();
                }
            } else {
                $(this).focus();
                $(this).css('border-color', 'red');
            }
        });

        $('#email').keyup(function(e) {
            var username = $('#user_name').val();
            var email = $('#email').val();
            if (username != "" && email != "") {
                //   var data = {
                //       user_name: username,
                //       email: email
                //   };
                //   $(this).css('border-color', '#add5fc');
                if (e.key == "Enter") {
                    //   saveuser(data);
                    $('#phone').focus();
                }
            } else if (username == "" && email != "") {
                $('#user_name').focus();
                $('#user_name').css('border-color', 'red');
            } else if (email == "" && username != "") {
                $('#email').focus();
                $('#email').css('border-color', 'red');
            }
        });


        $('#phone').keyup(function(e) {
            var username = $('#user_name').val();
            var email = $('#email').val();
            var phone = $(this).val();
            if (username != "" && email != "" && phone != "") {
                var data = {
                    user_name: username
                    , email: email
                    , phone_no: phone
                };
                $(this).css('border-color', '#add5fc');
                if (e.key == "Enter") {
                    saveuser(data);
                }
            } else if (username == "" && email != "" && phone != "") {
                $('#user_name').focus();
                $('#user_name').css('border-color', 'red');
            } else if (email == "" && username != "" && phone != "") {
                $('#email').focus();
                $('#email').css('border-color', 'red');
            } else if (phone == "" && username != "" && email != "") {
                $(this).focus();
                $(this).css('border-color', 'red');
            }
        });

        $('#lms_description').keyup(function(e) {
            var description = "Features description for LMS: " + $(this).val();
            var id = $(this).attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            if (e.key == "Enter" && $(this).val() != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: description
                };
                savechat(chat_data);
                $(this).css("pointer-events", "none");
                $('.send-lms-desc').hide();

                typing_effect_show();

                setTimeout(function() {
                    $('.thanks').show("200");
                    typing_effect_hide();
                }, 3000);
            }
        });

        $('#send-lms-desc').click(function() {
            var description = "Features description for LMS: " + $('#lms_description').val();
            var id = $('#lms_description').attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            if ($('#lms_description').val() != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: description
                };
                savechat(chat_data);
            }
            $('#lms_description').css("pointer-events", "none");
            $('.send-lms-desc').hide();

            typing_effect_show();

            setTimeout(function() {
                $('.thanks').show("200");
                typing_effect_hide();
            }, 3000);
        });

        $('#requirements').keyup(function(e) {
            var requirements = "Specific Requirements for CT: " + $(this).val();
            var id = $(this).attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            if (e.key == "Enter" && $(this).val() != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: requirements
                };
                savechat(chat_data);
                $(this).css("pointer-events", "none");
                $('.send-requirements').hide();

                typing_effect_show();

                setTimeout(function() {
                    $('.thanks').show("200");
                    typing_effect_hide();
                }, 3000);
            }
        });

        $('#send-requirements').click(function() {
            var requirements = "Specific Requirements for CT: " + $('#requirements').val();
            var id = $('#requirements').attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            if ($('#requirements').val() != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: requirements
                };
                savechat(chat_data);
                $('#requirements').css("pointer-events", "none");
                $('.send-requirements').hide();

                typing_effect_show();

                setTimeout(function() {
                    $('.thanks').show("200");
                    typing_effect_hide();
                }, 3000);
            }
        });

        // train & hire others training save start 
        $('#train_others').keyup(function(e) {
            var training = "Others training for T&H: " + $(this).val();
            var id = $(this).attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            if (e.key == "Enter" && $(this).val() != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: training
                };
                savechat(chat_data);
                $(this).css("pointer-events", "none");
                $('.send_others_training').hide();

                typing_effect_show();
                setTimeout(function() {
                    $('.thanks').show("200");
                    typing_effect_hide();
                }, 3000);
            }
        });

        $('#send_others_training').click(function() {
            var training = "Others training for T&H: " + $('#train_others').val();
            var id = $('#train_others').attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            //   $('.train_space').removeClass('mb-5'); 
            var span = '<span class="chat-bubble me question-reply train_others_reply">' + $('#train_others').val() + '</span>';
            if ($('#train_others').val() != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: training
                };
                savechat(chat_data);
                $('#train_others').css("pointer-events", "none");
                $('.send_others_training').hide();
                $('.training_others').append(span);
                typing_effect_show();

                setTimeout(function() {
                    $('.thanks').show("200");
                    typing_effect_hide();
                }, 3000);
            }
        });
        // train & hire others training save end 

        $('.tech-stack-text').keyup(function(e) {
            var answer = $(this).val();
            var question_no = $(this).attr('data-subquestion-no');
            var from = $(this).attr('data-from');
            var next_question_no = parseInt(question_no) + 1;
            var id = $(this).attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            if (e.key == "Enter" && answer != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: answer
                    , sub_question_no: question_no
                };
                savechat(chat_data);
                $(this).prop('readonly', true);
                $(this).css("pointer-events", "none");
                $('.send-tech-stack').hide();

                if (from == "Corporate Training") {
                    $('.CorporateTraining').children('.reply-sub-question' + question_no).text(answer);
                    $('.CorporateTraining').children('.reply-sub-question' + question_no).show("200");
                    $('.CorporateTraining').parent('.sub-question' + question_no).css('pointer-events', 'none');
                } else if (from == "Train & Hire") {
                    $('.Train').children('.reply-sub-question' + question_no).text(answer);
                    $('.Train').children('.reply-sub-question' + question_no).show("500");
                    $('.Train').parent('.sub-question' + question_no).css('pointer-events', 'none');
                } else if (from == "Staffing") {
                    $('.Staffing').children('.reply-sub-question' + question_no).text(answer);
                    $('.Staffing').children('.reply-sub-question' + question_no).show("200");
                    $('.Staffing').parent('.sub-question' + question_no).css('pointer-events', 'none');
                }

                typing_effect_show();

                setTimeout(function() {
                    next_question(from, answer, next_question_no);
                }, 3000);

            }
        });

        $('.tech-stack-btn').click(function(e) {
            var answer = $(this).closest('.tech-stack-div').find('.tech-stack-text').val();
            var question_no = $(this).closest('.tech-stack-div').find('.tech-stack-text').attr('data-subquestion-no');
            var from = $(this).closest('.tech-stack-div').find('.tech-stack-text').attr('data-from');
            var next_question_no = parseInt(question_no) + 1;
            var id = $(this).closest('.tech-stack-div').find('.tech-stack-text').attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            if (answer != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: answer
                    , sub_question_no: question_no
                };
                savechat(chat_data);
                $(this).closest('.tech-stack-div').find('.tech-stack-text').prop('readonly', true);
                $(this).closest('.tech-stack-div').find('.tech-stack-text').css("pointer-events", "none");
                $('.send-tech-stack').hide();

                if (from == "Corporate Training") {
                    $('.CorporateTraining').children('.reply-sub-question' + question_no).text(answer);
                    $('.CorporateTraining').children('.reply-sub-question' + question_no).show("200");
                    $('.CorporateTraining').parent('.sub-question' + question_no).css('pointer-events', 'none');
                } else if (from == "Train & Hire") {
                    $('.Train').children('.reply-sub-question' + question_no).text(answer);
                    $('.Train').children('.reply-sub-question' + question_no).show("500");
                    $('.Train').parent('.sub-question' + question_no).css('pointer-events', 'none');
                } else if (from == "Staffing") {
                    $('.Staffing').children('.reply-sub-question' + question_no).text(answer);
                    $('.Staffing').children('.reply-sub-question' + question_no).show("200");
                    $('.Staffing').parent('.sub-question' + question_no).css('pointer-events', 'none');
                }

                typing_effect_show();

                setTimeout(function() {
                    next_question(from, answer, next_question_no);
                }, 3000);

            }
        });


        $('.demo-book-btn').click(function() {
            var identify_text = "Request demo for LMS: ";
            var picker_for = $(this).parents('.datepicker').attr('id');
            if (picker_for == 'LabasaServicedatepicker') {
                var identify_text = "Request demo for LAB: ";
            }
            var timeslot = identify_text + $(this).parents('.datepicker').find('.demo-book-text').val();
            var id = $(this).attr('data-ques-id');
            var question_no = $(this).attr('data-subquestion-no');
            var user_id = localStorage.getItem('chat_user_id');
            if (timeslot != '') {
                var chat_data = {
                    chat_user_id: user_id
                    , question_id: id
                    , answer: timeslot
                    , sub_question_no: question_no
                };
                savechat(chat_data);
            }
            $(this).parents('.datepicker').find('.demo-book-text').css("pointer-events", "none");
            $(this).parents('.datepicker').find('.demo-book-btn').css("pointer-events", "none");

            typing_effect_show();

            if (picker_for == "LabasaServicedatepicker") {
                setTimeout(function() {
                    $('.thanks').show("200");
                    typing_effect_hide();
                }, 3000);
            } else {
                setTimeout(function() {
                    $('.thanks').show("200");
                    typing_effect_hide();
                }, 3000)
            }

        });


        $('#send-button-icon').click(function() {
            var username = $('#user_name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            if (username != "" && email != "" && phone != '') {
                var data = {
                    user_name: username
                    , email: email
                    , phone_no: phone
                };
                saveuser(data);
            } else if (username == "" && email != "" && phone != "") {
                $('#user_name').focus();
                $('#user_name').css('border-color', 'red');
            } else if (email == "" && username != "" && phone != "") {
                $('#email').focus();
                $('#email').css('border-color', 'red');
            } else if (phone == "" && username != "" && email != "") {
                $('#phone').focus();
                $('#phone').css('border-color', 'red');
            } else if (username != "" && email == "" && phone == "") {
                $('#email').focus();
                $('#email').css('border-color', 'red');
            } else {
                $('#user_name').focus();
                $('#user_name').css('border-color', 'red');
            }
        });

        function saveuser(data) {
            $test_email = validateEmail(data.email);
            let current_time = new Date();
            if ($test_email == true) {
                $("#typing-effect-top").show("200");
                $('.chat-end').css('pointer-events', 'none');
                $('.chat-back').css('pointer-events', 'none');
                $(".chat-body").animate({
                    scrollTop: $('.chat-body').prop("scrollHeight")
                }, 1000);
                $.ajax({
                    url: 'chat.php'
                    , type: 'POST'
                    , data: data
                    , dataType: 'JSON'
                    , success: function(res) {
                        localStorage.setItem('chat_user_id', res.id);
                        localStorage.setItem('time', current_time.getHours());
                        notification_mail(data);
                        $('.sub_question_for').each(function() {
                            var question_for = $(this).val();
                            if (question_for == "") {
                                $('#user_name,#email,#phone').prop('readonly', true);
                                $('#user_name,#email,#phone').css('border-color', 'white');
                                $('#send-button-icon').css("pointer-events", "none");
                                $('.send-button').addClass('d-none');
                                setTimeout(function() {
                                    $('.sub-question0').show("200");
                                    $("#typing-effect-top").hide("200");
                                    $('.chat-end').css('pointer-events', '');
                                    $('.chat-back').css('pointer-events', '');
                                    $(".chat-body").animate({
                                        scrollTop: $('.chat-body').prop("scrollHeight")
                                    }, 1000);
                                }, 3000);

                            }
                        });
                    }
                });
            } else {
                $('#email').css('border-color', 'red');
            }
        }

        function notification_mail(data) {
            data.for = "notification_mail";
            $.ajax({
                url: 'sendmail.php'
                , type: 'POST'
                , data: data
                , dataType: 'JSON'
                , success: function(res) {}
            });
        }

        $('.js-quick-reply').click(function() {
            var question_no = $(this).attr('data-subquestion-no');
            var from = $(this).attr('data-from');
            var answer = $(this).text();
            var next_question_no = parseInt(question_no) + 1;
            var id = $(this).attr('data-ques-id');
            var user_id = localStorage.getItem('chat_user_id');
            var base_question = $(this).attr('data-base');

            var chat_data = {
                chat_user_id: user_id
                , question_id: id
                , answer: answer
                , sub_question_no: question_no
            };
            savechat(chat_data);
            //reply show functionality
            if (base_question == true) {
                $('.reply-sub-question0').text(answer);
                $('.reply-sub-question0').show("200");
                $('.sub-question0').css('pointer-events', 'none');
            } else {
                if (from == "Corporate Training") {

                    $('.CorporateTraining').children('.reply-sub-question' + question_no).text(answer);
                    $('.CorporateTraining').children('.reply-sub-question' + question_no).show("200");
                    $('.CorporateTraining').parent('.sub-question' + question_no).css('pointer-events', 'none');
                    if ($.trim(answer) == "Yes") {

                        $('#requirements').val('');
                        setTimeout(function() {
                            $('.requirements').removeClass('d-none');
                            typing_effect_hide();
                        }, 3000);
                    }

                } else if (from == "Train & Hire") {
                    $('.Train').children('.reply-sub-question' + question_no).text(answer);
                    $('.Train').children('.reply-sub-question' + question_no).show("500");
                    $('.Train').parent('.sub-question' + question_no).css('pointer-events', 'none');
                    console.log(answer == "Others");
                    if (answer == "Others") {
                        $('#train_others').val('');
                        setTimeout(function() {
                            $('.training_others').removeClass('d-none');
                            typing_effect_hide();
                        }, 3000);
                    }
                } else if (from == "Staffing") {
                    $('.Staffing').children('.reply-sub-question' + question_no).text(answer);
                    $('.Staffing').children('.reply-sub-question' + question_no).show("200");
                    $('.Staffing').parent('.sub-question' + question_no).css('pointer-events', 'none');
                } else if (from == "Mazenet LMS") {
                    $('.MazenetLMS').children('.reply-sub-question' + question_no).text(answer);
                    $('.MazenetLMS').children('.reply-sub-question' + question_no).show("200");
                    $('.MazenetLMS').parent('.sub-question' + question_no).css('pointer-events', 'none');
                    if (answer == "Pricing") {
                        $('html').css('scroll-behavior', 'smooth');
                        var url = "mazenet-lms/indexd41d.html?#lms_form";
                        window.open(url, '_blank');
                    } else if (answer == "Features") {
                        var url = "mazenet-lms/index.html#features";
                        window.open(url, '_blank');
                        // $('.lms_description').removeClass('d-none');
                    } else if (answer == "Request a demo") {
                        $('.demo-book-text').val('');
                        typing_effect_show();
                        setTimeout(function() {
                            $('#MazenetLMSdatepicker').removeClass('d-none');
                            typing_effect_hide();
                        }, 3000);
                    }
                } else {
                    $('.LabasaService').children('.reply-sub-question' + question_no).text(answer);
                    $('.LabasaService').children('.reply-sub-question' + question_no).show("200");
                    $('.LabasaService').parent('.sub-question' + question_no).css('pointer-events', 'none');
                    if (answer == "Click here to check the lab availability") {
                        $('html').css('scroll-behavior', 'smooth');
                        var url = "lab-as-a-service/index.html#technology";
                        window.open(url, '_blank');
                    } else if (answer == "Request a demo") {
                        $('.demo-book-text').val('');
                        typing_effect_show();
                        setTimeout(function() {
                            $('#LabasaServicedatepicker').removeClass('d-none');
                            typing_effect_hide();
                        }, 3000);
                    } else if (answer == "Talk to an expert") {
                        $('html').css('scroll-behavior', 'smooth');
                        var url = "contact-usd41d.html?#form_contact";
                        window.open(url, '_blank');
                    }
                }
            }

            //next question show function call start
            $('.typing-effect').delay(1000).show("200");
            $(".chat-body").delay(1000).animate({
                scrollTop: $('.chat-body').prop("scrollHeight")
            }, 1000);
            $('.chat-end').css('pointer-events', 'none');
            $('.chat-back').css('pointer-events', 'none');

            if (answer != "Request a demo") {
                setTimeout(function() {
                    next_question(from, answer, next_question_no);
                }, 3000);
            }
            //next question show function call end
        });

        //next question show functionality start
        function next_question(from, answer, next_question_no) {
            if (from == "Corporate Training") {
                var corporate_question_count = $('#corporate_count').val();
                if (next_question_no <= corporate_question_count) {
                    $('.CorporateTraining').parent('.sub-question' + next_question_no).show("200");
                    if (next_question_no == 3) {
                        $('.tech-stack' + next_question_no).removeClass('d-none');
                    }
                } else {
                    console.log(answer, '_____________');
                    if (answer == "No") {
                        $('.thanks').show("200");
                    }
                }
            } else if (from == "Train & Hire") {
                var train_question_count = $('#train_count').val();
                if (next_question_no <= train_question_count) {
                    $(".Train").parent('.sub-question' + next_question_no).show("200");
                    if (next_question_no == 2) {
                        $('.tech-stack' + next_question_no).removeClass('d-none');
                    }
                } else {
                    if (answer != "Others") {
                        $('.thanks').show("200");
                    }
                }
            } else if (from == "Staffing") {
                var staffing_question_count = $('#staffing_count').val();
                if (next_question_no <= staffing_question_count) {
                    $('.Staffing').parent('.sub-question' + next_question_no).show("200");
                    if (next_question_no == 3) {
                        $('.tech-stack' + next_question_no).removeClass('d-none');
                    }
                } else {
                    $('.thanks').show("200");
                }
            } else if (from == "Mazenet LMS") {
                var lms_question_count = $('#lms_count').val();
                if (next_question_no <= lms_question_count) {
                    $('.MazenetLMS').parent('.sub-question' + next_question_no).show("200");
                } else if (answer == "Features") {
                    $('.lms_description').removeClass('d-none');
                } else {
                    if (answer != "Request a demo" && answer != "Features") {
                        $('.thanks').show("200");
                    }
                }
            } else {
                var lab_question_count = $('#lab_count').val();
                if (next_question_no <= lab_question_count) {
                    $('.LabasaService').parent('.sub-question' + next_question_no).show("200");
                } else {
                    if (answer != "Request a demo") {
                        $('.thanks').show("200");
                    }
                }
            }
            typing_effect_hide()
        }
        //next question show functionality end


        // save user chat history start
        function savechat(data) {
            return $.ajax({
                url: 'chat.php'
                , type: 'POST'
                , data: data
                , success: function(res) {}
            });
        }
        // save user chat history end

        // Go to main menu option start
        $('.chat-back').click(function() {
            if ($('.reply-sub-question0').is(':visible')) {
                $('.questions-div').hide("200");
                $('.user_reply').hide("200");
                $('.thank-div').hide("200");
                $('*').filter(function() {
                    if ($(this).css('pointer-events') == "none") {
                        $(this).css('pointer-events', "auto");
                    }
                });
                $('.datepicker').addClass('d-none');
                $('.sub-question0').show("500");
                $('.tech-stack-text').prop('readonly', false);
                $('.tech-stack-text').val('');
                $('.send-tech-stack').show();
                $('.lms_description').addClass('d-none');
                $('#lms_description').val('');
                $('.send-lms-desc').show();
                $('.tech-stack-div').addClass('d-none');
                $(".chat-body").animate({
                    scrollTop: $('.chat-body').prop("scrollHeight")
                }, 1000);
                $('.requirements').addClass('d-none');
                $('.send-requirements').show();
                $('.training_others').addClass('d-none');
                $('.send_others_training').show();
                $('.train_others_reply').remove();

                var user_id = localStorage.getItem('chat_user_id');
                $.ajax({
                    url: 'chat.php'
                    , type: 'POST'
                    , data: {
                        delete_user_id: user_id
                    }
                    , success: function(res) {
                        // console.log(res);
                    }
                });
            }
        });
        // Go to main menu option end


        // Mail validation start
        function validateEmail(emailField) {
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            // let restricted_domains = ["yahoo.com", "ymail.com", "gmail.com", "hotmail.com", "live.com"];
            if (reg.test(emailField) == false) {
                $('#mail_error').text("Enter valid email id").show().delay("3000").fadeOut();
                return false;
            }
            // if (restricted_domains.indexOf(emailField.split('@')[1]) >= 0) {
            //     $('#mail_error').text("Enter another domain email id").show().delay("3000").fadeOut();
            //     return false;
            // }
            return true;
        }
        // Mail validation end

        function typing_effect_show() {
            $('.typing-effect').show("200");
            $(".chat-body").animate({
                scrollTop: $('.chat-body').prop("scrollHeight")
            }, 1000);
            $('.chat-end').css('pointer-events', 'none');
            $('.chat-back').css('pointer-events', 'none');
        }

        function typing_effect_hide() {
            $('.typing-effect').hide("200");
            $('.chat-end').css('pointer-events', '');
            $('.chat-back').css('pointer-events', '');
            $(".chat-body").animate({
                scrollTop: $('.chat-body').prop("scrollHeight")
            }, 1000);
        }

        // Live time get functionality start  
        setInterval(function() {
            var date = new Date().toLocaleTimeString([], {
                hour: '2-digit'
                , minute: '2-digit'
                , weekday: 'long'
            });
            $('.chat-time').text(date);
        }, 1000);
        // Live time get functionality end  

    </script>
    <script>
        $(".testimonial-content").owlCarousel({
            loop: true
            , items: 2
            , margin: 50
            , dots: true
            , nav: false
            , mouseDrag: true
            , autoplay: false
            , autoplayTimeout: 4000
            , smartSpeed: 800
            , responsive: {
                0: {
                    items: 1
                }
                , 568: {
                    items: 1
                }
                , 768: {
                    items: 1
                }
                , 992: {
                    items: 2
                }
                , 1200: {
                    items: 2
                }
            , }
        , });
        
        $(".menu-trigger").click(){
           alert("hello world");
        }

        console.log("Hello Wolrd")

 
    </script>
    <!--bottom popup-->
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
    
    <!--bottom popup-->
    
    
    {{-- script start 05-12-2024 --}}

<script type="text/javascript">
    _linkedin_partner_id = "6823740";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script><script type="text/javascript">
    (function(l) {
    if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
    window.lintrk.q=[]}
    var s = document.getElementsByTagName("script")[0];
    var b = document.createElement("script");
    b.type = "text/javascript";b.async = true;
    b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
    s.parentNode.insertBefore(b, s);})(window.lintrk);
    </script>
    <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=6823740&fmt=gif" />
    </noscript>

{{-- script 05-12-2024 end --}}




{{-- modal submit form  --}}
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


</body>
</html>
