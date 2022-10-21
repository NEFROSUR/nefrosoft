<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div>
    <form action="{{ url('/salidaUnitaria/create/'.$producto->id) }}" method="POST">
        <div>
            <div>
                <label for="tittle" class="form-label">REGISTRO DE PRODUCTOS DE SALIDA</label>
            </div>
            <div class="col p-2 mt-0.5">
                <fieldset disabled>
                    <input type="text" class="form-control" value="{{$producto->nombreProd}}">
                </fieldset>
            </div>
            <div class="col p-2 mt-0.5" style="display: none">
                <input type="text" name="product_id" class="form-control" value="{{$producto->id}}">
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="cantidad" class="form-control" placeholder="Cantidad de Salida">
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
                <label for="tittle" class="form-label">Recepcionista</label>
                <input type="text" name="destino" class="form-control">
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Detalle del Destino</label>
                <input type="text" name="observacion" class="form-control">
            </div>
        </div>
        <div class="text-center p-1 mt-4">
            <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Salida?')">Registrar Consumo en Salida {{$producto->id}}</button>
        </div>

    </form>
</div>