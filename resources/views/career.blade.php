@extends('layouts.master', ['title' => 'Career'])
@section('contents')
<section class="project-area pd-top-50 pd-bottom-90">
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="isotope-filters project-isotope-btn text-center mb-5">    
                    <h2 class="text-center mb-5">Current openings</h2>
                </div>
            </div>
        </div>  -->
        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="isotope-filters project-isotope-btn text-center mb-5">
                    <ul class="nav nav-tabs tab-button-style mt-4" id="myTab" role="tablist">
                        <!--<li class="nav-item" role="presentation">-->
                        <!--    <button class="nav-link active" id="home-tab" data-toggle="tab"-->
                        <!--        data-target="#home" type="button" role="tab" aria-controls="home"-->
                        <!--        aria-selected="true">Products</button>-->
                       <!--</li>-->    
                         <h4 class="font-weight-bold">Job Openings</h4>
                        <!--<li class="nav-item" role="presentation">-->
                        <!--    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"-->
                        <!--        type="button" role="tab" aria-controls="profile" aria-selected="false">Achievement</button>-->
                        <!--</li>-->
                    </ul> 

                    <div class="tab-content" id="myTabContent">
                        <!--<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">-->
                        <!--    <p class="content mt-4"></p>-->
                        <!--    <div class="list-wrap mt-4">-->
                        <!--    <div class="container">-->
                        <!--            <div class="section-title text text-center">-->
                        <!--                <h5 class="sub-title left-border">Our Products</h5>-->
                        <!--                <h3>Range of our products includes, but not limited to:-->
                        <!--                </h3>-->
                        <!--            </div>-->
                        <!--            <div class="row">-->
                                        
                                        
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/caryzone.png') }}"  class="carrier_img" alt="img">-->

                        <!--                        <div class="details">-->
                        <!--                            <h3>Caryzon</h3> -->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>Caryzon</h3> -->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                                        
                                        
                                        
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                             <img src="{{ asset('assets/img/our-products/crazy eyeware.png') }}" class="carrier_img"  alt="img">-->
                                                
                        <!--                        <div class="details">-->
                        <!--                            <h3>Crazy Eyeware</h3>-->
                        <!--                            <p>Naukriyan.com is our owned and one of the finest job portal that carries most of e-governance jobs from various government Departments, Ministries and public sector Units across India</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>Crazy Eyeware</h3>-->
                        <!--                            <p>Naukriyan.com is our owned and one of the finest job portal that carries most of e-governance jobs from various government Departments, Ministries and public sector Units across India</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="https://naukriyan.com/" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                       <img src="{{ asset('assets/img/our-products/d-tras.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>D-TRAS (Drone Threat Rating Application System)</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                           <h3>D-TRAS (Drone Threat Rating Application System)</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                                       
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/gravity.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Gravity International</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                               <h3>Gravity International</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                 <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/green fortune.png') }}" class="carrier_img"   alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Green Fortune Industries Pvt. Ltd.</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>Green Fortune Industries Pvt. Ltd.</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/guftgu.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Naukriyan Guftgu</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                             <h3>Naukriyan Guftgu</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/iba.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>International Bamboo Association</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                              <h3>International Bamboo Association</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/Namdeo food & Beverages.png') }}" class="carrier_img" alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Namdeo Food & Beverages Pvt. Ltd.</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                              <h3>Namdeo Food & Beverages Pvt. Ltd.</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/naukriyan.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Naukriyan</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>Naukriyan</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/ndgc.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>E-Gov Technoventures Ltd.</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                           <h3>E-Gov Technoventures Ltd.</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/pcg.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Prakhar Consulting Group</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>Prakhar Consulting Group</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/prakhar aviation.png') }}" class="carrier_img"   alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Prakhar Aviation Technologies Pvt. Ltd. </h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                             <h3>Prakhar Aviation Technologies Pvt. Ltd. </h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/WhatsApp Image 2024-05-31 at 5.23.54 PM.jpeg') }}"class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Namdeo Matrimony</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                          <h3>Namdeo Matrimony</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/prayank eyeware.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Prayank Eyeware & Healthcare</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                               <h3>Prayank Eyeware & Healthcare</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/prayank technology & healthcare-1.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Prayank Technology and Healthcare Private Limited</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>Prayank Technology and Healthcare Private Limited</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/uav edutech.png') }}" class="carrier_img"  alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>UAV Edutech & Research Foundation</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>UAV Edutech & Research Foundation</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--                <div class="col-lg-4 col-md-6">-->
                        <!--                    <div class="single-service-inner text-center career_div_height">-->
                        <!--                        <img src="{{ asset('assets/img/our-products/wrapmygift.png') }}" class="carrier_img" alt="img">-->
                        <!--                        <div class="details">-->
                        <!--                            <h3>Wrap My Gift</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                        </div>-->
                        <!--                        <div class="details-hover-wrap">-->
                        <!--                            <div class="details-hover">-->
                        <!--                            <h3>Wrap My Gift</h3>-->
                        <!--                            <p>Wrap my gift is a Corporate gifting venture of Prakhar Softwares Solutions Pvt. Ltd. we are proud to have an e commerce website various gifting solutions for each and every corporate purpose that rises in the corporate culture for internal and external purposes.</p>-->
                        <!--                                <a class="btn btn-base btn-small" href="#" target="_blank">View Details</a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                                        
                                       
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">-->
                        <!--    <p class="content mt-4"></p>-->
                        <!--    <div class="list-wrap mt-4">-->
                        <!--        <section class="counters2 counters visible">-->
                        <!--            <div class="container pt-4 mt-2">-->
                        <!--                <div class="row">-->
                        <!--                    <div class="col-md-12 col-sm-12">-->
                        <!--                        <div class="section-title text-cener">-->
                        <!--                            <h5 class="sub-title left-border">Our Achievements</h5>-->
                        <!--                            <h2>We thank you for giving us chance to present the following facts about our achievements:</h2>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6 col-sm-6">-->
                        <!--                        <div class="text">-->
                        <!--                            <p class="pt-3">Our growth has taken place very rapidly in each and every field where we started to work. At the moment when our business was just an idea, we kept a clear approach to stay transparent, trustworthy and tenacious to achieve more.-->
                        <!--                                We started delivering the best services just after taking the first step. Today we have business spread all over India with not only the corporate clients, but also with various state/union government undertaking departments,-->
                        <!--                                Public Sector Units (PSU) and ministries. With our trend setting approach towards our fundamental scope of work, we have acquired sufficient and of course the relevant space in the industry. Due to which we are proud to have:-->
                        <!--                            </p>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                    <div class="col-md-6 col-sm-6">-->
                        <!--                        <img src="{{ asset('assets/images/yelling-clipart-employment-law-6.png') }}" alt="achievements" class="img-fluid">-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </section>   -->
                        <!--        <section class="px-5">-->
                        <!--        <div class="container mb-4 ">-->
                        <!--            <div class="section-title text-center">-->
                        <!--                <h5 class="sub-title left-border">Prakhar Softwares Certificates</h5>-->
                        <!--                <h2>Below are the latest certificates achieved by Prakhar-->
                        <!--                </h2>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--        <div class="row justify-content-center"></div>-->
                        <!--    </section>                          -->
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <div class="tab-pane fade active show" id="event" role="tabpanel" aria-labelledby="event-tab">
                            <div class="list-wrap mt-4">
                                <div class="row" id="career_id" >

                                </div>


                              
                            </div>
                            <div id="loader" style="display: none;">
                                <section class="dots-container">
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                    <div class="dot"></div>
                                </section>
                            </div>
                            
                        </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>  
