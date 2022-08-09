<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Nefrosoft</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <style>
        body {
            margin: 16;
            padding: 16;
            font-family: sans-serif;
        }

        .color-container {
            width: 20px;
            height: 20px;
            display: inline-block;
            border-radius: 4px;
        }
    </style>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 text-gray-800">
@yield('main')
    <nav class="flex py-3 bg-dark text-white">
        <div class="w-1/2 px-12 mr-auto">
        <a class="navbar-brand" href="/">NEFROSUR</a>
        </div>
        
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
      @if(auth()->check())
        <li class="mx-8">
          <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }} espero que tengas un buen dia!! Tu puedes !!</b></p>
        </li>
        <li>
          <a href="{{ route('login.destroy') }}" class="
          py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Salir</a>
        </li>
      @else
        <li class="mx-6">
          <a href="{{ route('login.index') }}" class="
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Ingresar</a>
        </li>
        <li>
          <a href="{{ route('register.index') }}" class="
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700">Resgistrarse</a>
        </li>
      @endif
      </ul>

    </nav>
    @yield('inicio')
    
</body>

</html>