{{-- @php
    echo "<pre>";
    print_R($user_lists->links());die;
@endphp --}}

<!DOCTYPE html>
<html lang="en">

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

    <!-- Datatable -->
    {{-- <link href="{{ asset('asset/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
         /* Pagination styles within the .pagination-container */
    span img, svg {
    vertical-align: middle;
    height: 20px !important;
}
nav.flex.items-center.justify-between {
    float: right;
}

 .pagination-container .flex-1 a {
        color: #333 !important;
        border: 1px solid #ccc !important;
        padding: 6px 12px !important;
        border-radius: 4px !important;
        background-color: #fff !important;
        text-decoration: none !important;
        /* transition: all 0.3s ease !important; */
        transition: background-color 0.3s, color 0.3s, border-color 0.3s !important;
    }

    .pagination-container .flex-1 a:hover {
        background-color: #f0f0f0 !important;
        color: #333 !important;
    }

    .pagination-container .flex-1 span {
        color: #333 !important;
        border: 1px solid #ccc !important;
        padding: 6px 12px !important;
        border-radius: 4px !important;
        background-color: #fff !important;
        transition: all 0.3s ease !important;
    }

    .pagination-container .flex-1 span:hover {
        background-color: #f0f0f0 !important;
        color: #333 !important;
        border-color: #999 !important; /* Highlighted border color */
    }

    /* Active page styles */
    .pagination-container .flex-1 .active-page {
        background-color: #007bff !important;
        color: #fff !important;
        border-color: #007bff !important;
    }

    /* Disabled page styles */
    .pagination-container .flex-1 .disabled {
        pointer-events: none !important;
        opacity: 0.5 !important;
        cursor: default !important;
    }
    .flex.justify-between.flex-1.sm\:hidden {
    display: flex;
}
.border {
    border: var(--bs-border-width) var(--bs-border-style) #ccc !important;
}
.js-switch + .switchery > small, .js-switch + .switchery > .small {
    top: 0rem !important;
}
.switchery-small {
    width: 41px !important;
}
button.swal2-cancel.btn.btn-danger {
    margin-right: 20px;
}
.eye-button {
      background-color: #3498db;
      color: #fff;
      padding: 6px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 15px;
    }

    .eye-button:hover {
      background-color: #2980b9;
    }

    th {
  word-wrap: break-word;
  white-space: nowrap; /* Prevent immediate wrapping */
}

    </style>
    <script>
        // Pass the base URL as a data attribute
        window.baseURL = "{{ url('/') }}";
    </script>
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
                            User Management/UserKyc Details
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
				{{-- <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
					</ol>
                </div> --}}
                <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">UserKyc Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>

                                                <th><strong>User Name</strong></th>
                                                <th><strong>Business Name</strong></th>
                                                <th><strong>GSTIN No.</strong></th>
                                                <th><strong>Udhyog Aadhar</strong></th>

                                                <th><strong>View Pan</strong></th>
                                                <th><strong>Incoporation Certificate</strong></th>
                                                <th><strong>GST Registration</strong></th>
                                                <th><strong>Partner Pan</strong></th>
                                                <th><strong>Address Proof</strong></th>
                                                <th><strong>Address Proof Front Img</strong></th>
                                                <th><strong>Address Proof Back Img</strong></th>
                                                <th><strong>Website</strong></th>
                                                <th><strong>Business Mobile</strong></th>
                                                <th><strong>Business Email</strong></th>
                                                <th><strong>Business Type</strong></th>
                                                <th><strong>Business Entity</strong></th>
                                                <th><strong>Business Category</strong></th>
                                                <th><strong>Other Business Category</strong></th>
                                                <th><strong>Business Desciption</strong></th>
                                                <th><strong>Shop No</strong></th>
                                                <th><strong>Street No</strong></th>
                                                <th><strong>Pincode</strong></th>
                                                <th><strong>State</strong></th>
                                                <th><strong>City</strong></th>
                                                <th><strong>Director Name</strong></th>
                                                <th><strong>Authority Mobile</strong></th>
                                                <th><strong>Authority Email</strong></th>

                                                <th class=""><strong>Kyc Approval</strong></th>

												{{-- <th class="text-end"><strong>Action</strong></th> --}}

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(empty($get_userkyc->business_name))
                                            <tr>
                                                <td colspan="8" style="text-align: center;font-weight:bold">Kyc not found</td>
                                            </tr>
                                        @else


                                            <tr style="text-align: center">

                                                <td>{{ $get_userkyc->username }}</td>
                                                <td>{{ $get_userkyc->business_name }}</td>
                                                <td>{{ $get_userkyc->gst_no }}</td>
                                                <td>{{ $get_userkyc->udyog_aadhar }}</td>

                                                @if(!empty($get_userkyc->pan_img))
                                                <td><a href="{{ asset($get_userkyc->pan_img) }}" target="blank"><button class="eye-button">
                                                    <i class="fa fa-eye"></i>
                                                  </button></a></td>
                                                  @else
                                                  <td>N/A</td>
                                                  @endif

                                                  @if(!empty($get_userkyc->certification_incorporation))
                                                  <td><a href="{{ asset($get_userkyc->certification_incorporation) }}" target="blank"><button class="eye-button">
                                                    <i class="fa fa-eye"></i>
                                                  </button></a></td>
                                                  @else
                                                  <td>N/A</td>
                                                  @endif

                                                  @if(!empty($get_userkyc->gst_reg_img))
                                                  <td><a href="{{ asset($get_userkyc->gst_reg_img) }}" target="blank"><button class="eye-button">
                                                    <i class="fa fa-eye"></i>
                                                  </button></a></td>
                                                  @else
                                                  <td>N/A</td>
                                                  @endif

                                                  @if(!empty($get_userkyc->partner_pan))
                                                  <td><a href="{{ asset($get_userkyc->partner_pan) }}" target="blank"><button class="eye-button">
                                                    <i class="fa fa-eye"></i>
                                                  </button></a></td>
                                                  @else
                                                  <td>N/A</td>
                                                  @endif

                                                  <td>{{ $get_userkyc->address_proof }}</td>

                                                  @if(!empty($get_userkyc->address_proof_front))
                                                  <td><a href="{{ asset($get_userkyc->address_proof_front) }}" target="blank"><button class="eye-button">
                                                    <i class="fa fa-eye"></i>
                                                  </button></a></td>
                                                  @else
                                                  <td>N/A</td>
                                                  @endif

                                                  @if(!empty($get_userkyc->address_proof_back))
                                                  <td><a href="{{ asset($get_userkyc->address_proof_back)  }}" target="blank"><button class="eye-button">
                                                    <i class="fa fa-eye"></i>
                                                  </button></a></td>
                                                  @else
                                                  <td>N/A</td>
                                                  @endif

                                                  <td>{{ $get_userkyc->website_url }}</td>
                                                  <td>{{ $get_userkyc->business_mobile }}</td>
                                                  <td>{{ $get_userkyc->business_email }}</td>
                                                  <td>{{ $get_userkyc->business_type }}</td>
                                                  <td>{{ $get_userkyc->business_entity }}</td>
                                                  <td>{{ !empty($get_userkyc->business_category) ? $get_userkyc->business_category : 'N/A' }}</td>
                                                  <td>{{ !empty($get_userkyc->other_business_cat) ? $get_userkyc->other_business_cat : 'N/A' }}</td>
                                                  <td>{{ $get_userkyc->business_desc }}</td>
                                                  <td>{{ $get_userkyc->shop_no }}</td>
                                                  <td>{{ $get_userkyc->street_no }}</td>
                                                  <td>{{ $get_userkyc->pincode }}</td>
                                                  <td>{{ $get_userkyc->states }}</td>
                                                  <td>{{ $get_userkyc->city }}</td>
                                                  <td>{{ $get_userkyc->director_name }}</td>
                                                  <td>{{ $get_userkyc->authority_mobile }}</td>
                                                  <td>{{ $get_userkyc->authority_email }}</td>



                                                {{-- <td><span class="badge light badge-success">Successful</span></td> --}}
                                                @php
                                                $id = !empty($get_userkyc->id) ? $get_userkyc->id : '';
                                            @endphp


                                                {{-- <td>

                                                    <input type="checkbox" data-id = "{{ $id }}" id="toggle_{{ $id }}" class="js-switch" {{ $get_userkyc->approval_status == 1 ? 'checked' : '' }}>
												</td> --}}
                                                @if(!empty($get_userkyc->approval_status) && $get_userkyc->approval_status == 1)
                                                <td class="text-end">

													<div class="d-flex justify-content-end">

                                                        <button type="button" class="btn btn-success kyc_approval"  data-id = "{{ $id }}" data-status="2">Approve</button>
                                                        <button type="button" class="btn btn-danger kyc_approval" style="margin-left:5px"  data-id = "{{ $id }}" data-status="3">Reject</button>

													</div>

												</td>
                                                @elseif (!empty($get_userkyc->approval_status) && $get_userkyc->approval_status == 2)

                                                    <td class="text-end">
                                                        {{-- <span class="badge light badge-success">Approved</span> --}}
                                                        <span class="badge badge-success">Approved</span>
                                                    </td>

                                                @elseif (!empty($get_userkyc->approval_status) && $get_userkyc->approval_status == 3)
                                                    <td class="text-end">
                                                        {{-- <span class="badge light badge-danger">Rejected</span> --}}
                                                        <span class="badge badge-danger">Approved</span>
                                                    </td>
                                                @endif
                                                {{-- <td><span class="badge light badge-warning">Pending</span></td> --}}
                                                {{-- <td><span class="badge badge-warning">Pending</span></td> --}}
                                            </tr>

                                            @endif
                                        </tbody>
                                    </table>


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

	<!-- Apex Chart -->
    <script src="{{ asset('asset/vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('asset/vendor/chart-js/chart.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Datatable -->
    {{-- <script src="{{ asset('asset/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('asset/js/plugins-init/datatables.init.js') }}"></script> --}}



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

    {{-- <script>
            jQuery(document).ready(function(){
                setTimeout(function() {
                    dezSettingsOptions.version = 'dark';
                    new dezSettings(dezSettingsOptions);
                },500)
            });
        </script> --}}

 {{-- <script>
    /**Create Toggle for enabling and disable */
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    elems.forEach(function(html) {
    let switchery = new Switchery(html,  { size: 'small' });
    });
</script> --}}

<script>

    $(document).ready(function () {

        // $('.js-switch').change(function () {
        //     let status = $(this).prop('checked') === true ? 1 : 0;
        //     let userid = $(this).data('id');
        //         //let token = $('input[name="_token"]').val();
        //     let token = "{{ csrf_token() }}";
        //     var baseUrl = window.baseURL;
        //     $.ajax({
        //         type: "POST",
        //         url: baseUrl+'/admin/update-user-status',
        //         data: {'status': status, 'userid': userid, '_token': token},
        //         success: function (response) {
        //             if (response.status == 'Status_Updated') {
        //                 toastr.success('Status Updated');
        //             } else if (response.status == 'Not_Found') {
        //                 toastr.error('Data Not Found');
        //             }
        //             else {
        //                 toastr.error('Something went wrong ! please try after sometime');
        //                 console.log(response.status);
        //             }
        //         }
        //     });
        // });

            $(document).on('click','.kyc_approval',function (e) {
                e.preventDefault();
            let status = $(this).data('status');

            let kyc_id = $(this).data('id');
            //let token = $('input[name="_token"]').val();
            let token = "{{ csrf_token() }}";
            var baseUrl = window.baseURL;
            $.ajax({
                type: "POST",
                url: baseUrl+'/admin/update-kyc-status',
                data: {'status': status, 'kyc_id': kyc_id, '_token': token},
                success: function (response) {
                    // console.log(response);return
                    if (response.status == 'Status_Updated') {
                        // toastr.success('Status Updated');
                        Swal.fire({
                                icon: 'success',
                                title: 'Status Update',
                                text: 'Kyc updated !!.'
                            }).then(() => {
                                location.reload();
                            })

                    } else if (response.status == 'Not_Found') {
                        // toastr.error('Data Not Found');
                        Swal.fire({
                                icon: 'info',
                                title: 'Not Exist...',
                                text: 'Data not found !!.'
                            }).then(() => {
                                location.reload();
                            })
                    }
                    else {
                        // toastr.error('Something went wrong ! please try after sometime');
                        // console.log(response.status);
                          Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something wrong please try after sometime !!.'
                            })
                    }
                }
            });
        });


    });



</script>
</body>


</html>
