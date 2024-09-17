@extends('layouts.master', ['title' => 'Contact with us'])
@section('contents')
<div id="page-header" class="content-contrast">
    <div class="page-title-container">
        <div class="background-overlay"></div>
        <div class="container centered-container">
            <div class="centered-inner-container">
                <h1 class="page-title text-white">Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="container">
        <!--Contact details with separate Department-->
        <div class="row mb-3 justify-content-center">
            <div class="col-md-4 mb-4">

                <div class="text-Center spearteconatctbox" onclick="#" style="cursor: pointer;">
                    <img src="{{ asset('assets/img/ct-icons2.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0"> Corporate Training</h6>
                    <a href="#" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-Center spearteconatctbox" onclick="#" style="cursor: pointer;">
                    <img src="{{ asset('assets/img/ct-icons3.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0"> Talent Solutions</h6>
                    <a href="#" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-Center spearteconatctbox" onclick="#" style="cursor: pointer;">
                    <img src="{{ asset('assets/img/ct-icons6.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0"> Mazenet Lms</h6>
                    <a href="#" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="text-Center spearteconatctbox" onclick="#" style="cursor: pointer;">
                    <img src="{{ asset('assets/img/ct-icons5.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0"> LAB as a Service</h6>
                    <a href="contact-us.html" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
                </div>
            </div>
            <!-- <div class="col-md-4 mb-4">
           <div class="text-Center spearteconatctbox" onclick="location.href='https://www.mazenet.com/staffing/';" style="cursor: pointer;">
             <img src="img/ct-icons4.png" width="60" class="mb-1">
             <h6 class="mb-0"> Assessment as a Service</h6>
             <a href="https://www.mazenet.com/staffing/staffing-contact-b2b.php#enquiry" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
          </div>
          </div>-->
            <div class="col-md-4 mb-4">
                <div class="text-Center spearteconatctbox">
                    <img src="{{ asset('assets/img/ct-icons1.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0">Customer Support</h6>
                    <a href="tel:7397723052" class="email"><i class="fa fa-phone" aria-hidden="true"></i> 7397723052</a>
                </div>
            </div>
        </div>
        <!--Contact details with separate Department-->
        <div class="row">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="col-md-12">
                            <div class="content-box small left no-margin-lg">
                                <div class="icon-shape-disable">
                                    {{-- <i class="fa fa-envelope" style="font-size:24px"></i> --}}


                                    <i class="fa fa-envelope" aria-hidden="true" style="margin-left: 16px; font-size:24px"></i>
                                </div>
                                <h5 class="text-color address16">Email</h5>
                                <p class="address14">
                                    connect@pcginternational.in
                                </p>
                            </div>
                            <hr class="separator">
                            <div class="content-box small left no-margin-lg">
                                <div class="icon-shape-disable">
                                    <i class="fa fa-phone" aria-hidden="true" style="margin-left: 16px;"></i>
                                </div>
                                <h5 class="text-color address16">Phone</h5>
                                <p class="address14">
                                    +91 88266 65843
                                </p>
                            </div>
                            <hr class="separator">
                            <div class="content-box small left no-margin-lg">
                                <div class="icon-shape-disable">
                                    <i class="fa fa-map-marker" aria-hidden="true" style="margin-left: 16px;"></i>
                                </div>
                                <h5 class="text-color address16">Address Office</h5>
                                <p class="address14">
                                    B168-169, 2nd Floor, DDA Sheds, Okhla Industrial Area, Phase - 1, New Delhi - 110020
                                </p>
                            </div>
                            <p>Stay connected with us on Social Media Links for the latest insights and updates from Prakhar Consulting Group.</p>
                               
                                
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="text-center gap" data-gap-bottom="30">
                            <h3 style="font-size:25px;">Get in touch</h3>
                            <p>Ready to transform your business with our expertise? Contact us today to learn how we can help you achieve your objectives.</p>

                        </div>
                        <div class="row">
                            <div class="container">
                                <form class="lms-form" id="form_contact" method="post" action="https://www.mazenet.com/sendmail.php" enctype="multipart/form-data">
                                    <div class="cttopic">Only for Enterprises <br></div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Name<span class="required">*</span></label>
                                                <input type="text" placeholder="Your Name*" name="name" required="" class="form-control">
                                            </div>
                                        </div>
                                        <!--  col-md-6   -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Phone Number<span class="required">*</span></label>
                                                <input type="text" name="phone_no" id="phone_no" minlength="10" maxlength="10" onkeypress="return isNumberKey(event)" pattern=".{10,10}" placeholder="Your Number*" name="number" class="form-control" required="" onpaste="return false;">
                                            </div>
                                        </div>
                                        <!--  col-md-6   -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email address<span class="required">*</span></label>
                                                <input type="email" placeholder="Your Mail*" name="mail" required="" class="form-control">
                                            </div>
                                        </div>
                                        <!--  col-md-6   -->
                                        <!--newfield-->
                                        <div class="col-lg-6">
                                            <label>Our Services <span class="required">*</span></label>
                                            <select class="form-control" name="services" required="Type of Requirement">
                                                <option value="Corporate Training">Corporate Training</option>
                                                <option value="Train &amp; Hire">Train &amp; Hire</option>
                                                <option value="Staffing as a Service"> Staffing as a Service</option>
                                                <option value="Lab as a Service">Lab as a Service</option>
                                                <option value="Mazenet LMS">Mazenet LMS</option>
                                                <option value="Others">Others </option>
                                            </select>
                                        </div>
                                        <!--newfield-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Message<span class="required">*</span></label><br />
                                                <textarea class="form-control" placeholder="Comments" name="comment" rows="2" required="" onpaste="return false;" maxlength="300"></textarea>
                                            </div>
                                        </div>
                                        <!--  col-md-6   -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>&nbsp;</label><br />
                                                <div class="g-recaptcha" data-sitekey="6LeQ9MYaAAAAAFdlplefv5LaRD8DT_f5ZHvWVLqs" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback" style="transform: scale(0.80);    -webkit-transform: scale(0.80);    transform-origin: 0 0;  -webkit-transform-origin: 0 0;"></div>
                                                <!--<input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">-->
                                                <input type="hidden" name="recaptcha_response" id="g-recaptcha-response" data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                        <!--  col-md-6   -->
                                    </div>
                                    <div align="center"><input type="submit" name="submit_contact" class="btn btn-default" value="Submit" id="submit_contact"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
