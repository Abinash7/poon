@extends('master.master')
@section('content')
<!-- 
{{-- Video Content --}}
{{-- <video autoplay muted loop width="100%">
    <source src="Images/video.mp4" type="video/mp4">    
</video> --}} -->

<img src="Images/Background-01.png" width="100%">
<div class="content">
    {{-- About page Info --}}
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

    <!-- {{-- Services page Info --}} -->

    <div class="col-sm-12 text-center" style="font-family:Arial, Helvetica, sans-serif;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3>A company you can rely to digitize your business services.</h3>
        </div>
        <div class="col-sm-2"></div>
    </div>
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
    <!-- </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Eatbix</h4>
     
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4 style="color:#303030;">MayaMee Beauty Parlor</h4>
    
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4>Khana Sabailai</h4>
    
    </div>
    <div class="col-sm-3">
      <span class="glyphicon glyphicon-user logo-small"></span>
      <h4 style="color:#303030;">Khai Pasal</h4>
     
    </div> -->






    <!--start of  contact page -->
    <div class="card" style="height: 100px;">
        <div class="card text-center">
            <div class="card-body">
                <h3 class="card-title">
                    Get In Touch With Us</h3>
                <p class="card-text">
                    We will provide you all the required services </p>
                <a href="#" class="btn btn-danger">ContactUs</a>
            </div>
        </div>
    </div>
    <!-- end of contact page -->

</div>
<!-- end of content div -->




@endsection