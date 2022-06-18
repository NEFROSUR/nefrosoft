@extends('main')
@section('content')
<div class="text-center">
<h4 class="bg-warning p-2 text-dark bg-opacity-75">LSITA DE FORMATOS DE ATENCION</h4>
</div> 
<div>
<div class="navbar navbar-light float right">
    <form class="d-flex" role="search">
      <input name="nombre" class="form-control me-2" type="search" placeholder="Nombre" aria-label="Search">
      <input name="dni" class="form-control me-2" type="search" placeholder="Documento" aria-label="Search">

      <button class="btn btn-outline-success" type="submit">Filtrar</button>
    </form>
    
</div>    

    
  </div>
    <table class="table table-light table-hover ">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Correlativo</th>
                <th>Fecha</th>
                <th>Tipo de Atencion</th>
                <th>Paciente</th>
                <th>Profesional</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody >
            @foreach ($totalFuas as $fua)
            <tr>
                <td>{{ $fua->id}}</td>
                <td>{{ $fua->correlativo}}</td>
                <td>{{ $fua->tipoDeConsulta}}</td>
                <td>{{ $fua->paciente_id}}</td>
                <td>Doctor</td>
                <td>
                <a href="">
                    Imprimir
                </a>    
                 | 
                    <form action="{{ url('/recepcion/'.$fua->id) }}" method="POST">
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