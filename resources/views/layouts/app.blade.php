<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>

    <footer id="footer"  class=" bg-info p-3 text-white  text-center bottom-0 position-absolute w-100 ">
      <p>Copyright 2021 &copy; Rashed Afridi</p>
    </footer>
</body>
</html>
