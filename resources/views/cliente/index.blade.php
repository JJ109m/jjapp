@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">{{ __('Panel de Clientes') }}</div>
                            <div class="card-body">
                                <div class="btn-group" role="group" style="float: right;" aria-label="Basic example">
                                    <a type="submit" href="{{ route('cliente.create') }}" class="btn btn-success">
                                        <i class="mdi mdi-cart-plus"></i>
                                        Agregar
                                    </a>
                                </div>

                                <div class="card-head row g-3">
                                    <div class="btn-group col-md-3" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-inverse-primary">
                                            <i class="mdi mdi-content-copy"></i>
                                            Copy
                                        </button>
                                        <button type="button" class="btn btn-inverse-success">
                                            <i class="mdi mdi-file-excel btn-icon-prepend"></i>
                                            Excel
                                        </button>
                                        <button type="button" class="btn btn-inverse-danger">
                                            <i class="mdi mdi-file-pdf"></i>
                                            PDF
                                        </button>
                                    </div>
                                </div>

                                <br>

                                <div class="table-responsive">
                                    <table id="order-listing" class="table sortable-table">
                                        <thead class="table-teal">
                                            <tr>
                                                <th scope="col">Opciones</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Documento</th>
                                                <th scope="col">Numero</th>
                                                <th scope="col">Direccion</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($clientes as $cliente)
                                            <tr>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <a href="" type="submit" class="btn btn-warning">
                                                            <i class="mdi mdi-eye-outline"></i>
                                                        </a>
                                                        <form action="{{ route('cliente.destroy', $cliente->id) }}"
                                                            class="d-inline form-eliminar" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="button" class="btn btn-danger">
                                                                <i class="mdi mdi-delete"></i>
                                                            </button>
                                                        </form>
                                                        <button type="button" class="btn btn-primary">
                                                            <i class="mdi mdi-note"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td>{{ $cliente->id }}</td>
                                                <td>{{ $cliente->nombre }}</td>
                                                <td>
                                                    <h5><span
                                                            class="badge badge-info badge-pill">{{ $cliente->identificacion->nombre }}</span>
                                                    </h5>
                                                </td>
                                                <td>{{ $cliente->document }}</td>
                                                <td>{{ $cliente->direccion }}</td>
                                                <td>{{ $cliente->telefono }}</td>
                                                <td>{{ $cliente->email }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="table-teal">
                                            <tr>
                                                <th scope="col">Opciones</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Documento</th>
                                                <th scope="col">Numero</th>
                                                <th scope="col">Direccion</th>
                                                <th scope="col">Telefono</th>
                                                <th scope="col">Email</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
