
    <x-auth-session-status class="mb-4" :status="session('status')" />
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css" >

    <link rel="stylesheet" href="{{ asset('logincss/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('logincss/bootstrap.min.css') }}" >
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('logincss/style.css') }}">

    <title>Login | EMR</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg" style="background-image: url('https://www.rccghealthcentre.com/assets/images/mbr-1066x711.jpeg');"></div>
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login <strong></strong></h3>
             <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
             <form method="POST" action="{{ route('login') }}">
             @csrf

                <div class="form-group first">
                  <label for="username">Email</label>
                  <input type="email"  name="email" class="form-control" placeholder="your-email@gmail.com" id="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                   <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                  </span> 
                </div>

                <input type="submit" value="Log In" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    <script src="{{ asset('loginjs/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('loginjs/popper.min.js') }}"></script>
    <script src="{{ asset('loginjs/bootstrap.min.js')}}"></script>
    <script src="{{ asset('loginjs/main.js')}}"></script>
  </body>
</html>