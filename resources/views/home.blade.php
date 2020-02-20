@extends('master.master')
@section('content')

{{-- Video Content --}}
{{-- <video autoplay muted loop width="100%">
    <source src="Images/video.mp4" type="video/mp4">    
</video> --}}

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

    {{-- Services page Info --}}

    <div class="col-sm-12 text-center" style="font-family:Arial, Helvetica, sans-serif;">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3>A company you can rely to digitize your business services.</h3>
        </div>
        <div class="col-sm-2"></div>
    </div>

</div>

@endsection