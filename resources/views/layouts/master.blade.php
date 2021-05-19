<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">        
        <head>
          <meta charset="utf-8" />
          <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
          <link rel="icon" type="image/png" href="../assets/img/favicon.png">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
          
            <title>Storemaster - @yield('title')</title>
          
            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
<<<<<<< HEAD
            <!--     Fonts and icons      -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
           
            <link href="http://127.0.0.1:8000/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
        
=======
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            <link href="http://127.0.0.1:8000/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
            <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<<<<<<< HEAD
            
            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

=======
            <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
            <link src='https://cdn.datatables.net/buttons/1.7.0/css/buttons.bootstrap4.min.css'>
            <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
            <script src="/vendor/datatables/buttons.server-side.js"></script>
            <script src="http://127.0.0.1:8000/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
        </head>
        
        <body class="">
          <div class="wrapper ">
            <div class="sidebar" data-color="red">
              <!--
                Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
            -->
              <div class="logo">
                <a href="/home" class="simple-text logo-mini">
                  SM
                </a>
                <a href="/home" class="simple-text logo-normal">
                  Store Mater
                </a>
              </div>
              <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                  <li>
                    <a href="/home">
                      <i class="now-ui-icons design_app"></i>
                      <p>Dashboard</p>
                    </a>
                  </li>
                  <li>
                    <a href="/users">
                      <i class="now-ui-icons users_circle-08"></i>
                      <p>Users</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Contacts">
                      <i class="now-ui-icons education_agenda-bookmark"></i>
                      <p>Contacts</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Product">
                      <i class="now-ui-icons shopping_shop"></i>
                      <p>Products</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Purchases">
                      <i class="now-ui-icons shopping_box"></i>
                      <p>Purchases</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Sales">
                      <i class="now-ui-icons shopping_cart-simple"></i>
                      <p>Sales</p>
                    </a>
                  </li>
                  <li>
                    <a href="/Manufacturing">
                      <i class="now-ui-icons loader_gear"></i>
                      <p>Manufacturing</p>
                    </a>
                  </li>
                  <li>
                  <a href="/Accounts">
                    <i class="now-ui-icons business_bank"></i>
                    <p>Accounts</p>
                  </a>
                </li>
                  <li>
                  <a href="/expense">
                    <i class="now-ui-icons business_money-coins"></i>
                    <p>Expenses</p>
                  </a>
                </li>
                <li>
                  <a href="/HRM">
                    <i class="now-ui-icons business_briefcase-24"></i>
                    <p>HRM</p>
                  </a>
                </li>
                <li>
                  <a href="/fullcalender">
                    <i class="now-ui-icons ui-1_calendar-60"></i>
                    <p>Calender</p>
                  </a>
                </li>
         <!--        <li class="active-pro">
                    <a href="/">fullcalender
                      <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                      <p>Upgrade to PRO</p>
                    </a>
                  </li> -->
                </ul>
              </div>
            </div>
            <div class="main-panel" id="main-panel">
              <!-- Navbar -->
              <nav class="navbar navbar-expand-lg navbar-transparent  bg-danger  navbar-absolute">
                <div class="container-fluid">
                  <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                      <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                      </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">@yield('page-title')</a>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                      <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                          </div>
                        </div>
                      </div>
                    </form>
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="/fullcalender">
                          <i class="now-ui-icons ui-1_calendar-60"></i>
                          <p>
                            <span class="d-lg-none d-md-block">Stats</span>
                          </p>
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="now-ui-icons location_world"></i>
                          <p>
                            <span class="d-lg-none d-md-block">Some Actions</span>
                          </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" >Action</a>
                          <a class="dropdown-item" >Another action</a>
                          <a class="dropdown-item" >Something else here</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
               
              </nav>
              <!-- End Navbar container mt-4 -->
              <div class="panel-header panel-header-sm">
              </div>
              <div class="content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title "><strong> @yield('card-title') </strong></h4>
                      </div>
                      <div class="card-body">
                        
                        <div class="">
                            @yield('content')
                        </div>
                         
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              <footer class="footer">
                <div class=" container-fluid ">
                  <nav>
                    <ul>
                      <li>
                        <a href="">
                          Store Master
                        </a>
                      </li>
                      <li>
                        <a href="">
                          About Us
                        </a>
                      </li>
                      <li>
                        <a href="">
                          Blog
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <div class="copyright" id="copyright">
                    &copy; <script>
                      document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>  All rights reserved, <a href="/">Store Master</a>
                  </div>
                </div>
              </footer>
<<<<<<< HEAD
            </div>
          </div>
     
=======
>>>>>>> e1872a383f65a428f506c0704f65e55287986f03
     </body>
</html>
