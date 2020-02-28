@section('menu')
<header>
   <nav>
      <div class="menu-icon">
         <i class="fa fa-bars fa-2x"></i>
      </div>
      <div class="logo">
         LOGO
      </div>
      <div class="menu">
         <ul>
            <li><a href="{{route('Index')}}" class="btn btn-success btn-lg">Home</a></li>
            <li><a href="{{route('About')}}" class="btn btn-success btn-lg">About</a></li>
            <li><a href="{{route('Services')}}" class="btn btn-success btn-lg">Services</a></li>
            <li><a href="{{route('Career')}}" class="btn btn-success btn-lg">Career</a></li>
            <li><a href="{{route('Contact')}}" class="btn btn-success btn-lg">Contact</a></li>
         </ul>
      </div>
   </nav>
</header>
<div class="sidebutton">
   <a href="{{route('Contact')}}" class="btn btn-danger btn-lg">Contact Us</a>
</div>

@endsection