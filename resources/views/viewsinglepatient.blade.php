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
    <title>RHC EMR | Patient</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                                                <a class="dropdown-item" href="profile.php">My Profile</a>
                                                <a class="dropdown-item" href="help.php">Help</a>
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
                                    <h2>Welcome</h2>
                                </div>
                            </div>
                        </div>
                        <!-- end welcome -->
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                        <div class="row column3">
                        </div>
                       <div class="container mt-4">
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

					    <!-- Profile Information -->
					    <div class="row mt-4">
					        <div class="col-md-6">
					            <div class="card">
					                <div class="card-header">
					                    Personal Information
					                </div>
					                <div class="card-body">
					                    <p><strong>Name:</strong> {{ $patient->full_name }} </p>
					                    <p><strong>Email:</strong> {{ $patient->email }} </p>
					                    <p><strong>Phone Number:</strong> {{ $patient->phone_number }} </p>
					                    <p><strong>Address:</strong> {{ $patient->home_address }} </p>
					                </div>
					            </div>
					        </div>
					        <div class="col-md-6">
					            <div class="card">
					                <div class="card-header">
					                    Additional Information
					                </div>
					                <div class="card-body">
					                    <p><strong>Member Since:</strong> {{ $patient->created_at }} </p>
					                    <p><strong>Status:</strong> <span style="color: green;">Active</span></p>
					                    <p><strong>Emegency Number :</strong> <a href="#">{{ $patient->phone_number }} </a></p>
					                     <!-- Logout Button -->
										    <div class="row mt-4">
										        <div class="col-md-12 text-center">
										            <form action="{{ url('viewsingleeconterpatient', $patient->id) }}" method="GET">
										                @csrf
										                <button type="submit" class="btn btn-danger">Swtch to Ecounter Note</button>
										            </form>
										        </div>
                                                    <div class="col-md-12 mt-3 text-center">
                                                    <a href="{{ url('patientpahrrecord', $patient->id) }}" method="GET">
                                                        <button type="submit" class="btn btn-success">Pharmacy Records</button>
                                                    </a>
                                                </div>
                                                 <div class="col-md-12 mt-3 text-center">
                                                  
                                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Refer to a Doctor</button>
                                                    </div>
										    </div>
										</div>
					                </div>
					            </div>
                                <div class="col-md-12 mt-4">
                                    <h4>Past Doctors Refered</h4>
                                      @if($refer->isEmpty())
                                            <p>No records found</p>
                                        @else
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Doctor Email</th>
                                                        <th>Message</th>
                                                        <th>Refer Email</th>
                                                        <!-- Add more table headers as needed -->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($refer as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->doctor_email }}</td>
                                                            <td>{{ $item->message_sent }}</td>
                                                            <td>{{ $item->refer_from_email }}</td>
                                                            <!-- Add more table columns as needed -->
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                </div>
					        </div>
					    </div>

                 <!-- The Modal -->
               <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Refer {{ $patient->full_name }} to a doctor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form action="{{ route('viewsingleeconterpatient.store') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $patient->id }}" name="patient_id" required>
                            <input type="hidden" value="{{ $patient->email }}" name="patient_email" required>
                            <input type="hidden" value="{{ Auth::user()->email }}" name="refer_from_email" required>
                            <input type="hidden" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" name="refer_from_name" required>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Choose Doctor:</label>
                           <select name="doctor_email" required class="form-select form-select-lg mb-3" aria-label="Large select example">
                              <option selected disabled>Click here to choose a Doctor</option>
                            @foreach($doctors as $doctor)
                              <option style="color: black;" value="{{ $doctor->email }}">{{ $doctor->first_name }} {{ $doctor->last_name }} | {{ $doctor->specialization }}</option>
                            @endforeach
                            </select>

                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea name="message_sent" class="form-control" id="message-text"></textarea>
                          </div>
                       
                      </div>
                      <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">Send message</button>
                      </div>
                       </form>
                    </div>
                  </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
