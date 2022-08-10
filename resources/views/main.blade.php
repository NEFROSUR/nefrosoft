    @section('main')
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-dark text-white w-auto small">
        <!--<img src="http://assets.stickpng.com/images/585e4beacb11b227491c3399.png" bg-success p-2 text-white width="50" height="50" class="img-fluid" alt="...">--->
        <a class="navbar-brand" href="/">NEFROSUR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
        <ul class="navbar-nav nav justify-content-center ">
            @if(auth()->check())

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="navigation" data-toggle="dropdown" aria-expanded="false" aria-label="Toggle navigation">
                    Pacientes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/pacientes/create') }}">Ingresar nuevo paciente</a>
                    <a class="dropdown-item" href="{{ url('/pacientes/show') }}">Mostrar Pacientes</a>
                    <a class="dropdown-item" href="">Ver pacientes por turno</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" role="navigation" data-toggle="dropdown" aria-expanded="false" aria-label="Toggle navigation">
                    Recepcion
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/recepcion">Ver Atenciones</a>
                    <a class="dropdown-item" href="/recepcion/show">Crear Formato de Atencion</a>
                    <a class="dropdown-item" href="/historia/create">Crear Hoja de Monitoreo</a>
                    <a class="dropdown-item" href="/">Crear Multisciplinario</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Almacen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Jefatura de Enfermeria</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Direccion Medica</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Administracion</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" role="navigation" data-toggle="dropdown" aria-expanded="false" aria-label="Toggle navigation">
                    Recursos Humanos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/profesionales/create">Registrar Profesional</a>
                    <a class="dropdown-item" href="/profesionales/show">Ver profesionales</a>
                    <a class="dropdown-item" href="/">Horarios de Profesionales</a>
                    <a class="dropdown-item" href="/">...</a>
                </div>
            </li>

            </div>
            
                <h1 class="text-l">Bienvenido <b>{{ auth()->user()->name }}</b></h1>
            
            
                <a href="{{ route('login.destroy') }}" class="py-2 px-3 rounded-md bg-red-500 hover:bg-red-600 ">Salir</a>
            
        </ul>
    </nav>

    </head>

    <body style="width:100%; height:100%;">

        @yield('content')
        </div>
    </body>
    <footer>
        <h1 style="text-align:center; margin-bottom: 0; padding: 1rem;">Hola {{ auth()->user()->name }} espero que tengas un buen dia !! Tu puedes !!🐶🐶🐶🐶🐶😹😹😹😹😹 :)</h1>
    </footer>
    @else
    <li class="mx-6">
        <a href="{{ route('login.index') }}" class="
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700 justify-content-end">Ingresar</a>
    </li>
    <li>
        <a href="{{ route('register.index') }}" class="
          border-2 border-white py-2 px-4 rounded-md hover:bg-white 
          hover:text-indigo-700 justify-content-end">Resgistrarse</a>
    </li>
    @endif
    </ul>

    </nav>

    </head>

    <body style="width:100%; height:100%;">

    </body>