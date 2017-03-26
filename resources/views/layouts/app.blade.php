<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | Du Khao Viet</title><!-- Fonts -->    {{-- Encrypted CSRF token for Laravel, in order for Ajax requests to work --}}
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">
        <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
     <div class="d-flex flex-column full-height h-100" id="app">
         @include('partials.header')
         <div class="viewport d-sm-flex flex-row">
             @yield('content')
         </div>
     </div>
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    </script>
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
    </body>
</html>