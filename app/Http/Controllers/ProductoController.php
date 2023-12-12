<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\Variant;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;
use App\Notifications\StockAlert;
use DB;
use Doctrine\DBAL\Query\QueryException;
use Exception;
use Toastr;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Producto::all();
        $categoria = Categoria::all();
        return view('productos.index', compact('product', 'categoria'));
    }


    public function getProductInfo($productId)
    {
        // Obtener los datos del producto desde la base de datos
        $product = Producto::find($productId);

        // Verificar si se encontró el producto
        if ($product) {
            // Devolver los datos del producto en formato JSON
            return response()->json([
                'nombre' => $product->nombre,
                'imagenes' => $product->imagenes,
                'precio' => $product->precio,
            ]);
        } else {
            // Devolver una respuesta de error si no se encuentra el producto
            return response()->json(['error' => 'Producto no encontrado'], 404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Categoria::all();
        $proveedor = Proveedor::all();
        return view('productos.create', compact('categoria', 'proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // Dentro del modelo Product.php

    public function store(Request $request)
    {
        try {
            // Obtener los datos enviados desde el formulario
            $user = Auth::user();
            $nombre = $request->input('nombre');
            $descripcion = $request->input('descripcion');
            $precio = $request->input('precio_sin_comas');
            $costo = $request->input('costo_sin_comas');
            $imagen = $request->file('imagen');
            $sku = $request->input('sku');
            $weight = $request->input('weight') ?? 0;
            $weight_unit = $request->input('weight_unit') ?? 0;
            $serie = 'PRD-' . date('Y') . '' . mt_rand(1000000, 9999999);

            // Verificar si el nombre del producto ya existe
            $existingProduct = Producto::where('nombre', $nombre)->first();

            if ($existingProduct) {
                $mensaje = "El nombre del producto ya existe. Por favor, elija un nombre diferente.";
                return redirect()->route('productos.create')->with('error', $mensaje);
            }

            // Guardar la información del producto en la base de datos
            $producto = new Producto;
            $producto->nombre = $nombre;
            $producto->serie = $serie;
            $producto->categoria_id = $request->input('categoria_id');
            $producto->proveedor_id  = $request->input('proveedor_id');
            $producto->descripcion = $descripcion;

            // Guardar la imagen en la carpeta "public/img/"
            $contador = 0;
            $imagenes = [];

            if ($request->hasFile('imagenes')) {
                foreach ($request->file('imagenes') as $imagenFile) {
                    $contador++;
                    $nombreimagen = Str::slug($request->nombre) . "-" . $contador . "." . $imagenFile->guessExtension();
                    $ruta = public_path("img/post/");
                    copy($imagenFile->getRealPath(), $ruta . $nombreimagen);
                    $imagenes[] = $nombreimagen;
                    if ($contador === 1) { // si es la primera imagen, asignarla a la variable $imagen
                        $imagen = $nombreimagen;
                    }
                }
            }

            $producto->imagenes = $imagenes;
            $producto->precio = $precio;
            $producto->costo = $costo;
            $producto->sku = $sku;
            $producto->weight = $weight;
            $producto->weight_unit = $weight_unit;
            $producto->disponibilidad = $request->input('disponibilidad') == '1' ? true : false;
            $producto->user_id = $user->id;
            $producto->save();

            // Obtener los datos de las variantes desde el formulario
            $variantesData = $request->input('variantes');

            // Procesar variantes
            $variantesData = $request->input('variantes');
            if (is_array($variantesData)) {
                foreach ($variantesData as $varianteData) {
                    $variante = new Variant;
                    $variante->product_id = $producto->id; // Asociar la variante al producto recién creado

                    // Procesar y guardar la imagen de la variante
                    if (isset($varianteData['imagen']) && $varianteData['imagen']->isValid()) {
                        $imagenFile = $varianteData['imagen'];
                        $nombreimagen = Str::slug($producto->nombre) . "-" . uniqid() . "." . $imagenFile->getClientOriginalExtension();
                        $ruta = public_path("img/image/"); // Ajusta la ruta de almacenamiento según tu configuración

                        // Mover el archivo a la ruta especificada
                        $imagenFile->move($ruta, $nombreimagen);

                        // Almacenar la ruta de la imagen en la base de datos
                        $variante->imagen = $nombreimagen;
                    } else {
                        $variante->imagen = 'backend/image/boxVariant.svg';
                    }

                    $variante->combination = $varianteData['combinacion'];
                    $variante->precio = $varianteData['precio'];
                    $variante->stock = $varianteData['stock'];
                    $variante->stock2 = $varianteData['stock2'];
                    $variante->sku = $varianteData['sku'];
                    $variante->peso = $varianteData['peso'];

                    // Guardar la variante en la base de datos
                    $variante->save();
                }
            }
        } catch (Exception $exception) {
            if ($exception instanceof QueryException && $exception->getCode() == 23000) {
                // Duplicado de clave única
                $mensaje = "El nombre del producto ya existe. Por favor, elija un nombre diferente.";
                return redirect()->route('productos.create')->with('error', $mensaje);
            }
        }

        return redirect()->route('productos.index');
    }

    public function upload(Request $request)
    {
        $files = $request->file('files');

        foreach ($files as $file) {
            // Guarda cada archivo en el servidor y/o en la base de datos
            $file->store('public/uploads');

            // Si deseas almacenar los detalles del archivo en la base de datos
            $fileModel = new Producto();
            $fileModel->filename = $file->getClientOriginalName();
            $fileModel->save();
        }

        return response()->json(['message' => 'Carga de archivos exitosa']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', compact('producto'));
    }

    public function vistaPro()
    {
        $products = Producto::all();
        $categoria = Categoria::all();
        return view('productos.ventaProd', compact('products', 'categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // ProductoController.php

    public function edit($id)
    {
        $producto = Producto::find($id);
        $categoria = Categoria::all();
        $proveedor = Proveedor::all();
        $variantes = Variant::where('product_id', $producto->id)->get(); // Obtén las variantes asociadas al producto

        return view('productos.edit', compact('producto', 'categoria', 'proveedor', 'variantes'));
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
        $product = Producto::find($id);

        if ($product) {
            $product->delete();
            return redirect()->back()->with('eliminar', 'Producto Eliminado');
        } else {
            return redirect()->back()->with('error', 'El producto no existe');
        }
    }

    public function bulkDelete(Request $request)
    {
        $selectedProductIds = $request->input('selectedProductIds');

        // Realizar la eliminación en lote de los productos seleccionados
        Producto::whereIn('id', $selectedProductIds)->delete();

        // Puedes devolver una respuesta, por ejemplo, una redirección o un mensaje de éxito
        return redirect()->route('productos.index')->with('success', 'Productos seleccionados eliminados con éxito.');
    }
}
