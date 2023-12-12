@extends('layouts.app')

@section('content')
    <section class="item-details section">
        <div class="container">
            <div class="top-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-images">
                            <main id="gallery">

                                <style>
                                    .images {
                                        display: flex;
                                    }

                                    .img {
                                        transition: transform 0.3s;
                                    }

                                    .img:hover {
                                        transform: translate(10px, 10px);
                                    }

                                    .carousel-control-prev-icon,
                                    .carousel-control-next-icon {
                                        width: 30px;
                                        height: 30px;
                                        background-color: #212529;
                                        border-radius: 100%;
                                    }

                                    .carousel-control-prev-icon:hover,
                                    .carousel-control-next-icon:hover {
                                        opacity: 1;
                                    }

                                    @media (max-width: 978px) {

                                        .carousel-control-prev,
                                        .carousel-control-next,
                                        .images {
                                            display: none;
                                        }
                                    }

                                    .carousel-item img {
                                        width: 40%;
                                        aspect-ratio: 3/2;
                                        object-fit: contain;
                                    }
                                </style>

                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-container">
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </a>
                                        <ol class="carousel-indicators">
                                            @foreach ($producto->imagenes as $key => $imagen)
                                                <li data-bs-target="#carouselExampleIndicators"
                                                    data-bs-slide-to="{{ $key }}"
                                                    class="{{ $key == 0 ? 'active' : '' }}"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            @foreach ($producto->imagenes as $key => $imagen)
                                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                    <img src="{{ asset('img/post/' . $imagen) }}" class="d-block w-100"
                                                        alt="{{ $producto->nombre }}">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .images img {
                                        aspect-ratio: 2/1;
                                        object-fit: contain;
                                    }
                                </style>

                                <div class="images">
                                    @foreach ($producto->imagenes as $key => $imagen)
                                        <img class="img {{ $key == 0 ? 'active' : '' }}" alt="{{ $producto->nombre }}"
                                            src="{{ asset('img/post/' . $imagen) }}"
                                            data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="{{ $key }}">
                                    @endforeach
                                </div>

                                <script>
                                    // Verificar si hay más de 5 imágenes
                                    var imagesCount = document.querySelectorAll('.images img').length;
                                    if (imagesCount > 5) {
                                        // Agregar estilos para el scroll horizontal
                                        var imagesContainer = document.querySelector('.images');
                                        imagesContainer.style.overflowX = 'scroll';
                                        imagesContainer.style.whiteSpace = 'nowrap';
                                        imagesContainer.style.display = 'flex';

                                        // Establecer el ancho de cada imagen para que se muestren en una línea
                                        var imageWidth = document.querySelector('.images img').offsetWidth;
                                        var totalWidth = imageWidth * imagesCount;
                                        imagesContainer.style.width = totalWidth + 'px';

                                        // Agregar estilos de tamaño a las imágenes
                                        var images = imagesContainer.querySelectorAll('img');
                                        images.forEach(function(image) {
                                            image.style.height = '70px';
                                        });
                                    }
                                </script>


                                <!-- Modal -->
                                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="imageModalLabel">{{ $producto->nombre }}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div id="carouselModal" class="carousel slide" data-bs-ride="carousel">
                                                    <!-- Resto del código para mostrar todas las imágenes en el modal -->
                                                    <div id="carouselExampleIndicators" class="carousel slide"
                                                        data-bs-ride="carousel">
                                                        <div class="carousel-container">
                                                            <a class="carousel-control-prev"
                                                                href="#carouselExampleIndicators" role="button"
                                                                data-bs-slide="prev">
                                                                <span class="carousel-control-prev-icon"
                                                                    aria-hidden="true"></span>
                                                            </a>
                                                            <a class="carousel-control-next"
                                                                href="#carouselExampleIndicators" role="button"
                                                                data-bs-slide="next">
                                                                <span class="carousel-control-next-icon"
                                                                    aria-hidden="true"></span>
                                                            </a>
                                                            <ol class="carousel-indicators">
                                                                @foreach ($producto->imagenes as $key => $imagen)
                                                                    <li data-bs-target="#carouselExampleIndicators"
                                                                        data-bs-slide-to="{{ $key }}"
                                                                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                                                                @endforeach
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                @foreach ($producto->imagenes as $key => $imagen)
                                                                    <div
                                                                        class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                                                        <img src="{{ asset('img/post/' . $imagen) }}"
                                                                            class="d-block w-100"
                                                                            alt="{{ $producto->nombre }}">
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="images">
                                                        @foreach ($producto->imagenes as $key => $imagen)
                                                            <img class="img {{ $key == 0 ? 'active' : '' }}"
                                                                alt="{{ $producto->nombre }}"
                                                                src="{{ asset('img/post/' . $imagen) }}"
                                                                data-bs-target="#carouselExampleIndicators"
                                                                data-bs-slide-to="{{ $key }}">
                                                        @endforeach
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="product-info">
                            <h2 class="title">{{ $producto->nombre }}</h2>
                            <p class="category"><i class="lni lni-tag"></i> {{ $producto->categoria->name }}</p>
                            <p class="category">Serie:{{ $producto->serie }}</p>
                            <h3 class="price">${{ number_format($producto['precio']) }}</span></h3>
                            <p class="info-text">Last updated: {{ $producto->created_at->diffForHumans() }}</p>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group color-option">
                                        <label class="title-label" for="size">Choose color</label>
                                        <div class="single-checkbox checkbox-style-1">
                                            <input type="checkbox" id="checkbox-1" checked="">
                                            <label for="checkbox-1"><span></span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-2">
                                            <input type="checkbox" id="checkbox-2">
                                            <label for="checkbox-2"><span></span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-3">
                                            <input type="checkbox" id="checkbox-3">
                                            <label for="checkbox-3"><span></span></label>
                                        </div>
                                        <div class="single-checkbox checkbox-style-4">
                                            <input type="checkbox" id="checkbox-4">
                                            <label for="checkbox-4"><span></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group">
                                        <label for="color">Battery capacity</label>
                                        <select class="form-control" id="color">
                                            <option>5100 mAh</option>
                                            <option>6200 mAh</option>
                                            <option>8000 mAh</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <div class="form-group quantity">
                                        <label for="color">Quantity</label>
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="bottom-content">
                                <div class="row align-items-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="button ">
                                            <button class="btn" style="width: 100%;">Buy</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button cart-button">
                                            <button class="btn"><i class="lni lni-reload"></i> Add to Cart</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="wish-button">
                                            <button class="btn"><i class="lni lni-heart"></i> To Wishlist</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-details-info">
                <div class="single-block">
                    <h1>Descripcion</h1>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="info-body custom-responsive-margin">
                                <p>{!! $producto->descripcion !!}</p>
                                <h4>Features</h4>
                                <ul class="features">
                                    <li>Capture 4K30 Video and 12MP Photos</li>
                                    <li>Game-Style Controller with Touchscreen</li>
                                    <li>View Live Camera Feed</li>
                                    <li>Full Control of HERO6 Black</li>
                                    <li>Use App for Dedicated Camera Operation</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="info-body">
                                <h4>Specifications</h4>
                                <ul class="normal-list">
                                    <li><span>Weight:</span> 35.5oz (1006g)</li>
                                    <li><span>Maximum Speed:</span> 35 mph (15 m/s)</li>
                                    <li><span>Maximum Distance:</span> Up to 9,840ft (3,000m)</li>
                                    <li><span>Operating Frequency:</span> 2.4GHz</li>
                                    <li><span>Manufacturer:</span> GoPro, USA</li>
                                </ul>
                                <h4>Shipping Options:</h4>
                                <ul class="normal-list">
                                    <li><span>Courier:</span> 2 - 4 days, $22.50</li>
                                    <li><span>Local Shipping:</span> up to one week, $10.00</li>
                                    <li><span>UPS Ground Shipping:</span> 4 - 6 days, $18.00</li>
                                    <li><span>Unishop Global Export:</span> 3 - 4 days, $25.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="single-block give-review">
                            <h4>4.5 (Overall)</h4>
                            <ul>
                                <li>
                                    <span>5 stars - 38</span>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                </li>
                                <li>
                                    <span>4 stars - 10</span>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                </li>
                                <li>
                                    <span>3 stars - 3</span>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                </li>
                                <li>
                                    <span>2 stars - 1</span>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                </li>
                                <li>
                                    <span>1 star - 0</span>
                                    <i class="lni lni-star-filled"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                    <i class="lni lni-star"></i>
                                </li>
                            </ul>

                            <button type="button" class="btn review-btn" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Leave a Review
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="single-block">
                            <div class="reviews">
                                <h4 class="title">Latest Reviews</h4>

                                <div class="single-review">
                                    <img alt="#" data-pagespeed-url-hash="1824239764"
                                        src="assets/images/blog/xcomment1.jpg.pagespeed.ic.nTUzOhBqKr.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                    <div class="review-info">
                                        <h4>Awesome quality for the price
                                            <span>Jacob Hammond
                                            </span>
                                        </h4>
                                        <ul class="stars">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor...</p>
                                    </div>
                                </div>


                                <div class="single-review">
                                    <img alt="#" data-pagespeed-url-hash="2118739685"
                                        src="assets/images/blog/xcomment2.jpg.pagespeed.ic.j3fObWuXzs.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                    <div class="review-info">
                                        <h4>My husband love his new...
                                            <span>Alex Jaza
                                            </span>
                                        </h4>
                                        <ul class="stars">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor...</p>
                                    </div>
                                </div>


                                <div class="single-review">
                                    <img alt="#" data-pagespeed-url-hash="2413239606"
                                        src="assets/images/blog/xcomment3.jpg.pagespeed.ic.-bSrbhJC3m.webp"
                                        onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);">
                                    <div class="review-info">
                                        <h4>I love the built quality...
                                            <span>Jacob Hammond
                                            </span>
                                        </h4>
                                        <ul class="stars">
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                            <li><i class="lni lni-star-filled"></i></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor...</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('js')
        <script>
            function changeImage(source) {
                document.getElementById('current').src = source;
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $(".img").hover(
                    function() {
                        var index = $(this).data('bs-slide-to');
                        $('.carousel-indicators li').removeClass('active');
                        $(`.carousel-indicators li[data-bs-slide-to="${index}"]`).addClass('active');
                        $('.carousel-item').removeClass('active');
                        $(`.carousel-item:nth-child(${index + 1})`).addClass('active');
                    }
                );
            });
        </script>

        <script>
            // JavaScript para abrir el modal al tocar la imagen del carrusel
            document.addEventListener('DOMContentLoaded', function() {
                const carouselImages = document.querySelectorAll('#carouselExampleIndicators .carousel-item img');
                const modalCarousel = new bootstrap.Carousel(document.getElementById('carouselModal'));

                carouselImages.forEach(function(image) {
                    image.addEventListener('click', function() {
                        modalCarousel.to(parseInt(image.dataset.bsSlideTo));
                        $('#imageModal').modal('show');
                    });
                });
            });
        </script>
    @endsection
