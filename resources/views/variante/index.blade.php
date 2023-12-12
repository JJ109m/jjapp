@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card card-secondary">
                            @if (session('stock_alert'))
                                <div class="alert alert-danger">
                                    {{ session('stock_alert') }}
                                </div>
                            @endif
                            <div class="card-header">{{ __('Panel de Variantes') }}</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="order-listing" class="table sortable-table table-striped">
                                        <button id="delete-selected" class="btn btn-danger btn-xs btn-squared"
                                            style="display: none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-trash-2">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path
                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                            Eliminar
                                        </button>
                                        <thead class="table-secondary">
                                            <th style="display: none;">ID</th>
                                            <th> <input type="checkbox" id="select-all"> </th>
                                            <th>Prodcuto</th>
                                            <th>imagen</th>
                                            <th>Conbinacion</th>
                                            <th>precio</th>
                                            <th>Stock</th>
                                            <th>almacen</th>
                                            <th>SKU</th>
                                            <th>Peso</th>
                                            <th>Estado</th>
                                            <th>fecha</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            @foreach ($variante as $variedades)
                                                <tr>
                                                    <td style="display: none;">{{ $variedades->id }}</td>
                                                    <td>
                                                        <!-- Agregado: Checkbox para seleccionar el variedades -->
                                                        <input type="checkbox" name="selected_variants[]"
                                                            value="{{ $variedades->id }}">
                                                    </td>
                                                    <td>
                                                        <h5><span>{{ $variedades->producto ? $variedades->producto->nombre : 'Sin nombre' }}</span>
                                                        </h5>
                                                    </td>
                                                    <td>
                                                        @if ($variedades->imagen)
                                                            <img src="{{ asset($variedades->imagen) }}"
                                                                alt="Imagen de la variante">
                                                        @else
                                                            <img src="{{ asset('backend/image/boxVariant.svg') }}"
                                                                alt="Imagen predeterminada">
                                                        @endif
                                                    </td>
                                                    <td>{{ $variedades->combination }}</td>
                                                    <td>{{ $variedades->precio }}</td>
                                                    <td>{{ $variedades->stock }}</td>
                                                    <td>{{ $variedades->stock2 }}</td>
                                                    <td>{{ $variedades->sku }}</td>
                                                    <td>{{ $variedades->peso }}</td>
                                                    <td>{{ $variedades->estado }}</td>
                                                    <td>{{ $variedades->created_at->format('Y/m/d') }}</td>
                                                    <td>
                                                        <a href="">Orden de compra</a>
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
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#select-all").change(function() {
                // Obtener el estado de selección del checkbox "select-all"
                var selectAllChecked = $(this).is(":checked");

                // Marcar o desmarcar todos los productos individuales
                $("input[name='selected_variants[]']").prop('checked', selectAllChecked);

                // Mostrar u ocultar el botón de "Eliminar" en función de las casillas de verificación
                if (selectAllChecked) {
                    $("#delete-selected").show();
                } else {
                    $("#delete-selected").hide();
                }
            });
            // Manejar el evento de cambio en las casillas de verificación de productos individuales
            $("input[name='selected_variants[]']").change(function() {
                // Verificar si al menos una casilla de verificación de productos está marcada
                var atLeastOneChecked = $("input[name='selected_variants[]']:checked").length > 0;

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
                var selectedVariantIds = [];

                $("input[name='selected_variants[]']:checked").each(function() {
                    selectedVariantIds.push($(this).val());
                });

                if (selectedVariantIds.length > 0) {
                    if (confirm("¿Estás seguro de que deseas eliminar los productos seleccionados?")) {
                        // Realizar una solicitud AJAX para eliminar los productos seleccionados
                        $.ajax({
                            type: "POST",
                            url: "{{ route('variante.bulkDelete') }}",
                            data: {
                                _token: "{{ csrf_token() }}",
                                selectedVariantIds: selectedVariantIds
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
        // Agregado: Función para manejar el clic en el botón de editar
        function editarVariante(variedadId) {
            // Puedes abrir un modal o redirigir a una página de edición con el ID de la variedad
            console.log('Editar variedad con ID:', variedadId);
            // Aquí puedes agregar lógica para abrir un modal o redirigir
        }
    </script>
@endsection
