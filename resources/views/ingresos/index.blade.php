@extends('layouts.admin')

@section('content')
    @if (session('status'))
        <div aria-live="polite" aria-atomic="true" class="position-relative">

            <div class="toast-container position-fixed top-6 end-0 p-3" role="alert" style="z-index: 10000;">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <i class="mdi mdi-pencil-box-outline"></i>
                        <strong class="me-auto">Datos Actualizados</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <main class="main-content">
        <div class="contents">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{ __('Panel de Ingresos') }}
                                    <button type="submit" style="float: right;" data-bs-toggle="modal"
                                        data-bs-target="#crear-ingreso" class="btn btn-primary"><i
                                            class="mdi mdi-cart-plus"></i>Agregar</button>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button"
                                            class="btn btn-primary btn-default btn-squared btn-transparent-primary"
                                            id="copyButton">
                                            <i class="mdi mdi-content-copy feather feather-layers btn-group"></i>
                                            Copy
                                        </button>

                                        <textarea id="tableCopyContent" style="position: absolute; top: -9999px; left: -9999px;"></textarea>

                                        <a type="submit"
                                            class="btn btn-success btn-default btn-squared btn-transparent-success "
                                            href="{{ route('exportxls') }}">
                                            <i class="mdi mdi-file-excel feather feather-layers btn-group"></i>
                                            Excel</a>
                                        <a type="submit"
                                            class="btn btn-danger btn-default btn-squared btn-transparent-danger "
                                            href="{{ route('exportPDFin') }}">
                                            <i class="mdi mdi-file-pdf feather feather-layers btn-group"></i>
                                            PDF
                                        </a>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table id="order-listing" class="table" style="text-align: center;">
                                        <thead>
                                            <tr class="table-primary">
                                                <th>ID</th>
                                                <th>Order #</th>
                                                <th>Proveedor</th>
                                                <th>Fecha Envio</th>
                                                <th>Cantidad</th>
                                                <th>Precio Base</th>
                                                <th>Compra Total</th>
                                                <th>Estado</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ingresos as $registro)
                                                <tr>
                                                    <td>{{ $registro->id }}</td>
                                                    <td>{{ $registro->serie }}</td>
                                                    <td><span
                                                            class="badge badge-dark badge-pill">{{ $registro->proveedor->nombre }}</span>
                                                    </td>
                                                    <td>{{ $registro->fecha }}</td>
                                                    <td>{{ $registro->cantidad }}</td>
                                                    <td>{{ number_format($registro->precio_base) }}</td>
                                                    <td>{{ number_format($registro->precio_total) }}</td>
                                                    <td>
                                                        @php
                                                            $badgeClass = '';
                                                            switch ($registro->estado) {
                                                                case 'borrador':
                                                                    $badgeClass = 'badge-info';
                                                                    break;
                                                                case 'completo':
                                                                    $badgeClass = 'badge-success';
                                                                    break;
                                                                case 'cancelado':
                                                                    $badgeClass = 'badge-danger';
                                                                    break;
                                                                default:
                                                                    $badgeClass = 'badge-warning';
                                                            }
                                                        @endphp
                                                        <span
                                                            class="badge badge-pill {{ $badgeClass }}">{{ $registro->estado }}</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdownjj">
                                                            <button type="button"
                                                                class="btn p-0 dropdown-toggle hide-arrow"
                                                                data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                    class="bx bx-dots-vertical-rounded"></i></button>
                                                            <div class="dropdown-menu" style="border: 1px solid black;">
                                                                <a class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#editModal{{ $registro->id }}"><i
                                                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                <form
                                                                    action="{{ route('ingresos.destroy', $registro->id) }}"
                                                                    class="d-inline feliminar" method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button class="dropdown-item"><i
                                                                            class="bx bx-trash me-1"></i>
                                                                        Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <!-- Modal de edición -->
                                                <div class="modal fade" id="editModal{{ $registro->id }}" tabindex="-1"
                                                    aria-labelledby="editModalLabel{{ $registro->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title"
                                                                    id="editModalLabel{{ $registro->id }}">
                                                                    Editar categoría</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('ingresos.update', $registro->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="proveedor_id"
                                                                                class="form-label">Proveedor</label>
                                                                            <select class="form-select" name="proveedor_id"
                                                                                id="proveedor_id" required>
                                                                                <option value="">-- Elegir Proveedor
                                                                                    --
                                                                                </option>
                                                                                @foreach ($proveedor as $proveedores)
                                                                                    <option value="{{ $proveedores->id }}"
                                                                                        {{ $proveedores->id == $registro->proveedor_id ? 'selected' : '' }}>
                                                                                        {{ $proveedores->nombre }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="fecha" class="form-label">Fecha
                                                                                de
                                                                                Envio</label>
                                                                            <input type="date" class="form-control"
                                                                                name="fecha" id="fecha"
                                                                                value="{{ $registro->fecha }}" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="cantidad"
                                                                                class="form-label">Cantidad</label>
                                                                            <input type="number" name="cantidad"
                                                                                class="form-control"
                                                                                placeholder="Cantidad de productos"
                                                                                id="cantidad"
                                                                                value="{{ $registro->cantidad }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="precio_base"
                                                                                class="form-label">Precio
                                                                                Base</label>
                                                                            <input type="text" class="form-control"
                                                                                name="precio_base" id="precio_base"
                                                                                placeholder="0.00" aria-label="0.00"
                                                                                oninput="convertirMonetario('precio_base', this)"
                                                                                value="{{ $registro->precio_base }}"
                                                                                required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label for="precio_total"
                                                                                class="form-label">Precio de
                                                                                la Compra</label>
                                                                            <input type="text" class="form-control"
                                                                                name="precio_total" id="precio_total"
                                                                                placeholder="0.00" aria-label="0.00"
                                                                                oninput="convertirMonetario('precio_total', this)"
                                                                                value="{{ $registro->precio_total }}"
                                                                                required>
                                                                        </div>

                                                                        <div class="form-group col-md-6">
                                                                            <label for="estado"
                                                                                class="form-label">Estado:</label>
                                                                            <select id="estado" name="estado"
                                                                                class="form-select">
                                                                                <option value="borrador"
                                                                                    {{ $registro->estado == 'borrador' ? 'selected' : '' }}>
                                                                                    Borrador</option>
                                                                                <option value="pendiente"
                                                                                    {{ $registro->estado == 'pendiente' ? 'selected' : '' }}>
                                                                                    Pendiente</option>
                                                                                <option value="completo"
                                                                                    {{ $registro->estado == 'completo' ? 'selected' : '' }}>
                                                                                    Completo</option>
                                                                                <option value="cancelado"
                                                                                    {{ $registro->estado == 'cancelado' ? 'selected' : '' }}>
                                                                                    Cancelado</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="form-group col-md-12">
                                                                            <label for="descripcion"
                                                                                class="form-label">Descripcion de la
                                                                                compra</label>
                                                                            <textarea class="ckeditor" name="descripcion" id="editor1" rows="10" cols="80">{{ $registro->descripcion }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Actualizar</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <!-- Fin del Modal de edición -->
                                            @endforeach
                                        </tbody>
                                        <tbody>
                                            <tr class="table-primary" style="font-weight: bolder;">
                                                <td colspan="4">Total de Cantidad y Venta</td>
                                                <td>{{ $ctotal }}</td>
                                                <td>{{ $total_base }}</td>
                                                <td>{{ $total_ventas }}</td>
                                                <td colspan="2"></td>
                                            </tr>
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
                                <canvas id="grafico-ingresos"></canvas>

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
        document.getElementById('copyButton').addEventListener('click', function() {
            // Obtener la tabla
            var table = document.getElementById('order-listing');

            // Crear una variable para almacenar los datos de la tabla
            var tableData = '';

            // Recorrer las filas de la tabla y obtener los datos
            for (var i = 0; i < table.rows.length; i++) {
                var row = table.rows[i];
                for (var j = 0; j < row.cells.length; j++) {
                    tableData += row.cells[j].innerText;
                    if (j < row.cells.length - 1) {
                        tableData += '\t'; // Agregar un tabulador entre las celdas
                    }
                }
                tableData += '\n'; // Agregar un salto de línea entre las filas
            }

            // Crear un elemento de texto oculto para copiar los datos al portapapeles
            var textArea = document.createElement('textarea');
            textArea.value = tableData;
            document.body.appendChild(textArea);

            // Seleccionar y copiar el contenido al portapapeles
            textArea.select();
            document.execCommand('copy');

            // Eliminar el elemento de texto
            document.body.removeChild(textArea);

            // Mostrar un mensaje de confirmación o realizar alguna otra acción si es necesario
            alert('Los datos de la tabla se han copiado al portapapeles.');
        });
    </script>
@endsection

@section('modal')
    <div class="modal fade" id="crear-ingreso" tabindex="-1" aria-labelledby="crear-ingresoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="crear-ingresoLabel">Crear Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="{{ route('ingresos.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-6">
                            <label for="proveedor_id" class="form-label">Proveedor</label>
                            <select class="select-alerts2" id="select-alerts2" name="proveedor_id" id="proveedor_id"
                                required>
                                <option value="">-- Elegir Proveedor --</option>
                                @foreach ($proveedor as $proveedores)
                                    <option value="{{ $proveedores->id }}">{{ $proveedores->nombre }}</option>
                                @endforeach
                                </option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha" class="form-label">Fecha de Envio</label>
                            <input type="date" class="form-control" name="fecha" id="fecha" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" class="form-control"
                                placeholder="Cantidad de productos" id="cantidad" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="precio_base" class="form-label">Precio Base</label>
                            <input type="text" class="form-control" name="precio_base" id="precio_base"
                                placeholder="0.00" aria-label="0.00" oninput="convertirMonetario('precio_base', this)"
                                required>
                        </div>

                        <!-- Agrega un campo oculto para enviar el valor sin comas al servidor -->
                        <input type="hidden" name="precio_base_sin_comas" id="precio_base_sin_comas">

                        <script>
                            function validarFormulario() {
                                // Verificar si el campo 'precio' no está vacío antes de enviar el formulario
                                var precio = document.getElementById('precio_base_sin_comas').value;
                                if (!precio) {
                                    alert('El campo precio no puede estar vacío');
                                    return false; // Evitar el envío del formulario
                                }
                                return true; // Continuar con el envío del formulario
                            }

                            // Agrega un evento al formulario para validar antes de enviarlo
                            document.getElementById('tuFormulario').addEventListener('submit', validarFormulario);
                        </script>

                        <div class="form-group col-md-6">
                            <label for="precio_total" class="form-label">Precio de la Compra</label>
                            <input type="text" class="form-control" name="precio_total" id="precio_total"
                                placeholder="0.00" aria-label="0.00" oninput="convertirMonetario('precio_total', this)"
                                required>
                        </div>

                        <!-- Agrega un campo oculto para enviar el valor sin comas al servidor -->
                        <input type="hidden" name="precio_total_sin_comas" id="precio_total_sin_comas">

                        <script>
                            function validarFormulario() {
                                // Verificar si el campo 'precio' no está vacío antes de enviar el formulario
                                var precio = document.getElementById('precio_total_sin_comas').value;
                                if (!precio) {
                                    alert('El campo precio no puede estar vacío');
                                    return false; // Evitar el envío del formulario
                                }
                                return true; // Continuar con el envío del formulario
                            }

                            // Agrega un evento al formulario para validar antes de enviarlo
                            document.getElementById('tuFormulario').addEventListener('submit', validarFormulario);
                        </script>

                        <script>
                            function convertirMonetario(id, inputElement) {
                                // Obtener el valor actual del input
                                var inputValue = inputElement.value;

                                // Quitar comas y espacios para asegurar un número válido
                                var numeroSinComas = inputValue.replace(/,/g, '').replace(/\s/g, '');

                                // Obtener la posición del cursor antes de formatear el número
                                var posicionCursor = inputElement.selectionStart;

                                // Verificar si es un número válido
                                if (!isNaN(numeroSinComas)) {
                                    // Formatear el número con comas cada tres dígitos a la izquierda del punto decimal
                                    var valorFormateado = parseFloat(numeroSinComas).toLocaleString('en-US', {
                                        minimumFractionDigits: 2,
                                        maximumFractionDigits: 2
                                    });

                                    // Actualizar el valor del input con el formato deseado
                                    inputElement.value = valorFormateado;

                                    // Restaurar la posición del cursor después de la formatear el número
                                    inputElement.setSelectionRange(posicionCursor, posicionCursor);
                                }

                                // Actualizar el valor del campo oculto sin comas
                                document.getElementById(id + '_sin_comas').value = numeroSinComas;
                            }
                        </script>

                        <div class="form-group col-md-6">
                            <label for="estado" class="form-label">Estado:</label>
                            <select id="estado" name="estado" id="select-alerts2"
                                class="form-select select-alerts2">
                                <option value="pendiente">Pendiente</option>
                                <option value="completo">Completo</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="descripcion" class="form-label">Descripcion de la compra</label>
                            <textarea class="ckeditor" name="descripcion" id="editor1" rows="10" cols="80"></textarea>
                        </div>

                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <canvas id="grafico-categorias"></canvas>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            var datos_grafico = {!! json_encode($datos_grafico) !!};
            var ctx = document.getElementById('grafico-ingresos').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Object.keys(datos_grafico),
                    datasets: [{
                        label: 'Ingresos por mes',
                        data: Object.values(datos_grafico),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgb(75, 192, 192)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @if (session('eliminar') == 'Ingresos Eliminados, OK')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El registro a sido Eliminado.',
                'success'
            )
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('.feliminar').submit(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Estas seguro de Eliminarlo?',
                    text: "El registro se eliminara definitivamente!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Eliminar!'
                }).then((result) => {
                    if (result.value) {
                        /*Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )*/

                        this.submit();
                    }
                })
            });
        });




        /*   Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
            )
          }
        })*/
    </script>
@endsection
