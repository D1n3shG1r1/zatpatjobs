@extends("app")
@section("contentbox")
@php
$jobDetails = $details["data"][0];
$id = $jobDetails["id"];
@endphp
<div class="job_details_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job_details_header">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <h4>
                                        <span id="ContentPlaceHolder1_lblPost2">{{$jobDetails["Posting_Title"]}}</span>
                                    </h4>

                                    <div class="links_locat d-flex align-items-center">
                                        <div class="location">
                                            <p>
                                                <i class="fa fa-map-marker"></i>
                                                <span id="ContentPlaceHolder1_lblLocation2">{{$jobDetails["City"]}}, {{$jobDetails["State"]}}, {{$jobDetails["Country"]}}</span>
                                            </p>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a href="#applySectionRedirect" class="boxed-btn3 tar fr">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="descript_wrap white-bg">
                        <div class="single_wrap">
                            <h4>Job description</h4>
                            <p id="ContentPlaceHolder1_lblJobDesc">{{$jobDetails["Job_Description"]}}</p>
                        </div>
                        
                        
                        
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="job_sumary">
                        <div class="summery_header">
                            <h3>Job Summary</h3>
                        </div>
                        <div class="job_content">
                            <ul>
                                <li>Published on: <span>
                                    <span id="ContentPlaceHolder1_lblEntDate">{{$jobDetails["Date_Opened"]}}</span>
                                </span></li>
                                <li>No Of Positions: <span>
                                    <span id="ContentPlaceHolder1_lblNoOfPostopms">{{$jobDetails["Number_of_Positions"]}}</span></span></li>
                                <li>Salary: <span>
                                    <span id="ContentPlaceHolder1_lblPkg">₹ {{$jobDetails['$currency_symbol']}} {{$jobDetails["Salary"]}} /month</span></span></li>
                                <li>Location: <span>
                                    <span id="ContentPlaceHolder1_lblLocation">{{$jobDetails["City"]}}, {{$jobDetails["State"]}}, {{$jobDetails["Country"]}}</span></span></li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Related website or contact details
                    <div class="share_wrap w-100" style="display: inline-block" id="applySectionRedirect">
                        <div id="ContentPlaceHolder1_dvEmployerInfo" style="margin-bottom: 10px;">
                            
                            <h4 style="margin-bottom: 0px">
                                <span id="ContentPlaceHolder1_lblEmployerName">Vekaria Engineering Works Pvt. Ltd.</span></h4>
                            <span id="ContentPlaceHolder1_lblEmployerEmail" style="font-weight: normal; color: #7A838B;">production@vekaria.com</span><br>
                            <span id="ContentPlaceHolder1_lblEmployerLocation" style="font-weight: normal; color: #7A838B;">Jamnagar, Gujarat, India</span><br>
                        </div>

                        <div style="display: contents; margin-top: 5px;">
                            <span>Connect:</span>
                            <ul>
                                <li><a href="javascript:void(0);" id="anchorEmployerPhone" onclick="redictToReleatedWebsite('Connect','Call'); window.open('tel:+9909909475','_self');"><i class="fa fa-phone"></i></a></li>
                                <li><a href="https://web.whatsapp.com/send?phone=9909909475&amp;text=I am Interested in Job Trainee Engineer ( CAD/CAM) for Jamnagar, Gujarat, India" id="anchorEmployerWhatsapp" onclick="redictToReleatedWebsite('Connect','WhatsApp');" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                                <li><a href="mailto:production@vekaria.com?subject=Job reference from zapat jobs for Trainee Engineer ( CAD/CAM)&amp;body=I am Interested in Job Trainee Engineer ( CAD/CAM) for Jamnagar, Gujarat, India" id="anchorEmployerMail" onclick="redictToReleatedWebsite('Connect','Email');" target="_blank"><i class="fa fa-envelope"></i></a></li>
                            </ul>
                        </div>

                    </div>
                    -->
                </div>
            </div>
            <style>
                #applySectionRedirect label {
                    /*color: black;*/
                    font-size: 12px;
                    margin-bottom: 0px;
                }
            </style>
            <div class="row" id="applySectionRedirect">
                <div class="apply_job_form white-bg">
                    <h4>Apply for the job</h4>
                    
                        <div class="row">
                            
                            <div class="col-md-4">
                                <label for="txtApplyEmail"><span class="colorRed">*</span>Email</label>
                                <div class="input_field">
                                    <input name="txtApplyEmail" type="email" id="txtApplyEmail" email="" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="txtApplyName"><span class="colorRed">*</span>Full Name</label>
                                <div class="input_field">
                                    <input name="txtApplyName" type="text" id="txtApplyName" required="" placeholder="Full name">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="txtApplyNumber"><span class="colorRed">*</span>Mobile</label>
                                <div class="input_field">
                                    <input name="txtApplyNumber" type="number" id="txtApplyNumber" required="" placeholder="Contact Number">
                                </div>
                            </div>


                            <div class="col-md-2">
                                <label for="txtApplyStreet"><span class="colorRed">*</span>Street</label>
                                <div class="input_field">
                                    <input name="txtApplyStreet" type="text" id="txtApplyStreet" required="" placeholder="Street">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label for="txtApplyCity"><span class="colorRed">*</span>City</label>
                                <div class="input_field">
                                    <input name="txtApplyCity" type="text" id="txtApplyCity" required="" placeholder="Current City">
                                </div>
                            </div>
                            
                            <div class="col-md-2">
                                <label for="txtApplyState"><span class="colorRed">*</span>State/Province</label>
                                <div class="input_field">
                                    <input name="txtApplyState" type="text" id="txtApplyState" required="" placeholder="State">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <label for="txtApplyCountry"><span class="colorRed">*</span>Country</label>
                                <div class="input_field">
                                    <input name="txtApplyCountry" type="text" id="txtApplyCountry" required="" placeholder="Current Country">
                                </div>
                            </div>

                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlExp"><span class="colorRed">*</span>Total Experience You Have</label>
                                    <div class="default-select w100">
                                        <select name="ddlExp" id="ddlExp" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                        <option value="0">Fresher</option>
                                        <option value="1">1 year</option>
                                        <option value="2">2 years</option>
                                        <option value="3">3 years</option>
                                        <option value="4">4 years</option>
                                        <option value="5">5 years</option>
                                        <option value="6">6 years</option>
                                        <option value="7">7 years</option>
                                        <option value="8">8 years</option>
                                        <option value="9">9 years</option>
                                        <option value="10">10 years</option>
                                    </select>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlCurrentJobTitle"><span class="colorRed">*</span>Current Job Title</label>
                                    <div class="default-select w100">
                                        <select name="ddlCurrentJobTitle" id="ddlCurrentJobTitle" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Fresher">Fresher</option>
                                            <option value="Machine Operator- CNC Press Brake">Machine Operator- CNC Press Brake</option>
                                            <option value="Machine Operator - CNC Turret Punch Press">Machine Operator - CNC Turret Punch Press</option>
                                            <option value="Machine Operator - Fiber Laser cutting">Machine Operator - Fiber Laser cutting</option>
                                            <option value="Machine Operator - CO2 Laser cutting">Machine Operator - CO2 Laser cutting</option>
                                            <option value="Machine Operator - VMC">Machine Operator - VMC</option>
                                            <option value="Machine OPerator - HMC">Machine OPerator - HMC</option>
                                            <option value="Machine OPerator - CNC Lathe">Machine OPerator - CNC Lathe</option>
                                            <option value="Machine OPerator - EDM Wirecu">Machine OPerator - EDM Wirecu</option>
                                            <option value="Machine OPerator - EDM Sinker">Machine OPerator - EDM Sinker</option>
                                            <option value="Machine Operator - Injection Molding">Machine Operator - Injection Molding</option>
                                            <option value="Design Engineer">Design Engineer</option>
                                            <option value="CAD CAM Programmer">CAD CAM Programmer</option>
                                            <option value="CNC Service Engineer">CNC Service Engineer</option>
                                            <option value="Draftsman">Draftsman</option>
                                            <option value="Helper">Helper</option>
                                            <option value="Welder">Welder</option>
                                            <option value="Sales Engineer">Sales Engineer</option>
                                            <option value="Sales Executive">Sales Executive</option>
                                            <option value="Sales Manager">Sales Manager</option>
                                            <option value="Production Manager">Production Manager</option>
                                            <option value="Production Engineer">Production Engineer</option>
                                            <option value="Plant Head">Plant Head</option>
                                            <option value="Plant Manager">Plant Manager</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="txtExpectedSalary"><span class="colorRed">*</span>Expected Salary</label>
                                    <div class="input_field">
                                        <input name="txtExpectedSalary" type="text" id="txtExpectedSalary" placeholder="Expected Salary">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="txtSkillSet"><span class="colorRed">*</span>Skill Set</label>
                                    <div class="input_field">
                                        <input name="txtSkillSet" type="text" id="txtSkillSet" placeholder="Expected Salary">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlEducation"><span class="colorRed">*</span>Highest Qualification Held</label>
                                    <div class="default-select w100">
                                        <select name="ddlEducation" id="ddlEducation" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="None">None</option>
                                            <option value="M.C.A.">M.C.A.</option>
                                            <option value="B.E.">B.E.</option>
                                            <option value="B.SC.">B.SC.</option>
                                            <option value="M.S">M.S</option>
                                            <option value="B.Tech">B.Tech</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="txtApplyCurrentCompanyName"><span class="colorRed">*</span>Current Employer</label>
                                <div class="input_field">
                                    <input name="txtApplyCurrentCompanyName" type="text" id="txtApplyCurrentCompanyName" placeholder="Current Company Name">
                                </div>
                            </div>
                           
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="txtCurrentSalary"><span class="colorRed">*</span>Current Salary</label>
                                    <div class="input_field">
                                        <input name="txtCurrentSalary" type="text" id="txtCurrentSalary" placeholder="Current Salary">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                            
                                <label for="txtCurrentSalary"><span class="colorRed">*</span>Additional Info</label>
                                <div class="input_field">
                                    <textarea name="txtAdditionalInfo" id="txtAdditionalInfo" required="" cols="30" rows="4" placeholder="Additional Info"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="submit_btn tar">
                                    
                                    <input type="button" name="" value="Apply Now" id="btnApply" class="boxed-btn3" onclick="apply();">
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <link href="js/tagit/jquery.tagit.css" rel="stylesheet" />
    <style>
    ul.tagit{
        padding: 0px 0px 0px 2px !important;
        border: 1px solid #E8E8E8 !important;
    }

    li.tagit-new{
        padding: 0 !important;
        margin: 0 !important;
    }

    li.tagit-new input{
        margin: 0 !important;
        border: none !important;
        height: 37px !important;
    }

    ul.tagit li.tagit-choice .tagit-close {
        cursor: pointer !important;
        position: absolute !important;
        right: .1em !important;
        top: 20% !important;
        margin-top: -8px !important;
        margin-right: -2px !important;
        line-height: 17px !important;
    }
    </style>
