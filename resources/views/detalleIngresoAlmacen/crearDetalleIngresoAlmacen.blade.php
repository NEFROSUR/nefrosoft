@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">REGISTRAR NUEVO PRODUCTO EN LA FACTURA: {{$factura->numFactura}} </h4>
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
    <form action="{{ url('/detalleIngresoAlmacen') }}" method="POST">
        @csrf
        @include('detalleIngresoAlmacen.formDetalleIngresoAlmacen')
    </form>

</div>
@endsection