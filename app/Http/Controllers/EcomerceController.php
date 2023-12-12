<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EcomerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
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

            return view('ecomerce', compact('ingresos', 'labels', 'cantidades', 'ventas'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
