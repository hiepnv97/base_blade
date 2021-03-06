<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prego</title>
    <link rel="stylesheet" href="{{ asset('/') }}">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}" type="text/css">
</head>
<body>
<div class="wrapper">
    <div class="wrapper__sidebar">
        @include('layouts.sidebar')
    </div>
    <div class="wrapper_main">
        <div class="wrapper_header">
            @include('layouts.header')
            <div class="wrapper_content">
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
