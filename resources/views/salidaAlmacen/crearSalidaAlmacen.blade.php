@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75"><strong>REGISTRAR NUEVA SALIDA DE PRODUCTOS A ALMACEN</strong></h4>
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

<div class="container w-50 border p-4 mt-4">
    <form action="{{ url('/salidaAlmacen') }}" method="POST">
        @csrf
        @include('salidaAlmacen.formSalidaAlmacen')
    </form>
</div>
@endsection