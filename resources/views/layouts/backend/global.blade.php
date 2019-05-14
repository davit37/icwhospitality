<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.11
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Icwhostpitality - @yield("title")</title>
    <!-- Icons-->

    <link href="{{asset('assets/coreui/node_modules/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/node_modules/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/node_modules/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{asset('assets/coreui/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('assets/coreui/vendors/pace-progress/css/pace.min.css')}}" rel="stylesheet">
    @yield('header-scripts')
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');

    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img class="navbar-brand-full" src="{{asset('assets/coreui/img/brand/logo.png')}}" width="90" height="46"
                alt="CoreUI Logo">
            <img class="navbar-brand-minimized" src="{{asset('assets/coreui/img/brand/sygnet.svg')}}" width="30"
                height="30" alt="CoreUI Logo">
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="nav navbar-nav ml-auto">
        
                <li class="nav-item dropdown">
                 
                  <form action="{{route("logout")}}" method="POST">
                    @csrf
                    <button class="dropdown-item" style="cursor:pointer"><i class='icon-login' style="color:black"></i> Sign Out</button>
                  </form>
                </li>
              </ul>

        <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
            <span class="navbar-toggler-icon"></span>
        </button>
    </header>
    <div class="app-body">
        <div class="sidebar sidebar-custom">
            <nav class="sidebar-nav">
                <ul class="nav">

                    <li class="nav-title"></li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("messages")}}">
                            <i class="nav-icon icon-envelope"></i> Inquiry</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="{{route("group_companies.index")}}">
                                <i class="nav-icon icon-people"></i> Group Companies</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route("setting.index")}}">
                            <i class="nav-icon icon-settings"></i> Settings</a>
                    </li>

                   

                   


                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
        <main class="main">
            <!-- Breadcrumb-->

            @yield('breadcrumb')

            
            <div class="container-fluid">
                <div class="animated fadeIn">
                    @yield("content")
                </div>
            </div>
        </main>

    </div>
    <footer class="app-footer">
       
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="{{asset('assets/coreui/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/pace-progress/pace.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/coreui/node_modules/@coreui/coreui/js/coreui.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    @yield('footer-scripts')


    <script src="{{asset('assets/coreui/node_modules/@coreui/coreui/js/custom-tooltips.min.js')}}"></script>


</body>

</html>
