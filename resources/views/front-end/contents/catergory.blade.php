@extends('front-end.index')
@section('title')
<title>Category</title>
@endsection
@section('front-end.contents')
<section>
    <div class="container">
        <div class="category-tab">
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li>
                        <a href="">Trang chủ /</a>
                    </li>
                    <li>
                        <a href="#blazers">Danh mục /</a>
                    </li>
                    <li>
                        <a href="#">TOPS</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('front-end.components.left-sidebar')
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">TOPS</h2>
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