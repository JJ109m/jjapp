@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">{{ __('Panel de Ingreso') }}</div>

                <div class="card-body">

                    <form method="POST" action="{{ route('ingresos.store') }}">
                        @csrf
                        <div class="col-md-4">
                            <label for="Proveedor" class="form-label">Proveedor</label>
                            <select class="form-select" name="proveedor_id" id="Proveedor" required>
                              <option>
                                @foreach ($proveedor as $categorias)

                                <option value="{{ $categorias->id }}">{{ $categorias->name }}</option>

                                @endforeach
                              </option>
                            </select>
                            <div class="invalid-feedback">
                              Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="validationCustom02" class="form-label">Fecha de Envio</label>
                            <input type="date" class="form-control" id="validationCustom02" required>
                          </div>

                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" placeholder="Cantidad de productos" id="validationCustom03" required>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">Precio Base</label>
                            <input type="number" class="form-control" placeholder="Precio del Producto Base" id="validationCustom03" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="validationCustom03" class="form-label">Precio de la Compra</label>
                            <input type="number" class="form-control" placeholder="Precio Total de la Compra" id="validationCustom03" required>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                          </div>

                        <div class="col-md-4">
                            <label for="estado" class="form-label">Estado:</label>
                            <select id="estado" name="estado" class="form-select">
                                <option value="borrador">Borrador</option>
                                <option value="pendiente">Pendiente</option>
                                <option value="completo">Completo</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">Descripcion de la compra</label>
                            <textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80"></textarea>
                            <div class="invalid-feedback">
                              Please provide a valid city.
                            </div>
                        </div>

                        <div class="col-12">
                            <a type="submit" class="btn btn-primary">
                                <i class="mdi mdi-content-save"></i> Guardar
                            </a>
                            <a type="submit" href="" class="btn btn-danger">
                                <i class="mdi mdi-arrow-left-bold-circle"></i> Cancelar
                            </a>
                        </div>
                    </form>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
