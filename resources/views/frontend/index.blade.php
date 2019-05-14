@extends('layouts.frontend.global')

@section('title')
Welcome to ICW
@endsection

@section('head')



@endsection



@section('content')

<!-- welcome -->
<div class="row welcome">
    <div class="col-md-5 ml-auto box-welcome">
        <h1 id="h-welcome" class="animated">
            <p>WELCOME </p>
            <p>TO <strong class="font-weight-bold">ICW</strong></p>
        </h1>

     
    </div>



</div>

<!-- ABOUT US -->
<div id="about-us" style="margin-top:700px;"></div>
<div class="continer about-us mb-5">

    <div class="text-center box-content mt-5 pl-5 pr-5">
        <h2 class="title mb-3  animated " id='h-about-us'>
            About US
        </h2>

        <div class=" main-content animated   " id='c-about-us'>
            <p>
                ICW (PT. Inti Cipta Wismaya) is a property & asset management company based in Jakarta.
                ICW provides holistic services for property owner and developer
                in managing their properties and tenants.
            </p>
            <p>ICW group comprises six companies with years of experience:</p>
        </div>


    </div>

    <div class="row justify-content-center logo-container mt-5 mb-5 " id="l-about-us">

        @foreach ($companies as $company)

        <a href="{{$company->website_url}}" target="_blank">
            <img src='{{$company->logo}}' alt="..." class="img-thumbnail logo-thumbnail animated delay-1s">
        </a>

        @endforeach

    </div>
</div>


<!-- VISION -->

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row justify-content-center ml-0">

            <div class="col-9">
                <div class="box-vision animated text-center ">
                    <h2 class="title ">
                        Vision
                    </h2>
                    <p class="font-weight-bold mb-0 mt-3">SET A NEW STANDARD OF PROPERTY MANAGEMENT</p>
                    <p>Our vision is to become the leading local property management company
                        that sets benchmark of service quality.</p>
                </div>

                <div class="box-mision animated text-center mt-5">
                    <h2 class="title">
                        Mision
                    </h2>
                    <p class="font-weight-bold mb-0 mt-4">MANAGE YOUR PROPERTY</p>
                    <p>We will assist you in every step of development: Planning, Building,
                        Fitting out, promotion and day to day operational management.
                    </p>

                    <p class="font-weight-bold mb-0 mt-4">MANAGE YOUR TENANT</p>
                    <p>Tenant is our biggest assets and we ensure your tenant satisfaction
                        by providing first class service.</p>
                </div>

            </div>


        </div>
    </div>
</div>

<!-- WHAT WE DO -->
<div class="container">
    <div class="row justify-content-center ml-0">

        <div class="col-12">
            <div class="box-vision text-center ">
                <h2 class="title ">
                    What We Do
                </h2>

                <div class="row justify-content-center mt-5 ml-0 mr-0 animated" id='doing-1'>
                    <div class="col-5 col-md-3 m-1 mb-2">
                        <div>
                            <img src='{{asset('frontend/icons/svg/study.svg')}}' class=" icon-md">
                        </div>
                        <p class="font-weight-bold mb-0">
                            Property Study &
                            Business Planinng
                        </p>
                        <p>Feasibility study, Market Research and business planning for your property development</p>

                    </div>
                    <div class="col-5 col-md-3 m-1 mb-2">
                        <div>
                            <img src='{{asset('frontend/icons/svg/marketing.svg')}}' class=" icon-md">
                        </div>
                        <p class="font-weight-bold mb-0">
                            Marketing & Promotion
                        </p>
                        <p>Marketing planning and promotion strategy for your property</p>

                    </div>
                    <div class="col-5 col-md-3 m-1 mb-2">
                        <div>
                            <img src='{{asset('frontend/icons/svg/hostpital.svg')}}' class=" icon-md">
                        </div>
                        <p class="font-weight-bold mb-0">
                            Hospitality Management
                        </p>
                        <p>Hotel & Apartment
                            management services, guest relation and manage daily operational</p>

                    </div>



                    <div class="col-5 col-md-3 m-1 mb-2">
                        <div>
                            <img src='{{asset('frontend/icons/svg/contractor.svg')}}' class=" icon-md">
                        </div>
                        <p class="font-weight-bold mb-0">
                            Property Contractor
                        </p>
                        <p>Permit management, technical planning, design, build & supervise property development</p>

                    </div>
                    <div class="col-5 col-md-3 m-1 mb-2">
                        <div>
                            <img src='{{asset('frontend/icons/svg/planning.svg')}}' class=" icon-md">
                        </div>
                        <p class="font-weight-bold mb-0">
                            M&E Planning
                        </p>
                        <p>Create M&E Plan, Review existing M&E Plan
                        </p>

                    </div>
                    <div class="col-5 col-md-3 m-1 mb-2">
                        <div>
                            <img src='{{asset('frontend/icons/svg/building.svg')}}' class="icon-md">
                        </div>
                        <p class="font-weight-bold mb-0">
                            Building Management
                        </p>
                        <p>Manage your building day to day operational and manage your tenant
                            complaints.</p>

                    </div>
                </div>
            </div>


        </div>


    </div>
