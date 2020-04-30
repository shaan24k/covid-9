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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .block{
            margin-top: 10px;
        }

        .world-background{
            background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(45,112,253,0.8379726890756303) 100%);
        }

        .purple-background{
            background: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
        }

        .blue-background{
            background: linear-gradient(to bottom, #a5c9fd 0%, #a5c9fd 6%, #a7cbff 8%, #a5c9fd 11%, #a7cbff 11%, #aacffc 28%, #b0d5ff 44%, #b0d6fb 48%, #b5dbff 62%, #b4dbfc 62%, #b8dffe 75%, #bae2fb 79%, #bce4fe 91%, #bde6fa 96%, #bee7fd 100%);
        }

        .green-background{
            background: linear-gradient(to bottom, #9ae69c 0%, #9ce999 5%, #9cea9e 6%, #9cea9e 6%, #a0e99a 10%, #a3eb95 24%, #adee92 36%, #adee90 40%, #b3ef8f 45%, #b0f08f 46%, #b4f18a 50%, #b7f18d 51%, #b6f08a 53%, #baf18b 58%, #c4f780 77%, #c9f681 86%, #ccfa7e 90%, #cbf77c 94%, #cff87e 96%, #cff87e 100%);
        }

        .red-background{
            background: linear-gradient(to bottom, #ff8582 0%, #fe8685 16%, #ff908e 44%, #fe908f 53%, #ff9692 62%, #ff9597 67%, #ff9a98 84%, #ff9b9b 85%, #fe9c9d 91%, #ff9e98 96%, #ff9d9c 96%, #ff9e9d 100%);
        }

        .orange-background{

            background: linear-gradient(to bottom, #f5ce67 0%, #f8cd67 4%, #f6cc66 7%, #f7cb6c 13%, #f5c66c 21%, #f8c76b 23%, #f7c570 27%, #f7c36f 33%, #f9c174 39%, #f8bf72 40%, #f9ba73 47%, #f9ba77 52%, #fdb877 56%, #fab677 57%, #f9b479 60%, #fab17c 67%, #fcb17a 69%, #fbaf7e 74%, #fcab7c 77%, #fcab7e 84%, #fdaa82 85%, #fca683 100%);

        }

        .conform_cases {

            display: inline-block;
            padding: 6px 8px;
            min-width: 50px;
            text-align: center;
            border-radius: 4px;
            background: linear-gradient(to bottom, #a6c9fd 0%, #bde5fc 100%);

        }

        .cured_cases {

            display: inline-block;
            padding: 6px 8px;
            min-width: 50px;
            text-align: center;
            border-radius: 4px;
            background: linear-gradient(to bottom, #9ae69c 0%, #9ce999 5%, #9cea9e 6%, #9cea9e 6%, #a0e99a 10%, #a3eb95 24%, #adee92 36%, #adee90 40%, #b3ef8f 45%, #b0f08f 46%, #b4f18a 50%, #b7f18d 51%, #b6f08a 53%, #baf18b 58%, #c4f780 77%, #c9f681 86%, #ccfa7e 90%, #cbf77c 94%, #cff87e 96%, #cff87e 100%);

            }


        .deaths_field {

        display: inline-block;
        padding: 6px 8px;
        min-width: 50px;
        text-align: center;
        border-radius: 4px;
        background: linear-gradient(to bottom, #ff8582 0%, #fe8685 16%, #ff908e 44%, #fe908f 53%, #ff9692 62%, #ff9597 67%, #ff9a98 84%, #ff9b9b 85%, #fe9c9d 91%, #ff9e98 96%, #ff9d9c 96%, #ff9e9d 100%);

        }

        #state_helpline{
        cursor: pointer;
        color: #212529;    
        font-size: 18px;
        border-radius: 7px;
        padding: 4px 13px 6px 13px;
        background: linear-gradient(to bottom, #f5ce67 0%, #f8cd67 4%, #f6cc66 7%, #f7cb6c 13%, #f5c66c 21%, #f8c76b 23%, #f7c570 27%, #f7c36f 33%, #f9c174 39%, #f8bf72 40%, #f9ba73 47%, #f9ba77 52%, #fdb877 56%, #fab677 57%, #f9b479 60%, #fab17c 67%, #fcb17a 69%, #fbaf7e 74%, #fcab7c 77%, #fcab7e 84%, #fdaa82 85%, #fca683 100%);

        }

        .breadcrumb-item+.breadcrumb-item::before{
            content: "" !important;
        }

        .breadcrumb>li+li:before{
            content: "" !important;
        }

        .add-button {
            position: absolute;
            top: 1px;
            left: 1px;
            }


    </style>
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

                    <h6>Please upload your required documents</h6>

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
                            <div class="form-line dropzone dz-clickable">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(Upload your Aadhar card and NGO Documents
                                        <strong>If</strong> Individual upload only Aadhar card.)</em>
                                </div>
                                <div class="fallback">
                                    <input name="file" style="display: none;" type="file" multiple />
                                </div>
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
                <!-- Task Info -->
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
                <!-- #END# Task Info -->
             
            </div>
                    
                </div>
            </div>
        </div>
    </div>

       <!-- ---------State Helpline Numbers end------------- -->

       <button class="add-button">Add to home screen</button>


    <!-- Plugins Js -->
    <script type="text/javascript" src="assets/js/app.min.js"></script>
    <!-- Custom Js -->
    <script type="text/javascript" src="assets/js/admin.js"></script>
    <script type="text/javascript" src="assets/js/form.min.js"></script>

    <script type="text/javascript">

    $(function() {
 
        getSummary();
        getStateDataList();
        getStateHelplineList();

        $('#form_validation').validate({
            rules: {
                'checkbox': {
                    required: true
                },
                'select': {
                    required: true
                }
            },
            highlight: function (input) {
                $(input).parents('.form-line').addClass('error');
            },
            unhighlight: function (input) {
                $(input).parents('.form-line').removeClass('error');
            },
            errorPlacement: function (error, element) {
                $(element).parents('.form-group').append(error);
            }
        });

    });


        // Code to handle install prompt on desktop

        let deferredPrompt;
        const addBtn = document.querySelector('.add-button');
        addBtn.style.display = 'none';

        window.addEventListener('beforeinstallprompt', (e) => {
        // Prevent Chrome 67 and earlier from automatically showing the prompt
        e.preventDefault();
        // Stash the event so it can be triggered later.
        deferredPrompt = e;
        // Update UI to notify the user they can add to home screen
        addBtn.style.display = 'block';

        addBtn.addEventListener('click', (e) => {
            // hide our user interface that shows our A2HS button
            addBtn.style.display = 'none';
            // Show the prompt
            deferredPrompt.prompt();
            // Wait for the user to respond to the prompt
            deferredPrompt.userChoice.then((choiceResult) => {
                if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
                } else {
                console.log('User dismissed the A2HS prompt');
                }
                deferredPrompt = null;
            });
        });
        });   


    function numberWithCommas(x) {

        return x.toString().split('.')[0].length > 3 ? x.toString().substring(0,x.toString().split('.')[0].length-3).replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + x.toString().substring(x.toString().split('.')[0].length-3): x.toString();
    
    }

    function getSummary() {

        $.ajax({
        type: 'GET',
        url: "./server.php?type=1",
        contentType: false,
        processData: false,
        success: function(response) {

            if (response) {
            
                $("#india_total_cases").html(response.data_eng[0].Confirmed);
                $("#india_active_cases").html(response.data_eng[0].Active);
                $("#india_total_recovered").html(response.data_eng[0].Recovered);
                $("#india_total_deaths").html(response.data_eng[0].Deaths);

                $("#total_cases").html(response.data_eng[1].Confirmed);
                $("#active_cases").html(response.data_eng[1].Active);
                $("#total_recovered").html(response.data_eng[1].Recovered);
                $("#total_deaths").html(response.data_eng[1].Deaths);
                

            } else {
                console.log("Data not found")
            }

        },
        error: onAjaxError
    });


    }


    function getStateDataList() {

        $.ajax({
        type: 'GET',
        url: "./server.php?type=2",
        contentType: false,
        processData: false,
        success: function(response) {

            if (response) {
                
                var html = ``;

               for(var i=0; i < response.length; i++) {

                    html+=`<tr>`;
                    html+=`<td>`+response[i].state_name+`</td>`;
                    html+=`<td><span class="conform_cases">`+response[i].positive+`</span></td>`;
                    html+=`<td><span class="cured_cases">`+response[i].cured+`</span></td>`;
                    html+=`<td><span class="deaths_field">`+response[i].death+`</span></td>`;
                    html+=`</tr><tr>`;
               }

                html+=`<tr><td align="center" style="text-align:center;" colspan="4"><strong>*Data Source <a href="https://www.mohfw.gov.in/" target="_blank">www.mohfw.gov.in</a></strong></td></tr>`;
                html+=`<tr><td align="center" style="text-align:center;" colspan="4">This Website is only for knowledge purposes. The above data may be very from the real one. All data is taken from www.mohfw.gov.in and www.livemint.com.</td></tr>`;
                
                $(".covid19-state-list tbody").html(html);

            } else {
                console.log("Data not found")
            }

        },
        error: onAjaxError
        });


    }


    function getStateHelplineList() {

        $.ajax({
        type: 'GET',
        url: "./helpline.json",
        contentType: false,
        processData: false,
        success: function(response) {

            if (response) {
                
                var html = ``;

            for(var i=0; i < response.length; i++) {

                    html+=`<tr>`;
                    html+=`<td>`+response[i].state_name+`</td>`;
                    html+=`<td>`+response[i].number+` &nbsp; <a href="tel:+`+response[i].call+`" class="cured_cases">Call</a></td>`;
                    html+=`</tr><tr>`;
            }

            html+=`<tr><td align="center" style="text-align:center;" colspan="4"><strong>*Data Source <a href="https://www.mohfw.gov.in/" target="_blank">www.mohfw.gov.in</a></strong></td></tr>`;
  
              $(".state-helpline-list tbody").html(html);

            } else {
                console.log("Data not found")
            }

        },
        error: onAjaxError
        });

    }



    setInterval(function(){ getSummary() }, 8000);
    
    function onAjaxError(jqXHR, exception) {
        var msg = "";
        if (jqXHR.status === 0) {
            msg = "INTERNET_DISCONNECTED Verify Network.";
        } else if (jqXHR.status == 404) {
            msg = "Requested page not found. [404]";
        } else if (jqXHR.status == 500) {
            msg = "Internal Server Error [500].";
        } else if (exception === "parsererror") {
            msg = "Requested JSON parse failed.";
        } else if (exception === "timeout") {
            msg = "Time out error.";
        } else if (exception === "abort") {
            msg = "Ajax request aborted.";
        } else {
            msg = "Uncaught Error.\n" + jqXHR.responseText;
        }
        $('#errorBox').html('Error:' + msg);
        console.log("error:" + msg);
    }

    $("select").formSelect();




    </script>

</body>