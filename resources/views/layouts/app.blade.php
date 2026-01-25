<!DOCTYPE html>
<html>
<head>
    <title>ಹಳ್ಳಿಮಾರ್ಟ್</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    {{-- Common Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <div class="container">
        @yield('content')
    </div>

</body>
</html> 
