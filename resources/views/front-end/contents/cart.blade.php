@extends('front-end.index')
@section('title')
<title>Product detail</title>
@endsection
@section('css')
<title>Home</title>
@endsection
@section('front-end.contents')

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Sản phẩm</td>
                        <td class="description"></td>
                        <td class="price">Gía</td>
                        <td class="quantity">Số lượng</td>
                        <td class="total">Tổng tiền</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cart_product">
                            <a href=""
                                ><img
                                    style="height: 110px; width: 110px"
                                    src="https://product.hstatic.net/200000280689/product/02f08fdcbdcd489311dc_324121ec3032448893aa2d9d49517757_master.jpg"
                                    alt=""
                            /></a>
                        </td>
                        <td class="cart_description">
                            <h4>ÁO gió</h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>300.000 đ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="">
                                    +
                                </a>
                                <input
                                    class="cart_quantity_input"
                                    type="text"
                                    name="quantity"
                                    value="1"
                                    autocomplete="off"
                                    size="2"
                                />
                                <a class="cart_quantity_down" href="">
                                    -
                                </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">300.000 đ</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""
                                ><i class="fa fa-times"></i
                            ></a>
                        </td>
                    </tr>

                    <tr>
                        <td class="cart_product">
                            <a href=""
                                ><img
                                    style="height: 110px; width: 110px"
                                    src="https://product.hstatic.net/200000280689/product/02f08fdcbdcd489311dc_324121ec3032448893aa2d9d49517757_master.jpg"
                                    alt=""
                            /></a>
                        </td>
                        <td class="cart_description">
                            <h4>ÁO gió</h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>300.000 đ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="">
                                    +
                                </a>
                                <input
                                    class="cart_quantity_input"
                                    type="text"
                                    name="quantity"
                                    value="1"
                                    autocomplete="off"
                                    size="2"
                                />
                                <a class="cart_quantity_down" href="">
                                    -
                                </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">300.000 đ</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""
                                ><i class="fa fa-times"></i
                            ></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="cart_product">
                            <a href=""
                                ><img
                                    style="height: 110px; width: 110px"
                                    src="https://product.hstatic.net/200000280689/product/02f08fdcbdcd489311dc_324121ec3032448893aa2d9d49517757_master.jpg"
                                    alt=""
                            /></a>
                        </td>
                        <td class="cart_description">
                            <h4>ÁO gió</h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>300.000 đ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="">
                                    +
                                </a>
                                <input
                                    class="cart_quantity_input"
                                    type="text"
                                    name="quantity"
                                    value="1"
                                    autocomplete="off"
                                    size="2"
                                />
                                <a class="cart_quantity_down" href="">
                                    -
                                </a>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">300.000 đ</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""
                                ><i class="fa fa-times"></i
                            ></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Bạn có muốn thanh toán</h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tổng tiền <span>900.000 đ</span></li>

                        <li>Phí ship <span>Free</span></li>
                        <li>Tổng <span>900.000 đ</span></li>
                    </ul>
                    <a class="btn btn-default update" href=""
                        >Mua thêm</a
                    >
                    <a class="btn btn-default check_out" href=""
                        >Thanh toán</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#do_action-->

@endsection