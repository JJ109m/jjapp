@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">{{ __('Editar Ingresos') }}</div>

                <div class="card-body">

                    <form action="{{ route('ingresos.update', $ingreso->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group col-md-6">
                            <label for="proveedor_id" class="form-label">Proveedor</label>
                            <select class="form-select" name="proveedor_id" id="proveedor_id" required>
                                <option value="">-- Elegir Proveedor --</option>
                                @foreach ($proveedor as $proveedores)
                                <option value="{{ $proveedores->id }}">{{ $proveedores->nombre }}</option>
                                @endforeach
                              </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha" class="form-label">Fecha de Envio</label>
                            <input type="date" class="form-control" name="fecha" id="fecha" value="{{ $ingreso->fecha }}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control" placeholder="Cantidad de productos" id="cantidad" value="{{ $ingreso->cantidad }}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="precio_base" class="form-label">Precio Base</label>
                            <input type="number" name="precio_base" class="form-control" placeholder="Precio del Producto Base" id="precio_base" value="{{ $ingreso->precio_base }}" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="precio_total" class="form-label">Precio de la Compra</label>
                            <input type="number" name="precio_total" class="form-control" placeholder="Precio Total de la Compra" id="precio_total" value="{{ $ingreso->precio_total }}" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>

                        <div class="form-group col-md-6">
                            <label for="estado" class="form-label">Estado:</label>
                            <select id="estado" name="estado"  value="{{ $ingreso->estado }}" class="form-select">
                                <option value="borrador">Borrador</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="completo">Completo</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="descripcion" class="form-label">Descripcion de la compra</label>
                            <textarea class="ckeditor" name="descripcion" id="editor1" rows="10" cols="80">{{ $ingreso->descripcion }}</textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection

