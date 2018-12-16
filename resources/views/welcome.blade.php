<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http_equiv="X-UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Connect You</title>
    <meta name="description"
          content="Connect You is the most Secure Messaging Application. Allow you to send sms to your favourite contacts ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    @include('layout.css')
</head>
<body>
@include('layout.header')
@yield('content')
@include('layout.footer')
@include('layout.javascript')
</body>
</html>
