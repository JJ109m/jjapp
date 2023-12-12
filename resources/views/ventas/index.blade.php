@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="content-wrapper">

                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card card-purpel">
                            <div class="card-header">{{ __('Panel de Venta') }}
                                <div class="btn-group" role="group" style="float: right;" aria-label="Basic example">
                                    <a type="submit" href="{{ route('ventas.create') }}" class="btn btn-info">
                                        <i class="mdi mdi-cart-plus"></i>
                                        Agregar
                                    </a>
                                </div>

                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-4">
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
                                                    href="{{ route('exportarVenta') }}">
                                                    <i class="mdi mdi-file-excel feather feather-layers btn-group"></i>
                                                    Excel</a>
                                                <a type="submit"
                                                    class="btn btn-danger btn-default btn-squared btn-transparent-danger "
                                                    href="{{ route('exportPDF') }}">
                                                    <i class="mdi mdi-file-pdf feather feather-layers btn-group"></i>
                                                    PDF
                                                </a>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="total_suma">
                                                <span>$/. {{ $total_ventas }}</span>
                                            </div>
                                        </div>
                                        <div class="mb-4">
                                            <div class="table-responsive">
                                                <table id="order-listing" class="table">
                                                    <thead class="table-purple">
                                                        <tr>
                                                            <th scope="col">Opciones</th>
                                                            <th scope="col">Serie</th>
                                                            <th scope="col">Fecha</th>
                                                            <th scope="col">Cliente</th>
                                                            <th scope="col">Usuario</th>
                                                            <th scope="col">Telefono</th>
                                                            <th scope="col">Direccion</th>
                                                            <th scope="col">Total Venta</th>
                                                            <th scope="col">Estado</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($venta as $registro)
                                                            <tr>
                                                                <td scope="row">
                                                                    <div class="btn-group" role="group">
                                                                        <a href="{{ route('ventas.show', $registro->id) }}"
                                                                            type="submit" class="btn btn-secondary">
                                                                            <i class="mdi mdi-book-minus"></i>
                                                                        </a>
                                                                        <button type="button" class="btn btn-primary">
                                                                            <i class="mdi mdi-autorenew"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $registro->serie }}</td>
                                                                <td>{{ $registro->fecha_venta }}</td>
                                                                <td>{{ $registro->nombre_cliente }}</td>
                                                                <td><span
                                                                        class="bg-opacity-dark  color-dark rounded-pill userDatatable-content-status">{{ $registro->usuario->name }}</span>
                                                                </td>
                                                                <td>{{ $registro->telefono_cliente }}</td>
                                                                <td>{{ $registro->direccion }}</td>
                                                                <td>{{ number_format($registro->total_pagar) }}</td>
                                                                <td><span class="badge rounded-pill color-white"
                                                                        style="background-color: {{ $registro->getColorAttribute() }}">{{ $registro->estado }}</span>
                                                                </td>

                                                            </tr>
                                                        @endforeach

                                                    </tbody>
                                                    <tfoot class="table-purple">
                                                        <tr>
                                                            <th scope="col">Opciones</th>
                                                            <th scope="col">Serie</th>
                                                            <th scope="col">Fecha</th>
                                                            <th scope="col">Cliente</th>
                                                            <th scope="col">Usuario</th>
                                                            <th scope="col">Telefono</th>
                                                            <th scope="col">Direccion</th>
                                                            <th scope="col">Total Venta</th>
                                                            <th scope="col">Estado</th>
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
