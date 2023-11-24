<div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li class="dropdown header-profile">
						<a class="nav-link has-arrow ai-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
								<img src="{{ asset('asset/images/profile/pic1.jpg') }}" width="20" alt="">
							<div class="header-info ms-3">
                                @php
                                    $username = !empty(Auth::user()->name) ? Auth::user()->name : 'Guest';
                                    // Split the full name into an array of first and last name
                                    $nameParts = explode(' ', $username);
                                    // Extract the first name
                                    $firstName = !empty($nameParts[0]) ? $nameParts[0] : 'User';
                                    $email = !empty(Auth::user()->email) ? Auth::user()->email : '';
                                @endphp
								<span class="font-w600 ">Hi, <b>{{ $firstName }}</b></span>
								<small class="text-end font-w400">{{ $email }}</small>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							{{-- <a href="#" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
								<span class="ms-2">Profile </span>
							</a> --}}
							{{-- <a href="#" class="dropdown-item ai-icon">
								<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
								<span class="ms-2">Inbox </span>
							</a> --}}
							<a href="{{ route('auth.logout') }}" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
                    <li><a href="{{ route('auth.index') }}" aria-expanded="false">
							<i class="flaticon-025-dashboard"></i>
							<span class="nav-text" >Dashboard</span>
						</a>


                    </li>


                    @if(!empty(Auth::user()->role) && Auth::user()->role == 1)

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-gear fw-bold"></i>
                        <span class="nav-text">Profile </span>

                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('auth.my-profile') }}">My Profile</a></li>
                            <li><a href="{{ route('auth.change-password') }}">Change Password</a></li>
                            <li><a href="{{ route('auth.change-mpin') }}">Change Mpin</a></li>

                        </ul>

                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
						<i class="flaticon-050-info"></i>
							<span class="nav-text">User Management</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="#">Create User</a></li>
							<li><a href="{{ route('auth.userlist') }}">User List</a></li>
							<li><a href="#">My Team</a></li>
							<li><a href="#">User Maping</a></li>
							<li><a href="#">Assaigen Service</a></li>
							<li><a href="#"> Create Empolyee</a></li>
							<li><a href="#"> Empolyee List</a></li>
					        <li><a href="{{ route('auth.login') }}">Login Activity</a></li>
							<li><a href="#">Assaigen Meun</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-041-graph"></i>
							<span class="nav-text">Api Management</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="#">Payout Api Switch</a></li>
							<li><a href="#">Upi Payout Switch</a></li>
							<li><a href="#">UserWise Payout Switch</a></li>
							<li><a href="#">UserWise Upi Payout Switch</a></li>
							<li><a href="#">Amount Wise Payout Switch</a></li>

							<li><a href="#">Amount Wise Upi Payout Switch</a></li>
							<li><a href="#">DMT Api Switch</a></li>
							<li><a href="#">Upi DMT Switch</a></li>
							<li><a href="#">UserWise DMT Switch</a></li>
							<li><a href="#">UserWise Upi DMT Switch</a></li>
							<li><a href="#">Amount Wise DMT Switch </a></li>
							<li><a href="#">Amount Wise Upi DMT Switch </a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-086-star"></i>
							<span class="nav-text">Masters</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{ route('auth.ip_master') }}">IP Master</a></li>
							<li><a href="#">Package Master</a></li>
							<li><a href="{{ route('auth.manage_service') }}">Manage Service</a></li>
                            <li><a href="#">Manage News</a></li>
							<li><a href="#">Manage Poster </a></li>
							 <li> <a href="#"> Manage  Popup</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Setting</span>
						</a>
                        <ul aria-expanded="false">

                        </ul>
                    </li>
					<li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-045-heart"></i>
							<span class="nav-text">Commission and change</span>
						</a>
                        <ul aria-expanded="false" class="mm-collapse" style="">
                        <li><a href="#">Payout Charge</a></li>
                            <li><a href="#">DMT Charge</a></li>
                            <li><a href="#">Recharge & BBPS Commission</a></li>
							<li> <a href="#"> UPI Payout</a></li>
							<li> <a href="#"> UPI DMT</a></li>

						</ul>
                    </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-072-printer"></i>
							<span class="nav-text">Report</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="{{ route('auth.payout') }}">Payout Report</a></li>
							 <li> <a href="{{ route('auth.upi_payout') }}"> Upi payout report</a></li>
                            <li><a href="{{ route('auth.dmt_report') }}">DMT Report</a></li>
                            <li><a href="{{ route('auth.ledger_report') }}">Ladger Report</a></li>
                            <li><a href="#">Day Book</a></li>
                            <li><a href="#">Add Fund Report</a></li>
                            <li><a href="#">Fund Transfer Report</a></li>
							<li><a href="{{ route('auth.invoice') }}">   Invoice</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-043-menu"></i>
							<span class="nav-text">Request</span>
						</a>
                        <ul aria-expanded="false">
                        <li><a href="#">Fund Request</a></li>
							{{-- <li><a href="#">KYC Request</a></li> --}}
							<li><a href="#">Bank Request</a></li>
							<li><a href="#">Complaint Request</a></li>
                        </ul>
                    </li>



                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-022-copy"></i>
							<span class="nav-text">Helpdesk</span>
						</a>
                        <ul aria-expanded="false">




                        <li><a href="#">Support </a></li>
                            <li><a href="#">Ticket </a></li>
							<li><a href="#">Training Videoes</a></li>
                        </ul>
                    </li>


                    @elseif(!empty(Auth::user()->role) && Auth::user()->role == 2 && ((!empty($user_kyc) && isset($user_kyc->approval_status) && $user_kyc->approval_status == 2) || (!empty($user_kyc->admin_kyc_onboarding) && $user_kyc->admin_kyc_onboarding == 2)))

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="fa-solid fa-gear fw-bold"></i>
                        <span class="nav-text">Profile </span>

                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{ route('auth.my-profile') }}">My Profile</a></li>
                        <li><a href="{{ route('auth.change-password') }}">Change Password</a></li>
                        <li><a href="{{ route('auth.change-mpin') }}">Change Mpin</a></li>

                    </ul>

                </li>

                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-086-star"></i>
                        <span class="nav-text">Developer Api</span>
                    </a>
                    <ul aria-expanded="false">




                        <li><a href="{{ route('auth.api_key') }}">Api Key </a></li>
                        <li><a href="#"> Webhuk </a></li>
                        <li><a href="#"> Add Ip</a></li>
                        <li><a href="#">APi Documentetion</a></li>


                    </ul>
                </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-072-printer"></i>
                    <span class="nav-text">Report</span>
                </a>
                <ul aria-expanded="false">
                <li><a href="{{ route('user.payout') }}">Payout Report</a></li>
                     <li> <a href="{{ route('user.upi_payout') }}"> Upi payout report</a></li>
                    <li><a href="{{ route('user.ledger_report') }}">Ladger Report</a></li>
                    <li><a href="#">Upi Collection</a></li>
                    <li><a href="#">Add Fund Report</a></li>
                    <li><a href="{{ route('user.invoice') }}"> Invoice</a></li>
                    <li><a href="#">DayBook</a></li>
                </ul>
            </li>

                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-041-graph"></i>
                    <span class="nav-text">Wallet </span>
                </a>
                <ul aria-expanded="false">
                        <li><a href="#">Fund Request</a></li>
                    <li><a href="#">  Fund Request Report </a></li>

                </ul>
            </li>
            @endif


                </ul>
				<div class="copyright">
					<p><strong>Dompet Payment Admin Dashboard</strong> © 2023 All Rights Reserved</p>
					<p class="fs-12">Made with <span class="heart"></span> by DexignLab</p>
				</div>
			</div>
        </div>
