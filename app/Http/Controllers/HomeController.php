<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ingresos = DB::table('ingresos')
            ->select(DB::raw('YEAR(created_at) as year, MONTH(fecha) as month, SUM(precio_total) as total'))
            ->groupBy(['year', 'month'])
            ->orderByRaw('year')
            ->orderByRaw('month')
            ->get();

        $ventasPorMes = DB::table('ventas')
            ->select(DB::raw('YEAR(created_at) as year, MONTH(fecha_venta) as month, estado, COUNT(*) as cantidad'))
            ->groupBy('year', 'month', 'estado')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        $labels = [];
        $cantidades = [];

        foreach ($ventasPorMes as $venta) {
            $year = $venta->year;
            $month = $venta->month;
            $label = $year . '-' . $month;

            if (!in_array($label, $labels)) {
                $labels[] = $label;
            }

            if (!isset($cantidades[$label])) {
                $cantidades[$label] = [
                    'completo' => 0,
                    'borrador' => 0,
                    'pendiente' => 0,
                    'cancelado' => 0
                ];
            }

            $cantidades[$label][$venta->estado] += $venta->cantidad;
        }

        $ventas = DB::table('ventas')
            ->select(DB::raw('YEAR(created_at) as year, MONTH(fecha_venta) as month, SUM(total_pagar) as total'))
            ->groupBy(['year', 'month'])
            ->orderByRaw('year')
            ->orderByRaw('month')
            ->get();

        return view('home', compact('ingresos', 'labels', 'cantidades', 'ventas'));
    }
}
