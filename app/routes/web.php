<?php

use App\Http\Controllers\BotonController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EcomerceController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EmogiController;
use App\Http\Controllers\IdentificacionController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\varianteController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\WelcomeController;
use App\Models\Municipio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*ñ
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

route::resource('ventasJJ', WelcomeController::class);
route::resource('shop', ShopController::class);
route::resource('checkout', CheckoutController::class);
route::resource('contact', ContactController::class);
route::resource('carrito', CarritoController::class);


Route::post('/admin/posts/{postId}/update', 'BlogController@update')->name('admin.posts.update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('chart', ChartController::class);
    Route::resource('categoria', CategoriaController::class);
    Route::resource('emogi', EmogiController::class);
    Route::resource('table', TablesController::class);
    Route::resource('ventas', VentasController::class);
    Route::resource('cliente', ClienteController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('ingresos', IngresoController::class);
    Route::resource('identificaciones', IdentificacionController::class);
    Route::resource('boton', BotonController::class);
    Route::resource('proveedor', ProveedoresController::class);
    Route::resource('ecomerce', EcomerceController::class);
    Route::resource('productos', ProductoController::class);
    Route::resource('produc', ProductsController::class);
    Route::resource('municipios', MunicipioController::class);
    Route::resource('variante', varianteController::class);
    Route::resource('chat', ChatController::class);
    Route::post('/upload', [ProductoController::class, 'upload'])->name('upload');

    // routes/web.php

    Route::get('/themes/edit',  [ThemeController::class, 'edit'])->name('themes.edit');
    Route::put('/themes/update',  [ThemeController::class, 'update'])->name('themes.update');


    Route::post('/profile', [ProfileController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/{profile}', [ProfileController::class, 'updateProfile'])->name('profile.update');

    Route::get('/avatar/{userId}', 'ProfileController@show')->name('avatar.show');

    Route::match(['GET', 'POST'], '/get-product-info/{productId}', [ProductoController::class, 'getProductInfo'])->name('getProductInfo');

    Route::post('/copia', [IngresoController::class, 'copia'])->name('copia');

    Route::get('/ventas/{id}/detalles', [VentasController::class, 'detalles'])->name('ventas.detalles');
    Route::get('/ventas/{ventas_id}/imprimir-factura', [VentasController::class, 'factura'])->name('ventas.imprimir-factura');

    Route::get('/vistaPro', [ProductoController::class, 'vistaPro'])->name('vistaPro');

    Route::get('/exportPDFin', [IngresoController::class, 'exportPDFin'])->name('exportPDFin');
    Route::get('/exportxls', [IngresoController::class, 'exportxls'])->name('exportxls');
    Route::get('/exportarVenta', [VentasController::class, 'exportarVenta'])->name('exportarVenta');
    Route::get('/exportPDF', [VentasController::class, 'exportPDF'])->name('exportPDF');

    Route::post('/productos/bulkDelete', [ProductoController::class, 'bulkDelete'])->name('productos.bulkDelete');
    Route::post('/variante/bulkDelete', [varianteController::class, 'bulkDelete'])->name('variante.bulkDelete');

    Route::get('/products/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
});
