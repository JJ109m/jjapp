@extends('layouts.app')

@section('content')
    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">
                        <!-- Start Hero Slider -->
                        <div class="hero-slider">
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url({{ asset('backendprin/assets/images/hero/slider-bg1.jpg') }});">
                                <div class="content">
                                    <h2><span>No restocking fee ($35 savings)</span>
                                        M75 Sport Watch
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <h3><span>Now Only</span> $320.99</h3>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url({{ asset('backendprin/assets/images/hero/slider-bg2.jpg') }});">
                                <div class="content">
                                    <h2><span>Big Sale Offer</span>
                                        Get the Best Deal on CCTV Camera
                                    </h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.</p>
                                    <h3><span>Combo Only:</span> $590.00</h3>
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                        </div>
                        <!-- End Hero Slider -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner"
                                style="background-image: url('{{ asset('backendprin/assets/images/hero/slider-bnr.jpg') }}');">
                                <div class="content">
                                    <h2>
                                        <span>New line required</span>
                                        iPhone 12 Pro Max
                                    </h2>
                                    <h3>$259.99</h3>
                                </div>
                            </div>
                            <!-- End Small Banner -->
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Weekly Sale!</h2>
                                    <p>Saving up to 50% off all online store items this week.</p>
                                    <div class="button">
                                        <a class="btn" href="product-grids.html">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Start Small Banner -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <style>
        .blog-name {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>

    <!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Producto De Tendencia</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <style>
                    .product-image img {
                        width: 40%;
                        aspect-ratio: 3/2;
                        object-fit: contain;
                    }
                </style>
                @foreach ($ventas as $blog)
                    @if ($blog->disponibilidad)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
                            <div class="single-product" id="product-{{ $blog->id }}">
                                <div class="product-image">
                                    @if (isset($blog->imagenes[2]))
                                        <img src="/img/post/{{ $blog->imagenes[2] }}" style="width: auto; height: 200px;">
                                    @elseif (isset($blog->imagenes[0]))
                                        <img src="/img/post/{{ $blog->imagenes[0] }}" style="width: auto; height: 200px;">
                                    @else
                                        <img src="" alt="No hay Imagen" height="90px">
                                    @endif
                                    <div class="button">
                                        <a href="{{ $blog->nombre }}" class="btn add-to-cart"
                                            data-id="{{ $blog->id }}"><i class="lni lni-cart"></i> Add to Cart</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">{{ $blog->categoria->name }}</span>
                                    <h4 class="title">
                                        <a href="{{ route('ventasJJ.show', $blog->id) }}"
                                            class="blog-name">{{ $blog->nombre }}</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star"></i></li>
                                        <li><span>4.0 Review(s)</span></li>
                                    </ul>
                                    <div class="price">
                                        <span>${{ number_format($blog['precio']) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Trending Product Area -->

    <!-- Start Call Action Area -->
    <section class="call-action section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="inner">
                        <div class="content">
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Currently You are using free<br>
                                Lite version of ShopGrids</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Please, purchase full version of the template
                                to get all pages,<br> features and commercial license.</p>
                            <div class="button wow fadeInUp" data-wow-delay=".8s">
                                <a href="javascript:void(0)" class="btn">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->

    <!-- Start Banner Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner"
                        style="background-image:url('{{ asset('backendprin/assets/images/banner/banner-1-bg.jpg') }}')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('{{ asset('backendprin/assets/images/banner/banner-2-bg.jpg') }}')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="product-grids.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Start Shipping Info -->
    <section class="shipping-info">
        <div class="container">
            <ul>
                <!-- Free Shipping -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>
                <!-- Money Return -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Live Chat Or Call.</span>
                    </div>
                </li>
                <!-- Support 24/7 -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>
                <!-- Safe Payment -->
                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Shipping Info -->
    <!-- Botón para abrir el modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#errorModal">
        Mostrar Error
    </button>

    <!-- Modal de Error -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Error</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p id="errorMessage"></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            // Evento de clic para el botón "Add to Cart"
            $('.add-to-cart').click(function(e) {
                e.preventDefault();

                // Si el usuario está logueado, continuar con la función de agregar al carrito
                // Obtener el identificador del producto
                var productId = $(this).data('id');

                // Obtener los datos del producto correspondiente
                var productInfo = getProductInfo(productId);

                // Agregar los datos del producto al contenedor del carrito
                addProductToCart(productInfo);
            });

            // Función para obtener los datos del producto
            function getProductInfo(productId) {
                var productInfo = {};

                $.ajax({
                    url: '/get-product-info/' + productId,
                    type: 'GET',
                    dataType: 'json',
                    async: false,
                    success: function(response) {
                        productInfo = response;
                    },
                    error: function(xhr, textStatus, errorThrown) {
                        var errorMessage = 'Error al obtener los datos del producto: ' + xhr
                            .responseText;

                        // Mostrar el modal de error
                        $('#errorMessage').text(errorMessage);
                        $('#errorModal').modal('show');
                    }
                });

                return productInfo;
            }

            // Función para agregar los datos del producto al contenedor del carrito
            function addProductToCart(productInfo) {
                // Crear el elemento del producto
                var productElement = '<li>' +
                    '<a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>' +
                    '<div class="cart-img-head">' +
                    '<a class="cart-img" href="{{ route('ventasJJ.show', $blog->id) }}"><img src="/img/post/' +
                    productInfo.imagenes[3] + '" alt="#"></a>' +
                    '</div>' +
                    '<div class="content">' +
                    '<h4><a href="{{ route('ventasJJ.show', $blog->id) }}">' + productInfo.nombre + '</a></h4>' +
                    '<p class="quantity">1x - <span class="amount">' + productInfo.precio + '</span></p>' +
                    '</div>' +
                    '</li>';

                // Agregar el elemento del producto al contenedor del carrito
                $('.shopping-list').append(productElement);

                // Actualizar el contador de total de productos en el carrito
                var totalItems = $('.shopping-list li').length;
                $('.total-items').text(totalItems);
                $('.dropdown-cart-header span').text(totalItems);

                // Agregar el producto al array cartItems
                cartItems.push(productInfo);
            }

            // Evento de clic para eliminar un producto del carrito
            $(document).on('click', '.remove', function(e) {
                e.preventDefault();

                // Obtener el índice del producto en el carrito
                var index = $(this).closest('li').index();

                // Eliminar el producto del array cartItems
                cartItems.splice(index, 1);

                // Eliminar el elemento del producto del contenedor del carrito
                $(this).closest('li').remove();

                // Actualizar el contador de total de productos en el carrito
                var totalItems = cartItems.length;
                $('.total-items').text(totalItems);
                $('.dropdown-cart-header span').text(totalItems);
            });
        });
    </script>
@endsection
