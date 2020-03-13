@section('footer')
<footer>
    <div class="footer col-lg-12">
        <div class="col-lg-3">
            <div class="pr-xl-4"><a class="brand" href="{{route('Index')}}"><img class="brand-logo-light" src="Images/penny.png" alt="" width="100%" height="100%"></a>
            </div>
        </div>
        <div class="col-lg-3">
            {{-- <h3>Contacts</h3> --}}
            <br>
            <dl class="contact-list">
                <dd><i class="fa fa-map-marker"> New Baneshwor, Kathmandu, Nepal</i></dd>
                <dd></dd>
            </dl>
            <dl class="contact-list">
                <dd><i class="fa fa-envelope"><a href="mailto:pontoonadcon@gmail.com">
                            pontoonadcon@gmail.com</a></i></dd>
            </dl>
            <dl class="contact-list">
                <dd><i class="fa fa-phone"><a href="tel:9801916450"> +977 9801916450</a>
                        <!--<span>or</span> <a
                            href="tel:+977-9851207718">+977-9851207718</a>--></i>
                </dd>
            </dl>
        </div>
        <div class="col-lg-2">
            <dl class="nav-list">
                <dd><a href="{{route('About')}}"></a></dd>
                <dd><a href="{{route('About')}}">Who We Are</a></dd>
                <dd><a href="{{route('Services')}}">What We Do</a></dd>
                <dd><a href="{{route('Career')}}">Career</a></dd>
                <dd><a href="{{route('Contact')}}">Reach Us</a></dd>

            </dl>
        </div>
        <div class="col-lg-4">
            <div class="social">
                <span><a href="https://www.facebook.com/pontoonads/"><i class="fa fa-facebook-square fa-3x social"></i></a></span>
                <span><a href="https://www.instagram.com/pontoonads/"><i class="fa fa-instagram fa-3x social"></i></a></span>
                <span><a href="#"><i class="fa fa-google fa-3x social"></i></a></span>
                <span><a href="#"><i class="fa fa-youtube fa-3x social"></i></a></span>
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
<script src="assets/js/jquery-3.3.1.min.js"></script>

</html>
@stop