<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Producto;
use App\Models\VentaDetalle;
use App\Exports\VentaExport;
use App\Models\Variant;
use App\Models\VentaPorMes;
use Illuminate\Http\Request;
use App\Models\Ventas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use PhpParser\Node\Stmt\Function_;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venta = Ventas::all();
        $detalle = VentaDetalle::all();

        $ventas = DB::table('ventas')->select('total_pagar')->get();
        $total = array_sum($ventas->map(function ($venta) {
            return $venta->total_pagar;
        })->toArray());
        $total_ventas = number_format($total, 3);

        return view('ventas.index', compact('venta', 'detalle', 'total_ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('ventas.create', compact('productos'));
    }

    public function exportarVenta(Ventas $venta)
    {
        return Excel::download(new VentaExport($venta), 'venta.xlsx');
    }


    public function exportPDF()
    {
        $ventas = Ventas::all();
        $detalles = Ventadetalle::all();
        $data = [];

        foreach ($ventas as $venta) {
            $venta_data = [
                'serie' => $venta->serie,
                'fecha_venta' => $venta->fecha_venta,
                'cliente' => $venta->nombre_cliente,
                'total' => $venta->total_pagar,
                'estado' => $venta->estado,
                'usuario' => $venta->usuario->name,
                'detalles' => []
            ];

            foreach ($detalles as $detalle) {
                if ($detalle->ventas_id == $venta->id) {
                    $venta_data['detalles'][] = [
                        'producto' => $detalle->producto->nombre,
                        'cantidad' => $detalle->stock,
                        'precio' => $detalle->precio,
                        'descuento' => $detalle->descuento,
                        'subtotal' => $detalle->subtotal
                    ];
                }
            }

            $data[] = $venta_data;
        }

        $pdf = PDF\Pdf::loadView('ventas.ventapdf', compact('data'));
        return $pdf->stream();
    }

    public function productosDisponibles()
    {
        $productos = Producto::all();
        return view('ventas.modal_productos', compact('productos'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha_venta = $request->input('fecha_venta');
        $nombre_cliente = $request->input('nombre_cliente');
        $telefono_cliente = $request->input('telefono_cliente');
        $direccion = $request->input('direccion');

        // Crear nueva venta
        $serie = 'Vt-' . date('Y') . mt_rand(1000000, 9999999);
        $venta = new Ventas();
        $venta->serie = $serie;
        $venta->fecha_venta = $fecha_venta;
        $venta->nombre_cliente = $nombre_cliente;
        $venta->telefono_cliente = $telefono_cliente;
        $venta->direccion = $direccion;
        $venta->total_pagar = 0;
        $venta->estado = $request->estado;
        $venta->usuario_id = Auth::user()->id;
        $venta->save();

        $ventas = Ventas::with('ventadetalles')->findOrFail($venta->id);

        // Guardar detalles de la venta
        $variantes_id  = $request->input('variante_id');
        $stockes = $request->input('stock');
        $descuentos = $request->input('descuento');
        $total = 0;

        foreach ($variantes_id as $key => $variante_id) {
            $variante = Variant::find($variante_id);

            $venta_detalle = new VentaDetalle;
            $venta_detalle->ventas_id = $ventas->id;
            $venta_detalle->product_id = $variante->product_id;
            $venta_detalle->combination = $variante->combination;
            $venta_detalle->variante_id  = $variante_id;
            $venta_detalle->stock = $stockes[$key];
            $venta_detalle->precio = $variante->precio; // Precio de la variante
            $venta_detalle->descuento = $descuentos[$key] ?? 0;
            $venta_detalle->subtotal = ($venta_detalle->precio * $venta_detalle->stock) * (1 - ($venta_detalle->descuento / 100));
            $venta_detalle->save();
            $total += $venta_detalle->subtotal;

            // Actualizar stock de la variante
            $variante->stock -= $venta_detalle->stock;
            $variante->save();
        }


        // Asignar el total a pagar a la venta y guardarla
        $venta->total_pagar = $total;
        $venta->save();

        return redirect()->route('ventas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $venta = Ventas::findOrFail($id);
        $detalles = VentaDetalle::where('ventas_id', $id)->get();

        $productos = DB::table('venta_detalles')->select('subtotal')->get();;
        $total = $productos->sum('subtotal');
        $total_formateado = number_format($total, 3);

        return view('ventas.show', compact('venta', 'detalles', 'total'));
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
