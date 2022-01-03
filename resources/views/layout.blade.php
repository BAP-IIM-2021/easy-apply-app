<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b02a79d23.js" crossorigin="anonymous"></script>
    <title>Easy Apply</title>
</head>
<body class="bg-white-cream w-full h-auto">
    @yield('content')
    
    @include('partials/footer')
    <script src="./js/app.js"></script>
</body>
</html>