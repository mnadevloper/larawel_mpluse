<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/xhtml/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:42 GMT -->
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    {{-- @include('admin.layouts.preloader') --}}
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
                                User
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
        <div class="content-body" >
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit User</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    @php
                                        $userid = !empty($get_user->id) ? $get_user->id : '';
                                    @endphp
                                    <form method="post" action="{{ route('auth.update_user', ['id' => $userid]) }}" class="form-valide-with-icon needs-validation" novalidate>
                                        @csrf
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Full Name<span class="required">*</span></label>
                                            <div class="input-group">
												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input type="text" class="form-control border-left-end" id="validationCustomUsername" placeholder="Enter a username.." value="{{ !empty($get_user->name) ? $get_user->name : '' }}" required name="username">
												{{-- <div class="invalid-feedback">
													Please Enter a username.
												  </div> --}}
                                            </div>
                                            <span class="text-danger valid_err">
                                                @error('username')
                                                {{ $message }}
                                                @enderror
                                              </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="dlab-password">Mobile<span class="required">*</span></label>
                                            <div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                                <input type="number" minlength="10" maxlength="10" name="mobile" class="form-control" id="mobile" placeholder="Enter a moblile" required value="{{ !empty($get_user->mobile) ? $get_user->mobile : '' }}">

                                                <div class="invalid-feedback">
													Please Enter a mobile.
												</div>
                                            </div>
                                            <span class="text-danger valid_err">
                                                @error('mobile')
                                                {{ $message }}
                                                @enderror
                                              </span>
                                        </div>

                                        <div class="mb-3">
                                            <label class="text-label form-label" for="email">Email<span class="required">*</span></label>
                                            <div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                <input type="email"  class="form-control" id="email" value="{{ !empty($get_user->email) ? $get_user->email : '' }}" name="email" placeholder="Enter a email" required>

                                                <div class="invalid-feedback">
													Please Enter a email.
												</div>
                                            </div>
                                            <span class="text-danger valid_err">
                                                @error('email')
                                                {{ $message }}
                                                @enderror
                                              </span>
                                        </div>


                                        <button type="submit" class="btn me-2 btn-primary float-end">Update</button>
                                        {{-- <button type="submit" class="btn btn-danger light">Cancel</button> --}}
                                    </form>
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

    <script src="{{ asset('asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('asset/js/custom.min.js') }}"></script>
    <script src="{{ asset('asset/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('asset/js/demo.js') }}"></script>
    <script src="{{ asset('asset/js/styleSwitcher.js') }}"></script>

    <script>
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                timer: 3000 // Automatically close after 3 seconds
            });
        @elseif(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '{{ session('error') }}'
            });
            @elseif(session('info'))
            Swal.fire({
                icon: 'info',
                title: 'Information!',
                text: '{{ session('info') }}'
            });
        @endif
    </script>
	<script>
		(function () {
		  'use strict'

		  // Fetch all the forms we want to apply custom Bootstrap validation styles to
		  var forms = document.querySelectorAll('.needs-validation')

		  // Loop over them and prevent submission
		  Array.prototype.slice.call(forms)
			.forEach(function (form) {
			  form.addEventListener('submit', function (event) {
				if (!form.checkValidity()) {
				  event.preventDefault()
				  event.stopPropagation()
				}

				form.classList.add('was-validated')
			  }, false)
			})
		})()
	</script>
	    <script>
		jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},500)
		});
	</script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:42 GMT -->
</html>
