<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas --> 
    <title>RHC EMR | Ecounter Note</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- color css -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" />
    <!-- select bootstrap --> 
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{ asset('css/perfect-scrollbar.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
  <style>
        .profile-header {
            color: #fff;
            padding: 40px 0;
            text-align: center;
        }
        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }
    </style>

<body class="dashboard dashboard_1">
    <div class="full_container"> 
        <div class="inner_container">
            <!-- Sidebar  -->
             @include('components.sidenav')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="white" d="M3 18h18v-2H3zm0-5h18v-2H3zm0-7v2h18V6z" />
                                </svg></button>
                            <div class="logo_section">
                                <a href="index.php"><img class=""
                                        src="https://www.rccghealthcentre.com/assets/images/rccg-logo-121x121.png"
                                        alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                    height="1.5em" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M21 19v1H3v-1l2-2v-6c0-3.1 2.03-5.83 5-6.71V4a2 2 0 0 1 2-2a2 2 0 0 1 2 2v.29c2.97.88 5 3.61 5 6.71v6zm-7 2a2 2 0 0 1-2 2a2 2 0 0 1-2-2" />
                                                </svg><span class="badge">.</span></a></li>
                                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                    height="1.5em" viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M10 19h3v3h-3zm2-17c5.35.22 7.68 5.62 4.5 9.67c-.83 1-2.17 1.66-2.83 2.5C13 15 13 16 13 17h-3c0-1.67 0-3.08.67-4.08c.66-1 2-1.59 2.83-2.25C15.92 8.43 15.32 5.26 12 5a3 3 0 0 0-3 3H6a6 6 0 0 1 6-6" />
                                                </svg></a></li>
                                        <!-- <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li> -->
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img
                                                    class="img-responsive rounded-circle"
                                                   src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                                    alt="#" /><span
                                                    class="name_user">{{ Auth::user()->first_name }} <svg
                                                        xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                                        height="1.5em" viewBox="0 0 24 24">
                                                        <path fill="white"
                                                            d="M11.475 14.475L7.85 10.85q-.075-.075-.112-.162T7.7 10.5q0-.2.138-.35T8.2 10h7.6q.225 0 .363.15t.137.35q0 .05-.15.35l-3.625 3.625q-.125.125-.25.175T12 14.7t-.275-.05t-.25-.175" />
                                                    </svg> </span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ url('profile') }}">My Profile</a>
                                                <a class="dropdown-item" href="{{ url('help') }}">Help</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <x-responsive-nav-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Ecounter Note</h2>
                                </div>
                            </div>
                        </div>
                        <!-- end welcome -->


                        <div class="row column3">
                        </div>
                       <div class="col-12 mt-4">
					    <!-- Profile Header -->
					    <!-- <div class="row">
					        <div class="col-md-12">
					            <div class="profile-header">
					                <h1>{{ $patient->full_name }} Profile</h1>
					                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-avatar">
					                <h3>{{ $patient->full_name }} </h3>
					                <p>Email: {{ $patient->email }} </p>
					            </div>
					        </div>
					    </div> -->

		<!-- 			     <div class="col-md-6">
					            <div class="card">
					                <div class="card-header">
					                    Patient Information
					                </div>
					                <div class="card-body">
					                    <p><strong>Name:</strong> {{ $patient->full_name }} </p>
					                    <p><strong>Email:</strong> {{ $patient->email }} </p>
					                    <p><strong>Phone Number:</strong> {{ $patient->phone_number }} </p>
					                    <p><strong>Address:</strong> {{ $patient->home_address }} </p>
					                </div>
					            </div>
					        </div> -->

					    <!-- Profile Information -->
					     <!-- Display Success Message -->
						    @if (session('status'))
						        <div class="alert alert-success">
						            {{ session('status') }}
						        </div>
						    @endif
					  <form action="{{ route('addecounter.store') }}" method="POST">
					    @csrf
					    <!-- Hidden Fields for patent_id -->
					     <input type="hidden" value="{{ old('id', $patient->id) }}" class="form-control" name="patient_id" required>
					    <div class="row">
					        <div class="col">
					            <label>Full Name*</label>
					            <input type="text" class="form-control" value="{{ old('full_name', $patient->full_name) }}" name="full_name" placeholder="Full Name" aria-label="Full name">
					            <x-input-error :messages="$errors->get('full_name')" class="mt-2" />
					        </div>

					        <div class="col">
					            <label>Profile ID*</label>
					            <input type="text" class="form-control" value="{{ old('patientid', $patient->patientID) }}" name="patientid" placeholder="Profile ID" aria-label="Profile ID">
					            <x-input-error :messages="$errors->get('patientid')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="col">
					            <label>Ward*</label>
					            <input type="text" placeholder="Ward" class="form-control" value="{{ old('ward', $patient->ward) }}" name="ward" aria-label="Ward" required>
					            <x-input-error :messages="$errors->get('ward')" class="mt-2" />
					        </div>

					        <div class="col">
					            <label>Unit*</label>
					            <input type="text" placeholder="Unit" class="form-control" value="{{ old('unit', $patient->unit) }}" name="unit" aria-label="Unit" required>
					            <x-input-error :messages="$errors->get('unit')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="input-group">
					            <span class="input-group-text">Consultant*</span>
					            <textarea class="form-control" aria-label="Consultant" rows="4" name="consultant" required>{{ old('consultant', $patient->consultant) }}</textarea>
					            <x-input-error :messages="$errors->get('consultant')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="input-group">
					            <span class="input-group-text">Medical Officer*</span>
					            <textarea class="form-control" aria-label="Medical Officer" rows="4" name="medical_officer" required>{{ old('medical_officer', $patient->medical_officer) }}</textarea>
					            <x-input-error :messages="$errors->get('medical_officer')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="input-group">
					            <span class="input-group-text">Presenting Complaint*</span>
					            <textarea class="form-control" aria-label="Presenting Complaint" rows="4" name="presenting_complaint" required>{{ old('presenting_complaint', $patient->presenting_complaint) }}</textarea>
					            <x-input-error :messages="$errors->get('presenting_complaint')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="input-group">
					            <span class="input-group-text">Physical Examination*</span>
					            <textarea class="form-control" aria-label="Physical Examination" rows="4" name="physical_examination" required>{{ old('physical_examination', $patient->physical_examination) }}</textarea>
					            <x-input-error :messages="$errors->get('physical_examination')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="input-group">
					            <span class="input-group-text">Clinic Diagnosis*</span>
					            <textarea class="form-control" aria-label="Clinic Diagnosis" rows="4" name="clinic_diagnosis" required>{{ old('clinic_diagnosis', $patient->clinic_diagnosis) }}</textarea>
					            <x-input-error :messages="$errors->get('clinic_diagnosis')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="input-group">
					            <span class="input-group-text">History Presenting Complaint*</span>
					            <textarea class="form-control" aria-label="History Presenting Complaint" rows="4" name="history_presenting_complaint" required>{{ old('history_presenting_complaint', $patient->history_presenting_complaint) }}</textarea>
					            <x-input-error :messages="$errors->get('history_presenting_complaint')" class="mt-2" />
					        </div>
					    </div>

					    <div class="row mt-2">
					        <div class="input-group">
					            <span class="input-group-text">Plan*</span>
					            <textarea class="form-control" aria-label="Plan" rows="4" name="plan" required>{{ old('plan', $patient->plan) }}</textarea>
					            <x-input-error :messages="$errors->get('plan')" class="mt-2" />
					        </div>
					    </div>

					    <div class="col-12 mt-3">
					        <button class="btn btn-primary" type="submit">Add To Record</button>
					    </div>
					</form>
					      
					   <div class="col-12 mt-3">
					    @foreach($ecounters as $ecounter)
					    <hr>
					    <div class="row mt-4">
					        <div class="col-md-6">
					            <div class="card">
					                <div class="card-header">
					                    Medical Information
					                </div>
					                <div class="card-body">
					                    <p><strong>Unit:</strong> {{ $ecounter->unit }} </p>
					                    <p><strong>Ward:</strong> <span style="color: green;">Active</span></p>
					                    <p><strong>Consultant:</strong> <a href="#">{{ $ecounter->consultant }} </a></p>
					                    <p><strong>Medical Officer:</strong> <a href="#">{{ $ecounter->medical_officer }} </a></p>
					                    <p><strong>Presenting Complaint:</strong> <a href="#">{{ $ecounter->presenting_complaint }} </a></p>
					                
					                </div>
					            </div>
					        </div>
					        <div class="col-md-6">
					            <div class="card">
					                <div class="card-header">
					                    Additional Information
					                </div>
					                <div class="card-body">
					                        <p><strong>Physical Examination:</strong> <a href="#">{{ $ecounter->physical_examination }} </a></p>
					                    <p><strong>Clinic Diagnosis:</strong> <a href="#">{{ $ecounter->clinic_diagnosis }} </a></p>
					                    <p><strong>History Presenting Complaint:</strong> <a href="#">{{ $ecounter->history_presenting_complaint }} </a></p>
					                    <p><strong>Plan:</strong> <a href="#">{{ $ecounter->plan }} </a></p>
					                </div>
					            </div>
					        </div>
					    </div>
					    @endforeach
					</div>

					   

                    </div>
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2024 Developed by Azriel Technologies All rights reserved.<br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Reply</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="send_member_form" method="POST" action="../includes/send_message_mem_inc.php">
                            <div
                                style="position: relative; display: inline-block; background-color: darkblue; padding: 10px; border-radius: 5px; color: white; width: 10%;">

                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke-dasharray="66" stroke-dashoffset="66" stroke-width="2"
                                            d="M3 14V5H21V19H3V14">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s"
                                                values="66;0" />
                                        </path>
                                        <path stroke-dasharray="26" stroke-dashoffset="26"
                                            d="M3 16L7 13L10 15L16 10L21 14">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.6s"
                                                dur="0.4s" values="26;0" />
                                        </path>
                                    </g>
                                    <circle cx="7.5" cy="9.5" r="1.5" fill="white" fill-opacity="0">
                                        <animate fill="freeze" attributeName="fill-opacity" begin="1s"
                                            dur="0.4s" values="0;1" />
                                    </circle>
                                </svg>
                                <input type="file" name="image" style="width: 100%;">
                            </div>

                            <button
                                style="background: darkblue; color: white; border: none; height: 10vh; width: 100%">Reply</button>
                        </form>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow animation -->
    <script src="{{ asset('js/animate.js') }}"></script>
    <!-- select country -->
    <script src="{{ asset('js/bootstrap-select.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <!-- chart js -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="{{ asset('js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/analyser.js') }}"></script>
    <!-- nice scrollbar -->
    <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/chart_custom_style1.js') }}"></script>

</body>

</html>