</div>

<!-- TENANTS  -->


<div id='tenants'></div>
<div class="wrapper-5">

    <div class="container">
        <div class='row'>
            <div class="col-md-5 mt-5 ml-auto text-right animated" id='c-tenant'>
                <h4 class='mt-5 text-white to-uppercase font-weight-bolder header-tenants'>
                    Providing Your Tenants
                    Our First Class Service
                </h4>
                <p class="text-white" style="letter-spacing: 1px;">
                    Tenant is our biggest assets and we ensure your tenant satisfaction by providing first class service
                </p>
            </div>

        </div>


    </div>

</div>



<!-- LANDLORD -->
<!--
<div id='landlord' class="wrapper-6">
    <div class="container">
        <div class='row'>
            <div class="col-md-5 mt-5 mr-auto text-left">
                <h3 class='mt-5  to-uppercase  header-lanlord'>
                    LANDLORD
                </h3>

            </div>

        </div>


    </div>
</div>

-->


<!-- CONTACT US -->


<div id='contact-us' class="wrapper-7">



    <div class="container">
        <div class='row justify-content-center mb-5 ml-0 mr-0'>
            <div class="col-md-7 mt-5 text-center">
                <h2 class="title ">
                    contact us
                </h2>


            </div>

            <div class="col-md-8">

                <div class="box-spinner d-none ">
                    <div class="spinner-grow spinner-inner" style="width: 3rem; height: 3rem;" role="status">
                        
                    </div>
                  
                </div>

                <form action="{{route('send_message')}}" method="POST" id="form_message">

                    <div id="message_alert">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>


                    @csrf

                    <div class="form-group">
                        <input class="form-control f-c-contact" type="text" placeholder="Name" autocomplete="false"
                            name='name' required>
                    </div>

                    <div class="form-group">
                        <input class="form-control f-c-contact" type="text" placeholder="Email" autocomplete="false"
                            name="email" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control f-c-contact" rows="5" placeholder="Enquiry" name="inquiry"
                            required></textarea>
                    </div>

                    {{-- reCAPTCHA  --}}

                    {!! htmlFormSnippet() !!}

                    {{-- end --}}

                    <div class="form-group ">

                        <button type="button" id='btn_submit_message' class="btn btn-primary btn-contact text-right ">
                            <span class="spinner-grow spinner-grow-sm d-none"></span>

                            Submit
                        </button>
                    </div>

                </form>

            </div>



        </div>

        <div class="row justify-content-center mt-5 ml-0 mr-0">
            <div class="col-md-8">
                <div class="map-container ">

                    <div id="map" class="">

                    </div>

                    <div class="map-info">
                        <div class="box-content">
                            <h4>
                                PT. Inti Cipta Wismaya
                            </h4>

                            <div class="box-detail-map">
                                <img src='{{asset("frontend/icons/svg/address.svg")}}' alt="" srcset="" class="icon-sm">
                                <p>
                                    16th Floor - T9<br>
                                    APL Tower, Podomoro City<br>
                                    Jl. Let Jend S. Parman Kav 28<br>
                                    Jakarta 11470, Indonesia
                                </p>
                            </div>

                            <div class="box-detail-map">
                                <img src='{{asset("frontend/icons/svg/new_phone.svg")}}' alt="" srcset=""
                                    class="icon-sm">
                                <p>
                                    +6221 2933 9389
                                </p>
                            </div>

                            <div class="box-detail-map">
                                <img src='{{asset("frontend/icons/svg/Whatsapp.svg")}}' alt="" srcset=""
                                    class="icon-sm">
                                <p>
                                    +6221 2933 9389
                                </p>
                            </div>

                            <div class="box-detail-map">
                                <img src='{{asset("frontend/icons/svg/Email.svg")}}' alt="" srcset="" class="icon-sm">
                                <p>Ask@icwhospitality.com</p>
                            </div>

                        </div>
                        <div class="arrow-right">

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>

</div>



@if(session('status'))

@endif


@endsection

@section('script')

<script src="{{asset('frontend/plugin/notify/notify.min.js')}}"></script>
<script>
    $(document).ready(function () {

        @if(session('status'))
        $.notify(

            "{{session('status')}}",
            "success", {
                position: "left bottom"
            }

        );
        @endif
    })

</script>
{!! htmlScriptTagJsApi() !!}
@endsection
