@extends('main')
@section('content')

<div class="text-center">
<h4 class="bg-warning p-2 text-dark bg-opacity-75">BUSQUEDA DE PACIENTE</h4>
</div> 
<div>
<div class="navbar navbar-light float right">
    <form class="d-flex" role="search">
      <input name="nombre" class="form-control me-2" type="search" placeholder="Nombre" aria-label="Search">
      <input name="dni" class="form-control me-2" type="search" placeholder="Documento" aria-label="Search">
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
    <table class="table table-light table-hover ">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Documento de Identidad</th>
                <th>Direccion</th>
                <th>Telefono de Contacto</th>
                <th>Turno</th>
                <th>Frecuencia</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody >
            @foreach ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id}}</td>
                <td>{{ $paciente->primerNombre}}</td>
                <td>{{ $paciente->otroNombre}}</td>
                <td>{{ $paciente->apellidoPaterno}}</td>
                <td>{{ $paciente->apellidoMaterno}}</td>
                <td>{{ $paciente->dni}}</td>
                <td>{{ $paciente->direccion}}</td>
                <td>{{ $paciente->telefono}}</td>
                <td>{{ $paciente->turno}}</td>
                <td>{{ $paciente->frecuencia}}</td>
                <td>
                <a href="{{ url('/pacientes/'.$paciente->id.'/edit') }}">
                    Editar
                </a>    
                 | 
                    <form action="{{ url('/pacientes/'.$paciente->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('Quieres eliminar al paciente?')" value="Borrar">

                    </form>
                </td>
            </tr> 
            @endforeach
            <tr>
                <td>
                    
                </td>
            </tr>
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </tbody>
    </table>          
@endsection