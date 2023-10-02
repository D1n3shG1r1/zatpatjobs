@extends("app")
@section("contentbox")
<div>
    <!-- job_listing_area_start  -->
    <div class="job_listing_area plus_padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="job_filter white-bg">
              <div class="form_inner white-bg">
                <h3>Filter</h3>
                <form action="#">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="single_field">
                        <input type="text" id="searchKeyWord" onblur="loadData(0);" placeholder="Job Title, Post..">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="single_field">
                        <input type="text" id="searchLocation" onblur="loadData(0);" placeholder="City, Country..">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="single_field">
                        <select name="ctl00$ContentPlaceHolder1$ddlPost" id="ddlPost" onchange="loadData(0);" class="wide">
                          <option value="-1">All Posts</option>
                          <option value="1">Machine Operator</option>
                          <option value="4">Sales Engineer ( Machines )</option>
                          <option value="5">Sales Engineer ( Tools )</option>
                          <option value="6">Application Engineer</option>
                          <option value="8">CNC Programmer</option>
                          <option value="9">Production Engineer ( CNC Fabrication )</option>
                          <option value="10">Production Engineer ( Tool Room )</option>
                          <option value="11">Production Engineer ( Plastic Processing )</option>
                          <option value="12">Trainee Engineer ( Mechanical )</option>
                          <option value="13">Trainee Engineer ( Electronics )</option>
                          <option value="14">Trainee Engineer ( CAD/CAM)</option>
                          <option value="15">Sales Engineer ( CAD/CAM)</option>
                          <option value="16">Production Manager</option>
                          <option value="17">Design Engineer ( SolidWorks)</option>
                          <option value="18">Design Engineer ( Solid Edge )</option>
                          <option value="19">Autocad Operator</option>
                          <option value="20">Engineer (Quality Control)</option>
                          <option value="21">Service Engineer ( Mechanical )</option>
                          <option value="22">Service Engineer ( Electronics )</option>
                          <option value="23">Service Engineer ( Digitronics )</option>
                          <option value="24">Sales Engineer ( Jobshop )</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="single_field">
                        <select class="wide" id="experience" onchange="loadData(0);">
                          <option value="Experience">Experience</option>
                          <option value="Fresher">Fresher</option>
                          <option value="Up to 2 years">Up to 2 years</option>
                          <option value="Up to 5 years">Up to 5 years</option>
                          <option value="More than 5 years">More than 5 years</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="single_field">
                        <input type="number" id="minSalary" onblur="loadData(0);" placeholder="Minimum Salary">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="single_field">
                        <input type="number" id="maxSalary" onblur="loadData(0);" placeholder="Maximum Salary">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="reset_btn">
                <a class="boxed-btn3 w-100" href="javascript:loadData(0);">Search Jobs</a>
              </div>
              <div class="reset_btn tac" style="margin-top: 10px;">
                <a class="boxed-btn2 w-100 tac" href="javascript:resetSearch();">Reset</a>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="recent_joblist_wrap">
              <div class="recent_joblist white-bg ">
                <div class="row align-items-center">
                  <div class="col-md-6">
                    <h4>Job Listing</h4>
                  </div>
                  <div class="col-md-6">
                    <div class="serch_cat d-flex justify-content-end">
                      <select id="ddlSortBy" onchange="loadData(0);">
                        <option value="id" data-display="Most Recent">Most Recent</option>
                        <option value="post">Post [A-Z]</option>
                        <option value="city">Location(city) [A-Z]</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="job_lists m-0">
              <div class="row" id="tblData"></div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="pagination_wrap">
                  <ul>
                      <li class="hideImp" id="lstPrevPage" title="Prev">
                        <a href="javascript:void(0);">
                          <i class="ti-angle-left"></i>
                        </a>
                      </li>
                      <!--
                      <li class="hideImp" id="lstPrevPage2">
                        <a href="javascript:loadData(-1);">
                          <span>
                            <span id="lblPrevPageNumber"></span>
                          </span>
                        </a>
                      </li>
                      -->
                      <li class="" id="lstCurrPage" title="Current Page">
                        <a href="javascript:void(0);">
                          <span>
                            <span id="lblCurrPageNumber">1</span>
                          </span>
                        </a>
                      </li>
                      <!--
                      <li class="hideImp" id="lstNextPage2">
                        <a href="javascript:loadData(1);">
                          <span>
                            <span id="lblNextPageNumber"></span>
                          </span>
                        </a>
                      </li>
                      -->
                      <li class="hideImp" id="lstNextPage" title="Next">
                        <a href="javascript:void(0);">
                          <i class="ti-angle-right"></i>
                        </a>
                      </li>
                      <li class="" style="margin: auto; float: right;">
                          <span id="lblRowCount">9</span>
                          Jobs found
                      </li>
                  </ul>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- job_listing_area_end  -->
    <div class="top_companies_area">
      <div class="container">
        <div class="row align-items-center mb-40">
          <div class="col-lg-6 col-md-6">
            <div class="section_title">
              <h3>Partner Portals</h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-xl-4 col-md-12 tac">
            <div class="single_company">
              <a href="http://zatpatmachines.com" target="_blank">
                <img src="https://www.zatpatmachines.com/images/Zatpat-logo-2.png" width="200" />
              </a>
              <br />
              <a href="http://zatpatmachines.com" target="_blank">
                <h3>Zatpat Machines</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-12 tac">
            <div class="single_company">
              <a href="http://zatpatmart.com" target="_blank">
                <img src="http://zatpatmart.com/images/thumbs/0000527_0000300_0.png" width="245" />
              </a>
              <br />
              <a href="http://zatpatmart.com" target="_blank">
                <h3>Zatpat Mart</h3>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-xl-4 col-md-12 tac">
            <div class="single_company">
              <a href="http://tools.zatpatmachines.com" target="_blank">
                <img src="https://tools.zatpatmachines.com/cdn/shop/files/ZATPATTools_176x.png?v=1635226621" width="190" />
              </a>
              <br />
              <a href="http://tools.zatpatmachines.com" target="_blank">
                <h3>Zatpat Tools</h3>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style>
  .azd-wrapper .dataTables_wrapper .dataTables_paginate {
    float: right;
    text-align: right;
    padding-top: 15px;
}

