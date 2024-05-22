<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Notas | Laravel - Materialize</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
    <div class="container">
        <header>
            <h1>Laravel Crud - Notes - Materialize</h1>
        </header>
        <div class="card">
            <div class="card-content">
                @include('layouts.partials.messages')
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>