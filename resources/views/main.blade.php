<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Nefrosoft</title>
        <style>
            body {
                margin: 16;
                padding: 16;
                font-family:sans-serif;
            }
            .color-container{
                width: 20px;
                height: 20px;
                display: inline-block;
                border-radius:4px;
            }
        </style>
    </head>
    <body>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <div>    
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <img src="..." class="img-fluid" alt="...">
            <a class="navbar-brand bg-warning p-2 text-dark bg-opacity-75 " href="/">NEFROSUR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse bg-warning p-2 text-white bg-opacity-50" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="navigation" data-toggle="dropdown" aria-expanded="false" aria-label="Toggle navigation">
                        Pacientes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/pacientes/create') }}">Ingresar nuevo paciente</a>
                        <a class="dropdown-item" href="{{ url('/pacientes/show') }}">Mostrar Pacientes</a>
                        <a class="dropdown-item" href="{{ url('/pacientes/pacientesForTurno') }}">Ver pacientes por turno</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/" id="navbarDropdownMenuLink" role="navigation" data-toggle="dropdown" aria-expanded="false" aria-label="Toggle navigation">
                        Recepcion
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="/recepcion">Fua Individual</a>
                        <a class="dropdown-item" href="/recepcion/show">Crear Formato de Atencion</a>
                        <a class="dropdown-item" href="/">Hoja de Monitoreo</a>
                        <a class="dropdown-item" href="/"></a>
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
                </ul>
            </div>
        </nav>
    </div> 
    <div class="border-start">
    @yield('content')
    </div>
    </body>

</html>
