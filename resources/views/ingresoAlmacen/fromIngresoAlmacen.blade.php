<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div>
    <div>
        <label for="tittle" class="form-label">REGISTRO NUEVA FACTURA</label>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">DATOS DEL USUARIO</label>
            <div class="col p-2 mt-0.5">
                <select id="inputState" name="usuario" class="form-select p-1 mt-0.5">
                    <option>Almacen</option>
                    <option>Administracion</option>
                    <option>Datos</option>
                    <option>Recepcion</option>
                    <option>Enfermeria</option>
                    <option>Direccion Medica</option>
                </select>
            </div>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="fechaEmision" class="form-control" placeholder="Fecha Emision">
        </div>
       
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Estado de paga</label>
            <select id="inputState" name="estadoPaga" class="form-select p-1 mt-0.5">
                <option value="1">Pagado</option>
                <option value="2">No Pagado</option>
            </select>
        </div>
    </div>

</div>

<div class="row">
    <div>
        <label for="tittle" class="form-label">DATOS DE LA FACTURA</label>
    </div>
    <div class="col p-2 mt-0.5">
        <input type="text" name="fechaIngreso" class="form-control" placeholder="Fecha Ingreso Almacen">
    </div>
    <div class="col p-2 mt-0.5">
        <input type="text" name="fechaVencimiento" class="form-control" placeholder="Fecha Vencimiento de la Factura">
    </div>
    <div class="col p-2 mt-0.5">
        <input type="text" name="numIngreso" class="form-control" placeholder="Numero de Ingreso">
    </div>
    <div class="col p-2 mt-0.5">
        <input type="text" name="numFactura" class="form-control" placeholder="Numero de Factura">
    </div>

</div>
<div class="row">
    <div>
        @livewire('datoproveedor')
    </div>
</div>
<div class="col p-2 mt-0.5">
    <label for="tittle" class="form-label">Detalle de la compra</label>
    <input type="text" name="detalle" class="form-control" placeholder="Detalle">
</div>
<div class="text-center p-1 mt-4">
    <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Factura?')">Registrar Factura</button>
</div>
</div>