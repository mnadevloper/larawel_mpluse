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
                                Form Pickers
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
        @include("DMTPayout_content")
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
