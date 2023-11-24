<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:13:54 GMT -->
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

          <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('asset/images/favicon.png') }}">
	<!-- Page Title Here -->
	<title>Dompet - Payment Admin Dashboard Bootstrap Template</title>


    <!-- Style css -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">
    <style>
        .login-form {
          /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
           box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
          /* padding: 20px; */
          padding: 30px;
          background-color: #FFF;
          border-radius: 8px;

        }
        .login-form h3.title {
      margin-bottom: 15px;
      color: #333;
    }
    .login-form p {
      color: #666;
      margin-bottom: 30px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .show-pass {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
    }
    .eye {
      color: #999;
    }

    .eye:hover {
      color: #333;
    }

    .form-check-label {
      color: #666;
    }
  .btn-primary {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .btn-link {
      color: #007bff;
      text-decoration: none;
    }

    .btn-link:hover {
      text-decoration: underline;
    }


    /* Dark mode styles */
/* .dark-mode {
  background-color: #212130;
  color: #fff;
}

.dark-mode .login-form {
  background-color: #212130;
  color: #fff;
} */
 /* Update text color for better readability in dark mode */
 /* .dark-mode h3.title,
    .dark-mode p,
    .dark-mode .form-check-label,
    .dark-mode .btn-link,
    .dark-mode .login-content p {
      color: #ccc;
    } */
    .valid_err: {
        font-weight:bold;
    }


      </style>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
				<div class="col-lg-6 col-md-12 col-sm-12 mx-auto align-self-center">
					<div class="login-form">
						<div class="text-center">
							<h3 class="title">Sign In</h3>
							<p>Sign in to your account to start using Dompact</p>
						</div>
						<form action="{{ route('reverify.send') }}" method="post" class="register-form">
                            @csrf


							<div class="mb-4">
								<label class="mb-1 text-dark">Email</label>
								<input type="email" class="form-control form-control"  name="email" id="email" value="{{ old('email') }}" placeholder="Enter email address" required>
                                <span class="text-danger valid_err">
                                    @error('email')
                                    {{ $message }}
                                    @enderror
                                  </span>
							</div>

							{{-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
								<div class="mb-4">
									<div class="form-check custom-checkbox mb-3">
										<input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
										<label class="form-check-label mt-1" for="customCheckBox1">Remember my preference</label>
									</div>
								</div>
								<div class="mb-4">
									<a href="https://dompet.dexignlab.com/codeigniter/demo/page_forgot_password" class="btn-link text-primary">Sign in</a>
								</div>
							</div> --}}
							<div class="text-center mb-4">
								<button type="submit" class="btn btn-primary btn-block">Send Verification link</button>
							</div>
							{{-- <h6 class="login-title"><span>Or continue with</span></h6> --}}

							{{-- <div class="mb-3">
								<ul class="d-flex align-self-center justify-content-center">
									<li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
									<li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus mx-2"></a></li>
									<li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin me-2"></a></li>
									<li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
								</ul>
							</div> --}}
							<p class="text-center">Not registered?
								<a class="btn-link text-primary" href="{{ route('auth.registerpage') }}">Register</a>
							</p>

                            <p class="text-center">Already registered?
								<a class="btn-link text-primary" href="{{ route('auth.loginpage') }}">Login</a>
							</p>


						</form>
					</div>
				</div>
                <div class="col-xl-6 col-lg-6">
					<div class="pages-left h-100">
						<div class="login-content">
							<a href="#"><img src="{{ asset('asset/images/logo-full.png') }}" class="mb-3" alt=""></a>

							<p>Your true value is determined by how much more you give in value than you take in payment. ...</p>
						</div>
						<div class="login-media text-center">
							<img src="{{ asset('asset/images/login.png') }}" alt="">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <!-- Required vendors -->
    <script src="{{ asset('asset/vendor/global/global.min.js') }}"></script>
      <script src="{{ asset('asset/js/custom.min.js') }}"></script>
    <script src="{{ asset('asset/js/dlabnav-init.js') }}"></script>
    {{-- <script>
        // Function to set dark mode
        function setDarkMode() {
          const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
          const storedMode = localStorage.getItem('mode');

          if (storedMode === 'dark' || (prefersDarkScheme && !storedMode)) {
            document.body.classList.add('dark-mode');
          }
        }

        // Function to toggle between light and dark mode
        function toggleDarkMode() {
          const body = document.querySelector('body');
          body.classList.toggle('dark-mode');

          // Store user's preference in localStorage
          const mode = body.classList.contains('dark-mode') ? 'dark' : 'light';
          localStorage.setItem('mode', mode);
        }

        // Apply dark mode when the page loads
        window.onload = setDarkMode;
      </script> --}}
      <script src="{{ asset('asset/customejs/cdn/jquery_validate.min.js') }}"></script>
      <script src="{{ asset('asset/customejs/form_validation.js') }}"></script>
      <script src="{{ asset('asset/customejs/cdn/sweetalert.js') }}"></script>

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


</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:13:55 GMT -->
</html>
