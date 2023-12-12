@extends('layouts.admin')

@section('content')
    <div class="main-content">
        <div class="contents">
            <div class="container-fluid">
                <div class="profile-content mb-50">
                    <div class="row">
                        <div class="cos-lg-3 col-md-4  ">
                            <aside class="profile-sider">
                                <!-- Profile Acoount -->
                                <div class="card mb-25">
                                    <div class="card-body text-center pt-sm-30 pb-sm-0  px-25 pb-0">

                                        <div class="account-profile">
                                            <div class="ap-img w-100 d-flex justify-content-center">
                                                <!-- Profile picture image-->
                                                @if (Auth::check() && Auth::user()->profile_image)
                                                    <img class="ap-img__main rounded-circle mb-3  wh-120 d-flex bg-opacity-primary"
                                                        src="{{ asset('storage/' . str_replace('public/', '', Auth::user()->profile_image)) }}"
                                                        alt="profile" width="100" height="100">
                                                @else
                                                    <span>No hay imagen de perfil</span>
                                                @endif
                                            </div>
                                            <div class="ap-nameAddress pb-3 pt-1">
                                                <h5 class="ap-nameAddress__title">{{ Auth::user()->name }}</h5>
                                                <p class="ap-nameAddress__subTitle fs-14 m-0">
                                                    @foreach (Auth::user()->roles as $rol)
                                                        {{ $rol->name }}
                                                    @endforeach
                                                </p>
                                                <p class="ap-nameAddress__subTitle fs-14 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-map-pin">
                                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z">
                                                        </path>
                                                        <circle cx="12" cy="10" r="3">
                                                        </circle>
                                                    </svg>
                                                    <span>
                                                        {{ ucwords(strtolower($infoUser->departamento->nombre)) }},
                                                        {{ ucwords(strtolower($infoUser->municipio->nombre)) }}
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="ap-button button-group d-flex justify-content-center flex-wrap">
                                                <button type="button"
                                                    class="border text-capitalize px-25 color-gray transparent shadow2 radius-md">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-mail">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg>message</button>



                                                <button
                                                    class="btn btn-primary btn-default btn-squared text-capitalize  px-25"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-user-plus">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <line x1="20" y1="8" x2="20" y2="14">
                                                        </line>
                                                        <line x1="23" y1="11" x2="17" y2="11">
                                                        </line>
                                                    </svg>
                                                    follow
                                                </button>





                                            </div>
                                        </div>

                                        <div class="card-footer mt-20 pt-20 pb-20 px-0">
                                            <div class="profile-overview d-flex justify-content-between flex-wrap">
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">
                                                        ${{ number_format(Auth::user()->venta->sum('total_pagar'), 3, ',', '.') }}
                                                    </h6>
                                                    <span class="po-details__sTitle">Total Ventas</span>
                                                </div>
                                                <div class="po-details">
                                                    <h6 class="po-details__title pb-1">
                                                        ${{ number_format(Auth::user()->ingresos->sum('precio_total'), 3, ',', '.') }}
                                                    </h6>
                                                    <span class="po-details__sTitle">Total Ingresos</span>
                                                </div>
                                                <div class="po-details">
                                                    <!-- En tu vista Blade -->
                                                    <h6 class="po-details__title pb-1">
                                                        {{ Auth::user()->productos->count() }}
                                                    </h6>
                                                    <span class="po-details__sTitle">Products</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Profile Acoount End -->

                                <!-- Profile User Bio -->
                                <div class="card mb-25">
                                    <div class="user-bio border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-30 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                User Bio
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <div class="user-bio__content">
                                                <p class="m-0">Nam malesuada dolor tellus pretium amet was hendrerit
                                                    facilisi id
                                                    vitae enim
                                                    sed ornare
                                                    there suspendisse sed orci neque ac sed aliquet risus faucibus in
                                                    pretium
                                                    molestie nisl
                                                    tempor quis odio habitant.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-info border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Contact info
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <div class="user-content-info">
                                                <p class="user-content-info__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-mail">
                                                        <path
                                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                        </path>
                                                        <polyline points="22,6 12,13 2,6"></polyline>
                                                    </svg>
                                                    {{ $infoUser->correo_personal }}
                                                </p>
                                                <p class="user-content-info__item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-phone">
                                                        <path
                                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                        </path>
                                                    </svg>
                                                    {{ $infoUser->telefono }}
                                                </p>
                                                <p class="user-content-info__item mb-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-git-pull-request">
                                                        <circle cx="18" cy="18" r="3"></circle>
                                                        <circle cx="6" cy="6" r="3"></circle>
                                                        <path d="M13 6h3a2 2 0 0 1 2 2v7"></path>
                                                        <line x1="6" y1="9" x2="6"
                                                            y2="21"></line>
                                                    </svg>
                                                    {{ $user->tipo_estado }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-skils border-bottom">
                                        <div class="card-header border-bottom-0 pt-sm-25 pb-sm-0  px-md-25 px-3">
                                            <div class="profile-header-title">
                                                Mas Datos
                                            </div>
                                        </div>
                                        <div class="card-body pt-md-1 pt-0">
                                            <button class="btn btn-primary btn-block mb-2" data-bs-toggle="modal"
                                                data-bs-target="#ShowDatosModal">Preview</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Profile User Bio End -->
                            </aside>
                        </div>

                        <div class="col">
                            <!-- Tab Menu -->
                            <div class="ap-tab ap-tab-header">
                                <div class="ap-tab-header__img">
                                    <img src="img/ap-header.png" alt="ap-header" class="img-fluid w-100">
                                </div>
                                <div class="ap-tab-wrapper">
                                    <ul class="nav px-25 ap-tab-main" id="ap-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="ap-overview-tab" data-toggle="pill"
                                                href="#ap-overview" role="tab" aria-controls="ap-overview"
                                                aria-selected="true">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="timeline-tab" data-toggle="pill" href="#timeline"
                                                role="tab" aria-controls="timeline"
                                                aria-selected="false">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="activity-tab" data-toggle="pill" href="#activity"
                                                role="tab" aria-controls="activity"
                                                aria-selected="false">Activity</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Tab Menu End -->
                            <div class="tab-content mt-25" id="ap-tabContent">
                                <div class="tab-pane fade show active" id="ap-overview" role="tabpanel"
                                    aria-labelledby="ap-overview-tab">
                                    <div class="ap-content-wrapper">
                                        <div class="row">
                                            <div class="col-lg-4 mb-25">
                                                <!-- Card 1 -->
                                                <div
                                                    class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                                                    <div>





                                                        <div class="overview-content">
                                                            <h1>3,257</h1>
                                                            <p>Orders</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-success"><i
                                                                        class="las la-arrow-up"></i>
                                                                    <strong>25%</strong></span>
                                                                <small>Since last week</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="ap-po-timeChart">
                                                        <div class="overview-single__chart d-md-flex align-items-end">
                                                            <div class="parentContainer">


                                                                <div>
                                                                    <div class="chartjs-size-monitor">
                                                                        <div class="chartjs-size-monitor-expand">
                                                                            <div class=""></div>
                                                                        </div>
                                                                        <div class="chartjs-size-monitor-shrink">
                                                                            <div class=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <canvas id="mychart8" height="93" width="130"
                                                                        style="display: block; width: 130px; height: 93px;"
                                                                        class="chartjs-render-monitor"></canvas>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card 1 End -->
                                            </div>
                                            <div class="col-lg-4 mb-25">
                                                <!-- Card 2 End  -->
                                                <div
                                                    class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                                                    <div>





                                                        <div class="overview-content">
                                                            <h1>$72,572</h1>
                                                            <p>Total Revenue</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-success"><i
                                                                        class="las la-arrow-up"></i>
                                                                    <strong>25%</strong></span>
                                                                <small>Since last week</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="ap-po-timeChart">
                                                        <div class="overview-single__chart d-md-flex align-items-end">
                                                            <div class="parentContainer">


                                                                <div>
                                                                    <div class="chartjs-size-monitor">
                                                                        <div class="chartjs-size-monitor-expand">
                                                                            <div class=""></div>
                                                                        </div>
                                                                        <div class="chartjs-size-monitor-shrink">
                                                                            <div class=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <canvas id="mychart9" height="93" width="130"
                                                                        style="display: block; width: 130px; height: 93px;"
                                                                        class="chartjs-render-monitor"></canvas>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card 2 End  -->
                                            </div>
                                            <div class="col-lg-4 mb-25">
                                                <!-- Card 3 -->
                                                <div
                                                    class="ap-po-details radius-xl bg-white d-flex justify-content-between">
                                                    <div>





                                                        <div class="overview-content">
                                                            <h1>1,274</h1>
                                                            <p>product sold</p>
                                                            <div class="ap-po-details-time">
                                                                <span class="color-danger"><i
                                                                        class="las la-arrow-down"></i>
                                                                    <strong>25%</strong></span>
                                                                <small>Since last week</small>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="ap-po-timeChart">
                                                        <div class="overview-single__chart d-md-flex align-items-end">
                                                            <div class="parentContainer">


                                                                <div>
                                                                    <div class="chartjs-size-monitor">
                                                                        <div class="chartjs-size-monitor-expand">
                                                                            <div class=""></div>
                                                                        </div>
                                                                        <div class="chartjs-size-monitor-shrink">
                                                                            <div class=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <canvas id="mychart10" height="93" width="130"
                                                                        style="display: block; width: 130px; height: 93px;"
                                                                        class="chartjs-render-monitor"></canvas>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Card 3 End -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- Statistics Charts -->
                                                <div class="card">
                                                    <div class="card-header text-capitalize px-md-25 px-3">
                                                        <h6>General Statistics</h6>
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="statistics1"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-horizontal">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="19" cy="12" r="1"></circle>
                                                                    <circle cx="5" cy="12" r="1"></circle>
                                                                </svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="statistics1">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="ap-statistics-charts">
                                                            <div class="parentContainer">


                                                                <div>
                                                                    <div class="chartjs-size-monitor">
                                                                        <div class="chartjs-size-monitor-expand">
                                                                            <div class=""></div>
                                                                        </div>
                                                                        <div class="chartjs-size-monitor-shrink">
                                                                            <div class=""></div>
                                                                        </div>
                                                                    </div>
                                                                    <canvas id="profile-chart" height="246"
                                                                        style="display: block; width: 873px; height: 246px;"
                                                                        width="873"
                                                                        class="chartjs-render-monitor"></canvas>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Statistics Charts End -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- Product Table -->
                                                <div class="card mt-25 mb-40">
                                                    <div class="card-header text-capitalize px-md-25 px-3">
                                                        <h6>My products</h6>
                                                        <div class="dropdown">
                                                            <a href="#" role="button" id="products"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-horizontal">
                                                                    <circle cx="12" cy="12" r="1"></circle>
                                                                    <circle cx="19" cy="12" r="1"></circle>
                                                                    <circle cx="5" cy="12" r="1"></circle>
                                                                </svg>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="products">
                                                                <a class="dropdown-item" href="#">Action</a>
                                                                <a class="dropdown-item" href="#">Another action</a>
                                                                <a class="dropdown-item" href="#">Something else
                                                                    here</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body p-0">
                                                        <div class="ap-product">
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col">Products Name</th>
                                                                            <th scope="col">Price</th>
                                                                            <th scope="col">sold</th>
                                                                            <th scope="col">Revenue</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Samsung Galaxy S8 256GB</td>
                                                                            <td>$280</td>
                                                                            <td>126</td>
                                                                            <td>$38,536</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Half Sleeve Shirt</td>
                                                                            <td>$25</td>
                                                                            <td>80</td>
                                                                            <td>$20,573 </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Marco Shoes </td>
                                                                            <td>$32</td>
                                                                            <td>58</td>
                                                                            <td>$17,457</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>15 Mackbook Pro</td>
                                                                            <td>$9,50</td>
                                                                            <td>36</td>
                                                                            <td>$15,354</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>apple iphone x</td>
                                                                            <td>$985</td>
                                                                            <td>24</td>
                                                                            <td>$10,710</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Table End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="timeline" role="tabpanel"
                                    aria-labelledby="timeline-tab">
                                    <div class="ap-post-content">
                                        <div class="row">
                                            <div class="col-xxl-8">
                                                <!-- Post Area -->
                                                <div class="ap-post-form">
                                                    <div class="card border mb-25">
                                                        <div class="card-header px-md-25 px-3">
                                                            <h6>Post something</h6>
                                                        </div>
                                                        <div class="card-body p-0 px-25">
                                                            <div class="d-flex flex-column">
                                                                <div class="border-0  flex-1 position-relative">
                                                                    <div class="pt-20 outline-0 pb-2 pr-0 pl-0 rounded-0 position-relative border-bottom"
                                                                        tabindex="-1">
                                                                        <span
                                                                            class="ap-profile-image bg-opacity-secondary rounded-circle d-block position-absolute"
                                                                            style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                                        <div class="pl-15 ml-5 pt-10">
                                                                            <textarea class="form-control border-0 p-0 fs-xl bg-transparent" rows="3" placeholder="Write something..."></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="ap-post-attach d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                                                    <a href="#" class="btn rounded-pill mr-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="15.864" height="14.859"
                                                                            viewBox="0 0 15.864 14.859"
                                                                            class="svg replaced-svg">
                                                                            <defs>
                                                                                <style>
                                                                                    .a {
                                                                                        fill: #fedb41;
                                                                                    }

                                                                                    .b {
                                                                                        fill: #00acea;
                                                                                    }

                                                                                    .c {
                                                                                        fill: #00efd1;
                                                                                    }

                                                                                    .d {
                                                                                        fill: #083863;
                                                                                    }
                                                                                </style>
                                                                            </defs>
                                                                            <g transform="translate(0 -105)">
                                                                                <path class="a"
                                                                                    d="M108.377,160.121a2.288,2.288,0,1,1-2.287,2.287A2.288,2.288,0,0,1,108.377,160.121Zm0,0"
                                                                                    transform="translate(-101.907 -52.409)">
                                                                                </path>
                                                                                <path class="b"
                                                                                    d="M24.88,233.829v1.639a1.477,1.477,0,0,1-1.335,1.586H11.335A1.477,1.477,0,0,1,10,235.468v-1.079h0l2.84-2.254a1.162,1.162,0,0,1,1.476.007l1.7,1.351a1.2,1.2,0,0,0,1.819-.381l2.272-3.686a1.219,1.219,0,0,1,2.167.023Zm0,0"
                                                                                    transform="translate(-9.508 -117.686)">
                                                                                </path>
                                                                                <path class="c"
                                                                                    d="M24.88,116.586v9.065l-2.6-4.381a1.219,1.219,0,0,0-2.167-.023l-2.272,3.686a1.2,1.2,0,0,1-1.819.381l-1.7-1.351a1.162,1.162,0,0,0-1.476-.007L10,126.21h0v-9.625A1.477,1.477,0,0,1,11.334,115H23.545a1.477,1.477,0,0,1,1.335,1.586Zm-7.05,2.922A2.13,2.13,0,0,0,15.9,117.22a2.322,2.322,0,0,0,0,4.575A2.13,2.13,0,0,0,17.829,119.507Zm0,0"
                                                                                    transform="translate(-9.507 -9.508)">
                                                                                </path>
                                                                                <g transform="translate(0 105)">
                                                                                    <path class="d"
                                                                                        d="M98.869,155.669a2.78,2.78,0,1,0-2.779-2.78A2.78,2.78,0,0,0,98.869,155.669Zm0-4.575a1.8,1.8,0,1,1-1.8,1.8A1.8,1.8,0,0,1,98.869,151.094Zm0,0"
                                                                                        transform="translate(-92.372 -147.889)">
                                                                                    </path>
                                                                                    <path class="d"
                                                                                        d="M14.1,105H1.767A1.943,1.943,0,0,0,0,107.078v10.7a1.943,1.943,0,0,0,1.766,2.078H14.1a1.943,1.943,0,0,0,1.766-2.078v-10.7A1.943,1.943,0,0,0,14.1,105Zm-12.332.984H14.1a1.023,1.023,0,0,1,.93,1.094v7.515l-1.869-3.115a1.621,1.621,0,0,0-2.868-.029L8,115.135a.841.841,0,0,1-1.267.263l-1.716-1.351a1.548,1.548,0,0,0-1.956-.007L.837,115.785v-8.707a1.023,1.023,0,0,1,.93-1.094ZM14.1,118.875H1.767a1.023,1.023,0,0,1-.93-1.094v-.813l2.684-2.109a.814.814,0,0,1,1.028,0l1.716,1.351a1.6,1.6,0,0,0,2.407-.5l2.295-3.686a.853.853,0,0,1,1.51.016l2.552,4.254v1.482a1.023,1.023,0,0,1-.93,1.094Zm0,0"
                                                                                        transform="translate(0 -105)">
                                                                                    </path>
                                                                                </g>
                                                                            </g>
                                                                        </svg>
                                                                        Photo/Video
                                                                    </a>
                                                                    <a href="#"
                                                                        class="btn rounded-pill ap-post-attach__drop">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </a>



                                                                    <button
                                                                        class="btn btn-primary btn-default btn-squared ml-auto ap-post-attach__btn">public
                                                                        post
                                                                    </button>





                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Area End -->

                                                <!-- Blog Post -->
                                                <div class="ap-main-post">
                                                    <div class="card mb-25">
                                                        <!-- Blog Style -->
                                                        <div class="card-body pb-0 px-25 ap-main-post__header">
                                                            <div
                                                                class="d-flex flex-row pb-20 border-top-0 border-left-0 border-right-0 ap-post-content__title align-items-center ">
                                                                <div class="d-inline-block align-middle mr-15">
                                                                    <span
                                                                        class="profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0"
                                                                        style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                </div>
                                                                <h6 class="mb-0 flex-1 text-dark">
                                                                    Meyri Carles
                                                                    <small class="m-0 d-block">
                                                                        2 minuts ago
                                                                    </small>
                                                                </h6>


                                                                <div class="dropdown  dropdown-click ">

                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>


                                                                    <div
                                                                        class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Item
                                                                            One</a>
                                                                        <a class="dropdown-item" href="#">Item
                                                                            Two</a>
                                                                        <a class="dropdown-item" href="#">Item
                                                                            Three</a>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div class="mb-15">
                                                                <img src="img/post-image.png" alt="post image"
                                                                    class="ap-post-attach__headImg w-100">
                                                            </div>
                                                            <div
                                                                class="pb-3 border-top-0 border-left-0 border-right-0 ap-post-content__p">
                                                                Nam malesuada dolor tellus pretium amet was hendrerit
                                                                facilisi
                                                                tempor
                                                                quis
                                                                enim sed ornare there suspendisse sed orci neque ac sed
                                                                aliquet
                                                                risus
                                                                faucibus in pretium molestee.
                                                            </div>
                                                        </div>
                                                        <!-- Blog Style End -->

                                                        <!-- Blog Style -->
                                                        <div
                                                            class="card-body border-top border-bottom py-0 ap-main-post__reaction">
                                                            <div
                                                                class="d-flex align-items-center demo-h-spacing ap-post-content__feedback">
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-thumbs-up">
                                                                        <path
                                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                        </path>
                                                                    </svg>274
                                                                </a>
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-message-square">
                                                                        <path
                                                                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                                        </path>
                                                                    </svg>56</a>
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-share-2">
                                                                        <circle cx="18" cy="5" r="3">
                                                                        </circle>
                                                                        <circle cx="6" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="18" cy="19" r="3">
                                                                        </circle>
                                                                        <line x1="8.59" y1="13.51"
                                                                            x2="15.42" y2="17.49"></line>
                                                                        <line x1="15.41" y1="6.51"
                                                                            x2="8.59" y2="10.49"></line>
                                                                    </svg> share
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Blog Style End -->

                                                        <!-- BLog Style -->
                                                        <div class="card-body px-25 py-20 ap-main-post__footer">
                                                            <div class="ap-post-content-comment">
                                                                <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center"
                                                                    tabindex="-1">
                                                                    <span
                                                                        class="rounded-circle d-block position-absolute wh-36"
                                                                        style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center w-100">
                                                                        <div
                                                                            class=" flex-1 d-flex align-items-center mr-10 ap-post-content-comment__write">
                                                                            <input
                                                                                class="form-control border-0 p-0 bg-transparent pr-sm-0 pr-20"
                                                                                placeholder="This is my comment...">
                                                                            <div class="d-flex">
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-smile">
                                                                                        <circle cx="12"
                                                                                            cy="12" r="10"></circle>
                                                                                        <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                        </path>
                                                                                        <line x1="9"
                                                                                            y1="9" x2="9.01"
                                                                                            y2="9"></line>
                                                                                        <line x1="15"
                                                                                            y1="9" x2="15.01"
                                                                                            y2="9"></line>
                                                                                    </svg></a>
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-image">
                                                                                        <rect x="3" y="3" width="18"
                                                                                            height="18" rx="2"
                                                                                            ry="2"></rect>
                                                                                        <circle cx="8.5"
                                                                                            cy="8.5" r="1.5">
                                                                                        </circle>
                                                                                        <polyline
                                                                                            points="21 15 16 10 5 21">
                                                                                        </polyline>
                                                                                    </svg></a>
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-paperclip">
                                                                                        <path
                                                                                            d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                                                                        </path>
                                                                                    </svg></a>
                                                                            </div>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-send">
                                                                                <line x1="22" y1="2"
                                                                                    x2="11" y2="13"></line>
                                                                                <polygon
                                                                                    points="22 2 15 22 11 13 2 9 22 2">
                                                                                </polygon>
                                                                            </svg></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- BLog Style -->
                                                    </div>
                                                    <!-- Blog Post End -->
                                                </div>
                                                <!-- Blog Post -->
                                                <div class="ap-main-post">
                                                    <div class="card mb-25">
                                                        <!-- Card body -->
                                                        <div class="card-body pb-0 px-25 ap-main-post__header">
                                                            <div
                                                                class="d-flex flex-row pb-20 border-top-0 border-left-0 border-right-0 ap-post-content__title align-items-center ">
                                                                <div class="d-inline-block align-middle mr-15">
                                                                    <span
                                                                        class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0"
                                                                        style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                                </div>
                                                                <h6 class="mb-0 flex-1 text-dark">
                                                                    Alexendra Dhadio
                                                                    <small class="m-0 d-block">
                                                                        2 days ago
                                                                    </small>
                                                                </h6>


                                                                <div class="dropdown  dropdown-click ">

                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>


                                                                    <div
                                                                        class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Item
                                                                            One</a>
                                                                        <a class="dropdown-item" href="#">Item
                                                                            Two</a>
                                                                        <a class="dropdown-item" href="#">Item
                                                                            Three</a>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <div
                                                                class="pb-3 border-top-0 border-left-0 border-right-0 ap-post-content__p">
                                                                Nam malesuada dolor tellus pretium amet was hendrerit
                                                                facilisi
                                                                tempor
                                                                quis
                                                                enim sed ornare there suspendisse sed orci neque ac sed
                                                                aliquet
                                                                risus
                                                                faucibus in pretium molestee.
                                                            </div>
                                                        </div>
                                                        <!-- Card body -->
                                                        <!-- Card body -->
                                                        <div
                                                            class="card-body border-top border-bottom py-0 ap-main-post__reaction">
                                                            <div
                                                                class="d-flex align-items-center demo-h-spacing ap-post-content__feedback">
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-thumbs-up">
                                                                        <path
                                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                        </path>
                                                                    </svg>274
                                                                </a>
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-message-square">
                                                                        <path
                                                                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                                        </path>
                                                                    </svg>56</a>
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-share-2">
                                                                        <circle cx="18" cy="5" r="3">
                                                                        </circle>
                                                                        <circle cx="6" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="18" cy="19" r="3">
                                                                        </circle>
                                                                        <line x1="8.59" y1="13.51"
                                                                            x2="15.42" y2="17.49"></line>
                                                                        <line x1="15.41" y1="6.51"
                                                                            x2="8.59" y2="10.49"></line>
                                                                    </svg> share
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Card -->
                                                        <!-- Card body -->
                                                        <div class="card-body px-25 py-20 ap-main-post__footer">
                                                            <div class="ap-post-content-comment">
                                                                <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center"
                                                                    tabindex="-1">
                                                                    <span
                                                                        class="rounded-circle d-block position-absolute wh-36"
                                                                        style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center w-100">
                                                                        <div
                                                                            class=" flex-1 d-flex align-items-center mr-10 ap-post-content-comment__write">
                                                                            <input
                                                                                class="form-control border-0 p-0 bg-transparent pr-sm-0 pr-20"
                                                                                placeholder="Type your comment...">
                                                                            <div class="d-flex">
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-smile">
                                                                                        <circle cx="12"
                                                                                            cy="12" r="10"></circle>
                                                                                        <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                        </path>
                                                                                        <line x1="9"
                                                                                            y1="9" x2="9.01"
                                                                                            y2="9"></line>
                                                                                        <line x1="15"
                                                                                            y1="9" x2="15.01"
                                                                                            y2="9"></line>
                                                                                    </svg></a>
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-image">
                                                                                        <rect x="3" y="3" width="18"
                                                                                            height="18" rx="2"
                                                                                            ry="2"></rect>
                                                                                        <circle cx="8.5"
                                                                                            cy="8.5" r="1.5">
                                                                                        </circle>
                                                                                        <polyline
                                                                                            points="21 15 16 10 5 21">
                                                                                        </polyline>
                                                                                    </svg></a>
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-paperclip">
                                                                                        <path
                                                                                            d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                                                                        </path>
                                                                                    </svg></a>
                                                                            </div>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-send">
                                                                                <line x1="22" y1="2"
                                                                                    x2="11" y2="13"></line>
                                                                                <polygon
                                                                                    points="22 2 15 22 11 13 2 9 22 2">
                                                                                </polygon>
                                                                            </svg></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Card body -->
                                                    </div>
                                                    <!-- Blog Post End -->
                                                </div>
                                                <!-- Blog Post -->
                                                <div class="ap-main-post">
                                                    <div class="card mb-25">
                                                        <!-- Card body -->
                                                        <div class="card-body pb-0 px-25 ap-main-post__header">
                                                            <div
                                                                class="d-flex flex-row pb-3 border-top-0 border-left-0 border-right-0 ap-post-content__title align-items-center ">
                                                                <div class="d-inline-block align-middle mr-15">
                                                                    <span
                                                                        class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0"
                                                                        style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                </div>
                                                                <h6 class="mb-0 flex-1 text-dark fw-500">
                                                                    Olivia Jon
                                                                    <small class="m-0 d-block">
                                                                        19 January at 21:53
                                                                    </small>
                                                                </h6>


                                                                <div class="dropdown  dropdown-click ">

                                                                    <button class="btn-link border-0 bg-transparent p-0"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-more-horizontal">
                                                                            <circle cx="12" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="19" cy="12" r="1">
                                                                            </circle>
                                                                            <circle cx="5" cy="12" r="1">
                                                                            </circle>
                                                                        </svg>
                                                                    </button>


                                                                    <div
                                                                        class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Item
                                                                            One</a>
                                                                        <a class="dropdown-item" href="#">Item
                                                                            Two</a>
                                                                        <a class="dropdown-item" href="#">Item
                                                                            Three</a>

                                                                    </div>
                                                                </div>


                                                            </div>
                                                            <!-- Post Gallery -->
                                                            <div class="mb-3 ap-post-gallery">
                                                                <!-- Post Gallery top -->
                                                                <div class="ap-post-gallery-top">
                                                                    <div class="ap-post-gallery__item">
                                                                        <a href="img/506.png"><img src="img/506.png"
                                                                                alt="gallery"
                                                                                class="w-100 img-fluid"></a>
                                                                    </div>
                                                                    <div class="ap-post-gallery__item">
                                                                        <a href="img/907.png"><img src="img/907.png"
                                                                                alt="gallery"
                                                                                class="w-100 img-fluid"></a>
                                                                    </div>
                                                                </div>
                                                                <!-- Post Gallery top -->

                                                                <!-- Post-Gallery Bottom -->
                                                                <div class="ap-post-gallery-bottom">
                                                                    <div class="ap-post-gallery__item">
                                                                        <a href="img/brightland_3744.png"><img
                                                                                src="img/brightland_3744.png"
                                                                                alt="gallery"
                                                                                class="w-100 img-fluid"></a>
                                                                    </div>
                                                                    <div class="ap-post-gallery__item">
                                                                        <a href="img/room.png"><img src="img/room.png"
                                                                                alt="gallery"
                                                                                class="w-100 img-fluid"></a>
                                                                    </div>
                                                                    <div class="ap-post-gallery__item">
                                                                        <a href="img/165.png"
                                                                            class="ap-post-gallery-overlay">
                                                                            <img src="img/165.png" alt="gallery"
                                                                                class="w-100 img-fluid">
                                                                            <div class="ap-post-gallery-overlay__content">
                                                                                <span>26<span
                                                                                        class="las la-plus"></span></span>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <!-- Post-Gallery Bottom -->
                                                            </div>
                                                            <!-- Post Gallery -->
                                                        </div>
                                                        <!-- Card body -->

                                                        <!-- Card body -->
                                                        <div
                                                            class="card-body border-top border-bottom py-0 ap-main-post__reaction">
                                                            <div
                                                                class="d-flex align-items-center demo-h-spacing ap-post-content__feedback">
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-thumbs-up">
                                                                        <path
                                                                            d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3">
                                                                        </path>
                                                                    </svg>274
                                                                </a>
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-message-square">
                                                                        <path
                                                                            d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                                        </path>
                                                                    </svg>56</a>
                                                                <a href="#"
                                                                    class="d-inline-flex align-items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-share-2">
                                                                        <circle cx="18" cy="5" r="3">
                                                                        </circle>
                                                                        <circle cx="6" cy="12" r="3">
                                                                        </circle>
                                                                        <circle cx="18" cy="19" r="3">
                                                                        </circle>
                                                                        <line x1="8.59" y1="13.51"
                                                                            x2="15.42" y2="17.49"></line>
                                                                        <line x1="15.41" y1="6.51"
                                                                            x2="8.59" y2="10.49"></line>
                                                                    </svg> share
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Card body -->

                                                        <!-- Card body -->
                                                        <div
                                                            class="card-body px-25 py-20 border-bottom ap-main-post__footer">
                                                            <div class="ap-post-content-comment">
                                                                <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center"
                                                                    tabindex="-1">
                                                                    <span
                                                                        class="rounded-circle d-block position-absolute wh-36"
                                                                        style="background-image:url('/img/ap-author.png'); background-size: cover;"></span>
                                                                    <div
                                                                        class="d-flex justify-content-between align-items-center w-100">
                                                                        <div
                                                                            class=" flex-1 d-flex align-items-center mr-10 ap-post-content-comment__write">
                                                                            <input
                                                                                class="form-control border-0 p-0 bg-transparent pr-sm-0 pr-20"
                                                                                placeholder="Type your comment...">
                                                                            <div class="d-flex">
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-smile">
                                                                                        <circle cx="12"
                                                                                            cy="12" r="10"></circle>
                                                                                        <path d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                        </path>
                                                                                        <line x1="9"
                                                                                            y1="9" x2="9.01"
                                                                                            y2="9"></line>
                                                                                        <line x1="15"
                                                                                            y1="9" x2="15.01"
                                                                                            y2="9"></line>
                                                                                    </svg></a>
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-image">
                                                                                        <rect x="3" y="3" width="18"
                                                                                            height="18" rx="2"
                                                                                            ry="2"></rect>
                                                                                        <circle cx="8.5"
                                                                                            cy="8.5" r="1.5">
                                                                                        </circle>
                                                                                        <polyline
                                                                                            points="21 15 16 10 5 21">
                                                                                        </polyline>
                                                                                    </svg></a>
                                                                                <a href="#">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-paperclip">
                                                                                        <path
                                                                                            d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                                                                        </path>
                                                                                    </svg></a>
                                                                            </div>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-send">
                                                                                <line x1="22" y1="2"
                                                                                    x2="11" y2="13">
                                                                                </line>
                                                                                <polygon
                                                                                    points="22 2 15 22 11 13 2 9 22 2">
                                                                                </polygon>
                                                                            </svg></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Card body -->

                                                        <!-- Card body Commnet -->
                                                        <div class="card-body pt-20 ap-main-post__comment">
                                                            <div
                                                                class="ap-post-cc-reply d-flex flex-column align-items-center">
                                                                <div class="d-flex flex-row w-100">
                                                                    <div
                                                                        class="d-inline-block align-middle status status-sm status-success">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary profile-image-md rounded-circle d-block ml-0 wh-36 mr-10"
                                                                            style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="mb-0 flex-1 text-dark">
                                                                        <div class="cbg-light rounded-xl py-10 px-10">
                                                                            <div class="d-flex ap-post-content__title">
                                                                                <a href="#" class="fw-500">
                                                                                    <h6>Hunter Carter</h6>
                                                                                </a>
                                                                            </div>
                                                                            <p class="mb-0 mt-10 text-gray">
                                                                                ullamco laboris nisi ut aliquip ex ea
                                                                                commodo
                                                                                consequat.
                                                                                Duis aute irure dolor in reprehenderit in
                                                                                voluptate
                                                                                velit
                                                                                esse cillum dolore eu fugiat nulla
                                                                                pariatur.Congrats
                                                                                mate!
                                                                            </p>
                                                                        </div>
                                                                        <ul class="mb-0 d-flex ap-post-cc-reply__reaction">
                                                                            <li class="#">
                                                                                <a href="#">Like</a>
                                                                            </li>
                                                                            <li class="#">
                                                                                <a href="#">
                                                                                    reply
                                                                                </a>
                                                                            </li>
                                                                            <li class="#">
                                                                                <span>5 months ago</span>
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            class="ap-post-cc-reply__reply pl-0 d-flex flex-row w-100 pb-0">
                                                                            <div
                                                                                class="d-inline-block align-middle status status-sm status-success">
                                                                                <span
                                                                                    class=" profile-image bg-opacity-secondary profile-image-md rounded-circle d-block ml-0 wh-36 mr-10"
                                                                                    style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                                            </div>
                                                                            <div class="mb-0 flex-1 text-dark">
                                                                                <div
                                                                                    class="cbg-light rounded-xl py-10 px-10">
                                                                                    <div
                                                                                        class="d-flex ap-post-content__title">
                                                                                        <a href="#" class="fw-500">
                                                                                            <h6>Dr. John Cook PhD</h6>
                                                                                        </a>
                                                                                    </div>
                                                                                    <p class="mb-0 mt-10 text-gray">
                                                                                        ullamco laboris nisi ut aliquip ex
                                                                                        ea
                                                                                        commodo
                                                                                        consequat.
                                                                                        Duis aute irure dolor in
                                                                                        reprehenderit in
                                                                                        voluptate
                                                                                        velit esse cillum dolore eu fugiat
                                                                                        nulla
                                                                                        pariatur.
                                                                                    </p>
                                                                                </div>
                                                                                <ul
                                                                                    class="mb-0 d-flex ap-post-cc-reply__reaction">
                                                                                    <li class="#">
                                                                                        <a href="#">Like</a>
                                                                                    </li>
                                                                                    <li class="#">
                                                                                        <a href="#"
                                                                                            class="color-primary">
                                                                                            reply
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="#">
                                                                                        <span>5 months ago</span>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ap-post-cc-reply d-flex flex-column align-items-center mt-20">
                                                                <div class="d-flex flex-row w-100">
                                                                    <div
                                                                        class="d-inline-block align-middle status status-sm status-success">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary profile-image-md rounded-circle d-block ml-0 wh-36 mr-10"
                                                                            style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="mb-0 flex-1 text-dark">
                                                                        <div class="cbg-light rounded-xl py-10 px-10">
                                                                            <div class="d-flex ap-post-content__title">
                                                                                <a href="#" class="fw-500">
                                                                                    <h6>Dr. Codex Lantern</h6>
                                                                                </a>
                                                                            </div>
                                                                            <p class="mb-0 mt-10 text-gray">
                                                                                Nam malesuada dolor tellus pretium amet was
                                                                                hendrerit
                                                                                facilisi tempor quis eni
                                                                            </p>
                                                                        </div>
                                                                        <ul class="mb-0 d-flex ap-post-cc-reply__reaction">
                                                                            <li class="#">
                                                                                <a href="#">Like</a>
                                                                            </li>
                                                                            <li class="#">
                                                                                <a href="#">
                                                                                    reply
                                                                                </a>
                                                                            </li>
                                                                            <li class="#">
                                                                                <span>5 months ago</span>
                                                                            </li>
                                                                        </ul>
                                                                        <div
                                                                            class="ap-post-cc-reply__reply pl-0 d-flex flex-row w-100 pb-0">
                                                                            <!-- Card body -->
                                                                            <div class="card-body p-0">
                                                                                <div class="ap-post-content-comment">
                                                                                    <div class="pt-0 outline-0 pb-0 pr-0 pl-0 rounded-0 position-relative d-flex align-items-center"
                                                                                        tabindex="-1">
                                                                                        <div
                                                                                            class="d-flex justify-content-between align-items-center w-100">
                                                                                            <div
                                                                                                class=" flex-1 d-flex align-items-center mr-10 ap-post-content-comment__write ml-0">
                                                                                                <input
                                                                                                    class="form-control border-0 p-0 bg-transparent pr-sm-0 pr-20"
                                                                                                    placeholder="Type your comment...">
                                                                                                <div class="d-flex">
                                                                                                    <a href="#">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                            width="24"
                                                                                                            height="24"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            fill="none"
                                                                                                            stroke="currentColor"
                                                                                                            stroke-width="2"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round"
                                                                                                            class="feather feather-smile">
                                                                                                            <circle
                                                                                                                cx="12"
                                                                                                                cy="12"
                                                                                                                r="10">
                                                                                                            </circle>
                                                                                                            <path
                                                                                                                d="M8 14s1.5 2 4 2 4-2 4-2">
                                                                                                            </path>
                                                                                                            <line
                                                                                                                x1="9"
                                                                                                                y1="9"
                                                                                                                x2="9.01"
                                                                                                                y2="9">
                                                                                                            </line>
                                                                                                            <line
                                                                                                                x1="15"
                                                                                                                y1="9"
                                                                                                                x2="15.01"
                                                                                                                y2="9">
                                                                                                            </line>
                                                                                                        </svg></a>
                                                                                                    <a href="#">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                            width="24"
                                                                                                            height="24"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            fill="none"
                                                                                                            stroke="currentColor"
                                                                                                            stroke-width="2"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round"
                                                                                                            class="feather feather-image">
                                                                                                            <rect x="3"
                                                                                                                y="3"
                                                                                                                width="18"
                                                                                                                height="18"
                                                                                                                rx="2"
                                                                                                                ry="2">
                                                                                                            </rect>
                                                                                                            <circle
                                                                                                                cx="8.5"
                                                                                                                cy="8.5"
                                                                                                                r="1.5">
                                                                                                            </circle>
                                                                                                            <polyline
                                                                                                                points="21 15 16 10 5 21">
                                                                                                            </polyline>
                                                                                                        </svg></a>
                                                                                                    <a href="#">
                                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                            width="24"
                                                                                                            height="24"
                                                                                                            viewBox="0 0 24 24"
                                                                                                            fill="none"
                                                                                                            stroke="currentColor"
                                                                                                            stroke-width="2"
                                                                                                            stroke-linecap="round"
                                                                                                            stroke-linejoin="round"
                                                                                                            class="feather feather-paperclip">
                                                                                                            <path
                                                                                                                d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48">
                                                                                                            </path>
                                                                                                        </svg></a>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type="button"
                                                                                                class="border-0 btn-primary wh-50 p-10 rounded-circle">
                                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="24"
                                                                                                    height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="feather feather-send">
                                                                                                    <line x1="22"
                                                                                                        y1="2"
                                                                                                        x2="11"
                                                                                                        y2="13">
                                                                                                    </line>
                                                                                                    <polygon
                                                                                                        points="22 2 15 22 11 13 2 9 22 2">
                                                                                                    </polygon>
                                                                                                </svg></button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Card body -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a class="view-more-comment color-primary fs-13 fw-500"
                                                                href="#">View 53
                                                                more
                                                                comments</a>
                                                        </div>
                                                        <!-- Card body Commnet -->

                                                        <!-- Card -->
                                                    </div>
                                                    <!-- Blog Post End -->
                                                </div>
                                            </div>
                                            <div class="col-xxl-4">
                                                <!-- Friend Widgets -->
                                                <div class="card global-shadow mb-25">
                                                    <div class="friends-widget">
                                                        <div class="card-header px-md-25 px-3">
                                                            <h6>Friends</h6>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Meyri Carles</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            UI Designer
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow">follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Shreyu Neu</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            Product Designer
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Domnic Harris</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            Executive Assistant
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Khalid Hasan</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            UI director
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Tuhin Molla</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            System Administrator
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <a class="view-more-comment color-primary fs-13 fw-500 px-25 pb-20"
                                                                href="#">Load more friends</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Friend Widgets End -->

                                                <!-- Gallery Image -->
                                                <div class="card global-shadow mb-25">
                                                    <div class="photo-gallery-widget">
                                                        <div
                                                            class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                            <h6>photos</h6>
                                                            <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1"
                                                                href="#">see all</a>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="wig">
                                                                <div class="wig__item">
                                                                    <img src="img/315.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/325.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/design.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/99.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/166.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/287.png" alt="gallery">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Gallery Image End -->

                                                <!-- Gallery Video Popup -->
                                                <div class="card global-shadow mb-25">
                                                    <div class="video-gallery-widget">
                                                        <div
                                                            class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                            <h6>videos</h6>
                                                            <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1"
                                                                href="#">see all</a>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="wig">
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/juice-2.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/cup-card.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/round-box.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/glass.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/bottles.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/325.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper"
                                                                            href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Gallery Video Popup End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="activity" role="tabpanel"
                                    aria-labelledby="activity-tab">
                                    <div class="ap-post-content">
                                        <div class="row">
                                            <div class="col-xxl-8">
                                                <!-- Friend post -->
                                                <div class="card global-shadow mb-25">
                                                    <div class="friends-widget">
                                                        <div class="card-header px-md-25 px-3">
                                                            <h6>Friends</h6>
                                                        </div>
                                                        <div class="card-body p-0 py-10">
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-primary bg-opacity-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-inbox">
                                                                                <polyline
                                                                                    points="22 12 16 12 14 15 10 15 8 12 2 12">
                                                                                </polyline>
                                                                                <path
                                                                                    d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                                                                </path>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">James</span>
                                                                                sent you a
                                                                                message
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-secondary bg-opacity-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-upload">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="17 8 12 3 7 8">
                                                                                </polyline>
                                                                                <line x1="12" y1="3"
                                                                                    x2="12" y2="15">
                                                                                </line>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">Adam
                                                                                </span>upload
                                                                                website template for sale
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-success bg-opacity-success">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-log-in">
                                                                                <path
                                                                                    d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4">
                                                                                </path>
                                                                                <polyline points="10 17 15 12 10 7">
                                                                                </polyline>
                                                                                <line x1="15" y1="12"
                                                                                    x2="3" y2="12">
                                                                                </line>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">Mumtahin
                                                                                </span>has
                                                                                registered
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-info bg-opacity-info">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-at-sign">
                                                                                <circle cx="12" cy="12"
                                                                                    r="4"></circle>
                                                                                <path
                                                                                    d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94">
                                                                                </path>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">James
                                                                                </span>Send you a
                                                                                message
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex align">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-danger bg-opacity-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-heart">
                                                                                <path
                                                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                                                </path>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">Adam
                                                                                </span>upload
                                                                                website template for sale
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-warning bg-opacity-warning">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-message-square">
                                                                                <path
                                                                                    d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">James</span>
                                                                                sent you a
                                                                                message
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-secondary bg-opacity-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-upload">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="17 8 12 3 7 8">
                                                                                </polyline>
                                                                                <line x1="12" y1="3"
                                                                                    x2="12" y2="15">
                                                                                </line>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0"
                                                                            style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">Shreyu
                                                                                    Neu</span> sent
                                                                                you a
                                                                                message
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-success bg-opacity-success">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-log-in">
                                                                                <path
                                                                                    d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4">
                                                                                </path>
                                                                                <polyline points="10 17 15 12 10 7">
                                                                                </polyline>
                                                                                <line x1="15" y1="12"
                                                                                    x2="3" y2="12">
                                                                                </line>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">Mumtahin
                                                                                </span>has
                                                                                registered
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-info bg-opacity-info">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-at-sign">
                                                                                <circle cx="12" cy="12"
                                                                                    r="4"></circle>
                                                                                <path
                                                                                    d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94">
                                                                                </path>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">James
                                                                                </span>Send you a
                                                                                message
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex align">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-danger bg-opacity-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-heart">
                                                                                <path
                                                                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                                                                </path>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">Adam
                                                                                </span>upload
                                                                                website template for sale
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-warning bg-opacity-warning">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-message-square">
                                                                                <path
                                                                                    d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z">
                                                                                </path>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0 "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">James</span>
                                                                                sent you a
                                                                                message
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                            <div
                                                                class="ffp d-flex ffp--hover justify-content-between  align-items-center w-100">
                                                                <div class="d-flex">
                                                                    <div
                                                                        class="mr-3 ffp__imgWrapper d-flex align-items-center">
                                                                        <span
                                                                            class="ffp__icon color-secondary bg-opacity-secondary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-upload">
                                                                                <path
                                                                                    d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
                                                                                </path>
                                                                                <polyline points="17 8 12 3 7 8">
                                                                                </polyline>
                                                                                <line x1="12" y1="3"
                                                                                    x2="12" y2="15">
                                                                                </line>
                                                                            </svg></span>
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block avatar avatar-md m-0"
                                                                            style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffp__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>
                                                                                <span class="color-primary">Shreyu
                                                                                    Neu</span> sent
                                                                                you a
                                                                                message
                                                                            </h6>
                                                                        </a>
                                                                        <p class="d-block">
                                                                            5 hours ago
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ffp__button">


                                                                    <div class="dropdown  dropdown-click ">

                                                                        <button
                                                                            class="btn-link border-0 bg-transparent p-0"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-more-horizontal">
                                                                                <circle cx="12" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="19" cy="12"
                                                                                    r="1"></circle>
                                                                                <circle cx="5" cy="12"
                                                                                    r="1"></circle>
                                                                            </svg>
                                                                        </button>


                                                                        <div
                                                                            class="dropdown-default dropdown-bottomRight dropdown-menu">
                                                                            <a class="dropdown-item" href="#">Item
                                                                                One</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Two</a>
                                                                            <a class="dropdown-item" href="#">Item
                                                                                Three</a>

                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Friend Post End -->
                                            </div>
                                            <div class="col-xxl-4">
                                                <!-- Friend Widgets -->
                                                <div class="card global-shadow mb-25">
                                                    <div class="friends-widget">
                                                        <div class="card-header px-md-25 px-3">
                                                            <h6>Friends</h6>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Meyri Carles</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            UI Designer
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div>




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow">follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/1.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Shreyu Neu</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            Product Designer
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/4.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Domnic Harris</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            Executive Assistant
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/2.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Khalid Hasan</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            UI director
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <div class="ffw d-flex justify-content-between">
                                                                <div class="d-flex flex-wrap">
                                                                    <div class="mr-3 ffw__imgWrapper">
                                                                        <span
                                                                            class=" profile-image bg-opacity-secondary rounded-circle d-block ap-profile-image "
                                                                            style="background-image:url('img/author/3.jpg'); background-size: cover;"></span>
                                                                    </div>
                                                                    <div class="ffw__title">
                                                                        <a href="#" class="text-dark fw-500">
                                                                            <h6>Tuhin Molla</h6>
                                                                        </a>
                                                                        <span class="d-block">
                                                                            System Administrator
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="ffw__button">




                                                                    <button
                                                                        class="btn btn-default btn-squared btn-outline-light friends-follow"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-check">
                                                                            <polyline points="20 6 9 17 4 12"></polyline>
                                                                        </svg>
                                                                        follow
                                                                    </button>




                                                                </div>
                                                            </div>
                                                            <a class="view-more-comment color-primary fs-13 fw-500 px-25 pb-20"
                                                                href="#">Load more friends</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Friend Widgets End -->

                                                <!-- Gallery Image -->
                                                <div class="card global-shadow mb-25">
                                                    <div class="photo-gallery-widget">
                                                        <div
                                                            class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                            <h6>photos</h6>
                                                            <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1"
                                                                href="#">see all</a>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="wig">
                                                                <div class="wig__item">
                                                                    <img src="img/315.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/325.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/design.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/99.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/166.png" alt="gallery">
                                                                </div>
                                                                <div class="wig__item">
                                                                    <img src="img/287.png" alt="gallery">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Gallery Image End -->

                                                <!-- Gallery Video Popup -->
                                                <div class="card global-shadow mb-25">
                                                    <div class="video-gallery-widget">
                                                        <div
                                                            class="card-header justify-content-between d-flex flex-wrap px-md-25 px-3">
                                                            <h6>videos</h6>
                                                            <a class="color-primary fs-13 fw-500 mt-lg-0 mt-1"
                                                                href="#">see all</a>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="wig">
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/juice-2.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/cup-card.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/round-box.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/glass.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/bottles.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper popup-youtube"
                                                                            href="https://www.youtube.com/watch?v=i9E_Blai8vk">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="wig__item wig-overlay">
                                                                    <img src="img/325.png" alt="gallery">
                                                                    <div class="wig-overlay__content">
                                                                        <a class="wig-overlay__iconWrapper"
                                                                            href="#">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="9.072" height="10.079"
                                                                                viewBox="0 0 9.072 10.079"
                                                                                class="svg replaced-svg">
                                                                                <defs>
                                                                                    <style>
                                                                                        .a {
                                                                                            fill: #fff;
                                                                                        }
                                                                                    </style>
                                                                                </defs>
                                                                                <path class="a"
                                                                                    d="M24.815,4.6,16.751.065A.5.5,0,0,0,16,.5V9.576a.5.5,0,0,0,.751.439L24.815,5.48a.5.5,0,0,0,0-.879Z"
                                                                                    transform="translate(-16 0)"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Gallery Video Popup End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <div class="modal fade" id="ShowDatosModal" tabindex="-1" aria-labelledby="ShowProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ShowProfileModalLabel">Mirar perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-4" style=" display: flex; justify-content: center; align-items: center;">
                            <div class="contenedor-imagen">
                                @if (Auth::check() && Auth::user()->profile_image)
                                    <img class="img-lg mb-3"
                                        src="{{ asset('storage/' . str_replace('public/', '', Auth::user()->profile_image)) }}"
                                        alt="profile" width="100" height="100">
                                @else
                                    <span>No hay imagen de perfil</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-8">
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-md-3 position-relative">
                                    <h5>Nombre</h5>
                                    <p>{{ $user->name }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Correo Empresarial</h5>
                                    <p>{{ $user->email }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Documento</h5>
                                    <p>{{ $infoUser->identificacion->nombre }} - {{ $infoUser->documento }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Edad</h5>
                                    <p>{{ $infoUser->edad }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Correo Personal</h5>
                                    <p>{{ $infoUser->correo_personal }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Sexo</h5>
                                    <p>{{ $infoUser->sexo }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Estado Civil</h5>
                                    <p>{{ $infoUser->estado_civil }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Estado</h5>
                                    <p>{{ $user->tipo_estado }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Ciudad</h5>
                                    <p>{{ $infoUser->departamento->nombre }} - {{ $infoUser->municipio->nombre }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Direccion</h5>
                                    <p>{{ $infoUser->direccion_residencia }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>RH</h5>
                                    <p>{{ $infoUser->rh }}</p>
                                </div>
                                <div class="col-md-3 position-relative">
                                    <h5>Telefono</h5>
                                    <p>{{ $infoUser->telefono }}</p>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal de edición del perfil -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Editar perfil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="">
                            <form action="{{ route('profile.update', ['profile' => Auth::user()->id]) }}"
                                method="POST" enctype="multipart/form-data" id="checkout-form">
                                @csrf
                                @method('PUT')
                                <div class="col-xl-12">
                                    <div class="checkout-progress-indicator content-center">
                                        <div class="checkout-progress">
                                            <div class="step" id="1">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-file-text nav-icon">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8"
                                                            y2="13">
                                                        </line>
                                                        <line x1="16" y1="17" x2="8"
                                                            y2="17">
                                                        </line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg>
                                                </span>
                                                <span>Informacion</span>
                                            </div>
                                            <div class="current">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="182" height="6"
                                                    viewBox="0 0 182 6" class="svg replaced-svg">
                                                    <g id="Group_1318" data-name="Group 1318"
                                                        transform="translate(-441 -521)">
                                                        <circle id="Ellipse_95" data-name="Ellipse 95" cx="3"
                                                            cy="3" r="3" transform="translate(441 521)"
                                                            fill="#c5cae1" opacity="0.15"></circle>
                                                        <circle id="Ellipse_95-2" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(457 521)" fill="#c5cae1"
                                                            opacity="0.2"></circle>
                                                        <circle id="Ellipse_95-3" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(473 521)" fill="#c5cae1"
                                                            opacity="0.3"></circle>
                                                        <circle id="Ellipse_95-4" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(489 521)" fill="#c5cae1"
                                                            opacity="0.35"></circle>
                                                        <circle id="Ellipse_95-5" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(505 521)" fill="#c5cae1"
                                                            opacity="0.4"></circle>
                                                        <circle id="Ellipse_95-6" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(521 521)" fill="#c5cae1"
                                                            opacity="0.5"></circle>
                                                        <circle id="Ellipse_95-7" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(537 521)" fill="#c5cae1"
                                                            opacity="0.55"></circle>
                                                        <circle id="Ellipse_95-8" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(553 521)" fill="#c5cae1"
                                                            opacity="0.6"></circle>
                                                        <circle id="Ellipse_95-9" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(569 521)" fill="#c5cae1"
                                                            opacity="0.65"></circle>
                                                        <circle id="Ellipse_95-10" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(585 521)" fill="#c5cae1"
                                                            opacity="0.7"></circle>
                                                        <circle id="Ellipse_95-11" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(601 521)" fill="#c5cae1"
                                                            opacity="0.8"></circle>
                                                        <circle id="Ellipse_95-12" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(617 521)" fill="#c5cae1"
                                                            opacity="0.9"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="step" id="2">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-user nav-icon">
                                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="12" cy="7" r="4"></circle>
                                                    </svg>
                                                </span>
                                                <span>Perfil</span>
                                            </div>
                                            <div class="current">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="182" height="6"
                                                    viewBox="0 0 182 6" class="svg replaced-svg">
                                                    <g id="Group_1318" data-name="Group 1318"
                                                        transform="translate(-441 -521)">
                                                        <circle id="Ellipse_95" data-name="Ellipse 95" cx="3"
                                                            cy="3" r="3" transform="translate(441 521)"
                                                            fill="#c5cae1" opacity="0.15"></circle>
                                                        <circle id="Ellipse_95-2" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(457 521)" fill="#c5cae1"
                                                            opacity="0.2"></circle>
                                                        <circle id="Ellipse_95-3" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(473 521)" fill="#c5cae1"
                                                            opacity="0.3"></circle>
                                                        <circle id="Ellipse_95-4" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(489 521)" fill="#c5cae1"
                                                            opacity="0.35"></circle>
                                                        <circle id="Ellipse_95-5" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(505 521)" fill="#c5cae1"
                                                            opacity="0.4"></circle>
                                                        <circle id="Ellipse_95-6" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(521 521)" fill="#c5cae1"
                                                            opacity="0.5"></circle>
                                                        <circle id="Ellipse_95-7" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(537 521)" fill="#c5cae1"
                                                            opacity="0.55"></circle>
                                                        <circle id="Ellipse_95-8" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(553 521)" fill="#c5cae1"
                                                            opacity="0.6"></circle>
                                                        <circle id="Ellipse_95-9" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(569 521)" fill="#c5cae1"
                                                            opacity="0.65"></circle>
                                                        <circle id="Ellipse_95-10" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(585 521)" fill="#c5cae1"
                                                            opacity="0.7"></circle>
                                                        <circle id="Ellipse_95-11" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(601 521)" fill="#c5cae1"
                                                            opacity="0.8"></circle>
                                                        <circle id="Ellipse_95-12" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(617 521)" fill="#c5cae1"
                                                            opacity="0.9"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="step" id="3">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-file-minus nav-icon">
                                                        <path
                                                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z">
                                                        </path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="9" y1="15" x2="15"
                                                            y2="15"></line>
                                                    </svg>
                                                </span>
                                                <span>Datos</span>
                                            </div>
                                            <div class="current">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="182" height="6"
                                                    viewBox="0 0 182 6" class="svg replaced-svg">
                                                    <g id="Group_1318" data-name="Group 1318"
                                                        transform="translate(-441 -521)">
                                                        <circle id="Ellipse_95" data-name="Ellipse 95" cx="3"
                                                            cy="3" r="3" transform="translate(441 521)"
                                                            fill="#c5cae1" opacity="0.15"></circle>
                                                        <circle id="Ellipse_95-2" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(457 521)" fill="#c5cae1"
                                                            opacity="0.2"></circle>
                                                        <circle id="Ellipse_95-3" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(473 521)" fill="#c5cae1"
                                                            opacity="0.3"></circle>
                                                        <circle id="Ellipse_95-4" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(489 521)" fill="#c5cae1"
                                                            opacity="0.35"></circle>
                                                        <circle id="Ellipse_95-5" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(505 521)" fill="#c5cae1"
                                                            opacity="0.4"></circle>
                                                        <circle id="Ellipse_95-6" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(521 521)" fill="#c5cae1"
                                                            opacity="0.5"></circle>
                                                        <circle id="Ellipse_95-7" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(537 521)" fill="#c5cae1"
                                                            opacity="0.55"></circle>
                                                        <circle id="Ellipse_95-8" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(553 521)" fill="#c5cae1"
                                                            opacity="0.6"></circle>
                                                        <circle id="Ellipse_95-9" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(569 521)" fill="#c5cae1"
                                                            opacity="0.65"></circle>
                                                        <circle id="Ellipse_95-10" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(585 521)" fill="#c5cae1"
                                                            opacity="0.7"></circle>
                                                        <circle id="Ellipse_95-11" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(601 521)" fill="#c5cae1"
                                                            opacity="0.8"></circle>
                                                        <circle id="Ellipse_95-12" data-name="Ellipse 95"
                                                            cx="3" cy="3" r="3"
                                                            transform="translate(617 521)" fill="#c5cae1"
                                                            opacity="0.9"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="step" id="4">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-home nav-icon">
                                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                                    </svg>
                                                </span>
                                                <span>Residencia/Genero</span>
                                            </div>
                                        </div>
                                    </div><!-- checkout -->
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12 col-lg-8 col-sm-10">
                                            <!-- Contenedor para el primer paso (Create Account) -->
                                            <div id="step-1-container" class="form-step-container">
                                                <div class="card checkout-shipping-form border-0">
                                                    <div
                                                        class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1">
                                                        <h4 class="fw-500" id="form-title">1. Informacion Personal
                                                        </h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="edit-profile__body">
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="name"
                                                                        class="form-label">Nombre</label>
                                                                    <input type="text"
                                                                        class="form-control form-field" id="name"
                                                                        name="name" value="{{ $user->name }}"
                                                                        required>
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <label for="email" class="form-label">Correo
                                                                        electrónico</label>
                                                                    <input type="email"
                                                                        class="form-control form-field" id="email"
                                                                        name="email" value="{{ $user->email }}"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-12">
                                                                    <label for="roles"
                                                                        class="form-label">Roles</label>
                                                                    <select name="roles[]" id="roles[]"
                                                                        class="form-select" disabled>
                                                                        @foreach ($roles as $roleKey => $roleValue)
                                                                            <option value="{{ $roleKey }}"
                                                                                @if (in_array($roleKey, $userRole)) selected @endif>
                                                                                {{ $roleValue }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="correo_personal"
                                                                        class="form-label">Correo
                                                                        personal</label>
                                                                    <input type="email"
                                                                        class="form-control form-field"
                                                                        id="correo_personal" name="correo_personal"
                                                                        value="{{ optional($infoUser)->correo_personal }}">
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <label for="password"
                                                                        class="form-label">Contraseña</label>
                                                                    <input type="password"
                                                                        class="form-control form-field" id="password"
                                                                        name="password">
                                                                </div>
                                                            </div>
                                                            <!-- Botones para el primer paso -->
                                                            <div
                                                                class="d-flex pt-20 mb-20 justify-content-md-between justify-content-center">
                                                                <button type="button" class="btn btn-secondary"
                                                                    onclick="prevStep()">Back</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    onclick="nextStep()">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- ends: card -->
                                            </div><!-- ends: step-1-container -->

                                            <!-- Contenedor para los pasos restantes -->
                                            <div id="additional-steps" style="display: none;">
                                                <!-- Contenedor para el segundo paso (Shipping Address) -->
                                                <div id="step-2-container" class="form-step-container">
                                                    <!-- Campos del segundo paso (Shipping Address) -->
                                                    <div class="card checkout-shipping-form border-0">
                                                        <div
                                                            class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1">
                                                            <h4 class="fw-500" id="form-title">2. Perfil</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <div class="input-div">
                                                                    <div class="row g-3">
                                                                        <div class="col-md-9">
                                                                            <label for="profile_image"
                                                                                class="drop-zone">
                                                                                <div class="icon">
                                                                                    <i
                                                                                        class="fas fa-cloud-upload-alt"></i>
                                                                                </div>
                                                                                <div class="text">Arrastra y suelta
                                                                                    archivos aquí
                                                                                    o haz clic para seleccionar archivos
                                                                                </div>
                                                                                <input type="file" id="profile_image"
                                                                                    name="profile_image"
                                                                                    class="form-control form-field">
                                                                            </label>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="avatar avatar-4xl">
                                                                                @if ($user->profile_image)
                                                                                    <img class="rounded-circle avatar-placeholder"
                                                                                        id="preview_image"
                                                                                        src="{{ asset('storage/' . str_replace('public/', '', Auth::user()->profile_image)) }}"
                                                                                        alt="Imagen de perfil">
                                                                                @else
                                                                                    <img class="rounded-circle avatar-placeholder"
                                                                                        id="preview_image"
                                                                                        src="#"
                                                                                        alt="Imagen de perfil">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <script>
                                                                        document.getElementById("profile_image").addEventListener("change", function(event) {
                                                                            handleFile(event);
                                                                        });

                                                                        document.querySelector(".drop-zone").addEventListener("drop", function(event) {
                                                                            event.preventDefault();
                                                                            handleDrop(event);
                                                                        });

                                                                        document.querySelector(".drop-zone").addEventListener("dragover", function(event) {
                                                                            event.preventDefault();
                                                                        });

                                                                        function handleFile(event) {
                                                                            var input = event.target;

                                                                            if (input.files && input.files[0]) {
                                                                                var reader = new FileReader();

                                                                                reader.onload = function(e) {
                                                                                    document.getElementById("preview_image").src = e.target.result;
                                                                                };

                                                                                reader.readAsDataURL(input.files[0]);
                                                                            }
                                                                        }

                                                                        function handleDrop(event) {
                                                                            var dt = event.dataTransfer;
                                                                            var files = dt.files;

                                                                            if (files.length > 0) {
                                                                                handleFile({
                                                                                    target: {
                                                                                        files: [files[0]]
                                                                                    }
                                                                                });
                                                                            }
                                                                        }
                                                                    </script>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Botones para el segundo paso -->
                                                    <div
                                                        class="d-flex pt-20 mb-20 justify-content-md-between justify-content-center">
                                                        <button type="button" class="btn btn-secondary"
                                                            onclick="prevStep()">Back</button>
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="nextStep()">Next</button>
                                                    </div>
                                                </div>

                                                <!-- Contenedor para el tercer paso (Payment Method) -->
                                                <div id="step-3-container" class="form-step-container">
                                                    <!-- Campos del tercer paso (Payment Method) -->
                                                    <div class="card checkout-shipping-form border-0">
                                                        <div
                                                            class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1">
                                                            <h4 class="fw-500" id="form-title">3. Datos Personales</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="fecha_nacimiento"
                                                                        class="form-label">Fecha
                                                                        de
                                                                        Nacimiento</label>
                                                                    <input type="date"
                                                                        class="form-control form-field"
                                                                        id="fecha_nacimiento" name="fecha_nacimiento"
                                                                        value="{{ optional($infoUser)->fecha_nacimiento }}"
                                                                        required require>
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <label for="edad"
                                                                        class="form-label">Edad</label>
                                                                    <input type="text"
                                                                        class="form-control form-field" id="edad"
                                                                        name="edad"
                                                                        value="{{ optional($infoUser)->edad ?? '' }}"
                                                                        disabled>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="identificacions_id">Tipo de
                                                                        Documento</label>
                                                                    <select name="identificacions_id"
                                                                        id="identificacions_id" class="form-select">
                                                                        <option value="">-- Elegir Identificacion --
                                                                        </option>
                                                                        @foreach ($tipo_id as $dni)
                                                                            <option value="{{ $dni->id }}"
                                                                                @if (optional($infoUser)->identificacions_id == $dni->id) selected @endif>
                                                                                {{ $dni->nombre }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <label for="documento"
                                                                        class="form-label">Documento</label>
                                                                    <input type="text"
                                                                        class="form-control form-field" id="documento"
                                                                        name="documento"
                                                                        value="{{ optional($infoUser)->documento }}">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="estado_civil" class="form-label">Estado
                                                                        Civil</label>
                                                                    <input type="text"
                                                                        class="form-control form-field"
                                                                        id="estado_civil" name="estado_civil"
                                                                        value="{{ optional($infoUser)->estado_civil }}">
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <label for="telefono"
                                                                        class="form-label">Teléfono</label>
                                                                    <input type="text"
                                                                        class="form-control form-field" id="telefono"
                                                                        name="telefono"
                                                                        value="{{ optional($infoUser)->telefono }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Botones para el tercer paso -->
                                                    <div
                                                        class="d-flex pt-20 mb-20 justify-content-md-between justify-content-center">
                                                        <button type="button" class="btn btn-secondary"
                                                            onclick="prevStep()">Back</button>
                                                        <button type="button" class="btn btn-primary"
                                                            onclick="nextStep()">Next</button>
                                                    </div>
                                                </div>

                                                <!-- Contenedor para el cuarto paso (Review Order) -->
                                                <div id="step-4-container" class="form-step-container">
                                                    <!-- Campos del cuarto paso (Review Order) -->
                                                    <div class="card checkout-shipping-form border-0">
                                                        <div
                                                            class="card-header border-bottom-0 align-content-start pb-sm-0 pb-1">
                                                            <h4 class="fw-500" id="form-title">4. Residencia & Genero
                                                            </h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="departamentos_id"
                                                                        class="form-label">Departamento de
                                                                        Residencia</label>
                                                                    <select class="form-select" id="departamentos_id"
                                                                        name="departamentos_id" required require>
                                                                        <option value="">-- Elegir departamento --
                                                                        </option>
                                                                        @foreach ($departamento as $departamentos)
                                                                            <option value="{{ $departamentos->id }}"
                                                                                @if (optional($infoUser)->departamentos_id == $departamentos->id) selected @endif>
                                                                                {{ $departamentos->nombre }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <<label for="municipios_id" class="form-label">
                                                                        Municipio
                                                                        de
                                                                        Residencia</label>
                                                                        <select class="form-select" id="municipios_id"
                                                                            name="municipios_id" required require>
                                                                            <option value="">-- Elegir municipio --
                                                                            </option>
                                                                            @foreach ($municipio as $municipios)
                                                                                <option value="{{ $municipios->id }}"
                                                                                    @if (optional($infoUser)->municipios_id == $municipios->id) selected @endif>
                                                                                    {{ $municipios->nombre }}
                                                                                </option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="direccion_residencia"
                                                                        class="form-label">Dirección de
                                                                        Residencia</label>
                                                                    <input type="text"
                                                                        class="form-control form-field"
                                                                        id="direccion_residencia"
                                                                        name="direccion_residencia"
                                                                        value="{{ optional($infoUser)->direccion_residencia }}"
                                                                        required require>
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <label for="rh" class="form-label">RH</label>
                                                                    <select id="rh" name="rh"
                                                                        class="form-select" required require>
                                                                        <option value="O+"
                                                                            {{ optional($infoUser)->rh == 'O+' ? 'selected' : '' }}>
                                                                            O+
                                                                        </option>
                                                                        <option value="O-"
                                                                            {{ optional($infoUser)->rh == 'O-' ? 'selected' : '' }}>
                                                                            O-
                                                                        </option>
                                                                        <option value="A+"
                                                                            {{ optional($infoUser)->rh == 'A+' ? 'selected' : '' }}>
                                                                            A+
                                                                        </option>
                                                                        <option value="A-"
                                                                            {{ optional($infoUser)->rh == 'A-' ? 'selected' : '' }}>
                                                                            A-
                                                                        </option>
                                                                        <option value="B+"
                                                                            {{ optional($infoUser)->rh == 'B+' ? 'selected' : '' }}>
                                                                            B+
                                                                        </option>
                                                                        <option value="B-"
                                                                            {{ optional($infoUser)->rh == 'B-' ? 'selected' : '' }}>
                                                                            B-
                                                                        </option>
                                                                        <option value="AB+"
                                                                            {{ optional($infoUser)->rh == 'AB+' ? 'selected' : '' }}>
                                                                            AB+
                                                                        </option>
                                                                        <option value="AB-"
                                                                            {{ optional($infoUser)->rh == 'AB-' ? 'selected' : '' }}>
                                                                            AB-
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <div class="input-div col-md-6">
                                                                    <label for="sexo"
                                                                        class="form-label">Sexo</label>
                                                                    <input type="text"
                                                                        class="form-control form-field" id="sexo"
                                                                        name="sexo"
                                                                        value="{{ optional($infoUser)->sexo }}">
                                                                </div>
                                                                <div class="input-div col-md-6">
                                                                    <label for="tipo_estado" class="form-label">Tipo de
                                                                        Estado</label>
                                                                    <input type="text"
                                                                        class="form-control form-field" id="tipo_estado"
                                                                        name="tipo_estado"
                                                                        value="{{ $user->tipo_estado }}" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- ends: additional-steps -->

                                            <!-- Botones para el último paso -->
                                            <div id="final-buttons" style="display: none;">
                                                <div
                                                    class="d-flex pt-20 mb-20 justify-content-md-between justify-content-center">
                                                    <button type="button" class="btn btn-secondary"
                                                        onclick="prevStep()">Back</button>
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal" onclick="cancel()">Cancel</button>
                                                    <button type="submit" class="btn btn-primary"
                                                        onclick="submitForm()">Submit</button>
                                                </div>
                                            </div>
                                        </div><!-- ends: col -->
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        var currentStep = 1;

        function nextStep() {
            if (currentStep < 4) {
                currentStep++;
                updateWizard();
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                currentStep--;
                updateWizard();
            }
        }

        function updateWizard() {
            document.getElementById('form-title').innerText = currentStep + ". Please enter your " +
                (currentStep === 2 ? "shipping address" : currentStep === 3 ? "payment method" : "account details");

            // Mostrar u ocultar contenedores según el paso actual
            for (var i = 1; i <= 4; i++) {
                var stepContainer = document.getElementById('step-' + i + '-container');
                if (i === currentStep) {
                    stepContainer.style.display = 'block';
                } else {
                    stepContainer.style.display = 'none';
                }
            }

            // Mostrar u ocultar contenedor de pasos adicionales
            var additionalStepsContainer = document.getElementById('additional-steps');
            if (currentStep > 1) {
                additionalStepsContainer.style.display = 'block';
            } else {
                additionalStepsContainer.style.display = 'none';
            }

            // Mostrar u ocultar contenedor de botones finales
            var finalButtonsContainer = document.getElementById('final-buttons');
            if (currentStep === 4) {
                finalButtonsContainer.style.display = 'block';
            } else {
                finalButtonsContainer.style.display = 'none';
            }

            // Actualizar progreso del wizard
            for (var i = 1; i <= 4; i++) {
                var stepElement = document.getElementById(i.toString());
                if (i < currentStep) {
                    stepElement.classList.remove('current');
                    stepElement.style.fill = '#4CAF50'; // Establecer el color verde para los pasos completados
                } else if (i === currentStep) {
                    stepElement.classList.add('current');
                    stepElement.style.fill = '#c5cae1'; // Restaurar el color original para el paso actual
                } else {
                    stepElement.classList.remove('current');
                    stepElement.style.fill = '#c5cae1'; // Restaurar el color original para los pasos no alcanzados
                }
            }
        }

        function cancel() {
            // Restablecer el formulario a sus valores iniciales
            var form = document.getElementById('checkout-form');
            form.reset();

            // Restablecer el estado actual del paso
            currentStep = 1;
            updateWizard();

            alert('Order canceled');
        }


        function submitForm() {
            // Lógica para enviar el formulario
            alert('Form submitted successfully');
        }
    </script>
    <!--
                                                <script>
                                                    var next_click = document.querySelectorAll(".next_button");
                                                    var main_form = document.querySelectorAll(".main");
                                                    var step_list = document.querySelectorAll(".progress-bar li");
                                                    var num = document.querySelector(".step-number");
                                                    let formnumber = 0;

                                                    next_click.forEach(function(next_click_form) {
                                                        next_click_form.addEventListener('click', function() {
                                                            if (!validateform()) {
                                                                return false
                                                            }
                                                            formnumber++;
                                                            updateform();
                                                            progress_forward();
                                                            contentchange();
                                                        });
                                                    });

                                                    var back_click = document.querySelectorAll(".back_button");
                                                    back_click.forEach(function(back_click_form) {
                                                        back_click_form.addEventListener('click', function() {
                                                            formnumber--;
                                                            updateform();
                                                            progress_backward();
                                                            contentchange();
                                                        });
                                                    });

                                                    var username = document.querySelector("#user_name");
                                                    var shownname = document.querySelector(".shown_name");


                                                    var submit_click = document.querySelectorAll(".submit_button");
                                                    submit_click.forEach(function(submit_click_form) {
                                                        submit_click_form.addEventListener('click', function() {
                                                            shownname.innerHTML = username.value;
                                                            formnumber++;
                                                            updateform();
                                                        });
                                                    });

                                                    var heart = document.querySelector(".fa-heart");
                                                    heart.addEventListener('click', function() {
                                                        heart.classList.toggle('heart');
                                                    });


                                                    var share = document.querySelector(".fa-share-alt");
                                                    share.addEventListener('click', function() {
                                                        share.classList.toggle('share');
                                                    });



                                                    function updateform() {
                                                        main_form.forEach(function(mainform_number) {
                                                            mainform_number.classList.remove('active');
                                                        })
                                                        main_form[formnumber].classList.add('active');
                                                    }

                                                    function progress_forward() {
                                                        // step_list.forEach(list => {

                                                        //     list.classList.remove('active');

                                                        // });


                                                        num.innerHTML = formnumber + 1;
                                                        step_list[formnumber].classList.add('active');
                                                    }

                                                    function progress_backward() {
                                                        var form_num = formnumber + 1;
                                                        step_list[form_num].classList.remove('active');
                                                        num.innerHTML = form_num;
                                                    }

                                                    var step_num_content = document.querySelectorAll(".step-number-content");

                                                    function contentchange() {
                                                        step_num_content.forEach(function(content) {
                                                            content.classList.remove('active');
                                                            content.classList.add('d-none');
                                                        });
                                                        step_num_content[formnumber].classList.add('active');
                                                    }


                                                    function validateform() {
                                                        validate = true;
                                                        var validate_inputs = document.querySelectorAll(".main.active input");
                                                        validate_inputs.forEach(function(vaildate_input) {
                                                            vaildate_input.classList.remove('warning');
                                                            if (vaildate_input.hasAttribute('require')) {
                                                                if (vaildate_input.value.length == 0) {
                                                                    validate = false;
                                                                    vaildate_input.classList.add('warning');
                                                                }
                                                            }
                                                        });
                                                        return validate;

                                                    }
                                                </script>
                                            -->
    <script>
        const departamentoSelect = document.getElementById('departamentos_id');
        const municipioSelect = document.getElementById('municipios_id');

        departamentoSelect.addEventListener('change', function() {
            const departamentoId = this.value;

            // Limpiar el select de municipios
            municipioSelect.innerHTML = '<option value="">-- Elegir municipio --</option>';

            // Verificar si se seleccionó un departamento
            if (departamentoId) {
                // Realizar una petición AJAX para obtener los municipios correspondientes al departamento seleccionado
                fetch(`/municipios?departamentoId=${departamentoId}`)
                    .then(response => response.json())
                    .then(data => {
                        data.forEach(municipio => {
                            const option = document.createElement('option');
                            option.value = municipio.id;
                            option.textContent = municipio.nombre
                                .toUpperCase(); // Mostrar el nombre en mayúscula
                            municipioSelect.appendChild(option);
                        });
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        });
    </script>

    <script>
        // Obtener el campo de fecha de nacimiento y el campo de edad
        const fechaNacimientoInput = document.getElementById('fecha_nacimiento');
        const edadInput = document.getElementById('edad');

        // Función para calcular la edad actual hasta el momento
        function calcularEdad() {
            const fechaNacimiento = new Date(fechaNacimientoInput.value);
            const hoy = new Date();
            let edad = hoy.getFullYear() - fechaNacimiento.getFullYear();

            // Verificar si todavía no ha llegado la fecha de cumpleaños este año
            if (hoy < new Date(hoy.getFullYear(), fechaNacimiento.getMonth(), fechaNacimiento.getDate())) {
                edad--;
            }

            // Actualizar el valor del campo de edad
            edadInput.value = edad;
        }

        // Calcular la edad al cargar la página
        calcularEdad();

        // Agregar un evento al campo de fecha de nacimiento para calcular la edad al cambiar
        fechaNacimientoInput.addEventListener('change', calcularEdad);
    </script>
@endsection
