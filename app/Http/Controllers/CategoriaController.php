<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Categoria;
use App\Models\Blog;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class CategoriaController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-category|crear-category|editar-category|borrar-category',['only'=>['index']]);
         $this->middleware('permission:crear-category', ['only' => ['create','store']]);
         $this->middleware('permission:editar-category', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-category', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all();
        $numcategory = Categoria::withCount(['productos'])->get();
        return view('colecciones.index',compact('categoria','numcategory'));
    }


    public function charts()
    {
        $categori = Categoria::all();
        $data = [];

        foreach($categori as $number){
            $data['label'][] = $number->name;
            $data['data'][] =$number->blogs_count;
        }

        $data['data'] = json_encode($data);
        return view('colecciones.index', $data);
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
        $newCategory = new Categoria();

        $newCategory->name = $request->name;
        $newCategory->save();

       return redirect()->back();
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
        // Obtener la categoría a editar
        $categoria = Categoria::find($id);

        // Validar los datos enviados
        $request->validate([
            'name' => 'required|string|max:255',
            // Agrega más reglas de validación según tus necesidades
        ]);

        // Actualizar los campos de la categoría
        $categoria->name = $request->name;
        // Actualiza los demás campos según sea necesario

        // Guardar los cambios en la base de datos
        $categoria->save();

        // Redireccionar o devolver una respuesta según tus necesidades
        return redirect()->back()->with('success', 'Categoría actualizada exitosamente');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $categoryId)
    {
        $category = Categoria::find($categoryId);
        $category->delete();
        return redirect()->back();
    }
}
