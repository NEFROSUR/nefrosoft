@extends('main')
@section('content')
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
    <button type="button" class="btn btn-primary" onclick="{{url('/pacientes/create')}}">Crear Paciente</button>
    <button type="button" class="btn btn-secondary">2</button>

    <div class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Dropdown
        </button>
        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
        <a class="dropdown-item" href="#">Dropdown link</a>
        <a class="dropdown-item" href="#">Dropdown link</a>
        </div>
    </div>
    </div>
@endsection