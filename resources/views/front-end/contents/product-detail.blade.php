@extends('front-end.index')
@section('title')
<title>Product detail</title>
@endsection
@section('css')
<title>Home</title>
@endsection
@section('front-end.contents')

<section>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                
               @include('front-end.components.left-sidebar')
            </div>

            <div class="col-sm-9 padding-right">
                <div class="product-details">
                    <!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img
                                src="https://product.hstatic.net/200000280689/product/chaos_trc_febd51f7f4e74844a4691129ac96a37f_master.jpg"
                                alt=""
                            />
                        </div>
                        <div
                            id="similar-product"
                            class="carousel slide"
                            data-ride="carousel"
                        >
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href=""
                                        ><img
                                            style="
                                                height: 84px;
                                                width: 84px;
                                            "
                                            src="https://product.hstatic.net/200000280689/product/chaos_trc_febd51f7f4e74844a4691129ac96a37f_master.jpg"
                                            alt=""
                                    /></a>
                                    <a href=""
                                        ><img
                                            style="
                                                height: 84px;
                                                width: 84px;
                                            "
                                            src="https://product.hstatic.net/200000280689/product/chaos_trc_febd51f7f4e74844a4691129ac96a37f_master.jpg"
                                            alt=""
                                    /></a>
                                    <a href=""
                                        ><img
                                            style="
                                                height: 84px;
                                                width: 84px;
                                            "
                                            src="https://product.hstatic.net/200000280689/product/chaos_45850d84a98f4f5991153d7dac32519a_master.jpg"
                                            alt=""
                                    /></a>
                                </div>
                                <div class="item">
                                    <a href=""
                                        ><img
                                            style="
                                                height: 84px;
                                                width: 84px;
                                            "
                                            src="https://product.hstatic.net/200000280689/product/chaos_trc_febd51f7f4e74844a4691129ac96a37f_master.jpg"
                                            alt=""
                                    /></a>
                                    <a href=""
                                        ><img
                                            style="
                                                height: 84px;
                                                width: 84px;
                                            "
                                            src="https://product.hstatic.net/200000280689/product/chaos_trc_febd51f7f4e74844a4691129ac96a37f_master.jpg"
                                            alt=""
                                    /></a>
                                    <a href=""
                                        ><img
                                            style="
                                                height: 84px;
                                                width: 84px;
                                            "
                                            src="https://product.hstatic.net/200000280689/product/chaos_45850d84a98f4f5991153d7dac32519a_master.jpg"
                                            alt=""
                                    /></a>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a
                                class="left item-control"
                                href="#similar-product"
                                data-slide="prev"
                            >
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a
                                class="right item-control"
                                href="#similar-product"
                                data-slide="next"
                            >
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information">
                            <!--/product-information-->
                            <img
                                src="images/product-details/new.jpg"
                                class="newarrival"
                                alt=""
                            />
                            <h2>Chaos Tee - Beige</h2>
                            <p>Web ID: 1089772</p>
                            <img
                                src="images/product-details/rating.png"
                                alt=""
                            />
                            <span>
                                <span>360,000₫</span>
                                <label>Quantity:</label>
                                <input type="text" value="3" />
                                <button
                                    type="button"
                                    class="btn btn-fefault cart"
                                >
                                    <i class="fa fa-shopping-cart"></i>
                                    Thêm giỏ hàng
                                </button>
                            </span>
                            <p><b>Tình trạng:</b> Còn hàng</p>

                            <p><b>Brand:</b> H-CLUB</p>
                        </div>
                        <!--/product-information-->
                    </div>
                </div>
                <!--/product-details-->

                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">
                        Sản phẩm liên quan
                    </h2>

                    <div
                        id="recommended-item-carousel"
                        class="carousel slide"
                        data-ride="carousel"
                    >
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div
                                                class="productinfo text-center"
                                            >
                                                <img
                                                    src="https://product.hstatic.net/200000280689/product/5ed568d2ccec03b25afd_3ac02288fad04fd583c137524736cd44_master.jpg"
                                                    alt=""
                                                />
                                                <h2>300.000 vnđ</h2>
                                                <p>High club clothes</p>
                                                <button
                                                    type="button"
                                                    class="btn btn-default add-to-cart"
                                                >
                                                    <i
                                                        class="fa fa-shopping-cart"
                                                    ></i
                                                    >Thêm giỏ hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div
                                                class="productinfo text-center"
                                            >
                                                <img
                                                    src="https://product.hstatic.net/200000280689/product/564932aedf41161f4f50_db6632734328484fa04976d53da785f3_master.jpg"
                                                    alt=""
                                                />
                                                <h2>300.000 vnđ</h2>
                                                <p>High club clothes</p>
                                                <button
                                                    type="button"
                                                    class="btn btn-default add-to-cart"
                                                >
                                                    <i
                                                        class="fa fa-shopping-cart"
                                                    ></i
                                                    >Thêm giỏ hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div
                                                class="productinfo text-center"
                                            >
                                                <img
                                                    src="https://product.hstatic.net/200000280689/product/plannet_trc_5f24df1894014531b5663c9ab116df0d_master.jpg"
                                                    alt=""
                                                />
                                                <h2>300.000 vnđ</h2>
                                                <p>High club clothes</p>
                                                <button
                                                    type="button"
                                                    class="btn btn-default add-to-cart"
                                                >
                                                    <i
                                                        class="fa fa-shopping-cart"
                                                    ></i
                                                    >Thêm giỏi hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div
                                                class="productinfo text-center"
                                            >
                                                <img
                                                    src="https://product.hstatic.net/200000280689/product/5ed568d2ccec03b25afd_3ac02288fad04fd583c137524736cd44_master.jpg"
                                                    alt=""
                                                />
                                                <h2>300.000 vnđ</h2>
                                                <p>High club clothes</p>
                                                <button
                                                    type="button"
                                                    class="btn btn-default add-to-cart"
                                                >
                                                    <i
                                                        class="fa fa-shopping-cart"
                                                    ></i
                                                    >Thêm giỏ hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div
                                                class="productinfo text-center"
                                            >
                                                <img
                                                    src="https://product.hstatic.net/200000280689/product/5ed568d2ccec03b25afd_3ac02288fad04fd583c137524736cd44_master.jpg"
                                                    alt=""
                                                />
                                                <h2>300.000 vnđ</h2>
                                                <p>High club clothes</p>
                                                <button
                                                    type="button"
                                                    class="btn btn-default add-to-cart"
                                                >
                                                    <i
                                                        class="fa fa-shopping-cart"
                                                    ></i
                                                    >Thêm giỏ hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div
                                                class="productinfo text-center"
                                            >
                                                <img
                                                    src="https://product.hstatic.net/200000280689/product/5ed568d2ccec03b25afd_3ac02288fad04fd583c137524736cd44_master.jpg"
                                                    alt=""
                                                />
                                                <h2>300.000 vnđ</h2>
                                                <p>High club clothes</p>
                                                <button
                                                    type="button"
                                                    class="btn btn-default add-to-cart"
                                                >
                                                    <i
                                                        class="fa fa-shopping-cart"
                                                    ></i
                                                    >Thêm giỏ hàng
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a
                            class="left recommended-item-control"
                            href="#recommended-item-carousel"
                            data-slide="prev"
                        >
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a
                            class="right recommended-item-control"
                            href="#recommended-item-carousel"
                            data-slide="next"
                        >
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!--/recommended_items-->
            </div>
        </div>
    </div>
</section>
@endsection