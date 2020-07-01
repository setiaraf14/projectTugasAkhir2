<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords"
        content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="{{ asset('Baker/css/jquery.bxslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Baker/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Baker/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Baker/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Baker/css/style.css') }}">
    <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

    <div id="myDiv">
        <!--HEADER-->
        <div class="header">
            <div class="bg-color">
                <header id="main-header">
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                {{-- <a class="navbar-brand" href="#">Ba<span class="logo-dec">ker</span></a> --}}
                                <img src="{{Storage::url(App\Rumah::all()->first()->logo_perusahaan)}}" alt="" class="img-rounded" style="width: 200px;height:75px">
                            </div>
                            <div class="collapse navbar-collapse" id="myNavbar">
                                <ul class="nav navbar-nav navbar-right">

                                    <li class="active"><a href="{{url('/')}}">Home</a></li>

                                    <li class=""><a href="#product">Product</a></li>

                                    <li class=""><a href="#Clients">Clientss</a></li>

                                    <li class=""><a href="#Contact">Contact</a></li>


                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class="container">
                    <div class="row">
                        <div class="banner-info text-center wow fadeIn delay-05s">
                          @yield('judul-content')
                            <div class="overlay-detail">
                                <a href="#vismis"><i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--/ HEADER-->
