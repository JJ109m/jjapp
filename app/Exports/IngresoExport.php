<?php

namespace App\Exports;

use App\Models\Ingresos;
use Maatwebsite\Excel\Concerns\FromCollection;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class IngresoExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view():View
    {
        return view('ingresos.exportIngreso',[
            'ingresos' => Ingresos::all()
        ]);
    }
}
