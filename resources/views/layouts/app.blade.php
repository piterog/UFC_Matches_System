<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UFC Matches</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body class="bg-gray-600">
    <div id="app">
        <Navbar></Navbar>
        <b-container class="bg-dark mt-5">
            @yield('content')
        </b-container>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script defer src="{{ asset('js/manifest.js') }}"></script>
    <script defer src="{{ asset('js/vendor.js') }}"></script>
</body>
</html>
