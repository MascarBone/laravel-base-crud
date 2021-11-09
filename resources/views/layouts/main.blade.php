<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    
@include('partials.header')

<main>

    <div class="container">
        <div class="row g-3">
            @yield('content')
        </div>
    </div>

</main>


    <script text="text/javascript" src="{{ asset('js/app.js')}}"></script>
    @yield('script')
</body>
</html>