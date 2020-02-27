@section('footer')
<footer>
    <div class="footer col-lg-12">
        <div class="col-lg-3">
            <div class="pr-xl-4"><a class="brand" href="{{route('Index')}}"><img class="brand-logo-light"
                        src="Images/poon.png" alt="" width="100%" height="100%"></a>
            </div>
        </div>
        <div class="col-lg-3">
            {{-- <h3>Contacts</h3> --}}
            <dl class="contact-list">
                <dd><i class="fa fa-map-marker"> Laxmi-Plaza, Putalisadak, Kathmandu, Nepal</i></dd>
                <dd></dd>
            </dl>
            <dl class="contact-list">
                <dd><i class="fa fa-envelope"><a href="mailto:pontoonadcon@gmail.com">
                            pontoonadcon@gmail.com</a></i></dd>
            </dl>
            <dl class="contact-list">
                <dd><i class="fa fa-phone"><a href="tel:01-4425327"> 01-4425327</a>
                        <!--<span>or</span> <a
                            href="tel:+977-9851207718">+977-9851207718</a>--></i>
                </dd>
            </dl>
        </div>
        <div class="col-lg-2">
            <dl class="nav-list">
                <dd><a href="{{route('Index')}}">Home</a></dd>
                <dd><a href="{{route('About')}}">About</a></dd>
                <dd><a href="{{route('Services')}}">Services</a></dd>
                <dd><a href="{{route('Career')}}">Career</a></dd>
                <dd><a href="{{route('Contact')}}">Contacts</a></dd>

            </dl>
        </div>
        <div class="col-lg-4">
            <div class="social">
                <span><a href="https://www.facebook.com/pontoonads/"><i
                            class="fa fa-facebook-square fa-2x social"></i></a></span>
                <span><a href="https://www.instagram.com/pontoonads/"><i
                            class="fa fa-instagram fa-2x social"></i></a></span>
                <span><a href="mailto:pontoonadcon@gmail.com"><i class="fa fa-envelope fa-2x social"></i></a></span>
            </div>
        </div>
    </div>
</footer>
{{-- <div class="copyright text-center">
    <p> Copyright <i class="fa fa-copyright"></i> Pontoonads.com</p>
</div> --}}
</body>
<!-- js combined -->
<script src="js/career.js"></script>
<script src="js/activenav.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="js/style.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>
@stop