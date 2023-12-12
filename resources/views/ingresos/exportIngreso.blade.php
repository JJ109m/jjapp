<table>
    <thead>
      <tr class="table-primary">
        <th>Order #</th>
        <th>Proveedor</th>
        <th>Fecha Envio</th>
        <th>Cantidad</th>
        <th>Precio Base</th>
        <th>Compra Total</th>
        <th>Estado</th>
    </thead>
    <tbody>
        @foreach ($ingresos as $producto)
        <tr>
            <td>{{ $producto->serie }}</td>
            <td><span class="badge badge-dark badge-pill">{{ $producto->proveedor->nombre }}</span></td>
            <td>{{ $producto->fecha }}</td>
            <td>{{ $producto->cantidad }}</td>
            <td>{{ $producto->precio_base }}</td>
            <td>{{ $producto->precio_total }}</td>
            <td><span class="badge badge-pill" style="background-color: {{ $producto->getColorAttribute() }}">{{ $producto->estado }}</span></td>
        </tr>
        @endforeach
    </tbody>
</table>
