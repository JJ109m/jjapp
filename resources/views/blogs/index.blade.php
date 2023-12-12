@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">

                    <a class="btn btn-warning icon" type="submit" style="font-size: 18px;" data-bs-toggle="modal" data-bs-target="#blog">Nuevo</a>

                    <div class="table-responsive">

                        <table id="order-listing" class="table">
                            <thead class="table-secondary">
                                <th style="display: none;">ID</th>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Imagen</th>
                                <th>Stock</th>
                                <th>Valor</th>
                                <th>Creacion</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $producto)
                                <tr>
                                    <td style="display: none;">{{ $producto->id }}</td>
                                    <td><a href="{{ route('blogs.show',$producto->id) }}">{{ $producto->nombre }}</a></td>
                                    <td><img src="/img/post/{{ $producto->imagen }}" height="90px"></td>
                                    <td>{{ $producto->stock }}</td>
                                    <td>{{ $producto->valor }}</td>
                                    <td>{{ $producto->created_at }}</td>

                                    <td>
                                        <a class="btn btn-dark"> Ver</a>
                                        <a class="btn btn-info" data-toggle="modal" href="{{ route('blogs.edit', $producto->id) }}">Editar</a>

                                            <form action="{{ route('blogs.destroy',$producto->id) }}" class="d-inline form-eliminar" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Borrar</button>
                                            </form>

                                    </td>
                                </tr>
                                @include('blogs.modal-update-post')
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ---------------------------------------------------------------------------------- -->

<div class="modal fade" id="blog" tabindex="-1" aria-labelledby="blogLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="blogLabel">Crear Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group col-md-6">
                      <label for="nombre">Título</label>
                      <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Categoria-id">Categoria</label>
                        <select name="Categoria_id" id="Categoria-id"  class="form-select">
                            <option value="">-- Elegir Categoria --</option>
                            @foreach ($categoria as $categorias)

                                <option value="{{ $categorias->id }}">{{ $categorias->name }}</option>

                            @endforeach
                        </select>
                      </div>
                    <div class="form-group col-md-12">
                      <label for="imagen">Imagen</label>
                      <input type="file" name="imagen" class="form-control" accept="image/*">
                    </div>
                  <div class="form-group">
                      <label for="contenido">Contenido</label>
                            <textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80"></textarea>
                  </div>
                    <div class="form-group col-md-6">
                      <label for="valor">Valor</label>
                      <input type="decimal" name="valor" class="form-control">
                   </div>
                    <div class="form-group col-md-6">
                      <label for="stock">Stock</label>
                       <input type="number" name="stock" class="form-control">
                  </div>
                <div class="btn-group">
                      <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>

@endsection
