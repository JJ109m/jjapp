@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">{{ __('Ventana de Venta de Productos') }}</div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($products as $product)
                                        @if ($product->disponibilidad)
                                            <div class="col-md-3">
                                                <style>
                                                    .product-image img {
                                                        width: 40%;
                                                        aspect-ratio: 3/2;
                                                        object-fit: contain;
                                                    }
                                                </style>
                                                <div class="card product-image">
                                                    @if (isset($product->imagenes[3]))
                                                        <img src="/img/post/{{ $product->imagenes[2] }}"
                                                            style="width: auto; height: 200px;">
                                                    @elseif (isset($product->imagenes[0]))
                                                        <img src="/img/post/{{ $product->imagenes[0] }}"
                                                            style="width: auto; height: 200px;">
                                                    @else
                                                        <img src="" alt="No hay Imagen" height="90px">
                                                    @endif

                                                    <div class="card-body">
                                                        <h5 class="card-title text-truncate" style="">
                                                            {{ $product->nombre }}</h5>
                                                        <p class="card-text">{{ $product->categoria->name }}</p>
                                                        <h6 class="card-subtitle mb-2 text-muted">Precio:
                                                            ${{ number_format($product->precio) }}</h6>
                                                        <a href="{{ $product['url'] }}" class="btn btn-primary">Comprar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
