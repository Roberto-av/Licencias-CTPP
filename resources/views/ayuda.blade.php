<!DOCTYPE html>
<html lang="en">

<head>
    @section('title')
        AYUDA
    @endsection
    @section('meta-description')
        AYUDA meta description
    @endsection
    @extends('layouts.app')

</head>

<body>
    @section('content')
        <link rel="stylesheet" href="{{ asset('assets/ayudastyle.css') }}">

        <div class="ayuda">
            <legend>CUENTANOS TUS DUDAS</legend>
            <input class="form" type="text" placeholder="ESCRIBE TU DUDA..." aria-label="ESCRIBE TU DUDA...">
            <div class="vr"></div>
            <button type="submit" class="enviar">ENVIAR</button>

        </div>
        <br>
        <a href="/principal"> REGRESAR</a>
    @endsection

</body>

</html>







<body>

</body>
