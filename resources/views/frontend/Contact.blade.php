@php $title = "Contact|Pontoon" @endphp
@extends('master.master')
@section('content')
<section class="contact">
   <img class="image" src="Images/contact.jpg" height="100%" width="100%">
   <div class="container text-center">
      <div class="title">Contact Pontoon:</div>
      <div class="form col-md-8">
         <form method="post" class="contactform" action="{{route('Contact')}}">
            {{csrf_field()}}
            <div class="form-group">
               <label for="name">Name*</label>
               <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
               <label for="email">Email*</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
            <div class="form-group">
               <label for="subject">Subject</label>
               <input type="text" class="form-control" id="subject" placeholder="Enter subject matter">
            </div>
            <div class="form-group">
               <label for="message">Message*</label>
               <textarea class="form-control" rows="6" required id="message"></textarea>
            </div>
            <!-- {{-- <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}">
            </div> --}} -->
            <button type="submit" class="btn btn-danger btn-lg">Contact Us</button>
         </form>
      </div>
      <div class="add col-md-4">
         <h4>Walk-in, Call or Email us at !!!</h4>
         <dl class="contact-list">
            <dd><i class="fa fa-map-marker"> Laxmi-Plaza, Putalisadak,</i></dd>
            <dd>Kathmandu, Nepal</dd>
         </dl>
         <dl class="contact-list">
            <dd><i class="fa fa-envelope"><a href="mailto:pontoonadcon@gmail.com">
                     pontoonadcon@gmail.com</a></i></dd>
         </dl>
         <dl class="contact-list">
            <dd><i class="fa fa-phone"><a href="tel:01-4425327"> 01-4425327</a></i>
            </dd>
         </dl>
      </div>
   </div>

   <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14131.200075931094!2d85.33471137177881!3d27.69257511082771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb67eaf763bddd8e5!2z4KSo4KSv4KS-4KSBIOCkrOCkvuCkqOClh-CktuCljeCkteCksA!5e0!3m2!1sne!2snp!4v1582887858467!5m2!1sne!2snp"
      width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
@stop