<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Cursos</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    {{-- Add component "nav" --}}
    <x-nav>
    {{--  Add component "link", ruta, nombre --}}
        <x-link redirect="{{ route('cursos') }}">Cursos</x-link>
        <x-link redirect="{{ route('cursos') }}">Papelera Cursos</x-link>
    </x-nav>

    {{ $slot }}
</body>

</html>
