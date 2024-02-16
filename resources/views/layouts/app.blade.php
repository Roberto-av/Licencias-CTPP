<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LICENCIAS CT PP-@yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta descripcion')" />
    <style>
        nav {
            margin: 27px auto 0;

            position: relative;
            width: 590px;
            height: 50px;
            background-color: #010203af;
            border-radius: 8px;
            font-size: 0;
        }

        nav a {
            line-height: 50px;
            height: 100%;
            font-size: 17px;
            display: inline-block;
            position: relative;
            z-index: 1;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
            color: white;
            cursor: pointer;
            font-weight: 800;
            font-style: italic;
        }

        nav .animation {
            position: absolute;
            height: 100%;
            top: 0;
            z-index: 0;
            transition: all .5s ease 0s;
            border-radius: 8px;
        }

        a:nth-child(1) {
            width: 110px;
        }

        a:nth-child(2) {
            width: 110px;
        }

        a:nth-child(3) {
            width: 110px;
        }

        a:nth-child(4) {
            width: 140px;
        }

        a:nth-child(5) {
            width: 110px;
        }

        nav .start-home,
        a:nth-child(1):hover~.animation {
            width: 110px;
            left: 0;
            background-color: #1abc9c;
        }

        nav .start-about,
        a:nth-child(2):hover~.animation {
            width: 110px;
            left: 100px;
            background-color: #e74c3c;
        }

        nav .start-blog,
        a:nth-child(3):hover~.animation {
            width: 110px;
            left: 210px;
            background-color: #3498db;
        }

        nav .start-portefolio,
        a:nth-child(4):hover~.animation {
            width: 140px;
            left: 310px;
            background-color: #9b59b6;
        }

        nav .start-contact,
        a:nth-child(5):hover~.animation {
            width: 120px;
            left: 470px;
            background-color: #e67e22;
        }

        body {
            font-size: 12px;
            font-family: sans-serif;
            background: rgba(240, 248, 255, 0.808);
        }

        h1 {
            text-align: center;
            margin: 40px 0 40px;
            text-align: center;
            font-size: 30px;
            color: #000000;

            font-family: sans-serif;
        }

        p {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #ecf0f1;
            font-family: 'Cherry Swash', cursive;
            font-size: 16px;
        }

        span {
            color: #2BD6B4;
        }

        .notificacion {
            position: relative;
        }

        i {
            font-size: 42px
        }

        .count {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background-color: red;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 99;
        }
    </style>
    @include('partials.navigation')
</head>

<body>
    @yield('content')
    @yield('secondcontent')
</body>

</html>
