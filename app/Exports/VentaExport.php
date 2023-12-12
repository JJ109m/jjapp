<?php

namespace App\Exports;

use App\Models\Ventas;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class VentaExport implements FromView
{

    public function view(): View
    {
        $ventas = DB::table('ventas')
            ->leftJoin('venta_detalles', 'ventas.id', '=', 'venta_detalles.ventas_id')
            ->leftJoin('users', 'ventas.usuario_id', '=', 'users.id')
            ->leftJoin('productos', 'venta_detalles.producto_id', '=', 'productos.id')
            ->select('ventas.id', 'ventas.serie','users.name AS usuario', 'ventas.fecha_venta','ventas.nombre_cliente', 'ventas.total_pagar', 'ventas.estado',  'productos.nombre AS producto', 'venta_detalles.stock', 'venta_detalles.precio')
            ->get();

        return view('ventas.exportVenta', [
            'ventas' => $ventas
        ]);
    }
}

