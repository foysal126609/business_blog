<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
    <script src="{{asset('/frontEnd/')}}/js/jquery-1.11.0.min.js"></script>
    <link href="{{asset('/frontEnd/')}}/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="{{asset('/frontEnd/')}}/css/style.css" rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!--start-header-->
@include('front-end.include.header')
@yield('content')
@include('front-end.include.footer')
</body>
</html>