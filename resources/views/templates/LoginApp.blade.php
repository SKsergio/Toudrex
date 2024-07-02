<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Toudrex')</title>{{-- the same title --}}
    {{-- general css --}}
    <link rel="stylesheet" href="{{asset('css/normalice.css')}}">
    <link rel="stylesheet" href="{{asset('css/layaout.css')}}">
    {{-- specific css --}}
    @stack('css')
</head>
<body>
    <header>
        {{-- this template doesn't have menu --}}
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        {{-- It also doesn't have footer --}}
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>