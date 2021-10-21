
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>V1Study - SPA with Laravel-VueJS</title>

            <!-- Style -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
    <body>
        <h1 style="color: #8ac007;text-align: center;font-weight: bold;">V1Study - SPA with Laravel-VueJS</h1>
        <section id="app"></section>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
