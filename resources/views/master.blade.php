<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!--Favicon-->
    <link rel="icon" href="{{ asset('imagens/favicon.ico') }}?v={{ time() }}">
    <!--CSS-->
    @vite('resources/css/styles.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!--Fonte-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!--Script-->
    <script src="{{ asset('js/scripts.js') }}" defer></script>
</head>
<body>
    
        @yield('content')
        
</body>
</html>