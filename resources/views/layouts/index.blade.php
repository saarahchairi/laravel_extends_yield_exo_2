<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>laravel_extends_yield_exo_2</title>
</head>
<body>
    <header>
        @include("partial.nav")
    </header>
    <main>
        @yield("content")
    </main>
</body>
</html>
