<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/xhtml/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:38 GMT -->
<head>
   <!-- All Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignLab">
	<meta name="robots" content="">
	<meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
	<meta name="description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
	<meta property="og:description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
	<meta property="og:image" content="social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">



      <!-- favicon -->
      <link rel="shortcut icon" type="image/png" href="{{ asset('asset/images/favicon.png') }}">
      <!-- Page Title Here -->
      <title>Dompet - Payment Admin Dashboard Bootstrap Template</title>

      <link href="{{ asset('asset/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">

      <!-- Style css -->
      <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">



      <!-- Daterange picker -->
      <link href="{{ asset('asset/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
      <!-- Clockpicker -->
      <link href="{{ asset('asset/vendor/clockpicker/css/bootstrap-clockpicker.min.css') }}" rel="stylesheet">
      <!-- asColorpicker -->
      <link href="{{ asset('asset/vendor/jquery-asColorPicker/css/asColorPicker.min.css') }}" rel="stylesheet">
      <!-- Material color picker -->
      <link href="{{ asset('asset/vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

      <!-- Pick date -->
      <link rel="stylesheet" href="{{ asset('asset/vendor/pickadate/themes/default.css') }}">
      <link rel="stylesheet" href="{{ asset('asset/vendor/pickadate/themes/default.date.css') }}">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
