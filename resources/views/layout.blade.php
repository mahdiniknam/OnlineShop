<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="style/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="style/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="style/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href='http://www.fontonline.ir/css/BYekan.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
    @yield('doc')
    <title>Easy Shop</title>
</head>

<body>
    @yield('header')
    <div class="top2">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="login">
                        <a href="{{ route('home.index') }}" class="mybtn" style="padding-left: 150px;"><i
                                class="fa home"style="text-align: left;display: inline-block;"></i>Easy Shop</a>
                        @if (Auth::check())
                            <li>سلام،{{ Auth::user()->name }}!</li>
                            <li><a href="{{ route('logoutuser') }}">خروج</a></li>
                            <a href="{{ route('orders.show') }}" class="mybtn"><i class="fa fa-cart-arrow-down"></i>سبد
                                خرید</a>
                        @else
                            <a href="{{ route('showRegister') }}" class="mybtn"><i class="fa fa-user-plus"></i>ثبت
                                نام</a>
                            <a href="{{ route('showLoginUsers') }}" class="mybtn"><i class="fa fa-user-o"></i>ورود</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <form action="#" method="#">
                        @csrf
                        <input type="text" name="query" placeholder="کالای مورد نظر را جستجو کنید">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div><!--top2-->
    <!---------------------------------->
    @yield('category')
    <div class="social">
        <ul>
            <li><a href=""><i class="fa fa-instagram"></i></a></li>
            <li><a href=""><i class="fa fa-send"></i></a></li>
            <li><a href=""><i class="fa fa-facebook"></i></a></li>
            <li><a href=""><i class="fa fa-twitter"></i></a></li>
        </ul>
    </div>
    <!---------------------------------->
    @yield('main')
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-description">
                        <ul>
                            <li>تضمین اصالت کالاهای فروخته شده</li>
                            <li>فروش برند های معتبر</li>
                            <li>پاسخگویی 24 ساعته</li>
                            <li>امکان پرداخت آنلاین با کارت بانکی و پرداخت در محل</li>
                            <li>امکان بازگشت تا یک هفته در صورت عدم رضایت مشتری</li>
                            <li>خرید آسان و مطمئن</li>
                            <li>قیمت های مناسب</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-description2">
                        <ul>
                            <li><i class="fa fa-truck"></i>تحویل پستی سریع</li>
                            <li><i class="fa fa-plane"></i>ارسال با پست پیشتاز و سفارشی</li>
                            <li><i class="fa fa-cart-arrow-down"></i>خرید آسان و راحت</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="news-form">
                        <h5>در خبرنامه عضو شوید</h5>
                        <form action="">
                            <input type="email" placeholder="ایمیل خود را وارد کنید">
                            <button type="submit"><i class="fa fa-envelope-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    &copy;&nbsp;&nbsp;طراحی و کدنویسی محمد مهدی نیکنام&nbsp;&nbsp;&nbsp;&nbsp;
                    <span>mahdiniknam.ir</span>
                </div>
            </div>
        </div>
    </div>
    <!---------------------------------->
    <script src="js/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="js/jquery.simple.timer.js" type="text/javascript"></script>
    <script src="js/bootstrapp.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/js.js" type="text/javascript"></script>
</body>

</html>


</body>

</html>
