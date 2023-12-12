@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="">

                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-lg-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">{{ __('Products') }}
                                                    @can('crear-rol')
                                                        <a class="btn btn-warning" type="submit" style="float: right;"
                                                            data-bs-toggle="modal" data-bs-target="#createRole">Nuevo</a>
                                                    @endcan
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="order-listing" class="table mt-2"
                                                        style="text-align: center;">
                                                        <thead class="table-info">
                                                            <th>Id</th>
                                                            <th>Rol</th>
                                                            <th>Perfil</th>
                                                            <th>Acciones</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($roles as $role)
                                                                <tr>
                                                                    <td>{{ $role->id }}</td>
                                                                    <td>{{ $role->name }}</td>
                                                                    <td>
                                                                        @if ($role->image)
                                                                            @if (Str::endsWith($role->image, '.svg'))
                                                                                <img src="{{ asset('storage/' . str_replace('public/', '', $role->image)) }}"
                                                                                    alt="" width="100"
                                                                                    height="100">
                                                                            @else
                                                                                <img src="{{ asset('storage/' . str_replace('public/', '', $role->image)) }}"
                                                                                    alt="">
                                                                            @endif
                                                                        @else
                                                                            <span>Sin imagen de perfil</span>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        @can('editar-rol')
                                                                            <a class="btn bg-success" style="color: #fff;"
                                                                                href="{{ route('roles.edit', $role->id) }}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-edit nav-icon">
                                                                                    <path
                                                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                                    </path>
                                                                                </svg>
                                                                                Editar
                                                                            </a>
                                                                        @endcan
                                                                        @can('borrar-rol')
                                                                            <form method="POST"
                                                                                action="{{ route('roles.destroy', $role->id) }}"
                                                                                style="display:inline">
                                                                                @method('DELETE')
                                                                                @csrf
                                                                                <button type="submit" class="btn btn-danger">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor" stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-trash-2 nav-icon">
                                                                                        <polyline points="3 6 5 6 21 6">
                                                                                        </polyline>
                                                                                        <path
                                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                                        </path>
                                                                                        <line x1="10" y1="11"
                                                                                            x2="10" y2="17">
                                                                                        </line>
                                                                                        <line x1="14" y1="11"
                                                                                            x2="14" y2="17">
                                                                                        </line>
                                                                                    </svg>
                                                                                    Borrar
                                                                                </button>
                                                                            </form>
                                                                        @endcan

                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title">Grafico de # Producto</h4>
                                                <canvas id="contRol"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">
                                                <table id="categories" class="table">
                                                    <thead class="table-teal">
                                                        <th>ID</th>
                                                        <th>Categoria</th>
                                                        <th>Cantidad de Coleccion</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($numrole as $category)
                                                            <tr>
                                                                <td>{{ $category->id }}</td>
                                                                <td>{{ $category->name }}</td>
                                                                <td>{{ $category->users_count }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    </main>
@endsection

@section('modal')
    <div class="modal fade" id="createRole" tabindex="-1" aria-labelledby="createRoleLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createRoleLabel">Crear Rol</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>
                <div class="modal-body">
                    <form class="row g-3" action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="atbd-upload mb-25">
                                        <div class="atbd-upload-avatar media-import mb-25 dropzone-lg-s" id="dropArea">
                                            <p class="color-light mt-0 fs-15">Drop files here to upload</p>
                                        </div>
                                        <div class="avatar-up">
                                            <input type="file" name="upload-avatar-input" class="upload-avatar-input"
                                                id="fileInput">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Permisos para este Rol:</label>
                                    <br />
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
                                                    <input type="text" id="roleSearch" class="form-control"
                                                        placeholder="Buscar Permiso por Nombre">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    @foreach ($permission as $value)
                                        <label class="roleLabel" style="font-size: 16px;">
                                            <input type="checkbox" name="permission[]" value="{{ $value->id }}"
                                                class="name">
                                            <label>{{ $value->name }}</label>
                                        </label>
                                        <br />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary float-right">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        // Obtén los elementos necesarios
        var dropArea = document.getElementById('dropArea');
        var fileInput = document.getElementById('fileInput');

        // Agrega eventos para la zona de soltar
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        // Resalta la zona de soltar durante el arrastre
        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            dropArea.classList.add('highlight');
        }

        function unhighlight() {
            dropArea.classList.remove('highlight');
        }

        // Manejo de archivos soltados
        dropArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            var dt = e.dataTransfer;
            var files = dt.files;

            handleFiles(files);
        }

        // Manejo de archivos seleccionados
        fileInput.addEventListener('change', function() {
            var files = this.files;

            handleFiles(files);
        });

        // Función para manejar los archivos
        function handleFiles(files) {
            var fileList = document.createElement('ul');

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var listItem = document.createElement('li');
                listItem.textContent = file.name;
                fileList.appendChild(listItem);

                // Previsualización de imágenes
                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var img = document.createElement('img');
                        img.src = e.target.result;
                        img.alt = file.name;
                        img.style.maxWidth = '100%';
                        img.style.height = 'auto';
                        img.classList.add('image'); // Agrega la clase 'image'
                        listItem.appendChild(img);
                    };

                    reader.readAsDataURL(file);
                }
            }

            dropArea.innerHTML = '';
            dropArea.appendChild(fileList);
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#roleSearch').on('input', function() {
                var searchText = $(this).val().toLowerCase();

                $('.roleLabel').each(function() {
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

    <script>
        var numrole = {!! json_encode($numrole) !!};

        var data = {
            labels: numrole.map(post => post.name),
            datasets: [{
                label: '# de comentarios',
                data: numrole.map(post => post.users_count),
                backgroundColor: [
                    'rgba(255, 0, 43, 0.2)',
                    'rgba(255, 175, 0, 0.2)',
                    'rgba(0, 35, 51, 0.2)',
                    'rgba(23, 162, 184, 0.2)',
                    'rgba(0, 85, 255, 0.2)',
                    'rgba(102, 16, 242, 0.2)',
                    'rgba(6, 189, 135, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 0, 43)',
                    'rgb(255, 175, 0)',
                    'rgb(0, 35, 51)',
                    'rgb(23, 162, 184)',
                    'rgb(0, 85, 255)',
                    'rgb(102, 16, 242)',
                    'rgb(6, 189, 135)'
                ],
                borderWidth: 1
            }]
        };

        var options = {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        var ctx = document.getElementById('contRol').getContext('2d');
        var contRol = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
@endsection
@section('css')
    <style>
        .highlight {
            border: 2px dashed #3498db;
            background-color: #f0f8ff;
        }
    </style>
@endsection
