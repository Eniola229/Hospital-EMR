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
    <title>RHC EMR | Messages</title>
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
    <link rel="stylesheet" href="{{ asset('css/notifications.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

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
                                    <h2>Welcome</h2>
                                </div>
                            </div>
                        </div>
                        <!-- end welcome -->
                        @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif

                        <div class="row column3">
                        </div>
                        <div class="row column4 graph">
                            <div class="col-md-6 margin_bottom_30">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M2.25 5A2.75 2.75 0 0 1 5 2.25h14A2.75 2.75 0 0 1 21.75 5v10A2.75 2.75 0 0 1 19 17.75H7.961c-.38 0-.739.173-.976.47l-2.33 2.913c-.798.996-2.405.433-2.405-.843z" clip-rule="evenodd"/></svg>
                                                    |Message A Staff</span><span class="plus_green_bt"></span></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p>Choose a staff and message</p>
                                        </div>
                                        <div class="task_list_main">
                                            <table class="table table-striped-columns">
                                              <thead>
                                                <tr>
                                                  <th scope="col">#</th>
                                                  <th scope="col">Name</th>
                                                  <th scope="col">Specialization</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($staffs as $staff)
                                                <tr>
                                                  <th scope="row">{{$staff->id}}</th>
                                                  <td>{{$staff->first_name}}</td>
                                                  <td>{{$staff->specialization}}</td>
                                                  <td><a href="{{ url('messagestaff', $staff->id) }}"><button class="btn btn-primary">Message</button></a></td>
                                                </tr>
                                              </tbody>
                                              @endforeach 
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9h8m-8 4h6m4-9a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3h-5l-5 3v-3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3z"/></svg>
                                                    Last Messages</span><span class="plus_green_bt"><a
                                                        href="#"></a></span></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p>Last Messages</p>
                                        </div>
                                        <div class="msg_list_main">
                                           
                                    <div class="list-group">
                                        <!---card starts here --->

                                    @if($messages->isEmpty())
                                    <p>You have not message or recived any message yet</p>
                                        @else
                                            <div class="list-group">
                                                @foreach($messages as $message)
                                              <a href="{{ url('messagestaff', $message->user_id) }}">
                                                    <div class="card notification-card">
                                                        <div class="card-body">
                                                            <div class="notification-header">
                                                                <div class="notification-content" style="display: flex;">
                                                                    <i class="fas fa-envelope notification-icon text-primary"></i>
                                                                    <div>
                                                                        <h5 class="card-title mb-1">Message</h5>
                                                                        <p class="card-text mb-0">{{ $message->message_body }}</p>
                                                                    </div>
                                                                </div>
                                                                <small class="notification-time">{{ $message->created_at->diffForHumans() }}</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>

                                                @endforeach
                                            </div>
                                        @endif

                                        </div>

                                        </div>
                                        <div class="read_more">
                                            <div class="center"><a class="main_bt read_bt" href="#">Read
                                                    More</a></div>
                                        </div>
                                    </div>
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


    <script src="{{ asset('js/chart_custom_style1.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
