<!DOCTYPE html>
<html lang="en">
<header>
    <img src="{{ $imagePath }}" alt="">
</header>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @font-face {
            font-family: 'Manrope';
            src: url('../fonts/Manrope/Manrope-Light.woff') format('truetype');
        }

        body {
            font-family: 'Manrope', sans-serif;
        }

        h1 {
            font-family: 'Manrope', sans-serif;
            font-weight: bold;
        }

        header img {
            width: 100%;
            height: auto;
        }

        table {
            font-family: Manrope, sans-serif;
            text-align: center !important;
            font-size: 16px;
        }

        table th,
        table td {
            padding: 10px;
        }

        table th {
            background-color: #0055ff;
            color: #fff;
        }

        h3 {
            background-color: #0055ff;
            color: #fff;
            padding: 10px;
            margin-bottom: 30px;
        }

        .text-right {
            text-align: right;
        }

        p,
        h4 {
            font-size: 16px;
        }

        h4 {
            color: #dc3545;
        }

        .badge {
            color: #fff;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 10px;
            text-align: center;
            font-weight: bold;
            display: inline-block;
        }

        .badge-black {
            background-color: #000000;
        }
    </style>
</head>

<body>
    <div class="card-body">
        <div class="container-fluid">
            <h3 class="text-right my-5">Registro de Ingresos</h3>
            <hr>
        </div>
        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
            <div class="table-responsive w-100">
                <table class="table">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>#</th>
                            <th>Serie</th>
                            <th>Proveedor</th>
                            <th>Fecha</th>
                            <th>Cantidad</th>
                            <th>Total</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ingresoPDF as $ingresos)
                            <tr>
                                <td>{{ $ingresos->id }}</td>
                                <td>{{ $ingresos->serie }}</td>
                                <td><span class="badge badge-pill badge-black">{{ $ingresos->proveedor->nombre }}</span>
                                </td>
                                <td>{{ $ingresos->fecha }}</td>
                                <td>{{ $ingresos->cantidad }}</td>
                                <td>${{ number_format($ingresos->precio_base) }}</td>
                                <td><span class="badge badge-pill"
                                        style="background-color: {{ $ingresos->getColorAttribute() }}">{{ $ingresos->estado }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-fluid mt-5 w-100">
            <p class="text-right mb-2">Total Neto es: ${{ $total_formateado }}</p>
            <p class="text-right">Iva (19%) : ${{ $total_iva }}</p>
            <h4 class="text-right mb-5">Total: ${{ $total_con_iva }}</h4>
            <hr>
        </div>
    </div>
</body>

</html>
