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
                #dvaApplySection label {
                    /*color: black;*/
                    font-size: 12px;
                    margin-bottom: 0px;
                }
            </style>
            <div class="row" id="dvaApplySection">
                <div class="apply_job_form white-bg">
                    <h4>Apply for the job</h4>
                    
                        <div class="row">
                            <div class="col-md-4">
                                <label for="txtApplyName"><span class="colorRed">*</span>Your Name</label>
                                <div class="input_field">
                                    <input name="txtApplyName" type="text" id="txtApplyName" required="" placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="txtApplyEmail"><span class="colorRed">*</span>Your Email Address</label>
                                <div class="input_field">
                                    <input name="txtApplyEmail" type="email" id="txtApplyEmail" email="" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="txtApplyNumber"><span class="colorRed">*</span>Your Contact Number</label>
                                <div class="input_field">
                                    <input name="txtApplyNumber" type="number" id="txtApplyNumber" required="" placeholder="Contact Number">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="txtApplyCity"><span class="colorRed">*</span>Your City</label>
                                <div class="input_field">
                                    <input name="txtApplyCity" type="text" id="txtApplyCity" required="" placeholder="Current City">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="txtApplyCountry"><span class="colorRed">*</span>Your Country</label>
                                <div class="input_field">
                                    <input name="txtApplyCountry" type="text" id="txtApplyCountry" required="" placeholder="Current Country">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="txtApplyBirthDate"><span class="colorRed">*</span>Your Birth Date</label>
                                <div class="input_field">
                                    <input name="txtApplyBirthDate" type="text" id="txtApplyBirthDate" required="" placeholder="Birth Date(DD/MM/YY)">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="txtApplyCurrentCompanyName">Your Current Company(if any)</label>
                                <div class="input_field">
                                    <input name="txtApplyCurrentCompanyName" type="text" id="txtApplyCurrentCompanyName" placeholder="Current Company Name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlGender"><span class="colorRed">*</span>Your Gender</label>
                                    <div class="default-select w100">
                                        <select name="ddlGender" id="ddlGender" class="w100Imp ddlGender" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlEducation"><span class="colorRed">*</span>Your Maximum Education</label>
                                    <div class="default-select w100">
                                        <select name="ddlEducation" id="ddlEducation" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Below 10th">Below 10th</option>
                                            <option value="10th Grade">10th Grade</option>
                                            <option value="12th Grade">12th Grade</option>
                                            <option value="Technical Course">Technical Course</option>
                                            <option value="ITI">ITI</option>
                                            <option value="Diploma">Diploma</option>
                                            <option value="B.E.">B.E.</option>
                                            <option value="B.Tech">B.Tech</option>
                                            <option value="Master">Master</option>
                                            <option value="CIPET">CIPET</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlExp"><span class="colorRed">*</span>Total Experience You Have</label>
                                    <div class="default-select w100">
                                        <select name="ddlExp" id="ddlExp" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                        <option value="Fresher">Fresher</option>
                                        <option value="1 year">1 year</option>
                                        <option value="2 years">2 years</option>
                                        <option value="3 years">3 years</option>
                                        <option value="4 years">4 years</option>
                                        <option value="5 years">5 years</option>
                                        <option value="6 years">6 years</option>
                                        <option value="7 years">7 years</option>
                                        <option value="8 years">8 years</option>
                                        <option value="9 years">9 years</option>
                                        <option value="10 years">10 years</option>
                                        <option value="More than 10 years">More than 10 years</option>

                                    </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="txtProductionExperience">Production Experience(if any)</label>
                                <div class="input_field">
                                    <input name="txtProductionExperience" type="number" id="txtProductionExperience" placeholder="Production Experience">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlDisciplinePreference"><span class="colorRed">*</span>Discipline</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlDisciplinePreference" id="ddlDisciplinePreference" class="w100Imp" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Fitter">Fitter</option>
                                            <option value="Electrical Engineering">Electrical Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                                            <option value="Electronics Engineering">Electronics Engineering</option>
                                            <option value="Mechatronics">Mechatronics</option>
                                            <option value="Wood Technology">Wood Technology</option>
                                            <option value="Production Technology">Production Technology</option>
                                            <option value="Automobile Engineering">Automobile Engineering</option>
                                            <option value="Plastic Technology">Plastic Technology</option>
                                            <option value="Draughtsman">Draughtsman</option>
                                            <option value="Other">Other</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlType">Machine Type</label>
                                    <div class="default-select w100">
                                        <select name="ddlType" id="ddlType" multiple="" class="w100Imp" style="" tabindex="-1" aria-hidden="true">
                                        <option value="CNC Press Brake">CNC Press Brake</option>
                                        <option value="CNC Plasma Machine">CNC Plasma Machine</option>
                                        <option value="Injection Moulding Machine">Injection Moulding Machine</option>
                                        <option value="Fiber Laser Cutting Machine">Fiber Laser Cutting Machine</option>
                                        <option value="CO2 Laser Cutting Machine">CO2 Laser Cutting Machine</option>
                                        <option value="Turret Punch Press">Turret Punch Press</option>
                                        <option value="CNC Lathe">CNC Lathe</option>
                                        <option value="Vertical Machining Center ( VMC )">Vertical Machining Center ( VMC )</option>
                                        <option value="Horizontal Machining Center ( HMC )">Horizontal Machining Center ( HMC )</option>
                                        <option value="Wirecut ( EDM )">Wirecut ( EDM )</option>
                                        <option value="EDM Die Sinker">EDM Die Sinker</option>
                                        <option value="5 Axis Vertical Machining Center ( VMC )">5 Axis Vertical Machining Center ( VMC )</option>
                                        <option value="5 Axis Horizontal Machining Center ( VMC )">5 Axis Horizontal Machining Center ( VMC )</option>
                                    </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlIndustriespreference"><span class="colorRed">*</span>Industries</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlIndustriespreference" id="ddlIndustriespreference" multiple="" required="" class="w100Imp" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Aeronautical Industry">Aeronautical Industry</option>
                                            <option value="Agricultural Industries">Agricultural Industries</option>
                                            <option value="Air Handaling Equipment">Air Handaling Equipment</option>
                                            <option value="Automotive">Automotive</option>
                                            <option value="Cement Plants">Cement Plants</option>
                                            <option value="Chemical">Chemical</option>
                                            <option value="Consumer Plastic">Consumer Plastic</option>
                                            <option value="Dies &amp; Moulds-Plastic">Dies &amp; Moulds-Plastic</option>
                                            <option value="Electrical">Electrical</option>
                                            <option value="Food Processing Equipments">Food Processing Equipments</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Gear Processing Machines">Gear Processing Machines</option>
                                            <option value="Industrial Electronics">Industrial Electronics</option>
                                            <option value="Industrial Plastic">Industrial Plastic</option>
                                            <option value="Injection Moulding Machines">Injection Moulding Machines</option>
                                            <option value="Material Handling Equipments">Material Handling Equipments</option>
                                            <option value="Metal Cutting Machines">Metal Cutting Machines</option>
                                            <option value="Metal Forming Machines">Metal Forming Machines</option>
                                            <option value="Packaging">Packaging</option>
                                            <option value="Paper Processing">Paper Processing</option>
                                            <option value="Pharma &amp; Health">Pharma &amp; Health</option>
                                            <option value="Plastic Extrusion">Plastic Extrusion</option>
                                            <option value="Robotics &amp; Automation">Robotics &amp; Automation</option>
                                            <option value="Sheet Metal Jobshop">Sheet Metal Jobshop</option>
                                            <option value="Textile">Textile</option>
                                            <option value="Tool Room Jobshop">Tool Room Jobshop</option>
                                            <option value="White Goods">White Goods</option>
                                            <option value="Other">Other</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlCADKnowledge">CAD Knowledge</label>
                                    <div class="default-select w100">
                                        <select name="ddlCADKnowledge" id="ddlCADKnowledge" multiple="" class="w100Imp" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Autocad-2D">Autocad-2D</option>
                                            <option value="Autocad-3D">Autocad-3D</option>
                                            <option value="Solidworks-3D">Solidworks-3D</option>
                                            <option value="Solid Edge-3D">Solid Edge-3D</option>
                                            <option value="CATIA-3D">CATIA-3D</option>
                                            <option value="Autocad Inventor-3D">Autocad Inventor-3D</option>
                                            <option value="Pro-E-3D">Pro-E-3D</option>
                                            <option value="Other`">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlCAMKnowledge">CAM Knowledge</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlCAMKnowledge" id="ddlCAMKnowledge" multiple="" class="w100Imp" style="" tabindex="-1" aria-hidden="true">
                                        <option value="Alphacam">Alphacam</option>
                                        <option value="Anacam">Anacam</option>
                                        <option value="Anacam">Anacam</option>
                                        <option value="AP100">AP100</option>
                                        <option value="Bystronic">Bystronic</option>
                                        <option value="Cadman-P">Cadman-P</option>
                                        <option value="Campath">Campath</option>
                                        <option value="Jetcam">Jetcam</option>
                                        <option value="Jetcam">Jetcam</option>
                                        <option value="Mastercam">Mastercam</option>
                                        <option value="Metalix Cad Cam">Metalix Cad Cam</option>
                                        <option value="Metaman-India">Metaman-India</option>
                                        <option value="Most-2D-India">Most-2D-India</option>
                                        <option value="NC Express">NC Express</option>
                                        <option value="Pytha-3D">Pytha-3D</option>
                                        <option value="Radan">Radan</option>
                                        <option value="Sigmanest">Sigmanest</option>
                                        <option value="Smart CAM">Smart CAM</option>
                                        <option value="TOPS">TOPS</option>
                                        <option value="Other">Other</option>
                                    </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlOperatingknowledgeofController">Operating knowledge of Controller</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlOperatingknowledgeofController" id="ddlOperatingknowledgeofController" multiple="" class="w100Imp" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Amada">Amada</option>
                                            <option value="Bosch">Bosch</option>
                                            <option value="Cybelec">Cybelec</option>
                                            <option value="Cypcut">Cypcut</option>
                                            <option value="Delem">Delem</option>
                                            <option value="ESA">ESA</option>
                                            <option value="Fagor">Fagor</option>
                                            <option value="Fanuc">Fanuc</option>
                                            <option value="Heidenhain">Heidenhain</option>
                                            <option value="Mazak">Mazak</option>
                                            <option value="Primach">Primach</option>
                                            <option value="Siemens">Siemens</option>
                                            <option value="Trumpf">Trumpf</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlMaintenanceknowledgeofController">Maintenance Knowledge Of Controller</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlMaintenanceknowledgeofController" id="ddlMaintenanceknowledgeofController" multiple="" class="w100Imp" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Amada">Amada</option>
                                            <option value="Bosch">Bosch</option>
                                            <option value="Cybelec">Cybelec</option>
                                            <option value="Cypcut">Cypcut</option>
                                            <option value="Delem">Delem</option>
                                            <option value="ESA">ESA</option>
                                            <option value="Fagor">Fagor</option>
                                            <option value="Fanuc">Fanuc</option>
                                            <option value="Heidenhain">Heidenhain</option>
                                            <option value="Mazak">Mazak</option>
                                            <option value="Primach">Primach</option>
                                            <option value="Siemens">Siemens</option>
                                            <option value="Trumpf">Trumpf</option>
                                            <option value="Other">Other</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="default-select w100Imp">
                                        <label for="ddlJoiningPeriod"><span class="colorRed">*</span>Joining Period</label>
                                        <select name="ddlJoiningPeriod" id="ddlJoiningPeriod" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Immediately">Immediately</option>
                                            <option value="2 Weeks">2 Weeks</option>
                                            <option value="1 Month">1 Month</option>
                                            <option value="2 Months">2 Months</option>
                                            <option value="3 Months">3 Months</option>
                                            <option value="Depends">Depends</option>

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
                                    <label for="ddlrepairHydraulics"><span class="colorRed">*</span>Can You Repair Hydraulics</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlrepairHydraulics" id="ddlrepairHydraulics" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Basic Knowledge">Basic Knowledge</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlrepairPneumaticSystems"><span class="colorRed">*</span>Can Your Repair Pneumatics Systems?</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlrepairPneumaticSystems" id="ddlrepairPneumaticSystems" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Basic Knowledge">Basic Knowledge</option>

                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlCanYouRepairElectronics"><span class="colorRed">*</span>Can You Repair Electronics?</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlCanYouRepairElectronics" id="ddlCanYouRepairElectronics" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Basic Knowledge">Basic Knowledge</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlElectricControlKnowledge"><span class="colorRed">*</span>Electric Control Knowledge?</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlElectricControlKnowledge" id="ddlElectricControlKnowledge" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                        <option value="Basic Knowledge">Basic Knowledge</option>

                                    </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlhandlePLClogicatyourown"><span class="colorRed">*</span>Can you handle PLC logic?</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlhandlePLClogicatyourown" id="ddlhandlePLClogicatyourown" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Basic Knowledge">Basic Knowledge</option>

                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlhandleMechatronics"><span class="colorRed">*</span>Can you handle Mechatronics?</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlhandleMechatronics" id="ddlhandleMechatronics" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Basic Knowledge">Basic Knowledge</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="ddlhandleRobotics"><span class="colorRed">*</span>Can You handle Robotics?</label>
                                    <div class="default-select w100Imp">
                                        <select name="ddlhandleRobotics" id="ddlhandleRobotics" class="w100Imp" required="" style="" tabindex="-1" aria-hidden="true">
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            <option value="Basic Knowledge">Basic Knowledge</option>

                                        </select>

                                    </div>
                                </div>
                            </div>


                            
                            
                            <div class="col-md-12">
                                <div class="input_field">
                                    <textarea name="txtApplyMsg" id="txtApplyMsg" required="" cols="30" rows="4" placeholder="*Enter Msg to Employer"></textarea>
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
    
