<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div>
    <form action="{{ url('/detalleSalidaAlmacen/create/'.$salida_id->id) }}" method="POST">
        <div>
            <div>
                <label for="tittle" class="form-label">REGISTRO MEDICAMENTOS</label>
            </div>
            <div class="row">
                <label for="tittle" class="form-label">PRODUCTOS</label>
                <div class="col p-2 mt-0.5">
                    <select id="inputState" name="product_id" class="form-select p-1 mt-0.5">
                        @foreach ($productoAll as $producto)
                        <option value="{{$producto->id}}">{{$producto->nombreProd}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="cantidadIngresada" class="form-control" placeholder="cantidadIngresada">
                </div>
                <div class="col p-2 mt-0.5">
                    <select id="inputState" name="unidadMedida" class="form-select p-1 mt-0.5">
                        <option>Unidad</option>
                        <option>Bolsa</option>
                        <option>Caja</option>
                        <option>Galon</option>
                        <option>Metros</option>
                        <option>Paquete</option>
                        <option>Pares</option>
                        <option>Resma</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Destino</label>
                <input type="text" name="destino" class="form-control">
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Detalle del Destino</label>
                <input type="text" name="detalle" class="form-control">
            </div>
        </div>
        <div class="text-center p-1 mt-4">
            <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Salida?')">Registrar Consumo en Salida {{$salida_id->id}}</button>
        </div>

    </form>
</div>