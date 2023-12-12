@extends('layouts.app')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Shop Grid</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="{{ route('welcome') }}"><i class="lni lni-home"></i> Home</a></li>
                        <li><a href="javascript:void(0)">Shop</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="product-grids section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <!-- Start Product Sidebar -->
                    <div class="product-sidebar">
                        <!-- Start Single Widget -->
                        <div class="single-widget search">
                            <h3>Search Product</h3>
                            <form action="{{ route('shop.index') }}" method="GET">
                                <input type="text" name="query" placeholder="Search Here..." value="{{ request('query') }}">
                                <button type="submit"><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget">
                            <h3>All Categories</h3>
                            <ul class="list">
                                <li>
                                    <a href="product-grids.html">Computers &amp; Accessories </a><span>(1138)</span>
                                </li>
                                <li>
                                    <a href="product-grids.html">Smartphones &amp; Tablets</a><span>(2356)</span>
                                </li>
                                <li>
                                    <a href="product-grids.html">TV, Video &amp; Audio</a><span>(420)</span>
                                </li>
                                <li>
                                    <a href="product-grids.html">Cameras, Photo &amp; Video</a><span>(874)</span>
                                </li>
                                <li>
                                    <a href="product-grids.html">Headphones</a><span>(1239)</span>
                                </li>
                                <li>
                                    <a href="product-grids.html">Wearable Electronics</a><span>(340)</span>
                                </li>
                                <li>
                                    <a href="product-grids.html">Printers &amp; Ink</a><span>(512)</span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget range">
                            <h3>Price Range</h3>
                            <input type="range" class="form-range" name="range" step="1" min="100"
                                max="10000" value="10" onchange="rangePrimary.value=value">
                            <div class="range-inner">
                                <label>$</label>
                                <input type="text" id="rangePrimary" placeholder="100">
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget condition">
                            <h3>Filter by Price</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault1">
                                    $50 - $100L (208)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                <label class="form-check-label" for="flexCheckDefault2">
                                    $100L - $500 (311)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                <label class="form-check-label" for="flexCheckDefault3">
                                    $500 - $1,000 (485)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                <label class="form-check-label" for="flexCheckDefault4">
                                    $1,000 - $5,000 (213)
                                </label>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                        <!-- Start Single Widget -->
                        <div class="single-widget condition">
                            <h3>Filter by Brand</h3>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                <label class="form-check-label" for="flexCheckDefault11">
                                    Apple (254)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
                                <label class="form-check-label" for="flexCheckDefault22">
                                    Bosh (39)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33">
                                <label class="form-check-label" for="flexCheckDefault33">
                                    Canon Inc. (128)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault44">
                                <label class="form-check-label" for="flexCheckDefault44">
                                    Dell (310)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault55">
                                <label class="form-check-label" for="flexCheckDefault55">
                                    Hewlett-Packard (42)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault66">
                                <label class="form-check-label" for="flexCheckDefault66">
                                    Hitachi (217)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault77">
                                <label class="form-check-label" for="flexCheckDefault77">
                                    LG Electronics (310)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault88">
                                <label class="form-check-label" for="flexCheckDefault88">
                                    Panasonic (74)
                                </label>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <!-- End Product Sidebar -->
                </div>
                <div class="col-lg-9 col-12">
                    <div class="product-grids-head">
                        <div class="product-grid-topbar">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-8 col-12">
                                    <div class="product-sorting">
                                        <label for="sorting">Sort by:</label>
                                        <select class="form-control" id="sorting">
                                            <option value="popularity">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Popularidad</font>
                                                </font>
                                            </option>
                                            <option value="low_to_high">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Precio bajo - alto</font>
                                                </font>
                                            </option>
                                            <option value="high_to_low">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Precio alto - bajo</font>
                                                </font>
                                            </option>
                                            <option value="average_rating">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Puntuación media</font>
                                                </font>
                                            </option>
                                            <option value="a_to_z">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Orden A - Z</font>
                                                </font>
                                            </option>
                                            <option value="z_to_a">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Z - Una orden</font>
                                                </font>
                                            </option>
                                        </select>
                                        <h3 class="total-show-product">Showing: <span id="showing-range">1 -
                                            {{ count($shop->where('disponibilidad', true)) }} items</span></h3>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-4 col-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-grid" type="button" role="tab"
                                                aria-controls="nav-grid" aria-selected="true"><i
                                                    class="lni lni-grid-alt"></i>
                                            </button>
                                            <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                                data-bs-target="#nav-list" type="button" role="tab"
                                                aria-controls="nav-list" aria-selected="false"><i
                                                    class="lni lni-list"></i>
                                            </button>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-grid" role="tabpanel"
                                aria-labelledby="nav-grid-tab">
                                <div class="row">
                                    @foreach ($shop as $blog)
                                        <style>
                                            .product-image img {
                                                width: 40%;
                                                aspect-ratio: 3/2;
                                                object-fit: contain;
                                            }

                                            .blog-name {
                                                display: -webkit-box;
                                                -webkit-box-orient: vertical;
                                                -webkit-line-clamp: 2;
                                                overflow: hidden;
                                                text-overflow: ellipsis;
                                            }
                                        </style>
                                        @if ($blog->disponibilidad)
                                            <div class="col-lg-4 col-md-6 col-12">
                                                <!-- Start Single Product -->
                                                <div class="single-product">
                                                    <div class="product-image">
                                                        @if (isset($blog->imagenes[2]))
                                                            <img src="/img/post/{{ $blog->imagenes[2] }}"
                                                                style="width: auto; height: 200px;">
                                                        @elseif (isset($blog->imagenes[0]))
                                                            <img src="/img/post/{{ $blog->imagenes[0] }}"
                                                                style="width: auto; height: 200px;">
                                                        @else
                                                            <img src="" alt="No hay Imagen" height="90px">
                                                        @endif
                                                        <div class="button">
                                                            <a href="{{ route('ventasJJ.show', $blog->id) }}"
                                                                class="btn"><i class="lni lni-cart"></i> Add to
                                                                Cart</a>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <span class="category">{{ $blog->categoria->name }}</span>
                                                        <h4 class="title">
                                                            <a href="{{ route('ventasJJ.show', $blog->id) }}"
                                                                class="blog-name">{{ $blog->nombre }}</a>
                                                        </h4>
                                                        <ul class="review">
                                                            @for ($i = 0; $i < $blog->rating; $i++)
                                                                <li><i class="lni lni-star-filled"></i></li>
                                                            @endfor
                                                            @for ($i = $blog->rating; $i < 5; $i++)
                                                                <li><i class="lni lni-star"></i></li>
                                                            @endfor
                                                            <li><span>{{ $blog->rating }}.0 Review(s)</span></li>
                                                        </ul>
                                                        <div class="price">
                                                            <span>${{ number_format($blog->precio) }}</span>
                                                            @if ($blog->descuento > 0)
                                                                <span
                                                                    class="discount-price">${{ number_format($blog->precio - $blog->descuento) }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Product -->
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                {{ $shop->links() }}
                            </div>
                            <div class="tab-pane fade active" id="nav-list" role="tabpanel"
                                aria-labelledby="nav-list-tab">
                                <div class="row">
                                    @foreach ($shop as $blog)
                                        @if ($blog->disponibilidad)
                                            <div class="col-lg-12 col-md-12 col-12">
                                                <!-- Start Single Product -->
                                                <div class="single-product">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-4 col-md-4 col-12">
                                                            <div class="product-image">
                                                                @if (isset($blog->imagenes[2]))
                                                                    <img src="/img/post/{{ $blog->imagenes[2] }}"
                                                                        style="width: auto; height: 200px;">
                                                                @elseif (isset($blog->imagenes[0]))
                                                                    <img src="/img/post/{{ $blog->imagenes[0] }}"
                                                                        style="width: auto; height: 200px;">
                                                                @else
                                                                    <img src="" alt="No hay Imagen"
                                                                        height="90px">
                                                                @endif
                                                                <div class="button">
                                                                    <a href="{{ route('ventasJJ.show', $blog->id) }}"
                                                                        class="btn">
                                                                        <i class="lni lni-cart"></i> Add to Cart
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-12">
                                                            <div class="product-info">
                                                                <span class="category">{{ $blog->categoria->name }}</span>
                                                                <h4 class="title">

                                                                    <a
                                                                        href="{{ route('ventasJJ.show', $blog->id) }}">{{ $blog->nombre }}</a>
                                                                </h4>
                                                                <ul class="review">
                                                                    @for ($i = 0; $i < $blog->rating; $i++)
                                                                        <li><i class="lni lni-star-filled"></i></li>
                                                                    @endfor
                                                                    @for ($i = $blog->rating; $i < 5; $i++)
                                                                        <li><i class="lni lni-star"></i></li>
                                                                    @endfor
                                                                    <li><span>{{ $blog->rating }}.0 Review(s)</span></li>
                                                                </ul>
                                                                <div class="price">
                                                                    <span>${{ number_format($blog->precio) }}</span>
                                                                    @if ($blog->descuento > 0)
                                                                        <span
                                                                            class="discount-price">${{ number_format($blog->precio - $blog->descuento) }}</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Single Product -->
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                                {{ $shop->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
