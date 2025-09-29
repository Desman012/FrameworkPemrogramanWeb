<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title")</title>
</head>
<body>
    <header>
        @include('header')
    </header>
        <div class="container mt-4">
            @yield('content')
        </div>

    <footer style="margin-top: 625px;">
        @include('footer')
    </footer>
    
</body>
</html>