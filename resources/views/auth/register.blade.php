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
    <title>RHC EMR | Register</title>
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

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                            <a href="index.php"><img class="logo_icon img-responsive"
                                    src="https://www.rccghealthcentre.com/assets/images/rccg-logo-121x121.png"
                                    alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive"
                                    src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                    alt="#" /></div>
                            <div class="user_info">
                                <h6>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                        <li class="active">
                            <a href="{{ url('home')}}"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M13 9V3h8v6zM3 13V3h8v10zm10 8V11h8v10zM3 21v-6h8v6z" />
                                </svg> <span>Dashboard</span></a>
                        </li>
                          @if(Auth::user()->role == 0 || Auth::user()->role == 2 || Auth::user()->role == 3 || Auth::user()->role == 1)
                        <li><a href="ecounter.php?patientid="><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                    height="1.5em" viewBox="0 0 36 36">
                                    <path fill="currentColor"
                                        d="m33 6.4l-3.7-3.7a1.71 1.71 0 0 0-2.36 0L23.65 6H6a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h22a2 2 0 0 0 2-2V11.76l3-3a1.67 1.67 0 0 0 0-2.36M18.83 20.13l-4.19.93l1-4.15l9.55-9.57l3.23 3.23ZM29.5 9.43L26.27 6.2l1.85-1.85l3.23 3.23Z"
                                        class="clr-i-solid clr-i-solid-path-1" />
                                    <path fill="none" d="M0 0h36v36H0z" />
                                </svg> <span>Ecounter Notes </span></a></li>
                                   @endif
                        <li><a href="{{ url('complains')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                    height="1.5em" viewBox="0 0 36 36">
                                    <path fill="currentColor"
                                        d="m33 6.4l-3.7-3.7a1.71 1.71 0 0 0-2.36 0L23.65 6H6a2 2 0 0 0-2 2v22a2 2 0 0 0 2 2h22a2 2 0 0 0 2-2V11.76l3-3a1.67 1.67 0 0 0 0-2.36M18.83 20.13l-4.19.93l1-4.15l9.55-9.57l3.23 3.23ZM29.5 9.43L26.27 6.2l1.85-1.85l3.23 3.23Z"
                                        class="clr-i-solid clr-i-solid-path-1" />
                                    <path fill="none" d="M0 0h36v36H0z" />
                                </svg> <span>Complains (Appointments) </span></a></li>
                            @if(Auth::user()->role == 1)
                                <li><a href="{{ route('register')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                            height="1.5em" viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path
                                            d="M24 0v24H0V0zM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022m-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                        <path fill="currentColor"
                                            d="M16 14a5 5 0 0 1 5 5v1a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-1a5 5 0 0 1 5-5zm4-6a1 1 0 0 1 1 1v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 1 1 0-2h1V9a1 1 0 0 1 1-1m-8-6a5 5 0 1 1 0 10a5 5 0 0 1 0-10" />
                                    </g>
                                </svg> <span>Add
                                    Staff</span></a></li>
                                @endif
                        <li><a href="{{ url('allstaffs')}}"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em"
                                    height="1.5em" viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="3" />
                                        <path d="M21 12s-1-8-9-8s-9 8-9 8" />
                                    </g>
                                </svg> <span>View All
                                    Staff</span></a></li>
                        <li><a href="ecounter.php?patientid=">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="12" cy="12" r="3" />
                                        <path d="M21 12s-1-8-9-8s-9 8-9 8" />
                                    </g>
                                </svg>
                                <span>View All
                                    Patients</span></a></li>
                        <li><a href="ecounter.php?patientid=">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M10.5 8a3 3 0 1 0 0 6a3 3 0 0 0 0-6M9 11a1.5 1.5 0 1 1 3 0a1.5 1.5 0 0 1-3 0M2 7.25A2.25 2.25 0 0 1 4.25 5h12.5A2.25 2.25 0 0 1 19 7.25v7.5A2.25 2.25 0 0 1 16.75 17H4.25A2.25 2.25 0 0 1 2 14.75zm2.25-.75a.75.75 0 0 0-.75.75V8h.75A.75.75 0 0 0 5 7.25V6.5zm-.75 6h.75a2.25 2.25 0 0 1 2.25 2.25v.75h8v-.75a2.25 2.25 0 0 1 2.25-2.25h.75v-3h-.75a2.25 2.25 0 0 1-2.25-2.25V6.5h-8v.75A2.25 2.25 0 0 1 4.25 9.5H3.5zm14-4.5v-.75a.75.75 0 0 0-.75-.75H16v.75c0 .414.336.75.75.75zm0 6h-.75a.75.75 0 0 0-.75.75v.75h.75a.75.75 0 0 0 .75-.75zm-14 .75c0 .414.336.75.75.75H5v-.75a.75.75 0 0 0-.75-.75H3.5zm.901 3.75A3 3 0 0 0 7 20h10.25A4.75 4.75 0 0 0 22 15.25V10a3 3 0 0 0-1.5-2.599v7.849a3.25 3.25 0 0 1-3.25 3.25z" />
                                </svg>
                                <span>Account</span></a></li>
                        <li><a href="ecounter.php?patientid=">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <g fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path
                                            d="M13.9 18h-3.8a.6.6 0 0 1-.6-.6v-2.3a.6.6 0 0 0-.6-.6H6.6a.6.6 0 0 1-.6-.6v-3.8a.6.6 0 0 1 .6-.6h2.3a.6.6 0 0 0 .6-.6V6.6a.6.6 0 0 1 .6-.6h3.8a.6.6 0 0 1 .6.6v2.3a.6.6 0 0 0 .6.6h2.3a.6.6 0 0 1 .6.6v3.8a.6.6 0 0 1-.6.6h-2.3a.6.6 0 0 0-.6.6v2.3a.6.6 0 0 1-.6.6Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2S2 6.477 2 12s4.477 10 10 10" />
                                    </g>
                                </svg>
                                <span>Pharmacy</span></a></li>
                        <li><a href="ecounter.php?patientid=">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M14 13q-1.25 0-2.125-.875T11 10t.875-2.125T14 7t2.125.875T17 10t-.875 2.125T14 13m-7 3q-.825 0-1.412-.587T5 14V6q0-.825.588-1.412T7 4h14q.825 0 1.413.588T23 6v8q0 .825-.587 1.413T21 16zm2-2h10q0-.825.588-1.412T21 12V8q-.825 0-1.412-.587T19 6H9q0 .825-.587 1.413T7 8v4q.825 0 1.413.588T9 14m11 6H3q-.825 0-1.412-.587T1 18V7h2v11h17zM7 14V6z" />
                                </svg>
                                <span>Make
                                    Payments</span></a></li>



                        <li class="active">
                            <a href="#additional_page" data-toggle="collapse" aria-expanded="false"
                                class="dropdown-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z" />
                                </svg>
                                <span>Additional
                                    Pages</span></a>
                            <ul class="collapse list-unstyled" id="additional_page">
                                <li>
                                    <a> <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>
                                    </a>
                                </li>

                                <li>
                                    <a href="#"> <span>Level</span></a>
                                </li>
                                <li>
                                    <a href="help.php"> <span>Support</span></a>
                                </li>

                            </ul>
                        </li>
                        <!-- <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Main Site</span></a></li> -->
                    </ul>
                </div>
            </nav>
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


                        <div class="row column3">
                        </div>
                       
                        <form style="width: 95%;" method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="container border rounded">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="avatar" class="form-label fw-bold">Profile Picture</label>
                                    <input id="avatar" type="file" name="avatar" class="form-control" required autofocus autocomplete="avatar">
                                    <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
                                </div>
                                <div class="col-md-6">
                                    <label for="first_name" class="form-label fw-bold">First Name</label>
                                    <input id="first_name" type="text" name="first_name" class="form-control" :value="old('first_name')" required autofocus autocomplete="first_name">
                                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="last_name" class="form-label fw-bold">Last Name</label>
                                    <input id="last_name" type="text" name="last_name" class="form-control" :value="old('last_name')" required autofocus autocomplete="last_name">
                                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                </div>
                            <div class="form-floating col-md-6">
                                 <label for="floatingSelect">Choose Role</label>
                              <select name="role" required class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option value="" selected disabled>Choose Role</option>
                                        <option value="0">Nurse</option>
                                        <option value="3">Doctor</option>
                                        <option value="3">Pharmacy</option>
                                        <option value="4">Account</option>
                              </select>
                             
                            </div>
                        </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="qualification" class="form-label fw-bold">Qualification</label>
                                    <input id="qualification" type="text" name="qualification" class="form-control" :value="old('qualification')" required autofocus autocomplete="qualification">
                                    <x-input-error :messages="$errors->get('qualification')" class="mt-2" />
                                </div>
                                <div class="col-md-6">
                                    <label for="intro" class="form-label fw-bold">Intro</label>
                                    <input id="intro" type="text" name="intro" class="form-control" :value="old('intro')" required autofocus autocomplete="intro">
                                    <x-input-error :messages="$errors->get('intro')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="years_of_experience" class="form-label fw-bold">Years of Experience</label>
                                    <input id="years_of_experience" type="number" name="years_of_experience" class="form-control" :value="old('years_of_experience')" required autofocus autocomplete="years_of_experience">
                                    <x-input-error :messages="$errors->get('years_of_experience')" class="mt-2" />
                                </div>
                                <div class="col-md-6">
                                    <label for="specialization" class="form-label fw-bold">Specialization</label>
                                    <input id="specialization" type="text" name="specialization" class="form-control" :value="old('specialization')" required autofocus autocomplete="specialization">
                                    <x-input-error :messages="$errors->get('specialization')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="location" class="form-label fw-bold">Location</label>
                                    <input id="location" type="text" name="location" class="form-control" :value="old('location')" required autofocus autocomplete="location">
                                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                                </div>
                                <div class="col-md-6">
                                    <label for="date_of_birth" class="form-label fw-bold">Date of Birth</label>
                                    <input id="date_of_birth" type="date" name="date_of_birth" class="form-control" :value="old('date_of_birth')" required autofocus autocomplete="date_of_birth">
                                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="phone_number" class="form-label fw-bold">Phone Number</label>
                                    <input id="phone_number" type="tel" name="phone_number" class="form-control" :value="old('phone_number')" required autofocus autocomplete="phone_number">
                                    <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-bold">Email</label>
                                    <input id="email" type="email" name="email" class="form-control" :value="old('email')" required autocomplete="username">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="password" class="form-label fw-bold">Password</label>
                                    <input id="password" type="password" name="password" class="form-control" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="col-md-6">
                                    <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Already registered?') }}
                                </a>
                                <button type="submit" class="btn btn-primary ms-8">
                                    {{ __('Register Staff') }}
                                </button>
                            </div>
                        </form>

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

