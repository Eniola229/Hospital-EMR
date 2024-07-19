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
    <title>RHC EMR | Message Staff</title>
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


    <!-- Include Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!----Jquery link----->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                                    <h2>Welcome {{ Auth::user()->first_name }}</h2>
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
                        <div class="row column4 graph">
                            <div class="col-md-6 margin_bottom_30">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M2.25 5A2.75 2.75 0 0 1 5 2.25h14A2.75 2.75 0 0 1 21.75 5v10A2.75 2.75 0 0 1 19 17.75H7.961c-.38 0-.739.173-.976.47l-2.33 2.913c-.798.996-2.405.433-2.405-.843z" clip-rule="evenodd"/></svg>
                                                    |Message {{ $staffinfo->first_name }}
                                                    @if($staffinfo->email== Auth::User()->email )
                                                        (YOU)
                                                    @endif
                                                     </span><span class="plus_green_bt">
                                                     </span></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p>Send Message to {{ $staffinfo->first_name }}
                                                  @if($staffinfo->email== Auth::User()->email )
                                                        (Yourself)
                                                  @endif
                                            </p>
                                        </div>
                                        <div class="task_list_main">
                                              <!-----Start of message card--->
                                      <div class="container py-3" style="max-width: 600px;">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                                        <h5>Messages with {{ $staffinfo->first_name }}</h5>
                                                        <!-- Dropdown Menu for Actions -->
                                                      <!--   <div class="dropdown">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Actions
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div> -->
                                                    </div>

                                                    @if($allMessages->isEmpty())
                                                        <p>No Messages Yet</p>
                                                    @else
                                                        <div id="dataContainer">
                                                            @foreach ($allMessages as $message)
                                                                @if(($staffinfo->id == $message->resiver_id && Auth::user()->id == $message->user_id) || ($staffinfo->id == $message->user_id && Auth::user()->id == $message->resiver_id))
                                                                    @if ($message->resiver_id == Auth::user()->id)
                                                                        <!-- Received Message -->
                                                                        <div class="d-flex justify-content-start mb-3 ">
                                                                            <div class="bg-light p-3 rounded" style="max-width: 75%;">
                                                                            
                                                                            <!-- Dropdown Menu Trigger for Received Message -->
                                                                            <div class="dropdown ml-2 d-flex justify-content-end">
                                                                                <button class="btn btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color: black;">
                                                                                   <i class="fa-solid fa-bars" style="color: black;"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="#">Delete</a></li>
                                                                                </ul>
                                                                            </div>

                                                                                <p class="mb-1">{{ $message->message_body }}</p>
                                                                               @if($message->image_sent_path != "no image uploaded")
                                                                                    <img style="height: 100px; width: 100px; border-radius: 5px;" src="{{ asset('storage/' . $message->image_sent_path) }}" >
                                                                                    <br> 
                                                                                @endif
                                                                               
                                                                                <small class="text-muted">{{ $message->created_at->diffForHumans() }}</small>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                    @else
                                                                        <!-- Sent Message -->
                                                                        <div class="d-flex justify-content-end mb-3">
                                                                            <div class="bg-primary text-white p-3 rounded" style="max-width: 75%;">
                                                                        <!-- Dropdown Menu Trigger for Sent Message -->
                                                                            <div class="dropdown mr-2 d-flex justify-content-end">
                                                                                <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-weight: bolder;">
                                                                                   You <i class="fa-solid fa-bars"></i>
                                                                                </button>
                                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                                    <li class="dropdown-item">  <form style="display: inline-block;" action="{{ route('deletemsg.destroy') }}" method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <input type="hidden" name="msg_id" value="{{ $message->id }}">
                                                                                            <button type="submit" style="border: none;background: none;" class="">Delete</button>
                                                                                        </form></li>
                                                                                </ul>
                                                                            </div>

                                                                                <p  style="color: white;" class="mb-1">{{ $message->message_body }}</p>
                                                                               @if($message->image_sent_path != "no image uploaded")
                                                                                    <img style="height: 100px; width: 100px; border-radius: 5px;" src="{{ asset('storage/' . $message->image_sent_path) }}" > 
                                                                                       <br>
                                                                                @endif
                                                                            
                                                                                <small>{{ $message->created_at->diffForHumans() }}</small>
                                                                            </div>
                                                                           
                                                                        </div>
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>


                                        <!----End of message card--->

                                            <div class="col-md-6">
                                                <!-----Start of sending message --->
                                               <form   action="{{ url('messagestaff.store') }}" method="POST" class="form-control mt-4 mb-4" enctype="multipart/form-data" style="width: 400px; justify-content: center; align-items: center; margin: auto;" id="messageForm">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ AUth::user()->id }}">
                                                    <input type="hidden" name="resiver_id" value="{{ $staffinfo->id }}">
                                                    <div class="input-group">
                                                        <input  type="text" class="form-control" placeholder="Send Message" name="message_body" aria-label="Send Message" style="width: 200px;" required>
                                                        <label class="input-group-text btn btn-secondary" for="image">
                                                            <i class="bi bi-image"></i> <!-- Bootstrap Icons image icon -->
                                                            <input type="file" class="d-none" id="image" name="image_sent_path">
                                                        </label>
                                                        <button  id="submitBtn" class="btn btn-danger" type="submit">
                                                            <i class="bi bi-send"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                                <!-----Ending of form to send message  ---->
 
                                            </div>
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
                                                        href="#" _blank>
                                                         <img height="50" width="50" style="border-radius: 50%" src="{{ asset('storage/' . $staffinfo->avatar) }}">
                                                        </a></span></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p>Last Messages</p>
                                        </div>
                                        <div class="msg_list_main">
                                           </div>
                                        </div>  
                                        <!----End of message card---->

                                            </div>
                                        </div>
                                    <!--     <div class="read_more">
                                            <div class="center"><a class="main_bt read_bt" href="#">Read
                                                    More</a></div>
                                        </div> -->
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
                                              
    <!------Jquery code to send message ---->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#messageForm').on('submit', function(event) {
            event.preventDefault();
                $.ajax({
                url: "{{ route('messagestaff.store') }}",
                data: $('#messageForm').serialize(),
                type: 'post',
                success: function(result) {
                    $('#messageForm')[0].reset();
                    }
                });
            });
        });
    </script>

</body>
</html>