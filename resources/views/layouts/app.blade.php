{{-- layouts.app --}}
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @stack('styles')
    <script type="text/javascript"> 
        (function() { 
            var css = document.createElement('link'); 
            css.href = "{{ asset('css/font-awesome-icons.min.css') }}"; 
            css.rel = 'stylesheet'; 
            css.type = 'text/css'; 
            document.getElementsByTagName('head')[0].appendChild(css); })(); 
    </script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    {{-- custom navigation component --}}
    <x-navigation/>

    @yield('breadcrumb')

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>