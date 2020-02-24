@extends('master.master')
@section('content')
<img src="Images/img.jpg" width="100%" height="100%">
<div class="content">
    {{-- About page Info --}}
<div class="row">
    <div class="col-md-12">
        <div class="about">
            <div class="col-md-3">
                <img src="Images/Know_about_us-02.jpg" height="100%" width="100%">
            </div>
            <div class="col-md-9">
                <p>About us content!!!</p>
                <p>Surprise!!!</p>
                <p>Surprise!!!</p>
                <p>Surprise!!!</p>
                <p>Surprise!!!</p>
            </div>
        </div>
    </div>
    <!-- end of about page -->

    <!-- {{-- Services page Info --}} -->

    <div class="col-sm-12 text-center" style="font-family:Arial, Helvetica, sans-serif;">
        <hr>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3>A company you can rely to digitize your business services.</h3>

        </div>
        <div class="col-sm-2"></div>
    </div>
    <!-- end of written  text about company -->
</div>
</div>
<div class="col-lg-12">
    <video src="Images/video.mp4" controls height="100%" width="100%"></video>
</div>

<!-- {{-- CAREER Info --}} -->
<div class="careers">
    <div class="col-md-1"></div>
    <div class="col-md-8">
        <div class="career-head">
            YOUR CAREER AT PONTOON
        </div>
        <div class="career-body">
            <p>Do you want to be a part of this company?? Come on let's build it together...</p>
            <a href="#" class="btn btn-danger btn-lg">Join Now</a>
        </div>
    </div>
    <div class="col-md-3">
        <img src="Images/Events_Marketting_Management-01.jpg" height="100%" width="100%">
    </div>
    
</div>
<!-- end of career  -->

<!-- Clients-->

<div id="services" class="container-fluid text-center">
    <h1>Clients We have Engaged With!!!</h1>
    <br>
    <div class="customer text-center">

        <span class="glyphicon glyphicon-user logo-small">
            <h3>GlobalGuidelines</h3>
        </span>


        <span class="glyphicon glyphicon-user logo-small">
            <h3>S.KNepal</h3>
        </span>


        <span class="glyphicon glyphicon-user logo-small">
            <h3>OnTrackEducation</h3>
        </span>

        <span class="glyphicon glyphicon-user logo-small">
            <h3>NepalSwarnakarSamiti</h3>
        </span>
    </div>

    <div class="customer">
        <span class="glyphicon glyphicon-user logo-small">
            <h3>Eatbix</h3>
        </span>


        <span class="glyphicon glyphicon-user logo-small">
            <h3>MayaMeeBeautyParlor</h3>
        </span>


        <span class="glyphicon glyphicon-user logo-small">
            <h3>KhanaSabailai</h3>
        </span>

        <span class="glyphicon glyphicon-user logo-small">
            <h3>Khaipasal</h3>
        </span>
    </div>
</div>

<!-- end of client info -->

<!--start of  contact page -->
<div class="contact text-center">
    <div class="col-lg-12">
        <h3>Get In Touch With Us</h3>
        <p>We will provide you all the required services </p>
        <a href="#" class="btn btn-danger btn-lg">ContactUs</a>
    </div>
</div>
<!-- end of contact page -->
@endsection