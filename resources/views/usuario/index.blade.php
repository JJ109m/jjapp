@extends('layouts.admin')

@section('content')

    <main class="main-content">
        <div class="contents">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 ">
                        <div class="card">
                            <div class="card-header">{{ __('Panel de Usuarios') }}</div>
                            <div class="card-body">

                                @can('crear-user')
                                    <a class="btn btn-warning" type="submit" style="font-size: 18px;" data-bs-toggle="modal"
                                        data-bs-target="#createUser">Nuevo</a>
                                @endcan
                                <br>
                                <br>
                                <div class="table-responsive">
                                    <!-- Add this div for responsiveness -->
                                    <table id="order-listing" class="table">
                                        <thead class="table-primary">
                                            <th style="display: none;">ID</th>
                                            <th>Nombre</th>
                                            <th>E-mail</th>
                                            <th>Rol</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($usuarios as $usuario)
                                                <tr>
                                                    <td style="display: none;">{{ $usuario->id }}</td>
                                                    <td><span>{{ $usuario->name }}</span></td>
                                                    <td>{{ $usuario->email }}</td>
                                                    <td>
                                                        @if (!empty($usuario->getRoleNames()))
                                                            @foreach ($usuario->getRoleNames() as $rolNombre)
                                                                <div class="rol-container">
                                                                    <h5><span
                                                                            class="badge badge-dark badge-pill">{{ $rolNombre }}</span>
                                                                    </h5>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td><span class="badge badge-pill"
                                                            style="background-color: {{ $usuario->getColorAttribute() }}">{{ $usuario->tipo_estado }}</span>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-primary btn-icon btn-squared btn-xs"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ShowDatosModal{{ $usuario->id }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-eye nav-icon">
                                                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                </path>
                                                                <circle cx="12" cy="12" r="3"></circle>
                                                            </svg>
                                                        </button>

                                                        <!-- ---------------------------------------------- Inicio del Modal Show ---------------------------------------------- -->
                                                        <div class="modal fade" id="ShowDatosModal{{ $usuario->id }}"
                                                            tabindex="-1"
                                                            aria-labelledby="ShowProfileModalLabel{{ $usuario->id }}"
                                                            aria-hidden="true">
                                                            <div class="modal-dialog modal-xl">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="ShowProfileModalLabel{{ $usuario->id }}">
                                                                            Mirar
                                                                            perfil
                                                                        </h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-4"
                                                                                style="display: flex; justify-content: center; align-items: center;">
                                                                                <div class="contenedor-imagen">
                                                                                    @if ($usuario->profile_image)
                                                                                        <img style=" width: 100%;height: 100%;"
                                                                                            class="img-lg mb-3"
                                                                                            src="{{ asset('storage/' . str_replace('public/', '', $usuario->profile_image)) }}"
                                                                                            alt="profile">
                                                                                    @else
                                                                                        <span>No hay imagen de perfil</span>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                                <form class="row g-3 needs-validation"
                                                                                    novalidate>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Nombre</h5>
                                                                                        <p>{{ $usuario->name }}</p>
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Correo Empresarial</h5>
                                                                                        <p>{{ $usuario->email }}</p>
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Documento</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->identificacion->nombre }}
                                                                                                -
                                                                                                {{ $usuario->infoUser->documento }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>

                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Edad</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->edad }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>


                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Correo Personal</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->correo_personal }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Sexo</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->sexo }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Estado Civil</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->estado_civil }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Estado</h5>
                                                                                        <p>{{ $usuario->tipo_estado }}</p>
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Ciudad</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->departamento->nombre }}
                                                                                                -
                                                                                                {{ $usuario->infoUser->municipio->nombre }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Direccion</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->direccion_residencia }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>RH</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->rh }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                    <div class="col-md-3 position-relative">
                                                                                        <h5>Telefono</h5>
                                                                                        @if ($usuario->infoUser)
                                                                                            <p>{{ $usuario->infoUser->telefono }}
                                                                                            </p>
                                                                                        @endif
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- ---------------------------------------------- Cierre del Modal Show ---------------------------------------------- -->
                                                        <a class="btn btn-success btn-icon btn-squared btn-xs"
                                                            href="{{ route('usuarios.edit', $usuario->id) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit nav-icon">
                                                                <path
                                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                </path>
                                                                <path
                                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                </path>
                                                            </svg>
                                                        </a>

                                                        @can('borrar-user')
                                                            <form action="{{ route('usuarios.destroy', $usuario->id) }}"
                                                                class="d-inline formulario-eliminar" method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger btn-icon btn-squared btn-xs">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash-2 nav-icon">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                        <line x1="10" y1="11" x2="10"
                                                                            y2="17"></line>
                                                                        <line x1="14" y1="11" x2="14"
                                                                            y2="17"></line>
                                                                    </svg>
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
            </div>
        </div>
    </main>

    <!-- ---------------------------------------------------------------------------------- -->

    <div class="modal fade" id="createUser" tabindex="-1" aria-labelledby="createUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createUserLabel">Crear Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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

                    <form action="{{ route('usuarios.store') }}" method="POST" enctype="multipart/form-data">
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
                                    <label for="profile_image">Imagen</label>
                                    <input type="file" name="profile_image" class="form-control-file">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Roles</label>
                                    <select name="roles[]" class="select-alerts2" id="select-alerts2">
                                        @foreach ($roles as $key => $value)
                                            <option value="{{ $key }}">{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar Password</label>
                                    <input type="password" name="confirm-password" class="form-control">
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>

                            <div class="form-group">
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('modal')
@endsection
