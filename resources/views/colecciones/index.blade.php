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
                                                <h3 class="card-title">{{ __('Categorias') }}
                                                    <a class="btn btn-warning" type="submit" style="float: right;"
                                                        data-bs-toggle="modal" data-bs-target="#Category">Nuevo</a>
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
                                                        <thead class="table-warning">
                                                            <th>ID</th>
                                                            <th>Categoria</th>
                                                            <th>Creacion</th>
                                                            <th>Actualizacion</th>
                                                            <th>Acciones</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($categoria as $coleccion)
                                                                <tr>
                                                                    <td>{{ $coleccion->id }}</td>
                                                                    <td>{{ $coleccion->name }}</td>
                                                                    <td>{{ $coleccion->created_at }}</td>
                                                                    <td>{{ $coleccion->updated_at }}</td>
                                                                    <td>
                                                                        <a class="btn bg-primary" type="submit"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editModal{{ $coleccion->id }}">Editar</a>
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

                                                                <!-- Modal de edición -->
                                                                <div class="modal fade" id="editModal{{ $coleccion->id }}"
                                                                    tabindex="-1"
                                                                    aria-labelledby="editModalLabel{{ $coleccion->id }}"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editModalLabel{{ $coleccion->id }}">
                                                                                    Editar
                                                                                    categoría</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form
                                                                                    action="{{ route('categoria.update', $coleccion->id) }}"
                                                                                    method="POST">
                                                                                    @method('PUT')
                                                                                    @csrf
                                                                                    <div class="form-group">
                                                                                        <label for="name">Nombre</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="name" name="name"
                                                                                            value="{{ $coleccion->name }}">
                                                                                    </div>
                                                                                    <!-- Agrega más campos de edición según tus necesidades -->
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Cerrar</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary">Guardar
                                                                                            cambios</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <!-- Fin del Modal de edición -->
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
                                                <h4 class="card-title">Grafico de # Producto</h4>
                                                <canvas id="myChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="categories" class="table">
                                                    <thead class="table-success">
                                                        <th>ID</th>
                                                        <th>Categoria</th>
                                                        <th>Cantidad de Coleccion</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($numcategory as $category)
                                                            <tr>
                                                                <td>{{ $category->id }}</td>
                                                                <td>{{ $category->name }}</td>
                                                                <td>{{ $category->productos_count }}</td>
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
    <!-- ---------------------------------------------------------------- -->
    <div class="modal fade" id="Category" tabindex="-1" aria-labelledby="CategoryLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="CategoryLabel">Crear Categoría</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('categoria.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Categoría</label>
                                <input type="text" name="name" class="form-control" id="category">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // Obtén el botón "Guardar cambios" del modal
        var saveButton = document.querySelector('#editModal .btn-primary');

        // Agrega un evento de clic al botón "Guardar cambios"
        saveButton.addEventListener('click', function() {
            // Aquí puedes realizar las acciones necesarias al guardar los cambios en la categoría
            // Por ejemplo, puedes obtener los valores de los campos de edición y enviar una solicitud AJAX al controlador para actualizar los datos en la base de datos

            // Cierra el modal después de guardar los cambios
            var modal = document.querySelector('#editModal');
            var bootstrapModal = bootstrap.Modal.getInstance(modal);
            bootstrapModal.hide();
        });
    </script>


    <script>
        var numcategory = {!! json_encode($numcategory) !!};

        var data = {
            labels: numcategory.map(post => post.name),
            datasets: [{
                label: '# de comentarios',
                data: numcategory.map(post => post.productos_count),
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
            type: 'pie',
            data: data,
            options: options
        });
    </script>
@endsection
