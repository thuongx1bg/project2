@extends('front-end.index')
@section('title')
<title>Product detail</title>
@endsection
@section('css')
<title>Home</title>
@endsection
@section('front-end.contents')

<section id="form">
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form">
                    <!--login form-->
                    <h2>Đăng nhập</h2>
                    <form id="login-form" action="#">
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <span>
                            <input type="checkbox" class="checkbox" />
                            Ghi nhớ
                        </span>
                        <button
                            onclick="  validateForm()"
                            type="submit"
                            class="btn btn-default"
                        >
                            Đăng nhập
                        </button>
                    </form>
                </div>
                <!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Hoặc</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>Đăng ký!</h2>
                    <form id="resigner" action="#">
                        <input type="text" placeholder="Name" />
                        <input
                            type="email"
                            placeholder="Email Address"
                        />
                        <input type="password" placeholder="Password" />
                        <button
                            onclick="  validateForm2()"
                            type="submit"
                            class="btn btn-default"
                        >
                            Đăng ký
                        </button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->

@endsection