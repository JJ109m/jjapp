<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\Blog;
use App\Models\Categoria;
use App\Models\Envio;

class Chart2Controller extends Controller
{
    public function index()
    {
        $numcategory = Categoria::withCount(['blogs'])->get();
        $categori = Categoria::all();
        $data = [];

        foreach($categori as $number){
            $data['label'][] = $number->name;
            $data['data'][] =$number->blogs_count;
        }

        $data['data'] = json_encode($data);
        return view('charts.index', $data);
    }
}
