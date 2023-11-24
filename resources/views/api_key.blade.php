<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/xhtml/ui-button.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:26 GMT -->
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
	<title>API Key Generation</title>



	<link href="{{ asset('asset/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    {{-- <style>
        .copy-icon {
            cursor: pointer;
            font-size: 24px;
            color: #007bff;
            margin-top: 10px;
        }

        .copy-icon:hover {
            color: #0056b3;
        }
    </style> --}}
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Light background color */
            margin: 0;
            padding: 20px;
        }

        .card-body {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .placeholder-box {
            font-size: 18px;
            font-weight: bold;
            color: #555;
            margin-bottom: 20px;
        }

        #apiKeySection {
            display: none;
        }

        #apiKey {
            font-size: 20px;
            background-color: #f0f0f0;
            padding: 8px;
            border-radius: 4px;
        }

        .copy-icon {
            cursor: pointer;
            font-size: 24px;
            color: #007bff;
            margin-top: 10px;
        }

        .copy-icon:hover {
            color: #0056b3;
        }

        .generate-api-btn {
            font-size: 20px;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 6px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .generate-api-btn:hover {
            background-color: #0056b3;
        }
</style>

</head>

<body>

       <!--*******************
        Preloader start
    ********************-->

    {{-- @include("preloader") --}}
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

  {{-- @include("logo.php") --}}
  @include("admin.layouts.logo")

        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->

		  {{-- @include("Chatbox.php") --}}
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
                                Button
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
         <div class="content-body btn-page">
            <div class="container-fluid">

    

                <div class="row">
                <div class="card-body text-center">
                    {{-- @php
                        $userid = !empty(Auth::user()->id) && Auth::user()->id ? Auth::user()->id : '';
                        $get_latest_apikey = DB::table('personal_access_tokens')
                                            ->select('token')
                                            ->where('tokenable_id', $userid)
                                            ->orderBy('created_at', 'desc')
                                            ->first();


                    @endphp

                    @if(empty($get_latest_apikey)) --}}
                    <div id="placeholderBox">
                        <p style="font-weight: bold">API Key has not been generated yet.</p>

                    </div>

                    {{-- @else --}}

                    <div id="apiKeySection" style="display:none">
                        {{-- <p style="font-weight: bold">Your API Key: <code id="apiKey">{{ $get_latest_apikey->token }}</code> --}}
                        <p style="font-weight: bold">Your API Key: <code id="apiKey"></code>
                        </p>
                        <span id="copyApiKeyBtn" class="copy-icon" title="Copy API Key"><i class="fa fa-copy"></i></span>

                    </div>
                    {{-- @endif --}}
                    <br>
                    <button id="generateApiKeyBtn" class="btn btn-outline-primary">Generate API Key</button>
                </div>
            </div><br><br>


                    <!-- row -->


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
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
   <script src="{{ asset('asset/vendor/global/global.min.js') }}"></script>
   {{-- <script src="{{ asset('asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script> --}}


  <script src="{{ asset('asset/js/custom.min.js') }}"></script>
  <script src="{{ asset('asset/js/dlabnav-init.js') }}"></script>
  <script src="{{ asset('asset/js/demo.js') }}"></script>
  <script src="{{ asset('asset/js/styleSwitcher.js') }}"></script>


<!-- Include jQuery CDN -->
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function() {
        $(document).on('click','#generateApiKeyBtn', function (e) {
            e.preventDefault();
            var token = "{{ csrf_token() }}";


            $.ajax({
                type: "post",
                url: "generate_apikey",
                data: {
                    '_token':token
                },
                success: function (response) {

                    if(response.token) {
                        // console.log(response.token);
                         // Display the API key section and show the generated API key
                        $('#apiKey').html(response.token);
                        $('#placeholderBox').hide();
                        $('#apiKeySection').show();
                    } else {
                        alert('Token not generated');
                    }

                }
            });


        });

        $('#apiKeySection').on('click', '#copyApiKeyBtn', function() {
            var apiKeyText = $('#apiKey').text();
            copyToClipboard(apiKeyText);

            // Alert or provide feedback on successful copy
            alert('API Key copied to clipboard!');
        });

        function copyToClipboard(text) {
            var tempInput = document.createElement('input');
            document.body.appendChild(tempInput);
            tempInput.setAttribute('value', text);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
        }

        // Check if API key exists (you may fetch this information from the backend)
        var apiKeyExists = false; // Change this based on your logic (true if API key exists)
        if (apiKeyExists) {
            // If API key exists, hide placeholder and show API key section
            $('#placeholderBox').hide();
            $('#apiKeySection').show();
        } else {
            // If API key doesn't exist, show placeholder box
            $('#placeholderBox').show();
            $('#apiKeySection').hide();
        }
    });
</script>

   {{-- <script>
    jQuery(document).ready(function(){
        setTimeout(function() {
            dezSettingsOptions.version = 'dark';
            new dezSettings(dezSettingsOptions);
        },500)
    });
</script> --}}
{{-- <script>
    // Function to set the data-theme-version attribute
    function setTheme() {
      // Check if 'data-theme-version' is not set in localStorage and set it to 'dark'
      if (!localStorage.getItem('theme')) {
        $('body').attr('data-theme-version', 'dark');
        localStorage.setItem('theme', 'dark');
      } else {
        // If 'data-theme-version' is set in localStorage, retrieve and apply it
        $('body').attr('data-theme-version', localStorage.getItem('theme'));
      }
    }

    // Run the function after all scripts have loaded
    $(window).on('load', function() {
      setTheme();
    });

</script> --}}

<!--2nd -->
 {{-- <script>
//     $(document).ready(function() {
//       // Check if 'data-theme-version' is not set in localStorage and set it to 'dark'
//       if (!localStorage.getItem('theme')) {
//         $('body').attr('data-theme-version', 'dark');
//         localStorage.setItem('theme', 'dark');
//       } else {
//         // If 'data-theme-version' is set in localStorage, retrieve and apply it
//         $('body').attr('data-theme-version', localStorage.getItem('theme'));
//       }
//     });
 </script> --}}

</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/ui-button.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:26 GMT -->
</html>
