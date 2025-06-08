
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

    <body>

        <!---------------------------------->

        <!---------------------------------->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slider-box">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="col-md-6" style="padding-top: 20px;">
                                        <h4>Canon 638044</h4>
                                        <span>دوربین کانن سری 6</span>
                                        <p>دوربین کانن از سری 6 با لنز همراه.قابلیت تصویر برداری اچ دی.قابلیت تنظیم در حالت
                                            شب . دارای دو عدد باتری اضافی</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="img/p20lite-listimage-black.png" class="w-75">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-6" style="padding-top: 20px;">
                                        <h4>Huawei Tab G45</h4>
                                        <span>تبلت جی 5 هوآوی</span>
                                        <p>تبلت 10 اینج هوآوی . با قابلیت نصب سه عدد سیمکارت همزمان . دارای شبکه فورجی و
                                            اتصال سریع . دارای باتری اتمی و دوربین 13 مگاپیکسل</p>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="img/p20lite-listimage-black.png" class="w-75">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--slider-box-->
                </div>
            </div>
        </div>
        <!---------------------------------->
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="coopen">
                        {{-- <img src="img/coopen.png" class="w-100" /> --}}
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="vizheh">
                        <div class="col-md-6">
                            <div class="vizheh-img">
                                <img src="img/p20lite-listimage-black.png" class="w-100" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="vizheh-content">
                                <div><del>729,000 تومان</del></div>
                                <h4>685,000 تومان</h4>
                                <h3>Huawei Tab Y300G2</h3>
                                <ul>
                                    <li>حافظه داخلی 32 گیگابایت</li>
                                    <li>دوربین 13 مگاپیکسل</li>
                                </ul>
                                <hr>
                                <span>زمان باقیمانده تا پایان سفارش</span>
                                <div class="counter" data-minutes-left="1000"></div>
                            </div>
                        </div>
                        <div class="vizheh-tag">
                            <span>فرصت ویژه</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------->
       <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="one-slider">
                <h4>دوربین عکاسی</h4>
                <div class="owl-carousel owl-theme ov1">
                    @foreach ($dorbins as $dorbin)
                        <div class="item"> <!-- هر محصول باید یک "item" جدا باشد -->
                            <figure>
                                <a href="{{ route('product.show', $dorbin->id) }}"><img src="{{ asset('storage/' . $dorbin->image) }}" class="w-100" /></a>
                            </figure>
                            <h5>{{ $dorbin->name }}</h5>
                            <h6>{{ $dorbin->description }}</h6>
                            <span>{{ $dorbin->price }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

        <!---------------------------------->
        {{-- <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="book-baner">
                  <a href="#"><img src="img/book-baner.jpg" class="w-100" /></a>
                  <h4>کتاب های کنکور</h4>
               </div>
            </div>
         </div>
      </div> --}}
        <!---------------------------------->
        {{-- $phones     $phone --}}
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="one-slider">
                <h4>دوربین عکاسی</h4>
                <div class="owl-carousel owl-theme ov1">
                    @foreach ($phones as $phone)
                        <div class="item"> <!-- هر محصول باید یک "item" جدا باشد -->
                            <figure>
                                <a href="{{ route('product.show', $phone->id) }}"><img src="{{ asset('storage/' . $phone->image) }}" class="w-100" /></a>
                            </figure>
                            <h5>{{ $phone->name }}</h5>
                            <h6>{{ $phone->description }}</h6>
                            <span>{{ $phone->price }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

        <!---------------------------------->
        {{-- <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="bodybulding-baner">
                  <a href="#"><img src="img/bodybulding-baner.jpg" class="w-100" /></a>
                  <h4>مکمل های ورزشی</h4>
               </div>
            </div>
         </div>
      </div> --}}
        <!---------------------------------->
        {{-- $laptops  $laptop --}}
        <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="one-slider">
                <h4>دوربین عکاسی</h4>
                <div class="owl-carousel owl-theme ov1">
                    @foreach ($laptops as $laptop)
                        <div class="item"> <!-- هر محصول باید یک "item" جدا باشد -->
                            <figure>
                                <a href="{{ route('product.show', $laptop->id) }}"><img src="{{ asset('storage/' . $laptop->image) }}" class="w-100" /></a>
                            </figure>
                            <h5>{{ $laptop->name }}</h5>
                            <h6>{{ $laptop->description }}</h6>
                            <span>{{ $laptop->price }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

        <!---------------------------------->
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-content">
                        <figure>
                            <img src="img/off/watch/1.jpg" class="w-100">
                        </figure>
                        <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                        <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل
                            گوش...</p>
                        <ul>
                            <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                            <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                            <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                        </ul>
                        <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-content">
                        <figure>
                            <img src="img/off/watch/1.jpg" class="w-100">
                        </figure>
                        <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                        <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل
                            گوش...</p>
                        <ul>
                            <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                            <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                            <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                        </ul>
                        <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-content">
                        <figure>
                            <img src="img/off/watch/1.jpg" class="w-100">
                        </figure>
                        <h5><i class="fa fa-title"></i>گوشی هوشمند جیبی</h5>
                        <p>گوشی هوشمند جیبی تکنولوژی جدید کمپانی اپل،با خاصیت ضد آب بودن و حمل بسیار مخفی،باقابلیت حمل داخل
                            گوش...</p>
                        <ul>
                            <li><i class="fa fa-bars"></i>دسته بندی : تکنولوژی</li>
                            <li><i class="fa fa-calendar-o"></i>نوشته شده در : 97/10/20</li>
                            <li><i class="fa fa-user-o"></i>نویسنده : سئو 90</li>
                        </ul>
                        <a href="#" class="mybtn"><i class="fa fa-continuous"></i>ادامه مطلب&raquo;</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!---------------------------------->
        {{-- <div class="tab-box">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#watch"><i class="fa fa-gift"></i>ساعت مچی</a></li>
                <li><a data-toggle="tab" href="#badaligat"><i class="fa fa-gift"></i>بدلیجات</a></li>
                <li><a data-toggle="tab" href="#behdashti"><i class="fa fa-gift"></i>آرایشی و بهداشتی</a></li>
                <li><a data-toggle="tab" href="#bazi"><i class="fa fa-gift"></i>اسباب بازی</a></li>
                <li><a data-toggle="tab" href="#varzesh"><i class="fa fa-gift"></i>تجهیزات ورزشی</a></li>
                <li><a data-toggle="tab" href="#lebas"><i class="fa fa-gift"></i>لباس فصل</a></li>
            </ul>
            <div class="container">
                <div class="row">
                    <div class="tab-content">
                        <div id="watch" class="tab-pane fade">
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/watch/1.jpg" class="w-100" /></a>
                            </div>
                        </div>
                        <div id="badaligat" class="tab-pane fade">
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/badal/1.jpg" class="w-100" /></a>
                            </div>
                        </div>
                        <div id="behdashti" class="tab-pane fade">
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/behdashti/1.jpg" class="w-100" /></a>
                            </div>
                        </div>
                        <div id="bazi" class="tab-pane fade">
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/bazi/1.jpg" class="w-100" /></a>
                            </div>
                        </div>
                        <div id="varzesh" class="tab-pane fade">
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/varzesh/8.jpg" class="w-100" /></a>
                            </div>
                        </div>
                        <div id="lebas" class="tab-pane fade">
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                            <div class="col-md-3">
                                <a href="#"><img src="img/off/lebas/1.jpg" class="w-100" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        </div>
        </div>
        <!---------------------------------->
    @stop
