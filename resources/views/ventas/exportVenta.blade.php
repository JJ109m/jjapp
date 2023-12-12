<table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Serie</th>
        <th>Fecha de Venta</th>
        <th>Nombre del Cliente</th>
        <th>Total a Pagar</th>
        <th>Estado</th>
        <th>ID del Producto</th>
        <th>Stock</th>
        <th>Precio</th>
        <th>Usuario</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ventas as $venta)
      <tr>
        <td>{{ $venta->id }}</td>
        <td>{{ $venta->serie }}</td>
        <td>{{ $venta->fecha_venta }}</td>
        <td>{{ $venta->nombre_cliente }}</td>
        <td>{{ $venta->total_pagar }}</td>
        <td>{{ $venta->estado }}</td>
        <td>{{ $venta->producto }}</td>
        <td>{{ $venta->stock }}</td>
        <td>{{ $venta->precio }}</td>
        <td>{{ $venta->usuario }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

