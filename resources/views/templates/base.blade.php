<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title', config('app.name'))</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.min.css">
    @stack('css')
    <style>
        .container { max-width: 720px; }
        .required:after {content: '*'; color:red; }
    </style>
</head>
<body>
<div class="d-flex flex-column min-vh-100 justify-content-between">
    @include('layouts.alert')
    @include('layouts.header')

    <main class="flex-grow-1 py-3">
        @yield('content')
    </main>

    @include('layouts.footer')
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/js/bootstrap.min.js"></script>
@stack('js')

</body>
</html>
