@extends('layouts.admin')

@section('content')
<h1>Ventas de {{ date('F Y', strtotime($mes)) }}</h1>
<table class="table">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Cliente</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ventas as $venta)
            <tr>
                <td>{{ date('Y-m-d', strtotime($venta->fecha)) }}</td>
                <td>{{ $venta->cliente }}</td>
                <td>${{ $venta->total }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

