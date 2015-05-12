<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
    <title>@yield('title')</title>
    <link href="{{asset('resources/components/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('resources/components/bootstrap/css/bootstrap-social.css')}}" rel="stylesheet"/>
    <link href="{{asset('resources/components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"/>

    <script src="{{asset('resources/components/jquery-2.1.0.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('resources/components/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
</head>
<body>
<div id="wrap">
    @yield('content')
</div>
</body>
</html>