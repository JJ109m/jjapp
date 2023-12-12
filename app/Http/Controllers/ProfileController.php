<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Identificacion;
use App\Models\InfoUser;
use App\Models\Municipio;
use Illuminate\Http\Request;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $infoUser = $user->infoUser;
        $tipo_id = Identificacion::all();
        $departamento = Departamento::all();
        $municipio = Municipio::all();
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('profile.index',compact('user','infoUser','roles','userRole','tipo_id','departamento','municipio'));
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
        //
    }

    public function editProfile()
    {
        $user = Auth::user();
        $infoUser = $user->infoUser;

        return view('profile.edit', compact('user', 'infoUser'));
    }

    public function updateProfile(Request $request)
{
    $user = Auth::user();
    $infoUser = $user->infoUser;

    // Actualizar los campos de users
    $user->name = $request->input('name');
    $user->password = bcrypt($request->input('password'));
    $user->profile_image = $request->file('profile_image') ? $request->file('profile_image')->store('public/uploads') : $user->profile_image;
    $user->save();

    // Actualizar los campos de info_user

    if (!$infoUser) {
        $infoUser = new InfoUser();
    }

    $infoUser->correo_personal = $request->input('correo_personal');
    $infoUser->sexo = $request->input('sexo');
    $infoUser->identificacions_id = $request->input('identificacions_id');
    $infoUser->documento = $request->input('documento');
    $infoUser->estado_civil = $request->input('estado_civil');
    $infoUser->departamentos_id = $request->input('departamentos_id');
    $infoUser->municipios_id = $request->input('municipios_id');
    $infoUser->direccion_residencia = $request->input('direccion_residencia');
    $infoUser->rh = $request->input('rh');
    $infoUser->fecha_nacimiento = $request->input('fecha_nacimiento');
    $infoUser->telefono = $request->input('telefono');

    // Calcular la edad si se proporciona una fecha de nacimiento válida
    if ($infoUser->fecha_nacimiento) {
        $fechaNacimiento = new DateTime($infoUser->fecha_nacimiento);
        $hoy = new DateTime();
        $edad = $hoy->diff($fechaNacimiento)->y;
        $infoUser->edad = $edad;
    }

    $user->infoUser()->save($infoUser);

    return redirect()->route('profile.index')->with('success', 'Perfil actualizado correctamente.');
}




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $userId = User::find();

        // Verificar el rol del usuario
        switch ($userId->rol) {
            case 'Administrador':
                $avatar = 'admin.svg';
                break;
            case 'editor':
                $avatar = 'editor.png';
                break;
            default:
                $avatar = 'default.png';
                break;
        }

        // Mostrar el avatar correspondiente
        $path = public_path('avatars/' . $avatar);
        return view('profile.show')->file($path);
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
