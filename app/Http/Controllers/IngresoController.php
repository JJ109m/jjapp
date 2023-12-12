<?php

namespace App\Http\Controllers;

use App\Models\Ingresos;
use App\Models\Proveedor;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\IngresoExport;

use Barryvdh\DomPDF\Facade as PDF;

use Illuminate\Http\Request;

use ClipboardJS\Clipboard;
use Illuminate\Support\Facades\Auth;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresos = Ingresos::all();
        $proveedor = Proveedor::all();

        $cantidad = DB::table('ingresos')->select('cantidad')->get();
        $ctotal = array_sum($cantidad->map(function ($canti) {
            return $canti->cantidad;
        })->toArray());


        $base = DB::table('ingresos')->select('precio_base')->get();
        $total2 = array_sum($base->map(function ($pventa) {
            return $pventa->precio_base;
        })->toArray());
        $total_base = number_format($total2, 3);

        $ventas = DB::table('ingresos')->select('precio_total')->get();
        $total = array_sum($ventas->map(function ($venta) {
            return $venta->precio_total;
        })->toArray());
        $total_ventas = number_format($total, 3);

        $productosPorCategoria = DB::table('ingresos')
            ->select('proveedor_id', DB::raw('count(*) as cantidad'))
            ->groupBy('proveedor_id')
            ->get();

        $ingresosrep = DB::table('ingresos')->select(DB::raw('MONTH(fecha) as mes'), DB::raw('SUM(precio_total) as total'))
            ->groupBy('mes')->get();

        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        $datos_grafico = array();
        foreach ($ingresosrep as $ingreso) {
            $nombre_mes = $meses[$ingreso->mes - 1];
            $datos_grafico[$nombre_mes] = $ingreso->total;
        }



        return view('ingresos.index', compact('ingresos', 'datos_grafico', 'proveedor', 'total_ventas', 'ctotal', 'total_base', 'productosPorCategoria'));
    }

    public function graficoCategorias()
    {
        $categoriasConConteo = Proveedor::withCount('ingresos')->get();

        $labels = $categoriasConConteo->pluck('nombre');
        $data = $categoriasConConteo->pluck('productos_count');

        $chartData = [
            'labels' => $labels,
            'data' => $data,
        ];

        return view('ingresos.index')->with('chartData', json_encode($chartData));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingresos.create');
    }

    public function exportxls()
    {
        return Excel::download(new IngresoExport, 'ingresos.xlsx');
    }


    public function exportPDFin()
    {
        $productos = DB::table('ingresos')->select('precio_total')->get();;
        $total = $productos->sum('precio_total');
        $total_formateado = number_format($total, 3);

        $ingresoPDF = Ingresos::all();

        // calcular el 19% del valor
        $productos = DB::table('ingresos')->select('precio_total')->get();
        $total = $productos->sum('precio_total');
        $total_sin_iva = $total * 0.19;
        $total_iva = number_format($total_sin_iva, 3);

        $productos = DB::table('ingresos')->select('precio_total')->get();
        $total3 = $productos->sum('precio_total');
        $total_no_iva = $total3 * 0.19;
        $suma_con_iva = $total3 + $total_no_iva;
        $total_con_iva = number_format($suma_con_iva, 3);

        $imagePath = public_path('../public/backend/images/barnner/barnner_JJ-09.webp');

        $pdf = PDF\Pdf::loadView('ingresos.exportPDFin', compact('ingresoPDF', 'total_formateado', 'total_iva', 'total_con_iva', 'imagePath'));

        return $pdf->stream();
    }


    public function copia(Request $request)
    {
        // Obtener los datos de la tabla
        $datos = DB::table('ingresos')->get();

        // Copiar los datos al portapapeles
        $clipboard = app('clipboard');
        $clipboard->setText(json_encode($datos));

        // Redirigir de vuelta a la vista con un mensaje de éxito
        return redirect()->back()->with('success', 'Los datos se han copiado correctamente.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $user = Auth::user();
        $proveedor_id = $request->input('proveedor_id');
        $fecha = $request->input('fecha');
        $cantidad = $request->input('cantidad');
        $precio_base = $request->input('precio_base_sin_comas');
        $precio_total = $request->input('precio_total_sin_comas');
        $descripcion = $request->input('descripcion');
        $serie = 'WD-' . date('Y') . mt_rand(1000000, 9999999);

        $post = new Ingresos();
        $post->serie = $serie;
        $post->proveedor_id = $proveedor_id;
        $post->fecha = $fecha;
        $post->cantidad = $cantidad;
        $post->precio_base = $precio_base;
        $post->precio_total = $precio_total;
        $post->estado = $request->estado;
        $post->descripcion = $descripcion;
        $post->user_id = $user->id;

        $post->save();
        return redirect()->route('ingresos.index');
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
        $ingreso = Ingresos::find($id);
        $proveedor = Proveedor::all();
        return view('ingresos.editar', compact('ingreso', 'proveedor'));
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
        $user = Auth::user();

        // Obtener el ingreso existente por su ID
        $post = Ingresos::findOrFail($id);

        // Actualizar los campos del ingreso con los nuevos valores del formulario
        $post->proveedor_id = $request->input('proveedor_id');
        $post->fecha = $request->input('fecha');
        $post->cantidad = $request->input('cantidad');
        $post->precio_base = floatval(str_replace(',', '', $request->input('precio_base')));
        $post->precio_total = floatval(str_replace(',', '', $request->input('precio_total')));
        $post->estado = $request->input('estado');
        $post->descripcion = $request->input('descripcion');

        // También puedes actualizar el campo user_id si es necesario
        $post->user_id = $user->id;

        // Guardar los cambios en la base de datos
        $post->save();

        // Redireccionar a la vista de index después de la actualización
        return redirect()->route('ingresos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingresos $ingreso)
    {
        $ingreso->delete();
        return redirect()->route('ingresos.index')->with('eliminar', 'Ingresos Eliminados, OK');
    }
}
