<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Covid-19 Latest Updates | Stay at Home, Stay Safe and Help people</title>
    <meta name="description" content="Live statistics and coronavirus news tracking the number of confirmed cases, 
    recovered patients, and death toll due to the COVID-19 coronavirus. A Distance of 1 at least meter is necessary to insure safety for all">
    <!-- Favicon-->
    <link rel="manifest" href="manifest.webmanifest">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <link href="assets/css/form.min.css" rel="stylesheet">

    <link href="assets/css/common.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" alt="admin">
            </div>
            <p>Stay at Home, Stay Safe</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <div class="overlay camera-frame" style="display:none; z-index: 9999999;">
        <div class="centerDiv">
            <div id="my_camera" class="" style="margin-left:15px;margin-top: 15px;"></div>
            <div class="my_result hide" id="my_result" style="margin-left:15px;margin-top: 15px;"></div>
            <table class="table" style="font-size: 17px;margin-top:12px;">
                <tbody>
                    <tr>
                        <th class="clickbtn show" style="text-align: center;">
                            <button onclick="take_snapshot()">CLICK</button>
                        </th>
                        <th class="savebtn hide" style="text-align: center;"><button onclick="saveImage()">SAVE</button></th>
                        <th><button class="resetbtn" onclick="reset()">RESET</button></th>
                        <th><button class="cancelbtn" onclick="hideOverlay()">CANCEL</button></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

   
    <section class="content" style="margin: 70px 15px 0 15px !important;">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="breadcrumb breadcrumb-style ">
                            <li class="breadcrumb-item"><h4 class="page-title">COVID-19 India</h4></li>

                            <li class="breadcrumb-item">
                                <a id="state_helpline" data-toggle="modal" data-target="#stateHelpLineModal">States Helpline Numbers</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Widgets -->


           <div class="row">

               <div class="col-sm-9">

                    <div class="row">
                
                        <div class="col-lg-2 col-sm-6">
                            <div class="counter-box text-center world-background">
                                <i class="fa fa-globe" style="font-size: 56px;" aria-hidden="true"></i>
                                <div class="text font-17 m-b-5" style="padding-top: 42px;">Around World</div>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-sm-6">
                            <div class="counter-box text-center blue-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block" id="total_cases"></h3>
                                <div class="text font-17 m-b-5">Total Cases</div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="counter-box text-center purple-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block" id="active_cases"></h3>
                                <div class="text font-17 m-b-5">Active Cases</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box text-center green-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block"  id="total_recovered"></h3>
                                <div class="text font-17 m-b-5">Total Recovered</div>         
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box text-center red-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block" id="total_deaths"></h3>
                                <div class="text font-17 m-b-5">total Deaths</div>
                            </div>
                        </div>

                    </div> <!-- 1st row-->

                    <div class="row">
                        
                        <div class="col-lg-2 col-sm-6">
                            <div class="counter-box text-center world-background">
                                <img src="assets/images/india.png" height="53">
                                <div class="text font-17 m-b-5" style="padding-top: 45px;"><strong>India</strong></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-sm-6">
                            <div class="counter-box text-center blue-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block" id="india_total_cases"></h3>
                                <div class="text font-17 m-b-5">Total Cases</div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6">
                            <div class="counter-box text-center purple-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block" id="india_active_cases"></h3>
                                <div class="text font-17 m-b-5">Active Cases</div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box text-center green-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block"  id="india_total_recovered"></h3>
                                <div class="text font-17 m-b-5">Total Recovered</div>         
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box text-center red-background">
                                <img src="assets/images/icon-infected.png">
                                <h3 class="m-b-10 block" id="india_total_deaths"></h3>
                                <div class="text font-17 m-b-5">total Deaths</div>
                            </div>
                        </div> 
                        
                    </div>  <!-- 2nd row-->

                </div> <!-- col-sm-8 -->


                <div class="col-sm-3">

                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="counter-box text-center orange-background">
                                <h3 class="m-b-10 block" id="critical_cases">Need Help</h3>
                                <div class="text font-17 m-b-5">Your Information will be hide.</div>
                                <button class="btn-hover btn-border-radius color-10" style="margin: 15px 0 0 0;" data-toggle="modal" data-target="#askHelpModal">Ask Help</button>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="counter-box text-center orange-background">
                                <h3 class="m-b-10 block" id="critical_cases">NGO</h3>
                                <div class="text font-17 m-b-5">Let's Help the People Without sharing Pics.</div>
                                <button class="btn-hover btn-border-radius color-6" data-toggle="modal" data-target="#ngoModal" style="margin: 15px 0 0 0;">Add NGO</button>
                            </div>
                        </div>
                    </div>
                
                </div>

           </div> <!-- main row-->


           <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <strong>*Above Data Source <a href="https://www.livemint.com" target="_blank">www.livemint.com</a></strong>
                </div>
           </div>

           <div class="row">&nbsp;</div>

         

            <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>State List</strong></h2>
                            
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover table table-bordered covid19-state-list">
                                    <thead>
                                        <tr>
                                            <th>Name of State</th>
                                            <th>Total Confirmed</th>
                                            <th>Cured/Discharged/ Migrated</th>
                                            <th>Death</th>
                                        </tr>
                                    </thead>
                                    

                                    <tbody>
                       
                                   </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
             
            </div>
            
        </div>
    </section>

    <div class="modal fade bd-example-modal-lg" id="askHelpModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Need Help ? Please Fill the Form</h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h6>Your Information will be hide. We are not going to using your Information in any matter. not disclose to anyone except NGO</h6>

                    <h5>&nbsp;</h5>

                    <form id="form_validation" method="POST">
                        
                        <div class="form-group">
                            <div class="input-field col s12">
                                <select name="help_type">
                                    <option value="">--Select Option--</option>
                                    <option value="1">Medicine</option>
                                    <option value="2">Dry Ration</option>
                                    <option value="3">Emergancy</option>
                                    <option value="4">Other</option>
                                </select>
                                <label class="form-label">Type Of Help</label>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" required>
                                <label class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="mobile" required>
                                <label class="form-label">Mobile</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="address" required>
                                <label class="form-label">Address</label>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="form-check m-l-10">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="checkbox" name="checkbox">
                                    The above Information is correct, I have problem with sharing my Information to NGO's
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- ---------NGO FORM START------------- -->


    <div class="modal fade bd-example-modal-lg" id="ngoModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Help Needy People's ? Fill The Form</h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h6 style="color: black;">Please upload your required documents</h6>

                    <h5>&nbsp;</h5>

                    <form id="form_validation" method="POST">
                        
                        <div class="form-group">
                            <div class="input-field col s12">
                                <select name="help_type">
                                    <option value="">what type of help you are going to do ?</option>
                                    <option value="1">Medicine</option>
                                    <option value="2">Dry Ration</option>
                                    <option value="3">Emergancy</option>
                                    <option value="4">Other</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" required>
                                <label class="form-label">Name</label>
                            </div>
                        </div>
                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="number" class="form-control" name="mobile" required>
                                <label class="form-label">Mobile</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="text" class="form-control" name="address" required>
                                <label class="form-label">Address</label>
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line"><h6 style="color: black;">Capture Your Photo with Identity Card hold in your hand</h6></div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <img id="imagePreview" src="assets/images/dummyPhoto.jpg" height="117" width="117" />
                            </div>
                        </div>

                        <div class="form-group form-float">
                            <div class="form-line">
                                <input type="button" id="takecandidatephoto" name="userImage" value="Take Photo" class="takephoto btn btn-primary waves-effect" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-check m-l-10">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="checkbox" name="checkbox">
                                    The above Information is correct, I will not share User's Information to others
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ----------NGO FORM END--------------- -->


    <!-- ---------State Helpline Numbers START------------- -->


    <div class="modal fade bd-example-modal-lg" id="stateHelpLineModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Central Helpline Number for corona-virus: - <span style="color:red;">+91-11-23978046</span></h5>
                    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h6>Helpline Numbers of States & Union Territories (UTs)</h6>

                    <h5>&nbsp;</h5>
                    <div class="row clearfix">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>State List</strong></h2>
                            
                        </div>
                        <div class="tableBody">
                            <div class="table-responsive">
                                <table class="table table-hover table table-bordered state-helpline-list">
                                    <thead>
                                        <tr>
                                            <th>Name of State</th>
                                            <th>Helpline No.</th>
                                        </tr>
                                    </thead>
                                    

                                    <tbody>
                       
                                   </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
                    
                </div>
            </div>
        </div>
    </div>

       <!-- ---------State Helpline Numbers end------------- -->

       <!-- Install button, hidden by default -->
        <div id="installContainer" class="hidden">
        <button id="butInstall" type="button">
            Add to home screen
        </button>
        </div>


    <!-- Plugins Js -->
    <script type="text/javascript" src="assets/js/app.min.js"></script>
    <!-- Custom Js -->
    <script type="text/javascript" src="assets/js/admin.js"></script>
    <script type="text/javascript" src="assets/js/form.min.js"></script>
    <script type="text/javascript" src="assets/js/webcam.min.js"></script>
    <script type="text/javascript" src="assets/js/common.js"></script>

</body>