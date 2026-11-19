<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('dashboard.layouts.css')
</head>
<body>
    @include('dashboard.layouts.navbar')
    <main>
        @yield('content')
    </main>
    @include('dashboard.layouts.js')
</body>
</html>