</div>      
</section>
@endsection
@section('scripts')
<script>

$(document).ready(function(){

// });


    //     var app = new Vue({
    //       el: '#app',
    //       data() {
    //         return {
    //             sectors: [],
    //             jobs: [],
    //             users: {},
    //             sec: []
    //         }
    //       },

    //       created() {
    //         this.getSector();
    //         this.getJobsBySectorId(1);
    //       },

    //       methods: {
    //        getSector() {
    //           let self = this;
    //           axios.get('https://naukriyan.com/getjobscategory/prakharsoftwares').then((response) => {
    //             this.sectors = response.data;
    //             $.each(response.data, function(key, value) {
    //               self.sec.push(value.job_sector);
    //             });
    //           });
    //         },

    // getJobsBySectorId(id) {
    //           axios
    //             .get("https://naukriyan.com/getjobs/prakharsoftwares", { params: { sector_id: +id } })
    //             .then((response) => {
    //                 console.log(response);
    //               this.jobs = response.data;
    //             });
    //         },

    //       }
    //     })

    // $("#event-tab").click(function(){

    $(document).ready(function() {
    // Show loader
    $("#loader").show();

    $.ajax({
        type: 'GET',
        url: "https://naukriyan.com/getjobs/prakharsoftwares?sector_id=1",
        success: function(response) {
            console.log(response);
            var html = '';

            if (response) {
                $.each(response, function(index, job) {
                    var skillsArray = job.job_skills ? job.job_skills.split(',') : [];

                    var exp = '';
                    if (job.job_sector_id === 3) {
                        exp = job.last_apply_date;
                    } else {
                        exp = (job.main_exp === '0' && job.max_exp === '0') ? 'Fresher' : job.main_exp + ' Yr';
                    }

                    var skillsHtml = '';
                    $.each(skillsArray, function(index, skill) {
                        skillsHtml += `
                            <div class="col-6 col-sm-4">
                                <p class="info">${skill}</p>
                            </div>
                        `;
                    });

                    var cardHtml = `
                        <div class="col-md-6 col-lg-6">
                            <div class="card-container border h-auto p-2 mt-4">
                                <div class="row pt-3 job-description">
                                    <div class="col-6 img-container text-left">
                                        <img src="{{ asset('assets/img/pcg-web-logo.png') }}" alt="logo" />
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="https://naukriyan.com/#/viewjobs/${job.id}" target="_blank">
                                            <button type="button" class="btn btn-dark apply-now">
                                                <span class="text-white">Job Description</span>
                                                <i class="fa fa-arrow-circle-right" aria-hidden="true" style="color: white;"></i>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12 text-left mt-4 mb-4">
                                        <h5>${job.title}</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    ${skillsHtml}
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6 personal-info mb-2">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                        <p>${exp}</p>
                                    </div>
                                    <div class="col-12 col-sm-6 personal-info mb-2">
                                        <span><i class="fa fa-inr" aria-hidden="true"></i></span>
                                        <p>Not Disclosed</p>
                                    </div>
                                    <div class="col-12 col-sm-6 personal-info calender">
                                        <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>
                                        <p>${job.created_at}</p>
                                    </div>
                                    <div class="col-12 col-sm-6 personal-info calender">
                                        <span><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                        <p>${job.main_exp} - ${job.max_exp} <span> Years Exp</span></p>
                                    </div>
                                </div>
                                <div class="row btn-container">
                                    <a href="https://naukriyan.com/#/viewjobs/${job.id}" target="_blank">
                                        <button type="button" class="btn btn-dark apply-now">
                                            <i class="fa fa-file-text-o text-white" aria-hidden="true" style="position: absolute; left: 22px; top: 18px;"></i>
                                            <span class="text-white">Apply Now</span>
                                        </button>
                                    </a>
                                    <a href="https://api.whatsapp.com/send/?phone=${job.com_contact}&text=I+am+interested+in+your+job+of+${job.title}" target="_blank">
                                        <button type="button" class="btn btn-success chatRecuriter recruiter-btn">
                                            <i class="fa fa-whatsapp text-white" aria-hidden="true"></i>
                                            <span class="text-white">Chat With Recruiter</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>`;
                    html += cardHtml;
                });
                $("#career_id").append(html);
            } else {
                $("#career_id").append("<h1>No jobs found</h1>");
            }
        },
        error: function() {
            $("#career_id").append("<h1>Error fetching data</h1>");
        },
        complete: function() {
            
            $("#loader").hide();
        }
    });
});


});

    
    </script>
@endsection