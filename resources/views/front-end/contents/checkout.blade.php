@extends('front-end.index')
@section('title')
<title>Checkout</title>
@endsection
@section('css')

@endsection
@section('front-end.contents')
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div>
        <!--/breadcrums-->

        <div class="step-one">
            <h2 class="heading">Điền thông tin</h2>
        </div>

        <div class="shopper-informations">
            <div class="row">
                <div class="col-sm-3">
                    <div class="shopper-info">
                        <p>Thông tin giao hàng</p>
                        <form>
                            <input
                                type="text"
                                placeholder="Họ tên người nhận"
                            />
                            <input
                                type="text"
                                placeholder="Số điện thoại"
                            />
                            <input type="text" placeholder="Địa chỉ" />
                            <input type="text" placeholder="Ghi chú" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-payment">
            <h2>Hóa đơn</h2>
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
        <div class="payment-options">
            <span>
                <label
                    ><input type="checkbox" /> Thanh toán qua thẻ ngân
                    hàng</label
                >
            </span>
            <span>
                <label
                    ><input type="checkbox" /> Thanh toán khi nhận
                    hàng</label
                >
                <br />
                <p>Ngân hàng : Viettin bank</p>
                <br />
                Tên chủ thẻ: Luong Thi Thu Tra
                <br />
                <br />
                Số tài khoản : 12345678
                <br />
                <br />
                <a class="btn btn-default check_out" href=""
                    >Thanh toán</a
                >
            </span>
        </div>
    </div>
</section>
<!--/#cart_items-->
@endsection