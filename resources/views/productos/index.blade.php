@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            @if (session('stock_alert'))
                                <div class="alert alert-danger">
                                    {{ session('stock_alert') }}
                                </div>
                            @endif
                            <div class="card-header">{{ __('Panel de Productos') }}</div>
                            <div class="card-body">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-warning" type="submit" style="font-size: 18px;"
                                        href="{{ route('productos.create') }}">Nuevo</a>
                                    <a type="submit" class="btn btn-primary" href="/vistaPro">Vista Producto</a>
                                </div>

                                <br>
                                <br>
                                <button id="delete-selected" class="btn btn-danger" style="display: none">Eliminar</button>
                                <div class="table-responsive">
                                    <table id="order-listing" class="table sortable-table table-striped">
                                        <thead class="table-secondary">
                                            <th style="display: none;">ID</th>
                                            <th> <input type="checkbox" id="select-all"> </th>
                                            <th>Serie</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Imagen</th>
                                            <th>Stock</th>
                                            <th>Valor</th>
                                            <th>Creacion</th>
                                            <th></th>
                                        </thead>
                                        <tbody class="text-sm mb-0">
                                            @foreach ($product as $producto)
                                                <tr>
                                                    <td style="display: none;">{{ $producto->id }}</td>
                                                    <td>
                                                        <!-- Agregado: Checkbox para seleccionar el producto -->
                                                        <input type="checkbox" name="selected_products[]"
                                                            value="{{ $producto->id }}">
                                                    </td>
                                                    <td>{{ $producto->serie }}</td>
                                                    <td>
                                                        <a class="producto-nombre bg-opacity-primary  color-primary rounded-pill userDatatable-content-status"
                                                            href="{{ route('productos.show', $producto->id) }}">{{ $producto->nombre }}
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <h5>
                                                            <span
                                                                class="bg-opacity-info  color-info rounded-pill userDatatable-content-status">{{ $producto->categoria->name }}</span>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        @if (isset($producto->imagenes[2]))
                                                            <img src="/img/post/{{ $producto->imagenes[2] }}"
                                                                height="90px">
                                                        @elseif (isset($producto->imagenes[0]))
                                                            <img src="/img/post/{{ $producto->imagenes[0] }}"
                                                                height="90px">
                                                        @else
                                                            <img src="" alt="No hay Imagen" height="90px">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $producto->getTotalStock() }} en Existencias
                                                    </td>
                                                    <td>{{ number_format($producto->precio) }}</td>
                                                    <td>{{ $producto->created_at->format('Y/m/d') }}</td>
                                                    <td>
                                                        <a href="{{ route('productos.edit', $producto->id) }}"
                                                            class="btn btn-xs btn-outline-primary">
                                                            <i class="bx bx-edit-alt me-1"></i>
                                                        </a>
                                                        <form action="{{ route('productos.destroy', $producto->id) }}"
                                                            class="d-inline form-eliminar feliminar" method="POST">

                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn  btn-xs btn-outline-danger">
                                                                <i class="bx bx-trash me-1"></i>
                                                            </button>
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
            </div>
        </div>
    </main>

    <!-- ---------------------------------------------------------------------------------- -->

    <div class="modal fade" id="productoCreate" tabindex="-1" aria-labelledby="productoCreateLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="productoCreateLabel">Crear Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('productos.store') }}" class="row g-3"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Categoria-id">Categoria</label>
                            <select name="Categoria_id" id="Categoria-id" class="form-select">
                                <option value="">-- Elegir Categoria --</option>
                                @foreach ($categoria as $categorias)
                                    <option value="{{ $categorias->id }}">{{ $categorias->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="imagenes">Imágenes:</label>
                            <input type="file" class="form-control" id="imagenes" name="imagenes[]" multiple>
                        </div>
                        <div id="preview"></div>
                        <div class="form-group">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" class="ckeditor" rows="10" cols="80" required></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="precio">Valor</label>
                            <input type="decimal" name="precio" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="stock">Stock</label>
                            <input type="number" name="stock" class="form-control">
                        </div>
                        <div class="btn-group">
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
        $(document).ready(function() {
            $("#select-all").change(function() {
                // Obtener el estado de selección del checkbox "select-all"
                var selectAllChecked = $(this).is(":checked");

                // Marcar o desmarcar todos los productos individuales
                $("input[name='selected_products[]']").prop('checked', selectAllChecked);

                // Mostrar u ocultar el botón de "Eliminar" en función de las casillas de verificación
                if (selectAllChecked) {
                    $("#delete-selected").show();
                } else {
                    $("#delete-selected").hide();
                }
            });
            // Manejar el evento de cambio en las casillas de verificación de productos individuales
            $("input[name='selected_products[]']").change(function() {
                // Verificar si al menos una casilla de verificación de productos está marcada
                var atLeastOneChecked = $("input[name='selected_products[]']:checked").length > 0;

                // Mostrar u ocultar el botón de "Eliminar" en función de las casillas de verificación
                if (atLeastOneChecked) {
                    $("#delete-selected").show();
                } else {
                    $("#delete-selected").hide();
                }
            });

            // Manejar el clic en el botón de "Eliminar"
            $("#delete-selected").click(function() {
                // Obtener los IDs de los productos seleccionados
                var selectedProductIds = [];

                $("input[name='selected_products[]']:checked").each(function() {
                    selectedProductIds.push($(this).val());
                });

                if (selectedProductIds.length > 0) {
                    if (confirm("¿Estás seguro de que deseas eliminar los productos seleccionados?")) {
                        // Realizar una solicitud AJAX para eliminar los productos seleccionados
                        $.ajax({
                            type: "POST",
                            url: "{{ route('productos.bulkDelete') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                selectedProductIds: selectedProductIds
                            },
                            success: function(data) {
                                // Manejar la respuesta del servidor (puede ser una redirección o una actualización de la página)
                                location.reload();
                            }
                        });
                    }
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Manejar el evento de cambio en la casilla "Seleccionar todo"
            $("#select-all").change(function() {
                // Obtener el estado de la casilla "Seleccionar todo"
                var isChecked = $(this).is(":checked");

                // Establecer el estado de todas las casillas de verificación de productos en función de "Seleccionar todo"
                $("input[name='selected_products[]']").prop("checked", isChecked);
            });

            // Manejar el evento de cambio en las casillas de verificación de productos individuales
            $("input[name='selected_products[]']").change(function() {
                // Verificar si todas las casillas de verificación de productos están marcadas
                var allChecked = $("input[name='selected_products[]']:checked").length === $(
                    "input[name='selected_products[]']").length;

                // Establecer el estado de la casilla "Seleccionar todo" en función de las casillas de verificación de productos
                $("#select-all").prop("checked", allChecked);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#imagenes').change(function() {
                $(".preview").html('');
                [].forEach.call(this.files, function(file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $(".preview").append('<img src="' + e.target.result +
                            '" class="img-thumbnail mr-2" style="width: 100px; height: 100px;">'
                        );
                    }
                    reader.readAsDataURL(file);
                });
            });
        });
    </script>
@endsection
