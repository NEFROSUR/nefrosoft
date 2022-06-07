@extends('main')
@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="{{ url('/pacientes/'.$paciente->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
            @include('pacientes.formPacientes');
        </form>            
</div>            
@endsection