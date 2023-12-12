@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                    @if ($errors->any())
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                    @endif


                    <form action="{{ route('blogs.update',$blog->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="nombre">Título</label>
                              <input type="text" name="nombre" class="form-control" value="{{ $blog->nombre }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="category-id">Categoría</label>
                        <select name="category_id" id="category-id" class="form-control">
                            <option value="">-- Elegir categoría --</option>
                            @foreach ($categoria as $category)
                                <option value="{{$category->id}}">  {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                            <div class="form-group col-md-6">
                              <label for="imagen">Imagen</label>
                              <input type="file" name="imagen" class="form-control" accept="image/*">
                              <small>Imagen actual</small>
                              <img src="/img/post/{{ $blog->imagen }}" alt="">
                          </div>
                          </div>
                          <div class="form-group">
                              <label for="contenido">Contenido</label>
                                    <textarea class="ckeditor" name="contenido" id="editor1" rows="10" cols="80">{{ $blog->contenido }}</textarea>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="valor">Valor</label>
                              <input type="decimal" name="valor" class="form-control" value="{{ $blog->valor }}">
                           </div>
                            <div class="form-group col-md-4">
                              <label for="valor">Stock</label>
                               <input type="number" name="stock" class="form-control" value="{{ $blog->stock }}">
                          </div>
                          </div>
                          <div class="btn-group">
                              <button type="submit" class="btn btn-primary">Guardar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
