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

                                <form class="row g-3" action="{{ route('cliente.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" name="nombre" placeholder="Nombre del Proveedor"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="identify_id">Categoria</label>
                                        <select name="identify_id" id="select-alerts2" class="select-alerts2">
                                            <option value="">-- Elegir Tipo de Documento --</option>
                                            @foreach ($ides as $categorias)
                                                <option value="{{ $categorias->id }}">{{ $categorias->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="document">N° de Documento</label>
                                        <input type="text" name="document" placeholder="document del Proveedor"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="direccion">Dirección</label>
                                        <input type="text" name="direccion" placeholder="direccion del Proveedor"
                                            class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="telefono">N° de telefonoo</label>
                                        <input type="tel" name="telefono" placeholder="telefono" class="form-control">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" placeholder="email@gmail.com"
                                            class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
