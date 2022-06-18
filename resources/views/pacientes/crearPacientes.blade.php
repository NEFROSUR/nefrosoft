@extends('main')
@section('content')
<div class="text-center">
<h4 class="bg-warning p-2 text-dark bg-opacity-75">CREAR PACIENTE</h4>
</div> 
    <div class="container w-30 border p-4 mt-4">
        <form action="{{ url('/pacientes') }}" method="POST">
            @csrf
            @include('pacientes.formPacientes')
        </form>
    </div>            
@endsection