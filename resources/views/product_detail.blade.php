@extends('layout')
@section('category')
 <div class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul>
                        @foreach ($categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection


@section('main')

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <title>Easy Shop</title>
      <link href="{{asset('style/font-awesome.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('style/bootstrap.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('style/owl.carousel.css')}}" rel="stylesheet" type="text/css">
      <link href="{{asset('style/owl.theme.default.css')}}" rel="stylesheet" type="text/css">
      <link href='http://www.fontonline.ir/css/BYekan.css' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
      <link href="{{  asset('style/style.css') }}" rel="stylesheet" type="text/css">
   </head>

<body>
     <body>
      <!---------------------------------->
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="single-box">
                  <div class="row">
                     <div class="col-md-7">
                        <h5>{{ $product->name }}</h5>
                        <h6>تبلت هوآوی 10 اینچ فورجی</h6>
                        <hr>
                        <hr>
                        <h3>{{ $product->price }}</h3>
                        <div  class="btn-single">
                            @if (Auth()->check())
                            <a href="#" class="add-to-cart" data-id="{{ $product->id }}" data-name="{{ $product->name }}" data-price="{{ $product->price }}"><i class="fa fa-cart-plus"></i>خرید آنلاین</a>
                                @else
                                <button id="login-warning">افزودن به سبد خرید</button>
                            @endif
                        </div>
                     </div>
                     <div class="col-md-5">
                        <div class="single-img">
                           <figure>
                              <img src="{{ asset('storage/' . $product->image) }}" class="w-100 s-img"  alt="{{ $product->name }}" data-zoom-image="img/single-tablet.jpg">
                           </figure>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!---------------------------------->
      {{-- <div class="container">
         <span class="releated-products">محصولات مرتبط</span>
         <hr>
         <div class="row">
            <div class="col-md-12">
               <div class="single-two-slider">
                  <div class="owl-carousel owl-theme ov-single-two">
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                     <div class="item">
                        <figure>
                           <a href=""><img src="img/Canon_EOS_400D.png" class="w-100" /></a>
                        </figure>
                        <h5>Samsung 500</h5>
                        <span>1,200,000 تومان</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <!---------------------------------->
      <!---------------------------------->

      <!---------------------------------->
      <script>
    document.querySelector('.add-to-cart').addEventListener('click', function() {
        let productId = this.getAttribute('data-id');
        let productName = this.getAttribute('data-name');
        let productPrice = this.getAttribute('data-price');

        let cart = JSON.parse(localStorage.getItem('cart')) || {};

        if (cart[productId]) {
            cart[productId].quantity++; // اگر محصول قبلاً اضافه شده، تعدادش رو زیاد کن
        } else {
            cart[productId] = {
                name: productName,
                price: productPrice,
                quantity: 1
            };
        }

        localStorage.setItem('cart', JSON.stringify(cart)); // ذخیره در لوکال استوریج
        alert('محصول با موفقیت به سبد خرید اضافه شد!');
    });
</script>
<script>
    document.getElementById('login-warning')?.addEventListener('click', function() {
        alert('لطفاً ابتدا وارد شوید!');
        window.location.href = "{{ route('login') }}";
    });
</script>
     <script src="{{asset('js/jquery-3.3.1.js')}}" type="text/javascript"></script>
      <script src="{{asset('js/jquery.simple.timer.js')}}" type="text/javascript"></script>
      <script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>
      <script src="{{asset('js/owl.carousel.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('js/js.js')}}" type="text/javascript"></script>
</body>

</html>
@endsection
