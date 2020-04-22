<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Covid-9 Latest Updates</title>
    <!-- Favicon-->
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
    </style>
</head>
<body class="light">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30">
                <img class="loading-img-spin" src="assets/images/loading.png" width="20" height="20" alt="admin">
            </div>
            <p>Please wait...</p>
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
                            <li class="breadcrumb-item">
                                <h4 class="page-title" style="border-right: 0;">COVID-19 India</h4>
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
                                <table class="table table-hover table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SN#</th>
                                            <th>Name of State / UT</th>
                                            <th>Total Confirmed cases (Including 77 foreign Nationals)</th>
                                            <th>Cured/Discharged/ Migrated</th>
                                            <th>Death</th>
                                        </tr>
                                    </thead>
                                    

                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Andaman and Nicobar Islands</td>
                                            <td>16</td>
                                            <td>11</td>
                                            <td>0</td>
                                            </tr>
                                            <tr>
                                            
                                            <td>2</td>
                                            <td>Andhra Pradesh</td>
                                            <td>757</td>
                                            <td>96</td>
                                            <td>22</td>
                                            </tr>
                                            
                                            
                                            <tr>
                                            <td>3</td>
                                            <td>Arunachal Pradesh</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>0</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>4</td>
                                            <td>Assam</td>
                                            <td>35</td>
                                            <td>19</td>
                                            <td>1</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>5</td>
                                            <td>Bihar</td>
                                            <td>126</td>
                                            <td>42</td>
                                            <td>2</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>6</td>
                                            <td>Chandigarh</td>
                                            <td>27</td>
                                            <td>14</td>
                                            <td>0</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>7</td>
                                            <td>Chhattisgarh</td>
                                            <td>36</td>
                                            <td>26</td>
                                            <td>0</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>8</td>
                                            <td>Delhi</td>
                                            <td>2156</td>
                                            <td>611</td>
                                            <td>47</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>9</td>
                                            <td>Goa</td>
                                            <td>7</td>
                                            <td>7</td>
                                            <td>0</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>10</td>
                                            <td>Gujarat</td>
                                            <td>2178</td>
                                            <td>139</td>
                                            <td>90</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>11</td>
                                            <td>Haryana</td>
                                            <td>254</td>
                                            <td>127</td>
                                            <td>3</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>12</td>
                                            <td>Himachal Pradesh</td>
                                            <td>39</td>
                                            <td>16</td>
                                            <td>1</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>13</td>
                                            <td>Jammu and Kashmir</td>
                                            <td>380</td>
                                            <td>81</td>
                                            <td>5</td>
                                            </tr>
                                            <tr>
                                            <td>14</td>
                                            <td>Jharkhand#</td>
                                            <td>45</td>
                                            <td>0</td>
                                            <td>3</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>15</td>
                                            <td>Karnataka</td>
                                            <td>418</td>
                                            <td>129</td>
                                            <td>17</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>16</td>
                                            <td>Kerala</td>
                                            <td>427</td>
                                            <td>307</td>
                                            <td>3</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>17</td>
                                            <td>Ladakh</td>
                                            <td>18</td>
                                            <td>14</td>
                                            <td>0</td>
                                            </tr>
                                        
                                            <tr>
                                            <td>18</td>
                                            <td>Madhya Pradesh</td>
                                            <td>1552</td>
                                            <td>148</td>
                                            <td>76</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>19</td>
                                            <td>Maharashtra</td>
                                            <td>5218</td>
                                            <td>722</td>
                                            <td>251</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>20</td>
                                            <td>Manipur</td>
                                            <td>2</td>
                                            <td>2</td>
                                            <td>0</td>
                                            </tr>
                                            <tr>
                                            <td>21</td>
                                            <td>Meghalaya</td>
                                            <td>12</td>
                                            <td>0</td>
                                            <td>1</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>22</td>
                                            <td>Mizoram</td>
                                            <td>1</td>
                                            <td>0</td>
                                            <td>0</td>
                                            </tr>
                                            <!--<tr>
                                            <td>23</td>
                                            <td>Nagaland</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0</td>
                                            </tr>-->
                                        
                                            <tr>
                                            <td>23</td>
                                            <td>Odisha</td>
                                            <td>79</td>
                                            <td>24</td>
                                            <td>1</td>
                                            </tr>
                                        
                                            <tr>
                                            <td>24</td>
                                            <td>Puducherry</td>
                                            <td>7</td>
                                            <td>3</td>
                                            <td>0</td>
                                            </tr>
                                        
                                            <tr>
                                            <td>25</td>
                                            <td>Punjab</td>
                                            <td>245</td>
                                            <td>39</td>
                                            <td>16</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>26</td>
                                            <td>Rajasthan</td>
                                            <td>1659</td>
                                            <td>230</td>
                                            <td>25</td>
                                            </tr>
                                        
                                            <tr>
                                            <td>27</td>
                                            <td>Tamil Nadu</td>
                                            <td>1596</td>
                                            <td>635</td>
                                            <td>18</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>28</td>
                                            <td>Telengana</td>
                                            <td>928</td>
                                            <td>194</td>
                                            <td>23</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>29</td>
                                            <td>Tripura</td>
                                            <td>2</td>
                                            <td>1</td>
                                            <td>0</td>
                                            </tr>
                                            
                                            
                                            
                                            <tr>
                                            <td>30</td>
                                            <td>Uttarakhand</td>
                                            <td>46</td>
                                            <td>19</td>
                                            <td>0</td>
                                            </tr>
                                            
                                            <tr>
                                            <td>31</td>
                                            <td>Uttar Pradesh</td>
                                            <td>1294</td>
                                            <td>140</td>
                                            <td>20</td>
                                            </tr>                    
                                            
                                            <tr>
                                            <td>32</td>
                                            <td>West Bengal</td>
                                            <td>423</td>
                                            <td>73</td>
                                            <td>15</td>
                                            </tr>
                                            
                                            <tr>
                                            <td colspan="2"><strong><span>Total number of confirmed cases in India</span></strong></td>
                                            <td align="center" style="text-align:center;"><strong>19984*</strong></td>
                                            <td>
                                            <strong>3870</strong>
                                            </td>
                                            <td>
                                            <strong>640</strong>
                                            </td>
                                            </tr>
                                            <tr>
                                            <td align="center" style="text-align:center;" colspan="5"><strong>#One case of Jharkhand reassigned to Bihar after reconciliation</strong></td>
                                            </tr>
                                            <tr>
                                            <td align="center" style="text-align:center;" colspan="5"><strong>*Data Source <a href="https://www.mohfw.gov.in/" target="_blank">mohfw.gov</a></strong></td>
                                            </tr>
                                            
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


    <!-- Plugins Js -->
    <script src="assets/js/app.min.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/form.min.js"></script>

    <script>

    $(function() {
       
        getSummary();

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


    function numberWithCommas(x) {
    return x.toString().split('.')[0].length > 3 ? x.toString().substring(0,x.toString().split('.')[0].length-3).replace(/\B(?=(\d{2})+(?!\d))/g, ",") + "," + x.toString().substring(x.toString().split('.')[0].length-3): x.toString();
    }

    function getSummary() {

        $.ajax({
        type: 'GET',
        url: "./server.php",
        contentType: false,
        processData: false,
        success: function(response) {

            if (response) {
                
                console.log(response.data_eng[0]);

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