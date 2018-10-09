<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Example</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header">
    <div class="col-md-10 row">
        <div class="logo col-md-2"><a href="{{ route('home') }}"><i class="material-icons md-48">home</i></a></div>
        <div class="container col-md-10">
            <h1 class="col-md-12">Laravel vue example</h1>
        </div>
    </div>
</div>
<div class="content">
    <div id="app">
        @yield('content')
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>