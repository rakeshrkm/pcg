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
                    <h6 class="mb-0">IT Recruitment</h6>
                    <a href="#" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-Center spearteconatctbox" onclick="#" style="cursor: pointer;">
                    <img src="{{ asset('assets/img/ct-icons3.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0">Non-IT Recruitment</h6>
                    <a href="#" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="text-Center spearteconatctbox" onclick="#" style="cursor: pointer;">
                    <img src="{{ asset('assets/img/ct-icons6.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0">Leadership Hiring </h6>
                    <a href="#" class="email"><i class="fa fa-envelope" aria-hidden="true"></i> Enquire Now</a>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="text-Center spearteconatctbox" onclick="#" style="cursor: pointer;">
                    <img src="{{ asset('assets/img/ct-icons5.png') }}" width="60" class="mb-1">
                    <h6 class="mb-0">Hr Training</h6>
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
                    <h6 class="mb-0">Campus Recruitment <br> Walk-ins</h6>
                    <a href="tel:7397723052" class="email"><i class="fa fa-phone" aria-hidden="true"></i> 7397723052</a>
                </div>
            </div>
        </div>
        <!--Contact details with separate Department-->
        <div class="row mb-5">
            <div class="container pt-5" style="padding-top: 50px">
                <div class="row">
                    <div class="col-lg-6 col-md-12 text-center" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; border-radius:20px">
                                <div class="content-box small left no-margin-lg" style="padding-top: 20px">
                                    <div class="icon-shape-disable">
                                        <i class="fa fa-envelope" aria-hidden="true" style="margin-left: 16px; font-size:24px"></i>
                                    </div>
                                    <h5 class="text-color address16">Email</h5>
                                    <p class="address14" style="padding-top:10px">
                                        connect@pcginternational.in
                                    </p>
                                </div>
                                <hr class="separator">
                                <div class="content-box small left no-margin-lg">
                                    <div class="icon-shape-disable">
                                        <i class="fa fa-phone" aria-hidden="true" style="margin-left: 16px;"></i>
                                    </div>
                                    <h5 class="text-color address16">Phone</h5>
                                    <p class="address14" style="padding-top:10px">
                                        +91 88266 65843
                                    </p>
                                </div>
                                <hr class="separator">
                                <div class="content-box small left no-margin-lg">
                                    <div class="icon-shape-disable">
                                        <i class="fa fa-map-marker" aria-hidden="true" style="margin-left: 16px;"></i>
                                    </div>
                                    <h5 class="text-color address16">Address</h5>
                                    <p class="address14" style="padding-top:10px">
                                        B-1/44 , LGF , Malviya Nagar , Near Tikona Park ,<br>New Delhi -110017(India)
                                    </p>
                                </div>
                                <p class="mt-5 fw-bold">Stay connected with us on Social Media Links for the latest insights and updates from Prakhar Consulting Group.</p>
                    </div>  
                    <div class="col-lg-6 col-md-12 mt-3">
                        <div class="row">
                            <div class="container">
                                <form class="lms-form border">
                                    <div class="cttopic">Contact Us<br></div>
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
                                        <div class="col-md-6">
                                            <label>Our Services <span class="required">*</span></label>
                                            <select id="our-services">
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
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button type="submit" name="submit_contact" class="btn btn-default" value="Submit" id="submit_contact">
                                            Submit
                                        </button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.3568860133746!2d77.27348277428834!3d28.52899077572139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce119f672935f%3A0xc21f713864406965!2sPrakhar%20Consulting%20Group!5e0!3m2!1sen!2sin!4v1726650673662!5m2!1sen!2sin"  height="450" style="border:0; width:100%;  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
</section>
@endsection
