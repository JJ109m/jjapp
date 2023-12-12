<!DOCTYPE html>
<html>

<head>
    <title>Ventas PDF</title>
    <!-- Agregamos los estilos de Bootstrap -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            text-align: left;
            padding: 8px;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9;
        }

        .table-hover tbody tr:hover {
            background-color: #ddd;
        }


        .venta table {
            border: 1px solid #ccc;
            background-color: #fff;
        }

        .venta td {
            font-size: 14px;
            color: #333;
        }

        .venta th {
            background-color: #7fffd4;
            color: #333;
        }

        .venta tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .venta h2 {
            font-size: 24px;
            background-color: #7fffd4;
            font-family: Arial, sans-serif;
            margin: 20px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .venta td.precio,
        .venta td.subtotal {
            text-align: right;
        }

        .venta td,
        .venta th {
            border: 1px solid #ccc;
            padding: 8px;
        }


        .venta .table thead th {
            background-color: #7fffd4;
            border-color: #66c2a5;
            color: black;
            font-size: 16px;
        }

        .venta {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        .venta .table-striped td.producto,
        .venta .table-striped td.precio,
        .venta .table-striped td.subtotal {
            font-size: 14px;
        }

        .venta h2 {
            margin-bottom: 10px;
            font-size: 24px;
        }

        .venta .table {
            margin-bottom: 0;
        }

        .venta .table thead {
            background-color: #f5f5f5;
        }

        .venta .table th,
        .venta .table td {
            vertical-align: middle !important;
        }
    </style>

</head>

<body>
    <div class="container">
        <h1>Ventas</h1>
        @foreach ($data as $venta)
            <div class="venta">
                <h2>Detalle de venta #{{ $venta['serie'] }}</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Cliente</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $venta['fecha_venta'] }}</td>
                            <td>{{ $venta['cliente'] }}</td>
                            <td>${{ number_format($venta['total'], 2) }}</td>
                            <td>{{ $venta['estado'] }}</td>
                            <td>{{ $venta['usuario'] }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($venta['detalles'] as $detalle)
                            <tr>
                                <td class="producto">{{ $detalle['producto'] }}</td>
                                <td>{{ $detalle['cantidad'] }}</td>
                                <td class="precio">${{ number_format($detalle['precio'], 2) }}</td>
                                <td>{{ $detalle['descuento'] }}%</td>
                                <td class="subtotal">${{ number_format($detalle['subtotal'], 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endforeach
    </div>
    <!-- Agregamos los scripts de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
