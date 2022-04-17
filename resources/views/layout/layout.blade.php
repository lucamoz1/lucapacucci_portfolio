<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Luca Pacucci | Portfolio</title>
        <meta name="description" content="Luca Pacucci, Full Stack Software Developer in Cesena, Italia">
        <link rel="stylesheet" href="{{ mix("/css/main.css") }}">
    </head>
    <body>
        <main>
            @yield("content")
        </main>
    </body>
</html>