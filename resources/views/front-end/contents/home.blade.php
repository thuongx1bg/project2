@extends('front-end.index')
@section('title')
<title>Home</title>
@endsection
@section('css')
<title>Home</title>
@endsection
@section('front-end.contents')
<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div
                    id="slider-carousel"
                    class="carousel slide"
                    data-ride="carousel"
                >
                    <ol class="carousel-indicators">
                        <li
                            data-target="#slider-carousel"
                            data-slide-to="0"
                            class="active"
                        ></li>
                        <li
                            data-target="#slider-carousel"
                            data-slide-to="1"
                        ></li>
                        <li
                            data-target="#slider-carousel"
                            data-slide-to="2"
                        ></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>H</span>-CLUB</h1>
                                <h2>Founder Van Thuong</h2>
                                <p>Chất lượng tạo nên thương hiệu</p>
                                <button
                                    type="button"
                                    class="btn btn-default get"
                                >
                                    Mua ngay
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img
                                    src="https://file.hstatic.net/200000280689/file/w3_8b8f52d88bc9448c8c29e8dfbe378166.jpg"
                                    class="girl img-responsive"
                                    alt=""
                                />
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>H</span>-CLUB</h1>
                                <h2>Founder Thu Tra</h2>
                                <p>Chất lượng tạo nên thương hiệu.</p>
                                <button
                                    type="button"
                                    class="btn btn-default get"
                                >
                                    Mua ngay
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img
                                    src="https://file.hstatic.net/200000280689/file/w1_c237390c0216408a9f9511bb569e9826.jpg"
                                    class="girl img-responsive"
                                    alt=""
                                />
                            </div>
                        </div>

                        <div class="item">
                            <div class="col-sm-6">
                                <h1><span>H</span>-CLUB</h1>
                                <h2>Founder Thu Tra</h2>
                                <p>Chất lượng tạo nên thương hiệu.</p>
                                <button
                                    type="button"
                                    class="btn btn-default get"
                                >
                                    Mua ngay
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <img
                                    src="https://file.hstatic.net/200000280689/file/w2_ac05ac28a33f4e4d97c5448a065e0ba3.jpg"
                                    class="girl img-responsive"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>

                    <a
                        href="#slider-carousel"
                        class="left control-carousel hidden-xs"
                        data-slide="prev"
                    >
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a
                        href="#slider-carousel"
                        class="right control-carousel hidden-xs"
                        data-slide="next"
                    >
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/slider-->
<section>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                
               @include('front-end.components.left-sidebar')
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">NEW ARRIVALS</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img
                                        src="https://product.hstatic.net/200000280689/product/912bdbc2e834276a7e25_c42b3e9b1bf0486786956bfb45e8f1eb_master.jpg"
                                        alt=""
                                    />
                                    <h2>300.000 vnđ</h2>
                                    <p>Highclub New Arrivals</p>
                                    
                                    <a
                                        href="{{route('fe.product_detail')}}"
                                        class="btn btn-default add-to-cart"
                                        ><i
                                            class="fa fa-shopping-cart"
                                        ></i
                                        >Thêm giỏ hàng</a
                                    >
                                </div>
                            </div>
                            <div class="choose"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img
                                        src="https://product.hstatic.net/200000280689/product/a0caf9fb-a71b-43eb-a927-e3a8a846cce0_81adff8772054dbd82d50aafa4ee75fd_master.jpeg"
                                        alt=""
                                    />
                                    <h2>300.000 vnđ</h2>
                                    <p>Highclub New Arrivals</p>
                                    <a
                                        href="#"
                                        class="btn btn-default add-to-cart"
                                        ><i
                                            class="fa fa-shopping-cart"
                                        ></i
                                        >Thêm giỏ hàng</a
                                    >
                                </div>
                            </div>
                            <div class="choose"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img
                                        src="https://product.hstatic.net/200000280689/product/plannet_trc_5f24df1894014531b5663c9ab116df0d_master.jpg"
                                        alt=""
                                    />
                                    <h2>300.000 vnđ</h2>
                                    <p>Highclub New Arrivals</p>
                                    <a
                                        href="#"
                                        class="btn btn-default add-to-cart"
                                        ><i
                                            class="fa fa-shopping-cart"
                                        ></i
                                        >Thêm giỏ hàng</a
                                    >
                                </div>
                            </div>
                            <div class="choose"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img
                                        src="https://product.hstatic.net/200000280689/product/chaos_trc_febd51f7f4e74844a4691129ac96a37f_master.jpg"
                                        alt=""
                                    />
                                    <h2>300.000 vnđ</h2>
                                    <p>Highclub New Arrivals</p>
                                    <a
                                        href="#"
                                        class="btn btn-default add-to-cart"
                                        ><i
                                            class="fa fa-shopping-cart"
                                        ></i
                                        >Thêm giỏ hàng</a
                                    >
                                </div>

                                <img
                                    src="images/home/new.png"
                                    class="new"
                                    alt=""
                                />
                            </div>
                            <div class="choose"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img
                                        src="https://product.hstatic.net/200000280689/product/f5c925ae400f8c51d51e_83ec674983a04cf58fe45d0717035925_master.jpg"
                                        alt=""
                                    />
                                    <h2>300.000 vnđ</h2>
                                    <p>Highclub New Arrivals</p>
                                    <a
                                        href="#"
                                        class="btn btn-default add-to-cart"
                                        ><i
                                            class="fa fa-shopping-cart"
                                        ></i
                                        >Thêm giỏ hàng</a
                                    >
                                </div>

                                <img
                                    src="images/home/sale.png"
                                    class="new"
                                    alt=""
                                />
                            </div>
                            <div class="choose"></div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img
                                        src="https://product.hstatic.net/200000280689/product/9675830be6aa2af473bb_6c2f087617c5425d9178b0105dcd3557_master.jpg"
                                        alt=""
                                    />
                                    <h2>300.000 vnđ</h2>
                                    <p>Highclub New Arrivals</p>
                                    <a
                                        href="#"
                                        class="btn btn-default add-to-cart"
                                        ><i
                                            class="fa fa-shopping-cart"
                                        ></i
                                        >Thêm giỏ hàng</a
                                    >
                                </div>
                            </div>
                            <div class="choose"></div>
                        </div>
                    </div>
                </div>
                <!--features_items-->
            </div>
        </div>
    </div>
</section>
@endsection