@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">{{ __('Tipo de Identificacion') }}
                <a class="btn btn-warning icon" type="submit" style="float: right;" data-bs-toggle="modal" data-bs-target="#crearId">Nuevo</a>
            </h3>
          </div>
        </div>
      </div>
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
                <table id="order-listing" class="table">
                    <thead class="table-secondary">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Creacion</th>
                            <th>Actualizacion</th>
                            <td>Opciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipo_id as $identify)

                            <tr>
                                <td>{{ $identify->id }}</td>
                                <td>{{ $identify->nombre }}</td>
                                <td>{{ $identify->created_at }}</td>
                                <td>{{ $identify->updated_at }}</td>
                                <td>
                                    <button type="button" class="btn btn-secondary">
                                        Editar
                                    </button>
                                    <form action="{{ route('identificaciones.destroy',$identify->id) }}" class="d-inline feliminar" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger"><i class="bx bx-trash me-1"></i> Delete</button>
                                    </form>
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
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <table id="categories" class="table">
                    <thead class="table-danger">
                        <th>Categoria</th>
                        <th>Cantidad de Coleccion</th>
                    </thead>
                    <tbody>
                        @foreach ($numclient as $cliente )
                        <tr>
                            <td>{{ $cliente->nombre }}</td>
                            <td align='center'>{{ $cliente->clientes_count }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection

@section('js')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@if (session('eliminar') == 'Ingresos Eliminados, OK')

<script>
    Swal.fire(
            '¡Eliminado!',
            'El registro a sido Eliminado.',
            'success'
            )
</script>

@endif

<script>

$(document).ready(function() {
    $('.feliminar').submit(function(e){
        e.preventDefault();
        Swal.fire({
        title: 'Estas seguro de Eliminarlo?',
        text: "El registro se eliminara definitivamente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
        if (result.value) {
            /*Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )*/

            this.submit();
        }
        })
    });
});

</script>

<script>
    var numclient = {!! json_encode($numclient) !!};

    var data = {
        labels: numclient.map(post => post.nombre),
        datasets: [{
            label: '# de comentarios',
            data: numclient.map(post => post.clientes_count),
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(201, 203, 207, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 159, 64)',
                'rgb(255, 205, 86)',
                'rgb(75, 192, 192)',
                'rgb(54, 162, 235)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
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

    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: data,
        options: options
    });
</script>
@endsection

@section('modal')
<div class="modal fade" id="crearId" tabindex="-1" aria-labelledby="crearIdLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="crearIdLabel">Crear Producto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="row g-3" action="{{ route('identificaciones.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Tipo de Identificacion</label>
                        <input type="text" name="nombre" class="form-control" id="identificacion">
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
@endsection
