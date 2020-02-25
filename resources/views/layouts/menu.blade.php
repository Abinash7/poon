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
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('About')}}">About</a></li>
            <li><a href="{{route('Services')}}">Services</a></li>
            <li><a href="{{route('Contact')}}">Contact</a></li>
            <li><a href="{{route('Career')}}">Career</a></li>
         </ul>
      </div>
   </nav>
</header>

@endsection