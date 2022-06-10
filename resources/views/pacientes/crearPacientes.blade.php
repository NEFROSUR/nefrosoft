@extends('main')
@section('content')
    <div class="container w-30 border p-4 mt-4">
        <form action="{{ url('/pacientes') }}" method="POST">
            @csrf
            @include('pacientes.formPacientes')
        </form>
    </div>            
@endsection