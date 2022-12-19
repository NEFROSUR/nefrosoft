@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">REGISTRAR NUEVO INGRESO DE PRODUCTOS A ALMACEN</h4>
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
    <form action="{{ url('/ingresoAlmacen') }}" method="POST">
        @csrf
        @include('ingresoAlmacen.fromIngresoAlmacen')
    </form>
</div>
@endsection