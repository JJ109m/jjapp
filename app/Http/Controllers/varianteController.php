<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Variant;
use App\Models\Variante;
use Illuminate\Http\Request;
use Validator;

class varianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variante = Variant::all();
        $product = Producto::all();
        return view('variante.index', compact('variante', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('variantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos si es necesario
        $request->validate([
            'variant' => 'required|array',
            'price' => 'required|array',
            'stock' => 'required|array',
            'stock2' => 'required|array',
            'sku' => 'required|array',
            'estado' => 'required|array',
        ]);

        // Procesa y almacena los datos en la base de datos
        foreach ($request->variant as $key => $value) {
            $modelo = new Variant(); // Reemplaza 'TuModelo' por el nombre de tu modelo
            $modelo->variant = $value;
            $modelo->price = $request->price[$key];
            $modelo->stock = $request->stock[$key];
            $modelo->stock2 = $request->stock2[$key];
            $modelo->sku = $request->sku[$key];
            $modelo->estado = $request->estado[$key];
            $modelo->save();
        }

        return response()->json(['message' => 'Datos almacenados exitosamente']);
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
        $product = Variant::find($id);

        if ($product) {
            $product->delete();
            return redirect()->back()->with('eliminar', 'variante Eliminado');
        } else {
            return redirect()->back()->with('error', 'El variante no existe');
        }
    }

    public function bulkDelete(Request $request)
    {
        $selectedVariantIds = $request->input('selectedVariantIds');

        // Realizar la eliminación en lote de los variantes seleccionados
        Variant::whereIn('id', $selectedVariantIds)->delete();

        // Puedes devolver una respuesta, por ejemplo, una redirección o un mensaje de éxito
        return redirect()->route('variante.index')->with('success', 'variantes seleccionados eliminados con éxito.');
    }
}
