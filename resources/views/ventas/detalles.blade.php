@extends('layouts.admin')

@section('content')
<div class="col-lg-12">
    <div class="card px-2">
        <div class="card-body">
            <div class="container-fluid">
              <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#{{ $venta->serie }}</h3>
              <hr>
            </div>
            <div class="container-fluid d-flex justify-content-between">
              <div class="col-lg-3 ps-0">
                <p class="mt-5 mb-2"><b>Cliente</b></p>
                <p>{{ $venta->nombre_cliente }}, <br>{{ $venta->telefono_cliente }},<br>{{ $venta->direccion }}.</p>
              </div>
              <div class="col-lg-3 pr-0">
                <p class="mt-5 mb-2 text-right"><b>Vendedor</b></p>
                <p class="text-right">{{ $venta->usuario->name }},<br> {{ $venta->estado }}.</p>
              </div>
            </div>
            <div class="container-fluid d-flex justify-content-between">
              <div class="col-lg-3 ps-0">
                <p class="mb-0 mt-5">Due Date : {{ $venta->created_at }}</p>
                <p>Invoice Date : {{ $venta->fecha_venta }}</p>
              </div>
            </div>
            <div class="container-fluid mt-5 d-flex justify-content-center w-100">
              <div class="table-responsive w-100">
                  <table class="table">
                    <thead>
                      <tr class="bg-dark text-white">
                          <th>#</th>
                          <th>Description</th>
                          <th class="text-right">Quantity</th>
                          <th class="text-right">Unit cost</th>
                          <th class="text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($detalles as $detalle)
                            <tr>
                                <td>{{ $detalle->id }}</td>
                                <td>{{ $detalle->producto ? $detalle->producto->nombre : 'Sin nombre' }}</td>
                                <td>{{ $detalle->stock }}</td>
                                <td>{{ number_format($detalle->producto->precio, 3) }}</td>
                                <td>{{ number_format($detalle->subtotal, 3) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
            <div class="container-fluid mt-5 w-100">
              <p class="text-right mb-2">Sub - Total amount: ${{ number_format($venta->total_pagar, 3) }}</p>
              <p class="text-right">vat (10%) : ${{ number_format($venta->total_pagar*0.19, 3) }}</p>
              <h4 class="text-right mb-5">Total : ${{ number_format($venta->total_pagar*0.19+$venta->total_pagar, 3) }}</h4>
              <hr>
            </div>
            <div class="container-fluid w-100">
                <a href="{{ route('ventas.imprimir-factura') }}">Imprimir factura</a>
            </div>
        </div>
    </div>
</div>
@endsection
