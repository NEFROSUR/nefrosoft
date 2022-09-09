<div>
    <div>
        <label for="tittle" class="form-label">REGISTRO NUEVA FACTURA</label>
    </div>
    <div class="row">
        <div>
            <label for="tittle" class="form-label">DATOS DE LA FACTURA</label>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="" class="form-control" placeholder="Fecha Inicio de Pedido">
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="fechaIngreso" class="form-control" placeholder="Fecha de Ingreso a Almacen">
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="fechaVencimiento" class="form-control" placeholder="Fecha de Vencimiento de la Factura">
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="numFactura" class="form-control" placeholder="Numero de Factura">
        </div>
        <div class="col p-2 mt-0.5">
            <select id="inputState" name="estadoPaga" class="form-select p-1 mt-0.5">
                <option value="1">Pagado</option>
                <option value="2">No Pagado</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div>
            <label for="tittle" class="form-label">DATOS DEL PROVEEDOR</label>
            <div class="col p-2">
                <label for="inputState" class="form-label">PROVEEDOR</label>
                <select id="inputState" name="proveedor_id" class="form-select p-1 mt-0.5">
                    @foreach ($proveedorAll as $proveedor)
                    <option value={{$proveedor->id}}>{{$proveedor->nameProv}} </option>
                    @endforeach
                </select>
            </div>
            <div class="row p-2 mt-0.5">
                <div class="col p-2">
                    <input type="text" name="" class="form-control" placeholder="RUC del Proveedor">
                </div>
                <div class="col p-2">
                    <input type="text" name="" class="form-control" placeholder="Direccion del Proveedor">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div>
            <label for="tittle" class="form-label">DATOS DEL PRODUCTO</label>

            <div class="col p-2">
                <label for="inputState" class="form-label">CATEGORIAS DEL PRODUCTO</label>
                <select id="inputState" name="categoria" class="form-select p-1 mt-0.5">
                    <option value="1">Medicamentos</option>
                    <option value="2">Desechables médicos</option>
                    <option value="3">Limpieza</option>
                    <option value="4">Oficina</option>
                    <option value="5">Farmacia</option>
                    <option value="6">Soluciones</option>
                    <option value="7">Insumos de MH</option>
                </select>
            </div>
            <div class="col p-2">
                <label for="inputState" class="form-label">PRODUCTOS</label>
                <select id="inputState" name="product_id" class="form-select p-1 mt-0.5">
                    @foreach ($productoAll as $producto)
                    <option value={{$producto->id}}>{{$producto->nombreProd}} </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <div>
                <label for="tittle" class="form-label">ESPECIFICACIONES DE LA COMPRA</label>
            </div>
            <div class="col p-2 mt-0.5">
                <input type="text" name="cantidadIngresada" class="form-control" placeholder="Cantidad Ingresada">
            </div>
            <div class="col p-2 mt-0.5">
                <input type="text" name="PrecioTotal" class="form-control" placeholder="Precio Total">
            </div>
            <div class="col p-2 mt-0.5">
                <input type="text" name="detalle" class="form-control" placeholder="Detalle">
            </div>
        </div>
    </div>

    <div class="text-center p-1 mt-4">
        <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Factura?')">Registrar Factura</button>
    </div>
</div>