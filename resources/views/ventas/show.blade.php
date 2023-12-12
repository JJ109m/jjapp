@extends('layouts.admin')

@section('content')
    <style>
        .factura-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .factura-container td.nombre-producto {
            white-space: normal;
            word-wrap: break-word;
            font-weight: bold;
            /* Add font-weight:bold; to make the text bold */
        }
    </style>

    <style>
        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-xs-1,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12 {
            float: left;
        }

        .col-xs-6 {
            width: 50%;
        }

        .text-right {
            text-align: right;
        }

        .panel {
            margin-bottom: 20px;
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 4px;
            -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .panel-body {
            padding: 15px;
        }

        .panel-heading {
            padding: 10px 15px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel-heading>.dropdown .dropdown-toggle {
            color: inherit;
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit;
        }

        .panel-title>a,
        .panel-title>small,
        .panel-title>.small,
        .panel-title>small>a,
        .panel-title>.small>a {
            color: inherit;
        }

        .panel-footer {
            padding: 10px 15px;
            background-color: #f5f5f5;
            border-top: 1px solid #ddd;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .panel>.list-group,
        .panel>.panel-collapse>.list-group {
            margin-bottom: 0;
        }

        .panel>.list-group .list-group-item,
        .panel>.panel-collapse>.list-group .list-group-item {
            border-width: 1px 0;
            border-radius: 0;
        }

        .panel>.list-group:first-child .list-group-item:first-child,
        .panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
            border-top: 0;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel>.list-group:last-child .list-group-item:last-child,
        .panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
            border-bottom: 0;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .panel-heading+.list-group .list-group-item:first-child {
            border-top-width: 0;
        }

        .list-group+.panel-footer {
            border-top-width: 0;
        }

        .panel>.table,
        .panel>.table-responsive>.table,
        .panel>.panel-collapse>.table {
            margin-bottom: 0;
        }

        .panel>.table caption,
        .panel>.table-responsive>.table caption,
        .panel>.panel-collapse>.table caption {
            padding-right: 15px;
            padding-left: 15px;
        }

        .panel>.table:first-child,
        .panel>.table-responsive:first-child>.table:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel>.table:first-child>thead:first-child>tr:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child {
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
        .panel>.table:first-child>thead:first-child>tr:first-child th:first-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child {
            border-top-left-radius: 3px;
        }

        .panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
        .panel>.table:first-child>thead:first-child>tr:first-child th:last-child,
        .panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
        .panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
        .panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child {
            border-top-right-radius: 3px;
        }

        .panel>.table:last-child,
        .panel>.table-responsive:last-child>.table:last-child {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .panel>.table:last-child>tbody:last-child>tr:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }

        .panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
            border-bottom-left-radius: 3px;
        }

        .panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
        .panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
        .panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
        .panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
            border-bottom-right-radius: 3px;
        }

        .panel>.panel-body+.table,
        .panel>.panel-body+.table-responsive,
        .panel>.table+.panel-body,
        .panel>.table-responsive+.panel-body {
            border-top: 1px solid #ddd;
        }

        .panel>.table>tbody:first-child>tr:first-child th,
        .panel>.table>tbody:first-child>tr:first-child td {
            border-top: 0;
        }

        .panel>.table-bordered,
        .panel>.table-responsive>.table-bordered {
            border: 0;
        }

        .panel>.table-bordered>thead>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>thead>tr>th:first-child,
        .panel>.table-bordered>tbody>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
        .panel>.table-bordered>tfoot>tr>th:first-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
        .panel>.table-bordered>thead>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
        .panel>.table-bordered>tbody>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
        .panel>.table-bordered>tfoot>tr>td:first-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child {
            border-left: 0;
        }

        .panel>.table-bordered>thead>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>thead>tr>th:last-child,
        .panel>.table-bordered>tbody>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
        .panel>.table-bordered>tfoot>tr>th:last-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
        .panel>.table-bordered>thead>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
        .panel>.table-bordered>tbody>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
        .panel>.table-bordered>tfoot>tr>td:last-child,
        .panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child {
            border-right: 0;
        }

        .panel>.table-bordered>thead>tr:first-child>td,
        .panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
        .panel>.table-bordered>tbody>tr:first-child>td,
        .panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
        .panel>.table-bordered>thead>tr:first-child>th,
        .panel>.table-responsive>.table-bordered>thead>tr:first-child>th,
        .panel>.table-bordered>tbody>tr:first-child>th,
        .panel>.table-responsive>.table-bordered>tbody>tr:first-child>th {
            border-bottom: 0;
        }

        .panel>.table-bordered>tbody>tr:last-child>td,
        .panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
        .panel>.table-bordered>tfoot>tr:last-child>td,
        .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
        .panel>.table-bordered>tbody>tr:last-child>th,
        .panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
        .panel>.table-bordered>tfoot>tr:last-child>th,
        .panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
            border-bottom: 0;
        }

        .panel>.table-responsive {
            margin-bottom: 0;
            border: 0;
        }

        .panel-group {
            margin-bottom: 20px;
        }

        .panel-group .panel {
            margin-bottom: 0;
            border-radius: 4px;
        }

        .panel-group .panel+.panel {
            margin-top: 5px;
        }

        .panel-group .panel-heading {
            border-bottom: 0;
        }

        .panel-group .panel-heading+.panel-collapse>.panel-body,
        .panel-group .panel-heading+.panel-collapse>.list-group {
            border-top: 1px solid #ddd;
        }

        .panel-group .panel-footer {
            border-top: 0;
        }

        .panel-group .panel-footer+.panel-collapse .panel-body {
            border-bottom: 1px solid #ddd;
        }

        .panel-default {
            border-color: #ddd;
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: #f5f5f5;
            border-color: #ddd;
        }

        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ddd;
        }

        .panel-default>.panel-heading .badge {
            color: #f5f5f5;
            background-color: #333;
        }

        .panel-default>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #ddd;
        }

        .panel-primary {
            border-color: #337ab7;
        }

        .panel-primary>.panel-heading {
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7;
        }

        .panel-primary>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #337ab7;
        }

        .panel-primary>.panel-heading .badge {
            color: #337ab7;
            background-color: #fff;
        }

        .panel-primary>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #337ab7;
        }

        .panel-success {
            border-color: #d6e9c6;
        }

        .panel-success>.panel-heading {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .panel-success>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #d6e9c6;
        }

        .panel-success>.panel-heading .badge {
            color: #dff0d8;
            background-color: #3c763d;
        }

        .panel-success>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #d6e9c6;
        }

        .panel-info {
            border-color: #bce8f1;
        }

        .panel-info>.panel-heading {
            color: #31708f;
            background-color: #d9edf7;
            border-color: #bce8f1;
        }

        .panel-info>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #bce8f1;
        }

        .panel-info>.panel-heading .badge {
            color: #d9edf7;
            background-color: #31708f;
        }

        .panel-info>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #bce8f1;
        }

        .panel-warning {
            border-color: #faebcc;
        }

        .panel-warning>.panel-heading {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc;
        }

        .panel-warning>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #faebcc;
        }

        .panel-warning>.panel-heading .badge {
            color: #fcf8e3;
            background-color: #8a6d3b;
        }

        .panel-warning>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #faebcc;
        }

        .panel-danger {
            border-color: #ebccd1;
        }

        .panel-danger>.panel-heading {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

        .panel-danger>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ebccd1;
        }

        .panel-danger>.panel-heading .badge {
            color: #f2dede;
            background-color: #a94442;
        }

        .panel-danger>.panel-footer+.panel-collapse>.panel-body {
            border-bottom-color: #ebccd1;
        }

        .embed-responsive {
            position: relative;
            display: block;
            height: 0;
            padding: 0;
            overflow: hidden;
        }

        .col-xs-4 {
            width: 33.33333333%;
        }
    </style>

    <main class="main-content">
        <div class="contents">
            <div class="col-lg-12">
                <div class="card px-2">
                    <div class="card-body">
                        <div id="print-container" class="factura-container">
                            <meta charset="UTF-8">
                            <div class="container">
                                <div class="row">

                                    <div class="col-xs-6">
                                        <h1><a><img alt="" src="{{ asset('images/logo1.png') }}" height="150px" />
                                                JJotaStore </a></h1>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4>NIT :
                                                    <a>N&uacute;mero de NIT</a>
                                                </h4>
                                                <h4>AUTORIZACI&Oacute;N :
                                                    <a style="font-weight: bold;">N°. {{ $venta->id }}</a>
                                                </h4>
                                            </div>
                                            <div class="panel-body">
                                                <h4>FACTURA :
                                                    <a style="font-weight: bold;">{{ $venta->serie }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />


                                    <h1 style="text-align: center;">FACTURA</h1>

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4>{{ $venta->direccion }},
                                                        <a>{{ $venta->created_at->format('d \d\e F \d\e Y') }}</a>

                                                    </h4>
                                                </div>
                                                <div class="panel-body">


                                                    <h4>Vendedor :
                                                        <a>{{ $venta->usuario->name }}</a>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Estado :
                                                        <a
                                                            style="color:
                                                            @if ($venta->estado == 'borrador') black;
                                                            @elseif ($venta->estado == 'pendiente')
                                                                orange;
                                                            @elseif ($venta->estado == 'completo')
                                                                green;
                                                            @elseif ($venta->estado == 'cancelado')
                                                                red; @endif
                                                        ">{{ $venta->estado }}
                                                        </a>
                                                    </h4>
                                                    <h4>Comprador :
                                                        <a>{{ $venta->nombre_cliente }} - +57
                                                            {{ $venta->telefono_cliente }}</a>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        NIT/CI :
                                                        <a>NIT/CI</a>
                                                    </h4>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <pre></pre>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">
                                                    <h4>Cantidad</h4>
                                                </th>
                                                <th style="text-align: center;">
                                                    <h4>Concepto</h4>
                                                </th>
                                                <th style="text-align: center;">
                                                    <h4>Precio unitario</h4>
                                                </th>
                                                <th style="text-align: center;">
                                                    <h4>Total</h4>
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($detalles as $detalle)
                                                <tr>
                                                    <td>{{ $detalle->stock }}</td>
                                                    <td class="nombre-producto"><a> {{ $detalle->producto ? $detalle->producto->nombre : 'Sin nombre' }} </a>
                                                    </td>
                                                    <td class="text-right">${{ number_format($detalle['precio'], 3) }}</td>
                                                    <td class="text-right ">
                                                        ${{ number_format($detalle->stock * $detalle['precio'], 3) }}</td>

                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="3" style="text-align: right;">Sub - Total amount:</td>
                                                <td style="text-align: right;">
                                                    <a>
                                                        <?php $total = 0; ?>
                                                        @foreach ($detalles as $detalle)
                                                            <?php $total += $detalle->stock * $detalle->precio; ?>
                                                        @endforeach
                                                        ${{ number_format($total, 3) }}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="text-align: right;">vat (19%) :</td>
                                                <td style="text-align: right;">
                                                    <a>
                                                        <?php $iva = 0; ?>
                                                        @foreach ($detalles as $detalle)
                                                            <?php $iva += $detalle->stock * $detalle->precio * 0.19; ?>
                                                        @endforeach
                                                        ${{ number_format($iva, 3) }}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" style="text-align: right;">Total :</td>
                                                <td style="text-align: right;">
                                                    <a>
                                                        <?php
                                                        $total = 0;
                                                        $iva = 0;
                                                        $total_iva = 0;
                                                        ?>
                                                        @foreach ($detalles as $detalle)
                                                            <?php
                                                            $total += $detalle->stock * $detalle->precio;
                                                            $iva += $detalle->stock * $detalle->precio * 0.19;
                                                            ?>
                                                        @endforeach
                                                        <?php $total_iva = $total + $iva; ?>
                                                        ${{ number_format($total_iva, 3) }}
                                                    </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <pre></pre>
                                </div>
                            </div>

                        </div>
                        <div class="container-fluid w-100">
                            <a class="btn btn-primary float-right mt-4 ms-2" onclick="printContent()"><i
                                    class="ti-printer me-1"></i>Print Invoice</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('js')
    <script>
        function printContent() {
            var content = document.getElementById("print-container").innerHTML;
            var printWindow = window.open('', '_blank', 'height=500,width=800', false);
            printWindow.document.write('<html><head><title>JJotaStore</title>');
            printWindow.document.write('<style>');
            printWindow.document.write('body {');
            printWindow.document.write('    font-family: Arial, sans-serif;');
            printWindow.document.write('    padding: 10px;');
            printWindow.document.write('}');
            printWindow.document.write('h1, h3 {');
            printWindow.document.write('    text-align: center;');
            printWindow.document.write('    margin-top: 20px;');
            printWindow.document.write('}');
            printWindow.document.write('h1 {');
            printWindow.document.write('    font-size: 28px;');
            printWindow.document.write('    color: #333;');
            printWindow.document.write('}');
            printWindow.document.write('h3 {');
            printWindow.document.write('    font-size: 20px;');
            printWindow.document.write('    color: #666;');
            printWindow.document.write('}');
            printWindow.document.write('hr {');
            printWindow.document.write('    border-top: 1px solid #ddd;');
            printWindow.document.write('    margin: 20px 0;');
            printWindow.document.write('}');
            printWindow.document.write('table {');
            printWindow.document.write('    width: 100%;');
            printWindow.document.write('    border-collapse: collapse;');
            printWindow.document.write('    margin-bottom: 20px;');
            printWindow.document.write('    text-align: center;');
            printWindow.document.write('}');
            printWindow.document.write('th, td {');
            printWindow.document.write('    border: 1px solid #ddd;');
            printWindow.document.write('    padding: 10px;');
            printWindow.document.write('}');
            printWindow.document.write('th {');
            printWindow.document.write('    background-color: #333;');
            printWindow.document.write('    color: #fff;');
            printWindow.document.write('    text-align: center;');
            printWindow.document.write('    font-weight: bold;');
            printWindow.document.write('}');
            printWindow.document.write('tr:nth-child(even) {');
            printWindow.document.write('    background-color: #f2f2f2;');
            printWindow.document.write('}');
            printWindow.document.write('.text-right {');
            printWindow.document.write('    text-align: right;');
            printWindow.document.write('}');
            printWindow.document.write('.mt-5 {');
            printWindow.document.write('    margin-top: 5px;');
            printWindow.document.write('}');
            printWindow.document.write('.mb-2 {');
            printWindow.document.write('    margin-bottom: 2px;');
            printWindow.document.write('}');
            printWindow.document.write('.mb-5 {');
            printWindow.document.write('    margin-bottom: 5px;');
            printWindow.document.write('}');
            printWindow.document.write('.float-right {');
            printWindow.document.write('    float: right;');
            printWindow.document.write('}');
            printWindow.document.write('.text-uppercase {');
            printWindow.document.write('    text-transform: uppercase;');
            printWindow.document.write('}');
            printWindow.document.write('.factura-container table {');
            printWindow.document.write('    table-layout: fixed;');
            printWindow.document.write('}');
            printWindow.document.write('.factura-container td.nombre-producto {');
            printWindow.document.write('    white-space: normal;');
            printWindow.document.write('    word-wrap: break-word;');
            printWindow.document.write('    font-weight: bold;');
            printWindow.document.write('}');
            printWindow.document.write('.factura-container tr.bg-dark {');
            printWindow.document.write('    background-color: #333;');
            printWindow.document.write('    color: #fff;');
            printWindow.document.write('    font-weight: bold;');
            printWindow.document.write('}');
            printWindow.document.write('@media print { body { overflow: visible !important; } }');
            printWindow.document.write('</style>');
            printWindow.document.write('</head><body>');
            printWindow.document.write(content);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.onload = function() {
                printWindow.print();
                printWindow.close();
            };
        }
        printWindow.onload = function() {
            printWindow.document.write('<html><head><title>Imprimiendo...</title></head><body>');
            printWindow.document.write('<p>Por favor, espere mientras se genera la factura...</p>');
            printWindow.document.write('</body></html>');
            printWindow.print();
            printWindow.close();
        };
    </script>
@endsection
