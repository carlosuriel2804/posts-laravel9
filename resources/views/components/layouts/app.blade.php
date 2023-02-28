<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyFirstApp - {{$title ?? ''}}</title>
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