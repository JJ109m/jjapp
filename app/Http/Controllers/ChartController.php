<?php

namespace App\Http\Controllers;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Blog;
use App\Models\Categoria;
use App\Models\Envio;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-chart|crear-chart|editar-chart|borrar-chart',['only'=>['index']]);
         $this->middleware('permission:crear-chart', ['only' => ['create','store']]);
         $this->middleware('permission:editar-chart', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-chart', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $envios = Blog::all();
        $chart = [];

        foreach($envios as $envio){
            $chart['label'][] = $envio->id;
            $chart['chart'][] = $envio->stock;
        }
        $chart['chart'] = json_encode($chart);
        return view('charts.index', $chart);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function charts()
    {
        $envios = Blog::all();
        $chart = [];

        foreach($envios as $envio){
            $chart['label'][] = $envio->id;
            $chart['chart'][] = $envio->stock;
        }
        $chart['chart'] = json_encode($chart);
        return view('chart.index', $chart);
    }*/

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
