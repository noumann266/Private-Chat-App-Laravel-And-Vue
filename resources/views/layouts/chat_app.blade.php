<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Styles -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="body-style">
@yield('content')

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

{{--

vue
auth
broadcast -> generate event and listener
pusher -> sign up -> get key and paste in env

--}}