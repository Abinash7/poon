@extends('master.master')
@section('content')
<section class="contact">
   <img src="Images/img.jpg" height="300" width="100%">
   <div class="container text-center">
      <p>Contact Pontoon:</p>
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
               <label for="sub">Subject</label>
               <input type="text" class="form-control" id="sub" placeholder="Enter subject matter">
            </div>
            <div class="form-group">
               <label for="message">Message*</label>
               <textarea class="form-control" rows="6" required id="message"></textarea>
            </div>
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
            <dd><i class="fa fa-phone"><a href="tel:01-4425327"> 01-4425327</a> <span>or</span> <a
                     href="tel:+977-9851207718">+977-9851207718</a></i>
            </dd>
         </dl>
      </div>
   </div>

   <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.5055212686716!2d85.32012251506194!3d27.701673982794254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19eb19faf563%3A0x98a2104a2408e05a!2sLaxmi%20Plaza!5e0!3m2!1sen!2snp!4v1580816980747!5m2!1sen!2snp"
      width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
@stop