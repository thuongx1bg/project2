<header id="header">
    <!--header-->
    <div class="header_top">
        <!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"
                                    ><i class="fa fa-phone"></i> +2 95
                                    01 88 821</a
                                >
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-envelope"></i>
                                    info@domain.com</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#"
                                    ><i class="fa fa-facebook"></i
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-twitter"></i
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-linkedin"></i
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-dribbble"></i
                                ></a>
                            </li>
                            <li>
                                <a href="#"
                                    ><i class="fa fa-google-plus"></i
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header_top-->

    <div class="header-middle">
        <!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="index.html"
                            ><img
                                style="height: 39px; width: 139px"
                                src="{{ asset('https://file.hstatic.net/200000280689/file/newlogo_hc_den_0590f369aec14b9b9e925158204a3acf.png') }}"
                                alt=""
                        /></a>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href=""
                                    ><i class="fa fa-user"></i>
                                    Account</a
                                >
                            </li>

                            <li>
                                <a href="{{route('fe.checkout')}}"
                                    ><i class="fa fa-crosshairs"></i>
                                    Checkout</a
                                >
                            </li>
                            <li>
                                <a href="{{route('fe.cart')}}"
                                    ><i class="fa fa-shopping-cart"></i>
                                    Cart</a
                                >
                            </li>
                            <li>
                                <a href="{{route('fe.login')}}"
                                    ><i class="fa fa-lock"></i> Login</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-middle-->

    <div class="header-bottom">
        <!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button
                            type="button"
                            class="navbar-toggle"
                            data-toggle="collapse"
                            data-target=".navbar-collapse"
                        >
                            <span class="sr-only"
                                >Toggle navigation</span
                            >
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul
                            class="nav navbar-nav collapse navbar-collapse"
                        >
                            <li>
                                <a href="{{route('fe.home')}}" class="active"
                                    >Home</a
                                >
                            </li>
                            <li class="dropdown">
                                <a href="#"
                                    >Shop<i class="fa fa-angle-down"></i
                                ></a>
                                <ul role="menu" class="sub-menu">
                                    <li>
                                        <a href="product-details.html"
                                            >TOPS</a
                                        >
                                    </li>
                                    <li>
                                        <a href="product-details.html"
                                            >BOTTOMS
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-details.html"
                                            >SALE</a
                                        >
                                    </li>
                                    <li>
                                        <a href="product-details.html"
                                            >NEW ARRIVALS</a
                                        >
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{route('fe.contact-us')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-bottom-->
</header>