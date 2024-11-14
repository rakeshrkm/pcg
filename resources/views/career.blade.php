@extends('layouts.master', ['title' => 'Career'])
@section('contents')
<section class="project-area pd-top-50 pd-bottom-90">
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="isotope-filters project-isotope-btn text-center mb-5">
                    <ul class="nav nav-tabs tab-button-style mt-4" id="myTab" role="tablist">
                        <h4 class="font-weight-bold">Job Openings</h4>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="event" role="tabpanel" aria-labelledby="event-tab">
                            <div class="list-wrap mt-4">
                                <div class="row" id="career_id">
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
    $(document).ready(function() {

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
                type: 'GET'
                , url: "https://naukriyan.com/getjobs/prakharsoftwares?sector_id=1"
                , success: function(response) {

                    var html = '';

                    if (response) {
                        $.each(response, function(index, job) {
                            var skillsArray = job.job_skills ? job.job_skills.split(',') : [];
                            let newSkillarry = skillsArray.slice(0, 6);


                            var exp = '';
                            if (job.job_sector_id === 3) {
                                exp = job.last_apply_date;
                            } else {
                                exp = (job.main_exp === '0' && job.max_exp === '0') ? 'Fresher' : job.main_exp + ' Yr';
                            }

                            var skillsHtml = '';
                            $.each(newSkillarry, function(index, skill) {
                                skillsHtml += `
                         <div class="recommendation-filed">
                            <div class="recommendation-designer">
                               <div class="designer">${skill}</div> 
                         </div>
                            </div>
                        `;
                            });

                            var cardHtml = `
                        <div class="col-md-6 col-lg-6 h-10">
                            <div class="card-container border p-2 mt-4">
                                <div class="row pt-3 job-description">
                                    <div class="col-md-6 text  col-sm-5 img-container ">
                                        <img src="{{ asset('assets/img/pcg-web-logo.png') }}" alt="logo" />
                                    </div>
                                    <div class="col-md-6 col-m-3 mt-2">
                                        <a href="https://naukriyan.com/job_details/${job.id}" target="_blank">
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
                                    <div>
                                         <a href="https://naukriyan.com/job_details/${job.id}" target="_blank">
                                        <button type="button" class="btn btn-dark job_id">
                                            <i class="fa fa-file-text-o text-white" aria-hidden="true"></i>
                                            <span class="text-white">Apply Now</span>
                                        </button>
                                    </a>
                                        
                                    </div>
                                    <div>
                                        <a href="https://api.whatsapp.com/send/?phone=${job.com_contact}&text=I+am+interested+in+your+job+of+${job.title}" target="_blank">
                                        <button type="button" class="btn btn-success chatRecuriter recruiter-btn">
                                            <i class="fa fa-whatsapp text-white" aria-hidden="true"></i>
                                            <span class="text-white">Chat With Recruiter</span>
                                        </button>
                                    </a>
                                        
                                     </div>
                                   
                                    
                                </div>
                            </div>
                        </div>`;
                            html += cardHtml;
                        });
                        $("#career_id").append(html);
                    } else {
                        $("#career_id").append("<h1>No jobs found</h1>");
                    }
                }
                , error: function() {
                    $("#career_id").append("<h1>Error fetching data</h1>");
                }
                , complete: function() {

                    $("#loader").hide();
                }
            });
        });


    });

</script>
@endsection
