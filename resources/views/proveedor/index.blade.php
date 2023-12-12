@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="card-title">{{ __('Proveedores') }}
                                                    <a class="btn btn-warning" type="submit" style="float: right;"
                                                        data-bs-toggle="modal" data-bs-target="#crearproveedor">Nuevo</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="order-listing" id="categories" class="table">
                                                        <thead class="table-secondary">
                                                            <th style="display: none;">ID</th>
                                                            <th>Nombre</th>
                                                            <th>NIT</th>
                                                            <th>Numero Telefono</th>
                                                            <td>Direccion</td>
                                                            <th>Email</th>
                                                            <th>Creado</th>
                                                            <th>Editado</th>
                                                            <th>Opciones</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($proove as $coleccion)
                                                                <tr>
                                                                    <td style="display: none;">{{ $coleccion->id }}</td>
                                                                    <td>{{ $coleccion->nombre }}</td>
                                                                    <td>{{ $coleccion->nit }}</td>
                                                                    <td>{{ $coleccion->telefono }}</td>
                                                                    <td>{{ $coleccion->direccion }}</td>
                                                                    <td>{{ $coleccion->email }}</td>
                                                                    <td>{{ $coleccion->created_at }}</td>
                                                                    <td>{{ $coleccion->updated_at }}</td>

                                                                    <td>
                                                                        <a class="btn bg-primary" type="submit"
                                                                            data-bs-toggle="modal">Editar</a>

                                                                        <form
                                                                            action="{{ route('categoria.destroy', $coleccion->id) }}"
                                                                            class="d-inline form-eliminar" method="POST">
                                                                            @method('DELETE')
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="btn btn-danger">Borrar</button>
                                                                        </form>

                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 align='center'>Grafico de # Ingresos por Proveedor</h4>
                                                <canvas id="myChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="categories" class="table">
                                                    <thead class="table-danger">
                                                        <th>ID</th>
                                                        <th>Categoria</th>
                                                        <th>Cantidad de Coleccion</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($numprovedor as $category)
                                                            <tr>
                                                                <td>{{ $category->id }}</td>
                                                                <td>{{ $category->nombre }}</td>
                                                                <td>{{ $category->ingresos_count }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
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

@section('js')
    <script>
        var numprovedor = {!! json_encode($numprovedor) !!};

        var data = {
            labels: numprovedor.map(post => post.nombre),
            datasets: [{
                label: '# de comentarios',
                data: numprovedor.map(post => post.ingresos_count),
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
@endsection

@section('modal')
    <div class="modal fade" id="crearproveedor" tabindex="-1" aria-labelledby="crearproveedorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="crearproveedorLabel">Crear Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ route('proveedor.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" placeholder="Nombre del Proveedor" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="nit">N° del NIT</label>
                            <input type="text" name="nit" placeholder="NIT del Proveedor" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="telefono">N° de telefono</label>
                            <input type="tel" name="telefono" placeholder="telefono" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" placeholder="direccion del Proveedor"
                                class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="email@gmail.com" class="form-control">
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
@endsection
