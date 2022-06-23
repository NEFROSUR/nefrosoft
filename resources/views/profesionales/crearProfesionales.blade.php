@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">REGISTRAR NUEVO PROFESIONAL</h4>
</div>
<div class="container w-30 border p-4 mt-4">
    <form action="{{ url('/profesionales') }}" method="POST">
        @csrf
        @include('profesionales.formProfesionales')
    </form>
</div>
@endsection