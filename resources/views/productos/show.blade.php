@extends('layouts.admin')

@section('content')
    <style>
        .ui-pdp-gallery__wrapper {
            display: block;
            margin-bottom: 8px;
        }

        .carousel {
            width: 100%;
            height: 500px;
        }

        .carousel-inner .carousel-item img {
            max-height: 100%;
            max-width: 100%;
        }

        .col-md-4 .row .col-md-9 .col-12 {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .col-md-4 .row .col-md-9 .col-12 img {
            max-width: 100px;
            margin: 5px;
        }
    </style>
    <div class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">{{ __('Vista de Producto N°') }}{{ $producto->id }}</div>
                            <div class="card-body">
                                <div class="card mb-3" style="max-width: 1200px;">
                                    <div class="row g-0">
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="row justify-content-start">
                                                        <div class="col-7 d-flex flex-column">
                                                            <div class="scrollable flex-row flex-wrap" style="max-height: 200px;">
                                                                @foreach ($producto->imagenes as $key => $imagen)
                                                                    <img src="{{ asset('img/post/' . $imagen) }}"
                                                                        class="img-fluid rounded border p-1 {{ $key == 0 ? 'active' : '' }}"
                                                                        data-bs-target="#carouselExampleIndicators"
                                                                        data-bs-slide-to="{{ $key }}"
                                                                        alt="{{ $producto->nombre }}"
                                                                        style="width: 50px; height: 50px;">
                                                                @endforeach
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div id="carouselExampleIndicators" class="carousel slide"
                                                        data-bs-ride="carousel">
                                                        <ol class="carousel-indicators">
                                                            @foreach ($producto->imagenes as $key => $imagen)
                                                                <li data-bs-target="#carouselExampleIndicators"
                                                                    data-bs-slide-to="{{ $key }}"
                                                                    class="{{ $key == 0 ? 'active' : '' }}"></li>
                                                            @endforeach
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            @foreach ($producto->imagenes as $key => $imagen)
                                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                    <img src="{{ asset('img/post/' . $imagen) }}"
                                                                        class="d-block w-100" alt="{{ $producto->nombre }}">
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                                            role="button" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleIndicators"
                                                            role="button" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <<span class="visually-hidden">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="card-body">
                                                <h6>{{ $producto->categoria->name }}</h6>
                                                <h5 class="card-title">{{ $producto->nombre }}</h5>
                                                <h4 class="card-text">${{ number_format($producto['precio'], 3) }}</h4>
                                                <p class="card-text"><small class="text-body-secondary">Last updated
                                                        {{ $producto->created_at->diffForHumans() }}</small></p>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <p class="card-text">{!! $producto->descripcion !!}</p>
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
@endsection
