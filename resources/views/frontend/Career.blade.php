@php $title = "Career|Pontoon" @endphp
@extends('master.master')
@section('content')
<section class="career">
  <img src="Images/career.png" width="100%" height="450px">

  <div class="container text-center">
    <div class="title">Your Career At Pontoon:</div>
    <div class="col-lg-5">
      <h1>Career</h1>
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj
      aklsjdlkajsdlkfjlkasjdlkjalkjdsfjalsjfdjadslkj

    </div>
    <div class="col-lg-7">
      <form method="post" class="contactform" action="{{route('Contact')}}">
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