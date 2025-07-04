<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
{{--<x-header />--}}
{{--<x-home.hero />--}}
@yield('content')
<x-footer />
{{--<x-sidebar />--}}


</body>
</html>
