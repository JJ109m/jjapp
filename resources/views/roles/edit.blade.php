@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">{{ __('Editar Rol') }}</div>

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

                                <form method="POST" action="{{ route('roles.update', $role->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="">Nombre del Rol:</label>
                                                <input type="text" name="name" class="form-control"
                                                    value="{{ $role->name }}">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="image">Imagen de perfil:</label>
                                                <input type="file" name="image" id="image">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label for="">Permisos para este Rol:</label>
                                                <br>
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label>
                                                                <input type="checkbox" id="selectAll"> Seleccionar todo
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="col-sm-12">
                                                                <input type="text" id="permissionSearch"
                                                                    class="form-control"
                                                                    placeholder="Buscar Permiso por Nombre">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                @foreach ($permission as $value)
                                                    <label class="permissionLabel">
                                                        <input type="checkbox" name="permission[]"
                                                            value="{{ $value->id }}"
                                                            {{ in_array($value->id, $rolePermissions) ? 'checked' : '' }}>
                                                        {{ $value->name }}
                                                    </label>
                                                    <br>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-group">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#permissionSearch').on('input', function() {
                var searchText = $(this).val().toLowerCase();

                $('.permissionLabel').each(function() {
                    var label = $(this).text().toLowerCase();
                    var labelContainsSearchText = label.includes(searchText);

                    if (labelContainsSearchText) {
                        $(this).show();
                        $(this).next('br').show(); // Muestra la etiqueta <br />
                    } else {
                        $(this).hide();
                        $(this).next('br').hide(); // Oculta la etiqueta <br />
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtén el checkbox "Seleccionar todo"
            var selectAllCheckbox = document.getElementById('selectAll');

            // Obtén todos los checkboxes de la lista
            var permissionCheckboxes = document.querySelectorAll('input[name="permission[]"]');

            // Agrega un evento al checkbox "Seleccionar todo"
            selectAllCheckbox.addEventListener('change', function() {
                // Itera sobre todos los checkboxes y establece su estado según el estado de "Seleccionar todo"
                permissionCheckboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            });

            // Agrega eventos a los checkboxes individuales para actualizar el estado de "Seleccionar todo"
            permissionCheckboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    // Si todos los checkboxes están marcados, marca el checkbox "Seleccionar todo"; de lo contrario, desmárcalo
                    selectAllCheckbox.checked = Array.from(permissionCheckboxes).every(function(
                        checkbox) {
                        return checkbox.checked;
                    });
                });
            });
        });
    </script>
@endsection
