<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyFirstApp - {{$title ?? ''}}</title>
    <link rel="shortcut icon" href="https://cdn.pixabay.com/photo/2016/10/10/01/49/leave-1727488_1280.png" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <!-- Agrega un botón que abrirá el modal -->
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <style>
        body {
            padding-top: 4.5rem; /* Ajusta el padding para que el contenido no quede detrás de la barra de navegación */
        }
        .card-link {
            color: inherit;
            text-decoration: none;
        }
        .card-hover:hover {
            background-color: #33333310;
        }
    </style>
</head>
<body>
    <x-layouts.nav></x-layouts.nav>
    {{$slot}}
</body>
</html>