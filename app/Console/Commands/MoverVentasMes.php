<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MoverVentasMes extends Command
{
    protected $signature = 'ventas:actualizar';
    protected $description = 'Actualiza la tabla de ventas por mes';

    public function handle()
    {
        // Obtener las ventas por mes
        $ventasPorMes = DB::table('ventas')
            ->select(DB::raw('DATE_FORMAT(fecha, "%Y-%m-01") AS mes'), DB::raw('SUM(total) AS total'))
            ->groupBy('mes')
            ->get();

        // Actualizar la tabla de ventas por mes
        foreach ($ventasPorMes as $ventaPorMes) {
            DB::table('ventas_por_mes')->updateOrInsert(
                ['mes' => $ventaPorMes->mes],
                ['total' => $ventaPorMes->total]
            );
        }
    }
}
