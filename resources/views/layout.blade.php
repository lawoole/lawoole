<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
        .container {
            height: 100vh;
            align-items: center;
            display: flex;
            justify-content: center;
            position: relative;
        }
        .text {
            text-align: center;
            font-size: 72px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="text">
        @yield('text')
    </div>
</div>
</body>
</html>
