@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container border p-4 mt-4">
    <form action="{{ url('/devoluciones/'.$devolucion->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row">
            <h3 class="bg-info p-2 text-white bg-opacity-75"><b>Editando Devolucion: {{$devolucion->numDevolucion}}</b></h3>
        </div>
        <div class="row">
            <div class="col">
                <label for="tittle" class="form-label">Nombre del Responsable (*)</label>
                <input type="text" name="usuario" class="form-control" value="{{$devolucion->usuario}}">
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Personal que devolvio (*)</label>
                <input type="text" name="personalD" class="form-control" value="{{$devolucion->personalD}}">
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Fecha de Devolucion (*)</label>
                <input type="date" name="fechaDevolucion" class="form-control" value="{{$devolucion->fechaDevolucion}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="tittle" class="form-label">Detalle de la Entrega</label>
                <input type="text" name="detalle" class="form-control" value="{{$devolucion->detalle}}">
            </div>
        </div>
        <div class="text-center p-1 mt-4">
            <button type="submit" class="text-center btn btn-primary">Actualizar Devolucion</button>
        </div>
    </form>
</div>
@endsection