<div class="modal fade" id="modal-update-post-{{$producto->id}}">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Actualizar Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <form action="{{ route('admin.posts.update',  $producto->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Post</label>
                        <input type="text" name="title" class="form-control" id="post" value="{{ $producto->title}}">
                    </div>
                    <div class="form-group">
                        <label for="category-id">Categoría</label>
                        <select name="category_id" id="category-id" class="form-control">
                            <option value="">-- Elegir categoría --</option>
                            @foreach ($categoria as $category)
                                <option value="{{$category->id}}"  {{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{$producto->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="author">Autor</label>
                        <input type="text" name="author" class="form-control" id="author" value="{{$producto->author}}">
                    </div>
                    <div class="form-group">
                        <label for="featured">Imagen principal</label>
                        <input type="file" name="featured" class="form-control" id="featured">
                        <small>imagen actual</small> <br>
                        <img src="{{asset($producto->featured)}}" width="80px" class="img-fluid img-thumbnail" alt="{{$producto->featured}}">
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
