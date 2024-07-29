<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('assets1/images/icons/logo.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>ParcINfo</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" >
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Parc Informatique
                </a>
            </div>

            <ul class="nav">
                <li class="">
        
                    <a href="{{route('home')}}">
                        <i class="fa fa-home"></i>
                        <p>{{ __('Home') }}</p>
                    </a>
                    
                    <a href="{{route('users.index')}}">
                        <i class="fa fa-users"></i>
                        <p>{{ __('Utilisateurs') }}</p>
                    </a>
                
                </li>
               
                <li>
                    <a href="{{ route('userProfil', Auth::user()->id) }}">
                        <i class="fa fa-user-circle"></i>
                        <p> {{ __('Mon Profil') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('niveau.index')}}">
                        <i class="fa fa-cubes"></i>
                        <p>{{ __('Niveaux') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('bureau.index')}}">
                        <i class="fa fa-building"></i>
                        <p>{{ __('Bureaux') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('categorie.index')}}">
                        <i class="fa fa-code-fork"></i>
                        <p>{{ __('categories') }}</p>
                    </a>
                </li>
                  <li>
                    <a href="{{route('Departement.index')}}">
                        <i class="fa fa-sitemap"></i>
                        <p>{{ __('Departements') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('equipement.index')}}">
                       <i class="fa fa-laptop"></i>
                        <p>{{ __('Equipements') }}</p>
                    </a>
                </li>
              
                
                <li>
                    <a href="">
                        <i class="fa fa-user"></i>
                        <p>{{ __('Personnes') }}</p>
                    </a>
                </li>
                 <li>
                    <a href="">
                        <i class="fa fa-book"></i>
                        <p>{{ __('Reporting') }}</p>
                    </a>
                </li>
             
                <li class="active-pro">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                        <p>{{ __('Deconnecter') }}</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand">{{ Route::getCurrentRoute()->getName() }}</a>-->
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a style="color: #000000; font-family: bold;">
                                <p></p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                          
                                <a><p>{{ userFullName()}}</p></a>
                          
                                <a><p></p></a>
                           
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>

                </div>

            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
            @yield('content')
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright text-center">
                    <b>Ir EnockPisLike </b> <script>document.write(new Date().getFullYear())</script>  Projet Académique Laravel
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="{{asset('assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

</html>