@endsection
@push("js")
<script src="js/tagit/tag-it.js"></script>
<script>

$(function(){
    var AVAILABLETAGS = [];
    $('#txtSkillSet').tagit({
        availableTags: AVAILABLETAGS,
        allowSpaces: true,
        placeholderText:"Type to add skills",
        showAutocompleteOnFocus: true,
        beforeTagAdded: function(evt, ui) {
            /*if (!ui.duringInitialization) {
                var tmpTagLbl = $('#txtSkillSet').tagit('tagLabel', ui.tag);
                var tmpTagLblIdx = AVAILABLETAGS.indexOf(tmpTagLbl);
                
                if(tmpTagLblIdx < 0){
                $(ui.tag[0]).find('a').trigger("click"); //<a> is a remove/close button of the tag
                }
            }*/
        },
    });
});



function apply(){
    
    var id = "{{$id}}";
    var accessToken = "{{$accessToken}}";
    var fullName = $("#txtApplyName").val(); //full name
    var email = $("#txtApplyEmail").val(); // email
    var phoneNo = $("#txtApplyNumber").val(); // phone no
    var street = $("#txtApplyStreet").val(); //street
    var city = $("#txtApplyCity").val(); //city
    var state = $("#txtApplyState").val(); //state
    var country = $("#txtApplyCountry").val(); //country
    var currentCompany = $("#txtApplyCurrentCompanyName").val(); //current company
    var education = $("#ddlEducation").val(); //education
    var totalExperience = $("#ddlExp").val(); //total experience
    var currentJobTitle = $("#ddlCurrentJobTitle").val(); //current job title
    var skillSet = $("#txtSkillSet").val(); //skill set
    var currentSalary = $("#txtCurrentSalary").val(); //current salary
    var expectedSalary = $("#txtExpectedSalary").val(); //ExpectedSalary
    var additionalInfo = $("#txtAdditionalInfo").val(); //Additional Info
    
    if(!isRealValue(email)){
        var err = 1;
        var msg = "Please fill your Email";
        showToast(err,msg);
    }else if(!isRealValue(fullName)){
        var err = 1;
        var msg = "Please fill your Name";
        showToast(err,msg);
    }else if(!isRealValue(phoneNo)){
        var err = 1;
        var msg = "Please fill your Contact Number";
        showToast(err,msg);
    }else if(!isRealValue(street)){
        var err = 1;
        var msg = "Please fill your Street";
        showToast(err,msg);
    }else if(!isRealValue(city)){
        var err = 1;
        var msg = "Please fill your City";
        showToast(err,msg);
    }else if(!isRealValue(state)){
        var err = 1;
        var msg = "Please fill your State";
        showToast(err,msg);
    }
    else if(!isRealValue(country)){
        var err = 1;
        var msg = "Please fill your Country";
        showToast(err,msg);
    }else if(!isRealValue(totalExperience)){
        var err = 1;
        var msg = "Please select your Total Experience";
        showToast(err,msg);
    }
    else if(!isRealValue(currentJobTitle)){
        var err = 1;
        var msg = "Please select your Current Job Title";
        showToast(err,msg);
    }else if(!isRealValue(expectedSalary)){
        var err = 1;
        var msg = "Please fill your Expected Salary";
        showToast(err,msg);
    }else if(!isRealValue(skillSet)){
        var err = 1;
        var msg = "Please fill your Skill Set";
        showToast(err,msg);
    }else if(!isRealValue(education)){
        var err = 1;
        var msg = "Please select your Highest Qualification";
        showToast(err,msg);
    }else if(!isRealValue(currentCompany)){
        var err = 1;
        var msg = "Please fill your Current Employer";
        showToast(err,msg);
    }else if(!isRealValue(currentSalary)){
        var err = 1;
        var msg = "Please fill your Current Salary";
        showToast(err,msg);
    }else if(!isRealValue(additionalInfo)){
        var err = 1;
        var msg = "Please fill Additional Info";
        showToast(err,msg);
    }else{

        var requrl = "applyJob";
        var jsondata = {
            "_token":CSRFTOKEN,
            "accessToken":accessToken,
            "id":id,
            "fullName":fullName,
            "email":email,
            "phoneNo":phoneNo,
            "street":street,
            "city":city,
            "state":state,
            "country":country,
            "currentCompany":currentCompany,
            "education":education,
            "totalExperience":totalExperience,
            "currentJobTitle":currentJobTitle,
            "skillSet":skillSet,
            "currentSalary":currentSalary,
            "expectedSalary":expectedSalary,
            "additionalInfo":additionalInfo
        };

        callajax(requrl, jsondata, function(resp){
            console.log(resp);
        });
        
    }
     
}
</script>
@endpush