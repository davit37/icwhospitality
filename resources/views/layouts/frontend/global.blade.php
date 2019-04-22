<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/style/style.css?v=0.1')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <title>@yield('title')</title>


    @yield('head')
</head>

<body>
    <div class="container mt-3 ">
        <div class="row">
            <div class="box-info text-right col-12 pr-0" style='z-index:3'>
                <p>Contact us: +62 21 2933 9389 | Email: Ask@icwhospitality.com</p>
                <p>16th Floor - T9, APL Tower, Podomoro City, Jl. Let Jend S. Parman Kav 28, Jakarta 11470, Indonesia
                </p>
            </div>
        </div>
    </div>

    <div class="mobile-menu-wrapper d-none ">
        <div class="mobile-menu-container ps">
            <ul class="menu">
                <li class="nav-item ">
                    <a class="nav-link" href="#about-us">About Us</span></a>
                </li>
                <!--
              <li class="nav-item ">
            <a class="nav-link" href="#tenants">Tenants</span></a>
          </li>
          -->
                <li class="nav-item ">
                    <a class="nav-link" href="#landlord">Landlord</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#contact-us">Contacts</span></a>
                </li>

            </ul>
        </div>

    </div>
    <div class="mobile-menu-overlay">
    </div>



    <nav class="navbar navbar-expand-lg navbar-light mt-3   " style='z-index:2'>

        <div class="container">
            <span class="main-logo">

                <a class="navbar-brand" href="#"> <img src="{{asset('frontend/icons/logo.png')}}" alt="" srcset=""
                        class=""></a>

            </span>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarNav"
                aria-expanded="false" id='menu-bar' aria-label="Toggle navigation">
                <span class="ham"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto nav-custom ">
                    <li class="nav-item ">
                        <a class="nav-link" href="#about-us">About Us</span></a>
                    </li>
                    <!--
              <li class="nav-item ">
            <a class="nav-link" href="#tenants">Tenants</span></a>
          </li>
          -->

                    <li class="nav-item ">
                        <a class="nav-link" href="#landlord">Landlord</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#contact-us">Contacts</span></a>
                    </li>


                </ul>
            </div>

        </div>


    </nav>

    {{-- Content --}}

    @yield('content')

    {{-- END --}}

    <!-- footer -->
    <div class="footer">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img src='{{asset("frontend/icons/logo.png")}}' alt="" srcset="" class="logo-footer">
                    </div>
                    <div class="col-md-3">
                        <h4 class="txt-bold">
                            Learn More
                        </h4>
                        <ul>
                            <li><a href="">FAQ</a></li>
                            <li><a href="#about-us">About Us</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="txt-bold">
                            Contact Us
                        </h4>
                        <ul>
                            <li><a href="">Send Msessage</a></li>
                            <li><a href="">Contact Us</a></li>
                            <li><a href="">Privacy Policy</a></li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
    <script src='{{asset('frontend/js/app.js?v=09')}}'></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMh-UbEM4XRYWpjdQPFG0lw9RV73LRBo4&callback=initMap">
    </script>

    @yield('script')
</body>

</html>
