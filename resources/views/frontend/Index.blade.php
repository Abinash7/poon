@php $title = "Home|Pontoon" @endphp
@extends('master.master')
@section('content')
<img class="image" src="Images/Home-01.jpg" width="100%" height="100%">
<div class="content">
    {{-- About page Info --}}
    <div class="about col-md-12 text-center">
        <h1>WE HELP YOU TO DIGITIZE YOUR BUSINESS ENVIRONMENT THROUGH ADVERTISEMENT AND MARKETING</h1>
        <p>With Pontoon You Can Make Your Business Go Viral On Internet And Make Them Visible To Your Clients And
            Other Market Holders. Check Out What We Do </p>
        <div class="col-md-2"></div>
        <div class="vid col-md-8">
            <div class="videos">
                <video src="Images/abc.mp4" controls height="100%" width="100%"></video>
            </div>

        </div>
        <div class="col-md-2"></div>

    </div>
</div>

<!--  start of services -->
<div class="index_services">
    <div class="col-lg-12">
        <h1><strong>We Provide Services On:</strong></h1>
        <div class="col-lg-6">
            <img src="Images/Branding&Creative_Design-04.png" alt="Motion Design" height="60%" width="70%">
        </div>
        <div class="col-lg-6">
            <h2><strong>Motion Design</strong></h2>
            <p>As digital technologies continue to create innovations in the world of experiential graphic design,
                motion design is becoming an increasingly important competency. Essentially, motion design is a
                discipline that applies graphic design principles to filmmaking and video production through use of
                animation and visual effects. Examples include films, videos, animated text, and web-based animations
                and apps.            
            </p>
            <a href="{{route('Career')}}">Read More</a>
        </div>

        <div class="col-lg-3">
            <img src="Images/graphics.png" alt="Motion Design" height="100%" width="100%">
            <h2><strong>Graphics Design</strong></h2>
            <p>As digital technologies continue to create innovations in the world of experiential graphic design,
                motion design is becoming an increasingly important competency. Essentially, motion design is a
                discipline that applies graphic design principles to filmmaking and video production through use of
                animation and visual effects. Examples include films, videos, animated text, and web-based animations
                and apps. </p>
        </div>

        <div class="col-lg-3">
            <img src="Images/graphics.png" alt="Motion Design" height="100%" width="100%">
            <h2><strong>Digital Marketing</strong></h2>
            <p>As digital technologies continue to create innovations in the world of experiential graphic design,
                motion design is becoming an increasingly important competency. Essentially, motion design is a
                discipline that applies graphic design principles to filmmaking and video production through use of
                animation and visual effects. Examples include films, videos, animated text, and web-based animations
                and apps. </p>
        </div>
        <div class="col-lg-3">
            <img src="Images/graphics.png" alt="Motion Design" height="100%" width="100%">
            <h2><strong>Motion Design</strong></h2>
            <p>As digital technologies continue to create innovations in the world of experiential graphic design,
                motion design is becoming an increasingly important competency. Essentially, motion design is a
                discipline that applies graphic design principles to filmmaking and video production through use of
                animation and visual effects. Examples include films, videos, animated text, and web-based animations
                and apps. </p>
        </div>

        <div class="col-lg-3">
            <img src="Images/graphics.png" alt="Motion Design" height="100%" width="100%">
            <h2><strong>Graphics Design</strong></h2>
            <p>As digital technologies continue to create innovations in the world of experiential graphic design,
                motion design is becoming an increasingly important competency. Essentially, motion design is a
                discipline that applies graphic design principles to filmmaking and video production through use of
                animation and visual effects. Examples include films, videos, animated text, and web-based animations
                and apps. </p>
        </div>

        <div class="col-lg-3">
            <img src="Images/graphics.png" alt="Motion Design" height="100%" width="100%">
            <h2><strong>Digital Marketing</strong></h2>
            <p>As digital technologies continue to create innovations in the world of experiential graphic design,
                motion design is becoming an increasingly important competency. Essentially, motion design is a
                discipline that applies graphic design principles to filmmaking and video production through use of
                animation and visual effects. Examples include films, videos, animated text, and web-based animations
                and apps. </p>
        </div>
        <a href="{{route('Services')}}">Find More</a>
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
            <a href="{{route('Career')}}">Join Now</a>
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

{{-- <div id="demo" class="carousel slide" data-ride="carousel">
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
</div> --}}

<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  active">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 1" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1"
                                alt="slide 1">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 3" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2"
                                alt="slide 2">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 4" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3"
                                alt="slide 3">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 5" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4"
                                alt="slide 4">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 6" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5"
                                alt="slide 5">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 7" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6"
                                alt="slide 6">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 8" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7"
                                alt="slide 7">
                        </a>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                    <div class="panel-thumbnail">
                        <a href="#" title="image 2" class="thumb">
                            <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8"
                                alt="slide 8">
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!--start of  contact page -->
<div class="contact text-center">
    <div class="col-lg-12">
        <h3>Get In Touch With Us</h3>
        <p>We will provide you all the required services </p>
        <a href="{{route('Contact')}}">ContactUs</a>
    </div>
</div>

<!-- end of contact page -->
@endsection