.paginate_button{
  padding: 9px 27px 9px 27px;
    font-size: 14px;
    color: #FECC00 !important;
    border: 1px solid #FECC00;
    background: transparent;
    display: inline-block;
    font-family: "Roboto", sans-serif;
    font-weight: 500;
    border-radius: 5px;
    text-align: center;
    text-transform: capitalize;
    transition: 0.3s;
    cursor: pointer;
}
  </style>
  @endsection
  @push("js")
  <script>
    $(function(){
      setTimeout(function(){
        getJobs(1);
      }, 500);
    })
  
    function getJobs(page){
      var accessToken = "{{$accessToken}}";
      var requrl = "getJobs";
      var jsondata = {"_token":CSRFTOKEN,"accessToken":accessToken,"page":page};
      callajax(requrl, jsondata, function(resp){

          if(resp.C == 100){
            var result = resp.R;
            var jobs = result.data;
            var info = result.info;
            var jobListHtml = '';
            $.each(jobs, function(i,v){

              var tmpJobId = v.id;
              var tmpJobOpeningName =v.Job_Opening_Name;
              var tmpJobtitle = v.Posting_Title;

              var tmpIndustry = v.Industry;
              var tmpSalary = v.Salary;
              var tmpCurrencySymbol = v.$currency_symbol;
              var tmpState = v.State;
              var tmpCountry = v.Country;
              var tmpCity = v.City;
              var tmpDateOpened = v.Date_Opened;
              
              var tmpJobOpeningId = "";
              var tmpnoOfpostions = "";
             
              jobListHtml += '<div class="col-lg-12 col-md-12">\
                <div class="single_jobs white-bg d-flex justify-content-between">\
                  <div class="jobs_left d-flex align-items-center">\
                    <div class="thumb">\
                      <img src="img/svg_icon/1.svg" alt="">\
                    </div>\
                    <div class="jobs_conetent">\
                      <a href="javascript:void(0)">\
                        <h4>'+tmpJobtitle+'<span style="display:none;" class="numberOfPosts"> [ '+tmpnoOfpostions+' Posts ]</span>\
                        </h4>\
                      </a>\
                      <div class="links_locat d-flex align-items-center">\
                        <div class="location">\
                          <p>\
                            <i class="fa fa-map-marker"></i>'+tmpCity+', '+tmpState+', '+tmpCountry+'\
                          </p>\
                        </div>\
                        <div style="display:none;" class="location">\
                          <p>\
                            <i class="fa fa-clock-o"></i>Up to 2 years\
                          </p>\
                        </div>\
                      </div>\
                      <div class="links_locat d-flex align-items-center">\
                        <div class="location">\
                          <p>'+tmpCurrencySymbol+' '+tmpSalary+' /month </p>\
                        </div>\
                      </div>\
                    </div>\
                  </div>\
                  <div class="jobs_right">\
                    <div class="apply_now">\
                      <a href="apply?jobId='+tmpJobId+'" class="boxed-btn3">Apply</a>\
                    </div>\
                    <div class="date">\
                      <p>Posted On '+tmpDateOpened+'</p>\
                    </div>\
                  </div>\
                </div>\
              </div>';

                var lastIdx = Object.keys(jobs).length - 1; 
                if(i == lastIdx){
                  $("#tblData").html(jobListHtml);
                }

            });

            if(info.page > 1){
              $("#lstPrevPage").removeClass("hideImp");
            }else{
              $("#lstPrevPage").addClass("hideImp");
            }
            
            var prevPage = info.page - 1;
            var nextPage = info.page + 1;
            
            $("#lblCurrPageNumber").html(info.page);
            $("#lstPrevPage").attr("onclick","getJobs("+prevPage+");");
            $("#lstNextPage").attr("onclick","getJobs("+nextPage+");");

            if(info.more_records == true){
              //show next button
              $("#lstNextPage").removeClass("hideImp");
              
            }else{
              //hide next button
              $("#lstNextPage").addClass("hideImp");
            }
          }

      });
    }
  </script>
  @endpush