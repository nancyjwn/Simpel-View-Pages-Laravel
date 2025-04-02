<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>

<body>
    <!-- navbar -->
    @include('components.navbar')

    <div>
        @yield('content')
    </div>

    <!-- footer -->
    @include('components.footer')
</body>

</html>