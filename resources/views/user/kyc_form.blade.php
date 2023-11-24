<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/xhtml/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:36 GMT -->
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
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">

	<!-- Page Title Here -->
	<title>Dompet - Payment Admin Dashboard Bootstrap Template</title>



    <!-- Form step -->
    <link href="{{ asset('asset/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="{{ asset('asset/vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
     <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

     <style>
        .form-control:disabled, .form-control[readonly] {
    background-color: #e9ecef;
    opacity: 1;
}
.form-select {
    background-color: #fff;
     /*border: 0.0625rem solid #e6e6e6;
    padding: 0.3125rem 1.25rem; */
    /* color: #6e6e6e; */
    height: 3.5rem;
    border-radius: 1rem;
}


    /* Style the scrollbar for WebKit browsers (like Chrome) */
    select.form-select::-webkit-scrollbar {
        width: 10px; /* Width of the scrollbar */
    }

    select.form-select::-webkit-scrollbar-track {
        background: #f1f1f1; /* Color of the scrollbar track */
        border-radius: 5px; /* Border radius of the scrollbar track */
    }

    select.form-select::-webkit-scrollbar-thumb {
        background: #888; /* Color of the scrollbar thumb */
        border-radius: 5px; /* Border radius of the scrollbar thumb */
    }
    #imagePreview {
        max-width: 100%;
        height: 300px; /* Set a fixed height for the preview area */
        overflow-y: auto; /* Enable vertical scrollbar when necessary */
        border: 1px solid #ccc;
        padding: 5px;
    }
    #imagePreview img {
        max-width: 100%;
        height: auto;
    }

    .tab-content {
        height: 500px !important;
    }

     </style>

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
   @include('admin.layouts.preloader');
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
                                Form Wizard
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
				{{-- <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Wizard</a></li>
					</ol>
                </div> --}}
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Form step</h4>
                            </div>
                            <div class="card-body">
								<div id="smartwizard" class="form-wizard order-create">
									<ul class="nav nav-wizard">
										<li><a class="nav-link" href="#personal_details">
											<span>1</span>
										</a></li>
										<li><a class="nav-link" href="#business_details">
											<span>2</span>
										</a></li>
										<li><a class="nav-link" href="#address_detail">
											<span>3</span>
										</a></li>

                                        <li><a class="nav-link" href="#verifydocument">
											<span>4</span>
										</a></li>
										<li><a class="nav-link" href="#kyc_authorizedsignaturied">
											<span>5</span>
										</a></li>

									</ul>
									<div class="tab-content" id="tab_content">
										<div id="personal_details" class="tab-pane" role="tabpanel">
											<div class="row">
                                                @php
                                                    $username= !empty(Auth::user()->name) ? Auth::user()->name : '';
                                                    $email= !empty(Auth::user()->email) ? Auth::user()->email : '';
                                                    $mobile= !empty(Auth::user()->mobile) ? Auth::user()->mobile : '';
                                                @endphp

												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Full Name<span class="required">*</span></label>
														<input type="text" name="firstName" value="{{ $username }}" class="form-control" placeholder="Parsley" required @if(!empty($username)) disabled readonly @endif>
													</div>
												</div>

												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Email Address<span class="required">*</span></label>
														<input type="email" class="form-control" id="inputGroupPrepend2" aria-describedby="inputGroupPrepend2" value="{{ $email }}" placeholder="example@example.com.com" required @if(!empty($email)) disabled readonly @endif>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Phone Number<span class="required">*</span></label>
														<input type="text" name="phoneNumber" value="{{ $mobile }}" class="form-control" placeholder="Enter mobile" required @if(!empty($mobile)) disabled readonly @endif>
													</div>
												</div>

											</div>
										</div>
										<div id="business_details" class="tab-pane" role="tabpanel">
											<div class="row">

                                                <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Business Type<span class="required">*</span></label>

                                                        <select name="business_type" class="form-select" id="" required>
                                                            <option value="" hidden>Select business type</option>
                                                            <option value="Private Limited Company">Private Limited Company</option>
                                                        </select>
													</div>
												</div>
                                                <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Business Entity<span class="required">*</span></label>

                                                        <select name="business_entity" class="form-select" id="" required>
                                                            <option value="" hidden>Select business entity</option>
                                                            <option value="Regulatory">Regulatory</option>
                                                            <option value="Non-regulatory">Non-regulatory</option>
                                                        </select>
													</div>
												</div>

                                                <div class="col-lg-6 mb-2" id="business_category_row">
													<div class="mb-3">
														<label class="text-label form-label">Business Category<span class="required"></span></label>

                                                        <select name="business_category" class="form-select" id="business_category">
                                                            <option value="" hidden>Select business category</option>
                                                            <option value="E-Commerce">E-Commerce</option>
                                                            <option value="Educational Institutions">Educational Institutions</option>
                                                            <option value="NBFC & Small Lending Organizations">NBFC & Small Lending Organizations</option>
                                                            <option value="Insurance">Insurance</option>
                                                            <option value="Logistics & Transportations">Logistics & Transportations</option>
                                                            <option value="FinTech">FinTech</option>
                                                            <option value="Other">Other</option>
                                                        </select>
													</div>
												</div>

												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">GSTIN No.<span class="required">*</span></label>
														<input type="text" name="gstin_no" class="form-control" placeholder="" required>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Business Description<span class="required">*</span></label>
                                                        <textarea name="business_desc" id="" class="form-control"></textarea>
													</div>
												</div>

                                                <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Udyog Aadhar<span class="required">*</span></label>
														<input type="text" name="udyog_aadhar" class="form-control" placeholder="" required>
													</div>
												</div>

                                                <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Shop Number<span class="required">*</span></label>
														<input type="text" name="shop_no" class="form-control" placeholder="" required>
													</div>
												</div>


                                                <div class="col-lg-6 mb-2">
													<div class="mb-3">
														<label class="text-label form-label">Website URL<span class="required">*</span></label>
														<input type="url" name="website_url" class="form-control" placeholder="" required>
													</div>
												</div>



											</div>
										</div>


                                        <div id="address_detail" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Street No.<span class="required">*</span></label>
                                                    <input type="text" name="street_no" class="form-control" placeholder="" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Pin Code<span class="required">*</span></label>
                                                    <input type="text" name="pincode" class="form-control" placeholder="" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">State<span class="required">*</span></label>

                                                    <select name="states" id="state" class="form-select" required>
                                                        <option value="" hidden>Select State</option>
                                                        @if (!empty($states))
                                                        @foreach ($states as $state)
                                                            <option value="{{ $state->id }}">{{ $state->state_title }}</option>
                                                        @endforeach

                                                        @else
                                                        <option value="" hidden>State not found</option>
                                                        @endif

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">District<span class="required">*</span></label>

                                                    <select name="district" id="district" class="form-select" required>
                                                        <option value="" hidden>Select District</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-2">
                                                <div class="mb-3">
                                                    <label class="text-label form-label">Select City<span class="required">*</span></label>
                                                    <select name="city" id="city" class="form-select" required>
                                                        <option value="" hidden>Select City</option>
                                                    </select>
                                                </div>
                                            </div>
										</div>
                                        </div>
										<div id="verifydocument" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Business PAN<span class="required">*</span></label>
                                                        <input type="file" name="pan_img" id="pan_img" class="form-control" placeholder="" required>
                                                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG files of max. size 4MB</small>
                                                    </div>
                                                    {{-- <div id="imagePreview"  style="display: none;"></div> --}}
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Certificate of Incorporation<span class="required">*</span></label>
                                                        <input type="file" name="certification_incorporation" class="form-control" placeholder="" required>
                                                        <small class="form-text text-muted">You can upload PDF of max. size 4MB</small>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">GST Registration Certificate<span class="required">*</span></label>
                                                        <input type="file" name="gst_reg_img" class="form-control" placeholder="" required>
                                                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                                                    </div>
                                                </div>
                                            </div>
										</div>

										<div id="kyc_authorizedsignaturied" class="tab-pane" role="tabpanel">
											<div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Director's Name<span class="required">*</span></label>
                                                        <input type="text" name="director_name" class="form-control" placeholder="" required>

                                                    </div>


                                                </div>

                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Mobile Number<span class="required">*</span></label>
                                                        <input type="number" name="mobile" class="form-control" placeholder="" required>

                                                    </div>
                                                </div>


                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Email Id<span class="required">*</span></label>
                                                        <input type="email" name="kyc_email" class="form-control" placeholder="" required>

                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mb-2">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Upload Partner PAN<span class="required">*</span></label>
                                                        <input type="file" name="partner_pan" class="form-control" placeholder="" required>
                                                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 mb-2" id="address_proof_row">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Address Proof<span class="required">*</span></label>

                                                        <select name="address_proof" id="address_proof" class="form-select" required>
                                                            <option value="" hidden>Choose any Address Proof</option>
                                                            <option value="Aadhaar">Aadhaar Card</option>
                                                            <option value="Licence">Driving LICENCE</option>
                                                            <option value="Passport">Passport</option>
                                                            <option value="Voter">Voter ID</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>
										</div>
									</div>
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
    <script src="{{ asset('asset/vendor/global/global.min.js') }}"></script>

    <script src="{{ asset('asset/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <!-- Form validate init -->
    <script src="{{ asset('asset/js/plugins-init/jquery.validate-init.js') }}"></script>


    <!-- Form Steps -->
    <script src="{{ asset('asset/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('asset/js/custom.min.js') }}"></script>
    <script src="{{ asset('asset/js/dlabnav-init.js') }}"></script>
    <script src="{{ asset('asset/js/demo.js') }}"></script>
    <script src="{{ asset('asset/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('asset/customejs/commonhelper.js') }}"></script>

	<script>
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard();
		});
	</script>



