@extends('layouts.admin')

@section('content')
<div class="row">
    @foreach($ventasPorMes as $ventaPorMes)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">
                    {{ date('F Y', strtotime($ventaPorMes->mes)) }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">${{ $ventaPorMes->total }}</h5>
                    <a href="{{ route('ventas.detalle', ['mes' => $ventaPorMes->mes]) }}" class="btn btn-primary">Ver detalle</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
