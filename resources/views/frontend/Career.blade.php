@php $title = "Career|Pontoon" @endphp
@extends('master.master')
@section('content')
<section class="career">
  <img src="Images/career1.jpg" width="100%" height="450px">

  <div class="container text-center">
    <div class="title">Your Career At Pontoon:</div>
    <div class="career1"> We gurantee on having the best working environment for everyone that could either be executive with years of
      experience or recent alumini. We assure you that working at Pontoon does not mean you are working for us
      in-fact it means you're working along with us. We believe in empowering and encouraging new-comers and also
      respect the efforts, ideas and contribution equally because we believe on our peoples being the most effective
      and essential raw materials for our company. Everyone gets maximum autonomy to make an impact while performing
      any sorts of tasks. We are always eagerly waiting to welcome the passionate fresher's who can aggregate analouge
      and justific analytic aptitude along with inventiveness. </div>

    <div class="col-lg-5">
      <img src="Images/Career1.png" height="100%" width="100%">
    </div>
    <div class="col-lg-7">
      <form method="post" class="contactform" action="{{route('Career')}}">
        {{csrf_field()}}
        <div class="form-group">
          <label>Name*</label>
          <input type="text" class="form-control" placeholder="Enter Your Name" required>
        </div>
        <div class="form-group">
          <label>Email*</label>
          <input type="text" class="form-control" placeholder="Enter Your Email" required>
        </div>

        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" placeholder="Enter Your Address">
        </div>

        <div class="form-group form-group-sm">
          <label for="cv">CV*</label>
          <input type="file" id="cv" name="cv">
        </div>
        <button type="submit" class="btn btn-danger btn-lg">Submit</button>
      </form>
    </div>

  </div>
  <div class="contact text-center">
    <div class="col-lg-12">
      <h3>You are one step away</h3>
      <p>All you need is register and we will arrange a meet with you. Feel free to join us or visit us <a
          href="{{route('Contact')}}" class="btn btn-danger btn-lg">ContactUs</a></p>

    </div>
  </div>
</section>

@stop