@extends('master.master')
@section('content')
<img src="Images/img.jpg" width="100%" height="450px"> 

<div class="sidenav">
  <div class="login-main-text">
    <h2>You Are Closer Babes</h2>
    <p> A very evident lack of ‘red tape’ means your career at Bastion Collective
      is what you make it. Growth paths are unencumbered. You truly are in charge of your
      destiny. We are strategic about the work we do and the clients we do it with, proactively
      seeking out new opportunities that will challenge, inspire and grow staff knowledge and skills.</p>
  </div>
</div>
<div class="main">
  <div class="col-md-6 col-sm-12">
    <div class="login-form">
      <form>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" placeholder="Enter Your Email">
        </div>

        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" placeholder="Enter Your Address">
        </div>

        <div class="form-group form-group-sm">
          <label for="cv">cv</label>
          <input type="file" name="cv" id="cv" class="btn btn-default btn-sm">
          <a href="">{{$errors->first('cv')}}</a>
        </div>
        <button type="submit" class="btn btn-danger btn-lg">Save</button>
        
      </form>
    </div>
  </div>
</div>



@stop