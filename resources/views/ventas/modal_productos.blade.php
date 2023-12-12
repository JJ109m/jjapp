<div class="modal fade" id="modalProductos" tabindex="-1" role="dialog" aria-labelledby="modalProductosLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProductosLabel">Productos Disponibles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table id="order-listing" class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Variante</th>
                            <th>stock</th>
                            <th>Precio</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            @foreach ($producto->variants as $variante)
                                @if ($variante->stock > 0)
                                    <tr>
                                        <td><span
                                                class="producto-nombre">{{ $variante->producto ? $variante->producto->nombre : 'Sin nombre' }}</span>
                                        </td>
                                        <td><span class="variante-combination">{{ $variante->combination }}</span></td>
                                        <td>{{ $variante->stock }}</td>
                                        <td>{{ number_format($variante->precio) }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-agregar"
                                                data-id="{{ $variante->id }}"
                                                data-nombre="{{ $variante->producto ? $variante->producto->nombre : 'Sin nombre' }}"
                                                data-combination="{{ $variante->combination }}"
                                                data-precio="{{ $variante->precio }}">
                                                Agregar
                                            </button>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>
    .modal .producto-nombre {
        white-space: normal;
        word-wrap: break-word;
        font-weight: bold;
    }
</style>
<script>
    $(document).on('click', '.btn-agregar', function() {
        var id = $(this).data('id');
        var nombre = $(this).data('nombre');
        var combination = $(this).data('combination');
        var precio = $(this).data('precio');
        var stock = 1;
        var descuento = 0;
        var subtotal = stock * precio;

        // Formatear el precio y el subtotal
        precio = parseFloat(precio).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        subtotal = subtotal.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');

        var fila = '<tr>';
        fila += '<td><span class="producto-nombre">' + nombre.substr(0, 10) + '</td>';
        fila += '<td><input type="hidden" name="variante_id[]" value="' + id +
            '"><span class="variante-combination">' + combination + '</span></td>';
        fila += '<td class="precio">' + precio + '</td>';
        fila += '<td><input type="number" name="stock[]" value="' + stock +
            '" min="1" class="form-control input-stock"></td>';
        fila += '<td><input type="number" name="descuento[]" value="' + descuento +
            '" min="0" class="form-control input-descuento"></td>';
        fila += '<td class="text-center subtotal">' + subtotal + '</td>';
        fila +=
            '<td><button type="button" class="btn btn-primary btn-update"><i class="fas fa-repeat"></i></button></td>';
        fila +=
            '<td class="text-center"><button type="button" class="btn btn-danger btn-eliminar"><i class="fas fa-times"></i></button></td>';
        fila += '</tr>';

        $('#tabla-venta tbody').append(fila);
    });


    function agregarProductoTabla(id, nombre, precio, combination, stock) {
        var descuento = 0;

        // Formatear el precio
        precio = parseFloat(precio.replace(/\D/g, '')) / 100; // Suponemos que el precio está en centavos

        // Calcular el subtotal con descuento
        var subtotal = stock * precio * (1 - descuento / 100);

        var fila = '<tr>';
        fila += '<td><input type="hidden" name="producto_id[]" value="' + id + '"><span class="producto-nombre">' +
            nombre + '</span></td>';
        fila += '<td><input type="hidden" name="combination[]" value="' + combination + '">' + combination + '</td>';
        fila += '<td><input type="number" name="stock[]" value="' + stock +
            '" min="1" class="form-control input-stock"></td>';
        fila += '<td><input type="number" name="descuento[]" value="' + descuento +
            '" min="0" class="form-control input-descuento"></td>';
        fila += '<td class="text-center subtotal">' + subtotal.toFixed(2) + '</td>';
        fila +=
            '<td class="text-center"><button type="button" class="btn btn-danger btn-eliminar"><i class="fas fa-times"></i></button></td>';
        fila += '</tr>';

        $('#tabla-venta tbody').append(fila);
        actualizarTotal();
    }


    // Script para eliminar un producto de la tabla de la vista de venta
    $(document).on('click', '.btn-eliminar', function() {
        $(this).closest('tr').remove();

        actualizarTotal();
    });

    $(document).on('click', '.btn-update', function() {
        var stock = $(this).closest('tr').find('input[name="stock[]"]').val();
        var descuento = $(this).closest('tr').find('input[name="descuento[]"]').val();
        var precioText = $(this).closest('tr').find('.precio').text();

        // Convertir el texto del precio a un número
        var precio = parseFloat(precioText.replace(/\D/g, '')) /
            100; // Suponemos que el precio está en centavos

        // Validar que los valores sean numéricos y mayores a cero
        if ($.isNumeric(stock) && $.isNumeric(descuento) && $.isNumeric(precio) && stock > 0 && descuento >=
            0 && precio > 0 && !isNaN(stock * precio)) {
            var subtotal = (stock * precio) - (stock * precio * descuento / 100);
            var subtotalFormateado = subtotal.toLocaleString('es-CO', {
                style: 'currency',
                currency: 'COP'
            });
            $(this).closest('tr').find('.subtotal').text(subtotalFormateado);
        } else {
            // Asignar un valor por defecto si alguno de los valores no es válido
            $(this).closest('tr').find('.subtotal').text('0.00');
        }

        actualizarTotal();
    });

    // Función para actualizar el total de la venta
    function actualizarTotal() {
        var total = 0;
        $('.subtotal').each(function() {
            // Obtener el número del texto de .subtotal
            var subtotal = parseFloat($(this).text().replace(/\D/g, '')) /
            100; // Suponemos que el subtotal está en centavos

            // Validar que el valor sea numérico y mayor a cero
            if ($.isNumeric(subtotal) && subtotal > 0) {
                total += subtotal;
            }
        });

        var totalFormateado = total.toLocaleString('es-CO', {
            style: 'currency',
            currency: 'COP'
        });

        console.log('Total:', total); // Agregar esta línea para depurar
        $('#total').text(totalFormateado);
    }
</script>
