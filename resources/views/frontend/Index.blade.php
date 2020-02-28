@php $title = "Home|Pontoon" @endphp
@extends('master.master')
@section('content')
<img class="image" src="Images/hello.jpg" width="100%" height="100%">
<div class="content">
    {{-- About page Info --}}
    <div class="about col-md-12 text-center">
        <h1>WE HELP YOU TO DIGITIZE YOUR BUSINESS ENVIRONMENT THROUGH ADVERTISEMENT AND MARKETING</h1>
        <div class="col-md-2"></div>
        <div class="vid col-md-8">
            <p>With pontoon you can make your business go viral on internet and make them visible to your clients and
                other market holders. Check out what we do</p>
            <div class="videos">
                <video src="Images/abc.mp4" controls height="400" width="100%"></video>
            </div>

        </div>
        <div class="col-md-2"></div>

    </div>

</div>
<!--  start of services -->

<div class="services col-lg-12" id="services">

    <div class="row text-center">
        <div class="col-lg-3 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <img src="Images/web.png" alt="icons" style="height:100px;">
                <h4>Web Development </h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                    industry </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <img src="Images/graphics.png" alt="icons" style="height:100px;">
                <h4>Graphic Design</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                    industry </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <img src="Images/graphics.png" alt="icons" style="height:100px;">
                <h4>Motion Design</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                    industry </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <img src="Images/photography.png" alt="icons" style="height:100px;">
                <h4>Photography</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                    industry </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <img src="Images/printing.png" alt="icons" style="height:100px;">
                <h4>Printing</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                    industry </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <!-- Single Service -->
            <div class="single-service">
                <img src="Images/graphics.png" alt="icons" style="height:100px;">
                <h4>Graphic Design</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting
                    industry </p>
            </div>
        </div>
        <div class="container">
            <a href="{{route('Services')}}" button type="button" class="display btn btn-danger btn-lg">More About
                Services</button></a>
        </div>
    </div>

</div>

<!-- end of services -->


<!-- {{-- CAREER Info --}} -->
<div class="careers">
    <div class="col-md-9">
        <div class="career-head">
            YOUR CAREER AT PONTOON
        </div>
        <div class="career-body">
            <p>Do you want to be a part of this company?? Come on let's build it together...</p>
            <a href="{{route('Career')}}" class="btn btn-danger btn-lg">Join Now</a>
        </div>
    </div>
    <div class="col-md-3">
        <img src="Images/abut.jpg" height="100%" width="100%">
    </div>
</div>

<!-- end of career  -->


<!-- Clients-->
<div class="container">

    <!-- Clients-->

    <div id="facilities" class="container-fluid text-center">
        <h1>Clients We have Engaged With!!!</h1>

    </div>
</div>

<div id="demo" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner col-md-12">
        <div class="carousel-item active">
            <span class="col-md-3">
                <img src="Images/about.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
            <span class="col-md-3">
                <img src="Images/about.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
            <span class="col-md-3">
                <img src="Images/about.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
            <span class="col-md-3">
                <img src="Images/about.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
        </div>
        <div class="carousel-item">
            <span class="col-md-3">
                <img src="Images/abut.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
            <span class="col-md-3">
                <img src="Images/abut.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
            <span class="col-md-3">
                <img src="Images/abut.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
            <span class="col-md-3">
                <img src="Images/abut.jpg" alt="Los Angeles" width="100%" height="100%">
            </span>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- end of client info -->

    <!--start of  contact page -->
    <div class="contact text-center">
        <div class="col-lg-12">
            <h3>Get In Touch With Us</h3>
            <p>We will provide you all the required services </p>
            <a href="{{route('Contact')}}" class="btn btn-danger btn-lg">ContactUs</a>
        </div>
    </div>

    <!-- end of contact page -->
    @endsection