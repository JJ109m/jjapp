<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\InfoUser;
use Spatie\Permission\Models\Role;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Illuminate\Support\Arr;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:ver-user|crear-user|editar-user|borrar-user',['only'=>['index']]);
         $this->middleware('permission:crear-user', ['only' => ['create','store']]);
         $this->middleware('permission:editar-user', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-user', ['only' => ['destroy']]);
    }

    public function index()
    {
        $usuarios = User::all();
        $roles = Role::pluck('name', 'name')->all();
        return view('usuario.index', compact('usuarios', 'roles'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('usuarios.crear',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Almacenar la imagen de perfil en el sistema de archivos de Laravel
        if ($request->hasFile('profile_image')) {
            $file = $request->file('profile_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profile_images', $fileName);
        } else {
            $fileName = null;
        }

        // Crear el usuario
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'profile_image' => $fileName
        ]);
        $user->assignRole($request->input('roles'));

        return redirect()->route('usuarios.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $infoUser = $user->infoUser;
        return view('usuario.show', compact('user', 'infoUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();

        return view('usuario.editar',compact('user','roles','userRole'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, ['password']);
        }

        $user = User::find($id);

        // Validar y guardar otros campos del usuario
        $user->update($input);

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->store('public/uploads');
            $user->profile_image = $imagePath;
            $user->save();
        }

        DB::table('model_has_roles')->where('model_id', $id)->delete();
        $user->assignRole($request->input('roles'));

        return redirect()->route('usuarios.index');
    }

    public function editProfile()
    {
        $user = Auth::user();
        $infoUser = $user->infoUser;

        return view('profile.edit', compact('user', 'infoUser'));
    }

    public function updateProfile(Request $request, $profile)
{
    // Obtener el usuario actual
    $user = Auth::user();

    // Actualizar los campos de users
    $user->name = $request->input('name');
    $user->password = bcrypt($request->input('password'));
    $user->profile_image = $request->file('profile_image') ? $request->file('profile_image')->store('public/profile_images') : $user->profile_image;
    $user->save();

    // Actualizar los campos de info_user
    $user->infoUser->edad = $request->input('edad');
    $user->infoUser->correo_personal = $request->input('correo_personal');
    $user->infoUser->sexo = $request->input('sexo');
    $user->infoUser->tipodedocumento = $request->input('tipodedocumento');
    $user->infoUser->documento = $request->input('documento');
    $user->infoUser->estado_civil = $request->input('estado_civil');
    $user->infoUser->departamento_residencia = $request->input('departamento_residencia');
    $user->infoUser->municipio_residencia = $request->input('municipio_residencia');
    $user->infoUser->direccion_residencia = $request->input('direccion_residencia');
    $user->infoUser->rh = $request->input('rh');
    $user->infoUser->fecha_nacimiento = $request->input('fecha_nacimiento');
    $user->infoUser->telefono = $request->input('telefono');
    $user->infoUser->save();

    return redirect()->route('profile.index')->with('success', 'Perfil actualizado correctamente.');
}



    public function editUser($id)
    {
        $user = User::find($id);

        return view('profile.edit_profile',compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
        ]);

        $user = User::find($id);
        $user->update($request->all());

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuarios.index');
    }
}