<script>
    $(document).ready(function () {
        $(document).on('change','#business_category', function (e) {
            e.preventDefault();
            var business_category = $(this).val();

            if(business_category == 'Other') {
                var business_categoryName = `<div class="col-lg-6 mb-2" id="other_business_cat">
													<div class="mb-3">
														<label class="text-label form-label">Other Business Category<span class="required">*</span></label>
														<input type="text" name="other_business_cat" class="form-control" placeholder="" required >
													</div>
												</div>`;
                $(business_categoryName).insertAfter('#business_category_row');
            } else {
                $('#other_business_cat').remove();
            }


        });


        $(document).on('change','#address_proof', function (e) {
            e.preventDefault();

            // Remove previously appended fields
            // $('#addhar_front_row, #addhar_back_row, #other_business_cat').remove();
            $('.address_proofes').remove();
            var address_proof = $(this).val();
            if(address_proof == 'Aadhaar') {
                var aadhar_front = `<div class="col-lg-6 mb-2 address_proofes" id="addhar_front_row">
                                        <div class="mb-3">
                                        <label class="text-label form-label">Upload AADHAAR Front Side<span class="required">*</span></label>
                                        <input type="file" name="address_proof_front" class="form-control" placeholder="" required>
                                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                                    </div>
                                </div>`;

                var aadhar_back = `<div class="col-lg-6 mb-2 address_proofes" id="addhar_back_row">
                        <div class="mb-3">
                        <label class="text-label form-label">Upload AADHAAR Back Side<span class="required">*</span></label>
                        <input type="file" name="address_proof_back" class="form-control" placeholder="" required>
                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                    </div>
                </div>`;
                // $(aadhar_front).insertAfter('#address_proof_row');
                // $(aadhar_back).insertAfter('#addhar_front_row');
                $(aadhar_front).insertAfter('#address_proof_row').promise().done(function() {
                    $('#addhar_front_row').after(aadhar_back);
                 });

            } else if(address_proof == 'Licence') {
                var licence = `<div class="col-lg-6 mb-2 address_proofes" id="licence_row">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Upload Driving LICENCE<span class="required">*</span></label>
                                                        <input type="file" name="address_proof_front" class="form-control" placeholder="" required>
                                                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                                                    </div>
												</div>`;
                $(licence).insertAfter('#address_proof_row');
            } else if(address_proof == 'Passport') {
                var passport_front = `<div class="col-lg-6 mb-2 address_proofes" id="passport_front_row">
                                        <div class="mb-3">
                                        <label class="text-label form-label">Upload PASSPORT Front Side<span class="required">*</span></label>
                                        <input type="file" name="address_proof_front" class="form-control" placeholder="" required>
                                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                                    </div>
                                </div>`;

                var passport_back = `<div class="col-lg-6 mb-2 address_proofes" id="passport_back_row">
                        <div class="mb-3">
                        <label class="text-label form-label">Upload PASSPORT Back Side<span class="required">*</span></label>
                        <input type="file" name="address_proof_back" class="form-control" placeholder="" required>
                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                    </div>
                </div>`;
                // $(passport_front).insertAfter('#address_proof_row');
                // $(passport_back).insertAfter('#passport_front_row');
                $(passport_front).insertAfter('#address_proof_row').promise().done(function() {
                    $('#passport_front_row').after(passport_back);
                 });
            } else if(address_proof == 'Voter') {
                var voter = `<div class="col-lg-6 mb-2 address_proofes" id="voter_row">
                                                    <div class="mb-3">
                                                        <label class="text-label form-label">Upload Voter ID<span class="required">*</span></label>
                                                        <input type="file" name="address_proof_front" class="form-control" placeholder="" required>
                                                        <small class="form-text text-muted">You can upload JPG / JPEG / PNG of max. size 4MB</small>
                                                    </div>
												</div>`;
                $(voter).insertAfter('#address_proof_row');
            }

        });
    });
</script>


</body>


<!-- Mirrored from dompet.dexignlab.com/xhtml/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 05:14:38 GMT -->
</html>
