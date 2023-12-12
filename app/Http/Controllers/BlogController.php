<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Categoria;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use \Milon\Barcode\DNS1D;
use Picqer;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;


class BlogController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-blog|crear-blog|editar-blog|borrar-blog',['only'=>['index']]);
         $this->middleware('permission:crear-blog', ['only' => ['create','store']]);
         $this->middleware('permission:editar-blog', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-blog', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $categoria = Categoria::all();
        return view('blogs.index',compact('blogs','categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Blog();
        $post->nombre = $request->nombre;
        $post->Categoria_id = $request->Categoria_id;
        //script para subir la imagen
        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->nombre).".".$imagen->guessExtension();
            $ruta = public_path("img/post/");
            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $post->imagen = $nombreimagen;

        }
        $post->contenido = $request->contenido;
        $post->valor = $request->valor;
        $post->stock = $request->stock;

        $post->save();

    }

    public function generateInvoice(Blog $order){

        $category = new Buyer([
            'name'          => $order->nombre,
            'custom_fields' => [
                'Categoria' => $order->categoria->name,
                'Valor' => $order->valor,
            ],
        ]);

        $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($category)
            ->taxRate(10)
            ->logo(public_path('vendor/invoices/sample-logo.png'))
            ->addItem($item);

        return $invoice->stream();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $categoria = Categoria::find($id);
        return view('blogs.editar',compact('blog','categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $post = Blog::find($blog);
        $post->nombre = $request->nombre;
        $post->category_id = $request->category_id;
        //script para subir la imagen
        if($request->hasFile("imagen")){

            $imagen = $request->file("imagen");
            $nombreimagen = Str::slug($request->titulo).".".$imagen->guessExtension();
            $ruta = public_path("img/post/");
            //$imagen->move($ruta,$nombreimagen);
            copy($imagen->getRealPath(),$ruta.$nombreimagen);
            $post->imagen = $nombreimagen;

        }
        $post->contenido = $request->contenido;
        $post->valor = $request->valor;
        $post->stock = $request->stock;

        $blog->update($request->all());

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('eliminar', 'Producto Eliminado');
    }
}
