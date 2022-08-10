@extends('main')
@section('content')

<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">BUSQUEDA DE PACIENTE</h4>
</div>
<div class="container">
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <input name="nombre" class="form-control me-2" type="search" placeholder="Apellido Paterno" aria-label="Search">
            <input name="dni" class="form-control me-2" type="search" placeholder="DNI / CE" aria-label="Search">
            <div class="form-group">

                <div class="col">
                    <label for="inputState" class="form-label">Turno</label>
                    <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col">
                    <label for="inputState" class="form-label">Frecuencia</label>
                    <select id="inputState" name="frecuencia" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option value="lmv">Lunes - Miecoles - Viernes</option>
                        <option value="mjs">Martes - Jueves - Sabado</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>

    </div>


</div>
<div  class="container mx-auto" >
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Documento de Identidad</th>
                <th>Nombre del Paciente</th>
                <th>Edad</th>
                <th>Direccion</th>
                <th>Telefono de Contacto</th>
                <th>Frecuencia</th>
                <th>Turno</th>

                <th>Regimen</th>
                <th>N° Afiliacion</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id}}</td>
                <td>{{ $paciente->dni}}</td>
                <td>{{ $paciente->apellidoPaterno}} {{ $paciente->apellidoMaterno}}, {{ $paciente->primerNombre}} {{ $paciente->otroNombre}}</td>
                <td>
                @php
                $date = $paciente->fechaNacimiento;
                $dia=substr($date,-2,1).substr($date,-1,1);
                $mes=substr($date,-5,1).substr($date,-4,1);
                $year=substr($date,-10,1).substr($date,-9,1).substr($date,-8,1).substr($date,-7,1);
                $fecha = $year."-".$mes."-".$dia;

                
                $diaA=substr($fechaActual,-2,1).substr($fechaActual,-1,1);
                $mesA=substr($fechaActual,-5,1).substr($fechaActual,-4,1);
                $yearA=substr($fechaActual,-10,1).substr($fechaActual,-9,1).substr($fechaActual,-8,1).substr($fechaActual,-7,1);
                $fechaA = $yearA."-".$mesA."-".$diaA;

                $edad = $yearA - $year;
                $extra = 0;
                if($edad>1){
                    if($mes<$mesA){
                        $extra=$extra+1;

                    }
                    if($mes==$mesA){
                        if($dia<$diaA){
                            $extra=$extra+1;
                        }
                    } 
                }

                $edad = $edad +$extra;

                @endphp
                {{$edad}}
                </td>
                <td>{{ $paciente->direccion}}<br>{{ $paciente->direccion1}}</td>
                <td>{{ $paciente->telefono}}<br>{{ $paciente->telefono1}}<br>{{ $paciente->telefono2}}</td>
                <td>
                    @if ($paciente->frecuencia === 'lmv')
                    LUNES - MIECOLES - VIERNES
                    @elseif ($paciente->frecuencia === 'mjs')
                    MARTES - JUEVES - SABADO
                    @endif
                </td>
                <td>{{ $paciente->turno}}</td>

                <td>{{ $paciente->regimen}}</td>
                <td>N°: {{ $paciente->numAfiliacion}} - Hasta: {{ $paciente->fechaAfiliacion}}</td>
                <td>
                    <a class="btn btn-outline-warning btn-sm p-auto" onclick="return confirm('¿Esta seguro que quiere editar al paciente\n {{ $paciente->primerNombre}} {{ $paciente->apellidoPaterno}}?')" href="{{ url('/pacientes/'.$paciente->id.'/edit') }}">
                        Actualizar
                    </a>

                    <form action="{{ url('/pacientes/'.$paciente->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger btn-sm p-auto" type="submit" onclick="return confirm('¿Esta seguro que quiere deshabilitar al paciente\n {{ $paciente->primerNombre}} {{ $paciente->apellidoPaterno}}?')" value="Estado">

                    </form>
                    <form>
                        <input class="btn btn-outline-primary btn-sm p-auto" type="submit" value="Detalle">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="container">

{{ $pacientes->links() }}
</div>
@endsection