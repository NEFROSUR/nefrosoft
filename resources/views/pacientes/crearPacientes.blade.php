@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">CREAR PACIENTE</h4>
</div>
@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps: No se pudo realizar la accion</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
<div class="container w-30 border p-4 mt-4">
    <form action="{{ url('/pacientes') }}" method="POST">
        @csrf
        @include('pacientes.formPacientes')
    </form>
    <form action="{{ url('/pacientes/create') }}">
        <button type="submit" class="btn btn-success">Limpiar</button>
    </form>
</div>
@endsection