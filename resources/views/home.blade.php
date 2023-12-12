@extends('layouts.admin')

@section('content')
    <main class="main-content">
        <div class="contents">
            <div class="content-wrapper">

                <div class="row">
                    <div class="mb-3 row">
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-violet">
                                <div class="card-body">
                                    @php
                                        use App\Models\User;
                                        use Carbon\Carbon;

                                        $cant_usuarios = User::count();
                                        $usuarios_nuevos = User::where('created_at', '>=', Carbon::today())->count();
                                        $usuarios_eliminados = User::onlyTrashed()
                                            ->where('deleted_at', '>=', Carbon::today())
                                            ->count();
                                    @endphp
                                    <div class="icon icon-lg float-end bg-primary-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-users nav-icon svg-icon-md svg-icon-heavy text-primary">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                    </div>
                                    <h6>Users</h6>
                                    <h3 class="text-primary">{{ $cant_usuarios }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($usuarios_nuevos > 0)
                                                <div class="text-muted text-sm mb-0 text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-up nav-icon text-sm text-success">
                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-success"
                                                        style="color: #06bd87;">+{{ $usuarios_nuevos }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($usuarios_eliminados > 0)
                                                <div class="text-muted text-sm mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down nav-icon text-sm text-danger">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-danger"
                                                        style="color: #ff002b;">-{{ $usuarios_eliminados }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-danger">
                                <div class="card-body">
                                    @php
                                        use Spatie\Permission\Models\Role;
                                        use Carbon\Carbon as CarbonAlias;

                                        $cant_roles = Role::count();
                                        $roles_nuevos = Role::where('created_at', '>=', CarbonAlias::today())->count();

                                        // Verificar si un Role ha sido eliminado comparando la columna deleted_at con null
                                        $roles_eliminados = Role::onlyTrashed()
                                            ->where('deleted_at', '>=', CarbonAlias::today())
                                            ->count();
                                    @endphp
                                    <div class="icon icon-lg float-end bg-danger-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-key nav-icon svg-icon-md svg-icon-heavy text-danger">
                                            <path
                                                d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4">
                                            </path>
                                        </svg>
                                    </div>
                                    <h6>Roles</h6>
                                    <h3 class="text-danger">{{ $cant_roles }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($roles_nuevos > 0)
                                                <div class="text-muted text-sm mb-0 text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-up nav-icon text-sm text-success">
                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-success"
                                                        style="color: #06bd87;">+{{ $roles_nuevos }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0" style="font-size: 15px;">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($roles_eliminados > 0)
                                                <div class="text-muted text-sm mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down nav-icon text-sm text-danger">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-danger"
                                                        style="color: #ff002b;">-{{ $roles_eliminados }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0"
                                                        style="font-size: 20px;">0</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-violet">
                                <div class="card-body">
                                    @php
                                        use App\Models\Ventas;

                                        $totalVentas = Ventas::sum('total_pagar');
                                        // Calcula el nuevo total de ventas después de agregar la nueva venta
                                        $nuevaVenta = Ventas::whereDate('created_at', now()->toDateString())->sum('total_pagar');
                                        $totalVentasCanceladas = Ventas::whereDate('created_at', now()->toDateString())
                                            ->where('estado', 'cancelado')
                                            ->sum('total_pagar');

                                        $totalBorrador = Ventas::where('estado', 'borrador')->sum('total_pagar');
                                        $totalPendiente = Ventas::where('estado', 'pendiente')->sum('total_pagar');

                                        $totalCanceladas = Ventas::where('estado', 'cancelado')->sum('total_pagar');
                                        $Total = $totalVentas - $totalCanceladas - $totalBorrador - $totalPendiente;
                                        // Resta el total de ventas canceladas al nuevo total para obtener solo las ventas nuevas
                                        $nuevaVentaSinCanceladas = $nuevaVenta - $totalVentasCanceladas;
                                    @endphp
                                    <div class="icon icon-lg float-end bg-violet-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shopping-bag nav-icon svg-icon-md svg-icon-heavy text-violet">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                    </div>
                                    <h6>Ventas</h6>
                                    <h3 class="text-violet">$ {{ number_format($Total) }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($nuevaVentaSinCanceladas > 0)
                                                <p class="text-success text-sm mb-0">$
                                                    {{ number_format($nuevaVentaSinCanceladas) }}</p>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">$ 0.000</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($totalVentasCanceladas > 0)
                                                <p class="text-danger text-sm mb-0">$
                                                    {{ number_format($totalVentasCanceladas) }}</p>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">$ 0.000</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-orange">
                                <div class="card-body">
                                    @php
                                        use App\Models\Ingresos;

                                        $totalingresos = Ingresos::sum('precio_total');
                                        // Calcula el nuevo total de ingresos después de agregar la nueva venta
                                        $nuevaVenta = Ingresos::whereDate('created_at', now()->toDateString())->sum('precio_total');
                                        $totalingresosCanceladas = Ingresos::whereDate('created_at', now()->toDateString())
                                            ->where('estado', 'cancelado')
                                            ->sum('precio_total');

                                        $totalBorrador = Ingresos::where('estado', 'borrador')->sum('precio_total');
                                        $totalPendiente = Ingresos::where('estado', 'pendiente')->sum('precio_total');

                                        $totalCanceladas = Ingresos::where('estado', 'cancelado')->sum('precio_total');
                                        $Total = $totalingresos - $totalCanceladas - $totalBorrador - $totalPendiente;
                                        // Resta el total de ingresos canceladas al nuevo total para obtener solo las ingresos nuevas
                                        $nuevaingresosinCanceladas = $nuevaVenta - $totalingresosCanceladas;
                                    @endphp
                                    <div class="icon icon-lg float-end bg-orange-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-dollar-sign nav-icon svg-icon-md svg-icon-heavy text-orange">
                                            <line x1="12" y1="1" x2="12" y2="23"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                    <h6>Ingresos</h6>
                                    <h3 class="text-orange">$ {{ number_format($Total) }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($nuevaingresosinCanceladas > 0)
                                                <p class="text-success text-sm mb-0">$
                                                    {{ number_format($nuevaingresosinCanceladas) }}</p>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">$ 0.000</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($totalingresosCanceladas > 0)
                                                <p class="text-danger text-sm mb-0">$
                                                    {{ number_format($totalingresosCanceladas) }}</p>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">$ 0.000</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-success">
                                <div class="card-body">
                                    @php
                                        use App\Models\Categoria;

                                        $cant_Categoria = Categoria::count();
                                        $category_nuevos = Categoria::where('created_at', '>=', CarbonAlias::today())->count();
                                        $category_eliminados = Categoria::onlyTrashed()
                                            ->where('deleted_at', '>=', CarbonAlias::today())
                                            ->count();
                                    @endphp
                                    <div class="icon icon-lg float-end bg-success-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-folder nav-icon svg-icon-md svg-icon-heavy text-success">
                                            <path
                                                d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <h6>Categorias</h6>
                                    <h3 class="text-success">{{ $cant_Categoria }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($category_nuevos > 0)
                                                <div class="text-muted text-sm mb-0 text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-up nav-icon text-sm text-success">
                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-success"
                                                        style="color: #06bd87;">+{{ $category_nuevos }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($category_eliminados > 0)
                                                <div class="text-muted text-sm mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down nav-icon text-sm text-danger">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-danger"
                                                        style="color: #ff002b;">-{{ $category_eliminados }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-warning">
                                <div class="card-body">
                                    @php
                                        use App\Models\Producto;

                                        $cant_product = Producto::count();
                                        $produto_nuevos = Producto::where('created_at', '>=', CarbonAlias::today())->count();
                                        $producto_eliminados = Producto::onlyTrashed()
                                            ->where('deleted_at', '>=', CarbonAlias::today())
                                            ->count();
                                    @endphp
                                    <div class="icon icon-lg float-end bg-warning-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-package nav-icon svg-icon-md svg-icon-heavy text-warning">
                                            <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                                            <path
                                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                            </path>
                                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                        </svg>
                                    </div>
                                    <h6>Productos</h6>
                                    <h3 class="text-warning">{{ $cant_product }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($produto_nuevos > 0)
                                                <div class="text-muted text-sm mb-0 text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-up nav-icon text-sm text-success">
                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-success"
                                                        style="color: #06bd87;">+{{ $produto_nuevos }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($producto_eliminados > 0)
                                                <div class="text-muted text-sm mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down nav-icon text-sm text-danger">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-danger"
                                                        style="color: #ff002b;">-{{ $producto_eliminados }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-limon">
                                <div class="card-body">
                                    @php
                                        use App\Models\Variant;

                                        $cant_Variant = Variant::count();
                                        $Variant_nuevos = Variant::where('created_at', '>=', CarbonAlias::today())->count();
                                        $Variant_eliminados = Variant::onlyTrashed()
                                            ->where('deleted_at', '>=', CarbonAlias::today())
                                            ->count();
                                    @endphp
                                    <div class="icon icon-lg float-end bg-limon-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shopping-cart nav-icon svg-icon-md svg-icon-heavy text-limon">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                            </path>
                                        </svg>
                                    </div>
                                    <h6>Almacen de Prodcutos</h6>
                                    <h3 class="text-limon">{{ $cant_Variant }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($Variant_nuevos > 0)
                                                <div class="text-muted text-sm mb-0 text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-up nav-icon text-sm text-success">
                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-success"
                                                        style="color: #06bd87;">+{{ $Variant_nuevos }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($Variant_eliminados > 0)
                                                <div class="text-muted text-sm mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down nav-icon text-sm text-danger">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-danger"
                                                        style="color: #ff002b;">-{{ $Variant_eliminados }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-ocean">
                                <div class="card-body">
                                    @php
                                        use App\Models\Cliente;

                                        $cant_Cliente = Cliente::count();
                                        $Cliente_nuevos = Cliente::where('created_at', '>=', CarbonAlias::today())->count();
                                        $Cliente_eliminados = Cliente::onlyTrashed()
                                            ->where('deleted_at', '>=', CarbonAlias::today())
                                            ->count();
                                    @endphp
                                    <div class="icon icon-lg float-end bg-ocean-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user-check nav-icon svg-icon-md svg-icon-heavy text-ocean">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="8.5" cy="7" r="4"></circle>
                                            <polyline points="17 11 19 13 23 9"></polyline>
                                        </svg>
                                    </div>
                                    <h6>Cliente Empresarial</h6>
                                    <h3 class="text-ocean">{{ $cant_Cliente }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($Cliente_nuevos > 0)
                                                <div class="text-muted text-sm mb-0 text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-up nav-icon text-sm text-success">
                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-success"
                                                        style="color: #06bd87;">+{{ $Cliente_nuevos }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($Cliente_eliminados > 0)
                                                <div class="text-muted text-sm mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down nav-icon text-sm text-danger">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-danger"
                                                        style="color: #ff002b;">-{{ $Cliente_eliminados }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-3 col-sm-6">
                            <div class="h-100 card card-gray">
                                <div class="card-body">
                                    @php
                                        use App\Models\Proveedor;

                                        $cant_Proveedor = Proveedor::count();
                                        $Proveedor_nuevos = Proveedor::where('created_at', '>=', CarbonAlias::today())->count();
                                        $Proveedor_eliminados = Proveedor::onlyTrashed()
                                            ->where('deleted_at', '>=', CarbonAlias::today())
                                            ->count();
                                    @endphp
                                    <div class="icon icon-lg float-end bg-gray-light"
                                        style="position: relative; top: -0.8rem; right: -0.8rem; display: flex; justify-content: center; align-items: center;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-truck nav-icon svg-icon-md svg-icon-heavy text-gray">
                                            <rect x="1" y="3" width="15" height="13"></rect>
                                            <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                            <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                            <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                        </svg>
                                    </div>
                                    <h6>Proveedor Empresarial</h6>
                                    <h3 class="text-gray">{{ $cant_Proveedor }}</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($Proveedor_nuevos > 0)
                                                <div class="text-muted text-sm mb-0 text-success">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-up nav-icon text-sm text-success">
                                                        <polyline points="18 15 12 9 6 15"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-success"
                                                        style="color: #06bd87;">+{{ $Proveedor_nuevos }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            @if ($Proveedor_eliminados > 0)
                                                <div class="text-muted text-sm mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-chevron-down nav-icon text-sm text-danger">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                    <span class="text-sm mb-0 text-danger"
                                                        style="color: #ff002b;">-{{ $Proveedor_eliminados }}</span>
                                                </div>
                                            @else
                                                <div class="text-muted text-sm mb-0">
                                                    <span class="text-muted text-sm mb-0">0</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Comparacion Ingresos y Ventas</h4>
                                            </div>
                                        </div>
                                        <div class="chartjs-wrapper mt-4" style="height: 300px;">
                                            <canvas id="grafica"
                                                style="display: block; width: 100%; height: 100%; box-sizing: border-box;"
                                                class="chartjs-render-monitor"></canvas>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-column">
                        <div class="row flex-grow">
                            <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                <div class="card card-rounded">
                                    <div class="card-body">
                                        <div class="d-sm-flex justify-content-between align-items-start">
                                            <div>
                                                <h4 class="card-title card-title-dash">Estado de Ventas</h4>
                                            </div>
                                        </div>
                                        <div class="chartjs-wrapper mt-4" style="height: 300px;">
                                            <canvas id="graficoVentas"
                                                style="display: block; width: 100%; height: 100%; box-sizing: border-box;"
                                                class="chartjs-render-monitor"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('js')
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/vendors/chart.js/Chart.min.js') }}"></script>

    <script>
        var ingresos = @json($ingresos);
        var ventas = @json($ventas);

        var data = {
            labels: [],
            datasets: [{
                    label: 'Ingresos',
                    data: [],
                    backgroundColor: 'rgba(0, 85, 255, 0.2)',
                    borderColor: 'rgba(0, 85, 255, 0.8)',
                    borderWidth: 1,
                    borderWidth: 1.5,
                    fill: true, // 3: no fill
                    pointBorderWidth: 1,
                    pointRadius: [4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4],
                    pointHoverRadius: [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                },
                {
                    label: 'Ventas',
                    data: [],
                    backgroundColor: 'rgba(98, 211, 0, 0.2)',
                    borderColor: 'rgb(98, 211, 0, 0.8)',
                    borderWidth: 1,
                    borderWidth: 1.5,
                    fill: true, // 3: no fill
                    pointBorderWidth: 1,
                    pointRadius: [4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4],
                    pointHoverRadius: [2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2],
                }
            ]
        };

        for (var i = 0; i < ingresos.length; i++) {
            var fecha = ingresos[i].year + '-' + ("" + ingresos[i].month).padStart(2, '0');
            data.labels.push(fecha);
            data.datasets[0].data.push(ingresos[i].total);
        }

        for (var i = 0; i < ventas.length; i++) {
            var fecha_venta = ventas[i].year + '-' + ("" + ventas[i].month).padStart(2, '0');
            var index = data.labels.indexOf(fecha_venta);
            if (index == -1) {
                data.labels.push(fecha_venta);
                index = data.labels.length - 1;
            }
            data.datasets[1].data[index] = ventas[i].total;
        }


        var options = {
            responsive: true,
            title: {
                display: true,
                text: 'Ingresos y Ventas por Mes'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Mes'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Monto'
                    },
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };

        var ctx = document.getElementById('grafica').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });
    </script>
    <script>
        var cantidades = @json($cantidades);

        var labels = Object.keys(cantidades);
        var datasets = [{
                label: 'completos',
                data: labels.map(function(label) {
                    return cantidades[label].completo;
                }),
                backgroundColor: 'rgba(6, 189, 135, 0.2)',
                borderColor: 'rgba(6, 189, 135, 1)',
                borderWidth: 1
            },
            {
                label: 'borradores',
                data: labels.map(function(label) {
                    return cantidades[label].borrador;
                }),
                backgroundColor: 'rgba(0, 85, 255, 0.2)',
                borderColor: 'rgba(0, 85, 255, 1)',
                borderWidth: 1
            },
            {
                label: 'pendientes',
                data: labels.map(function(label) {
                    return cantidades[label].pendiente;
                }),
                backgroundColor: 'rgba(255, 175, 0, 0.2)',
                borderColor: 'rgba(255, 175, 0, 1)',
                borderWidth: 1
            },
            {
                label: 'cancelados',
                data: labels.map(function(label) {
                    return cantidades[label].cancelado;
                }),
                backgroundColor: 'rgba(255, 0, 43, 0.2)',
                borderColor: 'rgba(255, 0, 43, 1)',
                borderWidth: 1
            }
        ];

        var data = {
            labels: labels,
            datasets: datasets
        };

        var options = {
            responsive: true,
            title: {
                display: true,
                text: 'Cantidad de Ventas por Estado y Mes'
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Año y Mes'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Cantidad'
                    },
                    ticks: {
                        beginAtZero: true,
                        stepSize: 1 // Muestra solo números enteros en el eje Y
                    }
                }]
            }
        };

        var ctx = document.getElementById('graficoVentas').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
@endsection
