<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("assets/dist/assets/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/dist/assets/vendors/iconly/bold.css")}}">
    <link rel="stylesheet" href="{{asset("assets/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.css")}}">
    <link rel="stylesheet" href="{{asset("assets/dist/assets/vendors/bootstrap-icons/bootstrap-icons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/dist/assets/css/app.css")}}">
    @yield("css")
</head>
<body>
<div id="app">
    @include("layouts.sidebar")
</div>
<div id="main">
    @yield("content")
</div>
<script src="{{asset("assets/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>
<script src="{{asset("assets/dist/assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/dist/assets/vendors/apexcharts/apexcharts.js")}}"></script>
<script src="{{asset("assets/dist/assets/js/pages/dashboard.js")}}"></script>
<script src="{{asset("assets/dist/assets/js/main.js")}}"></script>
@yield("js")
</body>
</html>
