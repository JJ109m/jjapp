@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">{{ __('VIsta del Producto') }}</div>

                <div class="card-body">

                    <div class="card mb-3" style="max-width: 1200px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="/img/post/{{ $blog->imagen }}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h4 class="card-title">{{ $blog->nombre }}</h4>
                              <h5 class="card-title">Descripcion</h5>
                              <p class="card-text">{!! $blog->contenido !!}</p>
                              <h4 class="card-text">${{ $blog->valor }}</h4>
                              <div class="col-md-4">
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
