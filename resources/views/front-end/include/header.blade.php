<style>
    .banner{
        background:url( {{ asset($background_image->slider_image) }} ) no-repeat;
        min-height:600px;
        background-size:100% 100%;
    }
</style>

<div id="home" class="header">
    <div class="top-header">
        <div class="container">
            <div class="logo">
                <a href="index.html"><img src="{{asset('/frontEnd/')}}/images/logo.png" alt=""></a>
            </div>
            <!--start-top-nav-->
            <div class="top-nav">
                <ul>
                    @if($customerId = Session::get('customerId'))
                     <li class="active"><a  href="{{url('/user-logout')}} ">Log out</a></li>
                    @else
                    <li class="active"><a class="play-icon popup-with-zoom-anim" href="#small-dialog">Log in</a></li>
                    <li><a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Sign up</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!---pop-up-box---->
    <script type="{{asset('/frontEnd/')}}/text/javascript" src="js/modernizr.custom.min.js"></script>
    <link href="{{asset('/frontEnd/')}}/css/popup-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="{{asset('/frontEnd/')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
    <!---//pop-up-box---->

    <div id="small-dialog" class="mfp-hide">
        <div class="login">
            <form action="{{url('/user-login')}}" method="post">
                {{csrf_field()}}
                <h3><a href="">Log In</a></h3>
                <h4>Already a Member</h4>
                <input type="text" placeholder=" Please Enter your valid Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
                <input type="password" placeholder=" Please Enter your valid password" name="password"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
                <input type="submit" value="Login" />
            </form>
        </div>
    </div>
    <div id="small-dialog1" class="mfp-hide">
        <div class="signup">
            <form action="{{ url('/customer-registration') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h3>Sign Up</h3>
                <h4>Enter Your Details Here</h4>
                <input type="text" placeholder=" Please Enter your First Name" name="first_name"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}" />
                <input type="text" placeholder=" Please Enter your Second Name" name="second_name"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Second Name';}" />
                <input type="text" placeholder=" Please Enter your Email" name="email" class="email"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Email';}"  />
                <input type="password" placeholder=" Please Enter your password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"/>
                <input type="file" name="customer_image" accept="image/*"/>
                <input type="submit"  value="SignUp"/>
            </form>
        </div>
    </div>



    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
    <!--End-header-->
    @if($message = Session::get('message'))
    <h3 class="text-center" style="color: red">{{$message}}</h3>
    @endif
    <div class="navgation">
        <div class="menu">
            <a class="toggleMenu" href="#"><img src="{{asset('/frontEnd/')}}/images/menu-icon.png" alt="" /> </a>
            <ul class="nav" id="nav">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/aboutUs')}}">About Us</a></li>
                <li><a href="{{url('/services')}}">Services</a></li>
                <li><a href="{{url('/blog')}}">Blog</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
            </ul>
            <!----start-top-nav-script---->
            <script type="text/javascript" src="{{asset('/frontEnd/')}}/js/responsive-nav.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                    });
                });
            </script>
            <!----//End-top-nav-script---->
        </div>
        <div class="search2">
            <form>
                <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
                <input type="submit" value="">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="banner">
    <div class="container">
        <div class="bnr-text">
            <h1>WE CELEBRATES THE JOY OF AGRICULTURE</h1>
            <div class="bttn">
                <a href="#">ASK</a>
            </div>
        </div>
    </div>
</div>