@endsection
@push("js")
<script>
function apply(){
    var id = "{{$id}}";
    var accessToken = "{{$accessToken}}";
    var fullName = $("#txtApplyName").val(); //full name
    var email = $("#txtApplyEmail").val(); // email
    var phoneNo = $("#txtApplyNumber").val(); // phone no
    var city = $("#txtApplyCity").val(); //city
    var country = $("#txtApplyCountry").val(); //country
    var dob = $("#txtApplyBirthDate").val(); //dob
    var currentCompany = $("#txtApplyCurrentCompanyName").val(); //current company
    var gender = $("#ddlGender").val(); //gender
    var education = $("#ddlEducation").val(); //education
    var totalExperience = $("#ddlExp").val(); //total experience
    var productionExperience = $("#txtProductionExperience").val(); //production experience
    var discipline = $("#ddlDisciplinePreference").val(); //discipline
    var machineType = $("#ddlType").val(); //machine type
    var industries = $("#ddlIndustriespreference").val(); //industries
    var cadKnowledge = $("#ddlCADKnowledge").val(); //CAD Knowledge
    var camKnowledge = $("#ddlCAMKnowledge").val(); //CAM Knowledge
    var operatingKnowledge = $("#ddlOperatingknowledgeofController").val(); //Operating knowledge of Controller
    var maintenanceKnowledge = $("#ddlMaintenanceknowledgeofController").val(); //Maintenance knowledge of Controller
    var joiningPeriod = $("#ddlJoiningPeriod").val(); //JoiningPeriod
    var expectedSalary = $("#txtExpectedSalary").val(); //ExpectedSalary
    var repairHydrailics = $("#ddlrepairHydraulics").val(); //repairHydraulics
    var repairPneumaticSystems = $("#ddlrepairPneumaticSystems").val(); //repairPneumaticSystems
    var RepairElectronics = $("#ddlCanYouRepairElectronics").val(); //CanYouRepairElectronics
    var ElectricControlKnowledge = $("#ddlElectricControlKnowledge").val(); //ElectricControlKnowledge
    var handlePLC = $("#ddlhandlePLClogicatyourown").val(); //handlePLClogicatyourown
    var handleMechatronics = $("#ddlhandleMechatronics").val(); //handleMechatronics
    var handleRobotics = $("#ddlhandleRobotics").val(); //handleRobotics
    var employerMsg = $("#txtApplyMsg").val(); //employerMsg
    
    if(!isRealValue(fullName)){
        var err = 1;
        var msg = "Please fill your Name";
        showToast(err,msg);
    }else if(!isRealValue(email)){
        var err = 1;
        var msg = "Please fill your Email";
        showToast(err,msg);
    }else if(!isRealValue(phoneNo)){
        var err = 1;
        var msg = "Please fill your Contact Number";
        showToast(err,msg);
    }else if(!isRealValue(city)){
        var err = 1;
        var msg = "Please fill your City";
        showToast(err,msg);
    }else if(!isRealValue(country)){
        var err = 1;
        var msg = "Please fill your Country";
        showToast(err,msg);
    }else if(!isRealValue(dob)){
        var err = 1;
        var msg = "Please fill your Birth Date";
        showToast(err,msg);
    }else if(!isRealValue(gender)){
        var err = 1;
        var msg = "Please select your Gender";
        showToast(err,msg);
    }else if(!isRealValue(education)){
        var err = 1;
        var msg = "Please select your Maximum Education";
        showToast(err,msg);
    }else if(!isRealValue(totalExperience)){
        var err = 1;
        var msg = "Please select your Total Ezperience";
        showToast(err,msg);
    }else if(!isRealValue(discipline)){
        var err = 1;
        var msg = "Please select your Discipline";
        showToast(err,msg);
    }else if(!isRealValue(industries)){
        var err = 1;
        var msg = "Please select your Industries";
        showToast(err,msg);
    }else if(!isRealValue(joiningPeriod)){
        var err = 1;
        var msg = "Please select your Joining Period";
        showToast(err,msg);
    }else if(!isRealValue(expectedSalary)){
        var err = 1;
        var msg = "Please fill your Expected Salary";
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
            "city":city,
            "country":country,
            "dob":dob,
            "currentCompany":currentCompany,
            "gender":gender,
            "education":education,
            "totalExperience":totalExperience,
            "productionExperience":productionExperience,
            "discipline":discipline,
            "machineType":machineType,
            "industries":industries,
            "cadKnowledge":cadKnowledge,
            "camKnowledge":camKnowledge,
            "operatingKnowledge":operatingKnowledge,
            "maintenanceKnowledge":maintenanceKnowledge,
            "joiningPeriod":joiningPeriod,
            "expectedSalary":expectedSalary,
            "repairHydrailics":repairHydrailics,
            "repairPneumaticSystems":repairPneumaticSystems,
            "RepairElectronics":RepairElectronics,
            "ElectricControlKnowledge":ElectricControlKnowledge,
            "handlePLC":handlePLC,
            "handleMechatronics":handleMechatronics,
            "handleRobotics":handleRobotics,
            "employerMsg":employerMsg
        };

        callajax(requrl, jsondata, function(resp){
            console.log(resp);
        });
        

    }
     
}
</script>
@endpush