<!--*******************
        Preloader start
    ********************-->
    @include('admin.layouts.preloader')
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->

		   @include("admin.layouts.logo")

        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->
		  @include("admin.layouts.Chatbox")
		<!--**********************************
            Chat box End
        ***********************************-->





        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
							Ladger
                            </div>
                        </div>
                        @include("admin.layouts.name")
                    </div>
				</nav>
			</div>
		</div>

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include("admin.layouts.sidenavbar")
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->

	    <div class="content-body">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ladger</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 mb-3">
                                        <div class="example">
                                            <p class="mb-1">Date Range Pick</p>
                                            <input class="form-control input-daterange-datepicker" type="text" name="daterange" value="01/01/2015 - 01/31/2015">
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-sm-6">
                                        <div class="mb-3">
                                            <p class="mb-1">Txn/Bank account</p>
                                          <input type="text" class="form-control" placeholder="Txn/Bank reff Ackn. account">
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-2 col-sm-6">
                                        <div class="mb-3">
                                            <p class="mb-1">Status</p>
                                          <input type="text" class="form-control" placeholder="Status">
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-xl-2 col-sm-6">
                                        <div class="mb-3">
                                            <p class="mb-1"> Select Api </p>
                                          <input type="text" class="form-control" placeholder="Select Api ">
                                        </div>
                                    </div> -->

                                    <div class="col-xl-4 col-sm-2">
                                        <!-- Card -->


                                        <div class="mb-3">
                                                <p class="mb-1">Search</p>
                                                <div class="input-group search-area">
                                                    <input type="text" class="form-control" placeholder="Search here...">
                                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                             </div>
                                            </div>
                                        </div>
                                        <!-- Card -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                <i class="fa-solid fa-envelope me-1"></i> Email Template List
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body form excerpt">
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-responsive-sm mb-0">
                                        <thead>
                                            <tr>
                                                <!-- <th style="">
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="checkAll">
                                                      <label class="form-check-label" for="checkAll">

                                                      </label>
                                                    </div>
                                                </th> -->
                                                <th>Sr.No</th>
                                            <th>Api ID</th>
                                            <th>Txn ID</th>
                                            <th>Bank Ref</th>
                                            <th>ackn.no</th>
                                            <th>Api ID</th>
                                            <th>Account</th>

                                              <th>Status</th>

                                                <th style="width:85px;"><strong>Actions</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
                                                      <label class="form-check-label" for="flexCheckDefault-1">

                                                      </label>
                                                    </div>
                                                </td> -->
                                                <td><b>1</b></td>
                                                <td>User Registration</td>
                                                <td>01 August 2023</td>
                                                <td class="recent-stats"><i class="fa fa-circle text-success me-1"></i>Successful</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
                                                      <label class="form-check-label" for="flexCheckDefault-2">

                                                      </label>
                                                    </div>
                                                </td> -->
                                                <td><b>2</b></td>
                                                <td>User Forgot Password</td>
                                                <td>01 August 2023</td>
                                                <td class="recent-stats"><i class="fa fa-circle text-danger me-1"></i>Canceled</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
                                                      <label class="form-check-label" for="flexCheckDefault-3">

                                                      </label>
                                                    </div>
                                                </td> -->
                                                <td><b>3</b></td>
                                                <td>User Activation</td>
                                                <td>01 August 2023</td>
                                                <td class="recent-stats"><i class="fa fa-circle text-warning me-1"></i>Pending</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4">
                                                      <label class="form-check-label" for="flexCheckDefault-4">

                                                      </label>
                                                    </div>
                                                </td> -->
                                                <td><b>4</b></td>
                                                <td>User Login</td>
                                                <td>01 August 2023</td>
                                                <td class="recent-stats"><i class="fa fa-circle text-warning me-1"></i>pending</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-5">
                                                      <label class="form-check-label" for="flexCheckDefault-5">

                                                      </label>
                                                    </div>
                                                </td> -->
                                                <td><b>5</b></td>
                                                <td>User Account Locked</td>
                                                <td>01 August 2023</td>
                                                <td class="recent-stats"><i class="fa fa-circle text-danger me-1"></i>Canceled</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-6">
                                                      <label class="form-check-label" for="flexCheckDefault-6">

                                                      </label>
                                                    </div>
                                                </td> -->
                                                <td><b>6</b></td>
                                                <td>Store Admin Registration</td>
                                                <td>01 June 2023</td>
                                                <td class="recent-stats"><i class="fa fa-circle text-success me-1"></i>Successful</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <!-- <td>
                                                    <div class="form-check">
                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-7">
                                                      <label class="form-check-label" for="flexCheckDefault-7">

                                                      </label>
                                                    </div>
                                                </td> -->
                                                <td><b>7</b></td>
                                                <td>Create Store</td>
                                                <td>01 May 2023</td>
                                                <td class="recent-stats"><i class="fa fa-circle text-success me-1"></i>Successful</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-danger shadow btn-xs sharp rounded-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
                                    <small class="mb-xl-0 mb-2">Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on 2</small>
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination mb-2 mb-sm-0">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
                                      </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->


    <script src="{{ asset('asset/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/chart-js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
	<!-- Apex Chart -->
    <script src="{{ asset('asset/vendor/apexchart/apexchart.js') }}"></script>


  <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="{{ asset('asset/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- clockpicker -->
    <script src="{{ asset('asset/vendor/clockpicker/js/bootstrap-clockpicker.min.js') }}"></script>
    <!-- asColorPicker -->
    <script src="{{ asset('asset/vendor/jquery-asColor/jquery-asColor.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-asGradient/jquery-asGradient.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js') }}"></script>
    <!-- Material color picker -->
    <script src="{{ asset('asset/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>
    <!-- pickdate -->
    <script src="{{ asset('asset/vendor/pickadate/picker.js') }}"></script>
    <script src="{{ asset('asset/vendor/pickadate/picker.time.js') }}"></script>
    <script src="{{ asset('asset/vendor/pickadate/picker.date.js') }}"></script>


    <!-- Daterangepicker -->
    <script src="{{ asset('asset/js/plugins-init/bs-daterange-picker-init.js') }}"></script>
    <!-- Clockpicker init -->
    <script src="{{ asset('asset/js/plugins-init/clock-picker-init.js') }}"></script>
    <!-- asColorPicker init -->
    <script src="{{ asset('asset/js/plugins-init/jquery-asColorPicker.init.js') }}"></script>
    <!-- Material color picker init -->
    <script src="{{ asset('asset/js/plugins-init/material-date-picker-init.js') }}"></script>
    <!-- Pickdate -->
    <script src="{{ asset('asset/js/plugins-init/pickadate-init.js') }}"></script>


    <script src="{{ asset('asset/js/custom.min.js') }}"></script>
    <script src="{{ asset('asset/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('asset/js/demo.js') }}"></script>
    <script src="{{ asset('asset/js/styleSwitcher.js') }}"></script>
   <script>
		jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},500)
		});
	</script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:42 GMT -->
</html>
