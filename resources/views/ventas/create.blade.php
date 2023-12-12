@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="content-wrapper">

                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">{{ __('Registro de Venta') }}</div>
                            <div class="card-body">

                                <form method="POST" action="{{ route('ventas.store') }}" class="row g-3 needs-validation">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="fecha_venta" class="form-label">Fecha de Venta</label>
                                        <input type="date" class="form-control" name="fecha_venta" id="fecha_venta"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nombre_cliente" class="form-label">Nombre del Cliente</label>
                                        <input type="text" class="form-control" name="nombre_cliente" id="nombre_cliente"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono_cliente" class="form-label">Telefono del Cliente</label>
                                        <input type="text" class="form-control" name="telefono_cliente"
                                            id="telefono_cliente" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="direccion" class="form-label">Direccion</label>
                                        <input type="text" class="form-control" name="direccion" id="direccion" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="estado" class="form-label">Estado:</label>
                                        <select id="select-alerts2" name="estado" class="select-alerts2">
                                            <option value="borrador">Borrador</option>
                                            <option value="pendiente">Pendiente</option>
                                            <option value="completo">Completo</option>
                                            <option value="cancelado">Cancelado</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#modalProductos">
                                            Agregar Productos
                                        </button>
                                        @include('ventas.modal_productos')
                                    </div>


                                    <br>

                                    <div class="table-responsive">
                                        <table class="table" id="tabla-venta">
                                            <thead>
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Variante</th>
                                                    <th>Precio</th>
                                                    <th>Cantidad</th>
                                                    <th>Descuento</th>
                                                    <th>Subtotal</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="5" class="text-right"><strong>Total Pagar:</strong></td>
                                                    <td colspan="3" class="badge badge-dark rounded-pill">
                                                        <strong>
                                                            <span id="total">0.00</span>
                                                        </strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <br>

                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>

                                    </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
