@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">Numero de Formato de Atencion actualmente:{{$FuaInactiva->correlativo}}</h4>
</div>
<div class="container border p-4 mt-4">
    <form action="{{ url('/recepcion/'.$FuaInactiva->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div>
                <label for="tittle" class="form-label">INHABILITANDO ATENCION DE:{{$FuaInactiva->paciente->primerNombre}} {{$FuaInactiva->paciente->apellidoPaterno}} {{$FuaInactiva->paciente->apellidoMaterno}} </label>
            </div>

            <div class="col">
                <label for="inputState" class="form-label">
                    <Table> ¿ El paciente recibio la atencion completa ?</Table>
                </label>
                <select id="inputState" name="estado" class="form-select p-1 mt-0.5">
                    <option value="inactivo">NO</option>
                    <option value="activo">SI</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="inputState" class="form-label">Detalle la razon por la cual no se concreto la atencion</label>
                <textarea id="inputState" class="form-control" name="detalleEstado" rows="3" placeholder="Actualmente esta deshabilitado por:"></textarea>
            </div>
        </div>
        <div class="p-1 mt-4">
            <button type="submit" class="btn btn-primary ">Guardar</button>
        </div>
        <div class="p-1 mt-4">
            <button type="submit" class="btn btn-primary ">Salir</button>
        </div>
</div>
</form>
</div>
@endsection