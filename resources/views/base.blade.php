<!DOCTYPE html>
<html lang="fa" dir="rtl">

<!-- Mirrored from rubik-market-html.wbrk.ir/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:32:39 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>قالب فروشگاهی روبیک مارکت</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/aos-master/dist/aos.css">
    <link rel="stylesheet" href="assets/plugins/hover-master/css/hover-min.css">
    <link rel="stylesheet" href="assets/css/ionicons.css">
    <link rel="stylesheet" href="assets/css/droopmenu.css">
    <link rel="stylesheet" href="assets/css/highlight.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- <link rel="stylesheet" href="assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/aos-master/dist/aos.css">
    <link rel="stylesheet" href="assets/plugins/hover-master/css/hover-min.css">
    <link rel="stylesheet" href="assets/css/ionicons.css">
    <link rel="stylesheet" href="assets/css/droopmenu.css">
    <link rel="stylesheet" href="assets/css/highlight.css">
    <link rel="stylesheet" href="assets/css/nouislider.min.css"> -->

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- /CSS Styles -->
    <link rel="stylesheet" href="assets/css/error-404.css">
    <style>
        .but_s{
            background: inherit !important;
            border: 0;
        }
        .post-image{
            pointer-events: none;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>
<body>
<!-- Header -->
<section id="header">
    <!-- Top NavBar -->
    <div id="encode4325436">
        <div class="container">
            <div class="row">
                <div class="col-8 d-none d-md-block">
                    <ul>
                        <li><a href="{{route('index')}}">صفحه نخست</a></li>
                        <li><a href="{{route('about')}}">درباره ما</a></li>
                        <li><a href="{{route('contact')}}">تماس با ما</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-4 text-center text-md-end" id="top-encode43vfbb65gtabfb">
                    <span>این سایت یک نمونه کار است و کارکرد تجاری ندارد</span>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top NavBar -->
    <!-- Search NavBar -->
    <div id="encode43254bvfb">
        <div class="container pt-1">
            <div class="row py-3 align-content-center">
                <div class="col-12 col-md-3 col-xl-2 text-center text-md-start pb-2" id="encode4326523bvfb">
                    <a href={{route('index')}}>
                        <img src="assets/images/logo.png" alt=""> روبیک مارکت
                    </a>
                </div>
                <div class="col-12 col-md-5 col-xl-6">
                    <form action="{{route('products')}}" method="get">
                    <div id="search-bar">
                        <button class="but_s" type="submit"><i class="fa fa-search"></i></button>
                        <input name="search" type="text" placeholder="جستجو کنید...">
                    </div></form>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        @guest
                        <div class="col-12 col-md-7 col-lg-6 text-center" id="btn-login-register">
                            <a href="{{route('login')}}">ورود</a> /
                            <a href="{{route('login')}}">عضویت</a>
                        </div>
                        @else
                        <div class="col-12 col-md-7 col-lg-6 text-center" id="btn-login-register">
                            <a href="">{{Auth::user()->name}}</a>
                        </div>
                        @endguest
                        <div class="col-12 col-md-5 col-lg-6">
                            <a href={{route('cart')}}>
                                <div class="btn btn-warning w-100"><i class="fa fa-shopping-cart"></i>&nbsp;<span class="d-md-none d-lg-inline-block">سبد خرید</span> (2)</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Search NavBar -->
    <!-- Main NavBar -->
    <div id="main-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="droopmenu-navbar dmarrow-down droopmenu-horizontal dmpos-top dmfade">
                        <div class="droopmenu-inner">
                            <div class="droopmenu-header">
                                <a href="#" class="droopmenu-toggle"><i class="dm-burg"></i></a>
                                <span class="d-md-none">منوی فروشگاه</span>
                            </div>
                            <!-- Header Mega Menu-->
                            <div class="droopmenu-nav">
                                <div class="droopmenu-nav-wrap">
                                    <div class="droopmenu-navi">
                                        <ul class="droopmenu">
                                            <li class="droopmenu-parent" aria-haspopup="true">
                                                <a href="#" aria-expanded="false"><i class="fa fa-bars"></i>&nbsp;&nbsp;گروه های محصولات<em class="droopmenu-topanim"></em></a><div class="dm-arrow"></div>
                                                <ul class="droopmenu-grid droopmenu-grid-9">
                                                    <li class="droopmenu-tabs droopmenu-tabs-vertical">
                                                        <div class="droopmenu-tabsection droopmenu-tab-active" id="droopmenutab10">
                                                            <a class="droopmenu-tabheader" href="#">کالای دیجیتال</a>
                                                            <div class="droopmenu-tabcontent">
                                                                <div class="droopmenu-row">
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>صوت</h4></li>
                                                                        <li><a href="products.html">رادیو دیجیتال</a></li>
                                                                        <li><a href="products.html">ضبط صوت</a></li>
                                                                        <li><a href="products.html">اسپیکر</a></li>
                                                                        <li><a href="products.html">هدفون</a></li>
                                                                        <li><a href="products.html">میکروفن</a></li>
                                                                        <li><h4>گوشی موبایل</h4></li>
                                                                        <li><a href="products.html">گوشی موبایل</a></li>
                                                                        <li><a href="products.html">تبلت</a></li>
                                                                        <li><a href="products.html">کیف و کاور</a></li>
                                                                        <li><a href="products.html">جانبی موبایل</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>تصویر</h4></li>
                                                                        <li><a href="products.html">ال سی دی</a></li>
                                                                        <li><a href="products.html">تلویزیون</a></li>
                                                                        <li><a href="products.html">گیرنده دیجیتال</a></li>
                                                                        <li><h4>کنسول بازی</h4></li>
                                                                        <li><a href="products.html">پلی استیشن 4</a></li>
                                                                        <li><a href="products.html">پلی استیشن 3</a></li>
                                                                        <li><a href="products.html">پلی استیشن 2</a></li>
                                                                        <li><a href="products.html">ایکس باکس 360</a></li>
                                                                        <li><a href="products.html">نینتندو</a></li>
                                                                        <li><a href="products.html">بازی کامپیوتری</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4 d-none d-lg-inline-block">
                                                                        <li><img src="assets/images/megamenu/megamenu-image1.png" alt=""></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="droopmenu-tabsection" id="droopmenutab11">
                                                            <a class="droopmenu-tabheader" href="#">لوازم منزل</a>
                                                            <div class="droopmenu-tabcontent">
                                                                <div class="droopmenu-row">
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>مبلمان</h4></li>
                                                                        <li><a href="products.html">مبلمان اتاق</a></li>
                                                                        <li><a href="products.html">مبل تکی</a></li>
                                                                        <li><a href="products.html">مبلمان کودک</a></li>
                                                                        <li><a href="products.html">میز ناهارخوری</a></li>
                                                                        <li><a href="products.html">مبلمان اداری</a></li>
                                                                        <li><a href="products.html">مبل تخت شو</a></li>
                                                                        <li><a href="products.html">مبلمان راحتی</a></li>
                                                                        <li><a href="products.html">گل میز</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>دکوراسیون</h4></li>
                                                                        <li><a href="products.html">تابلوهای دکوری</a></li>
                                                                        <li><a href="products.html">استیکر</a></li>
                                                                        <li><a href="products.html">دیوارپوش</a></li>
                                                                        <li><a href="products.html">کاغذ دیواری</a></li>
                                                                        <li><a href="products.html">کفپوش</a></li>
                                                                        <li><a href="products.html">موکت</a></li>
                                                                        <li><a href="products.html">لوستر</a></li>
                                                                        <li><a href="products.html">لوازم دکوری</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4 d-none d-lg-inline-block">
                                                                        <li><img src="assets/images/megamenu/megamenu-image2.png" alt=""></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="droopmenu-tabsection" id="droopmenutab12">
                                                            <a class="droopmenu-tabheader" href="#">مد  و پوشاک</a>
                                                            <div class="droopmenu-tabcontent">
                                                                <div class="droopmenu-row">
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>مردانه</h4></li>
                                                                        <li><a href="products.html">شلوار</a></li>
                                                                        <li><a href="products.html">پیراهن</a></li>
                                                                        <li><a href="products.html">تیشرت</a></li>
                                                                        <li><a href="products.html">کفش</a></li>
                                                                        <li><a href="products.html">کلاه</a></li>
                                                                        <li><a href="products.html">کمربند</a></li>
                                                                        <li><a href="products.html">عینک</a></li>
                                                                        <li><a href="products.html">ساعت</a></li>
                                                                        <li><a href="products.html">لباس زیر</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>زنانه</h4></li>
                                                                        <li><a href="products.html">روسری</a></li>
                                                                        <li><a href="products.html">چادر</a></li>
                                                                        <li><a href="products.html">مانتو</a></li>
                                                                        <li><a href="products.html">شلوار</a></li>
                                                                        <li><a href="products.html">ساپورت</a></li>
                                                                        <li><a href="products.html">تی شرت</a></li>
                                                                        <li><a href="products.html">عینک</a></li>
                                                                        <li><a href="products.html">ساعت</a></li>
                                                                        <li><a href="products.html">لباس زیر</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4 d-none d-lg-inline-block">
                                                                        <li><img src="assets/images/megamenu/megamenu-image3.png" alt=""></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="droopmenu-tabsection" id="droopmenutab13">
                                                            <a class="droopmenu-tabheader" href="#">فرهنگ و هنر</a>
                                                            <div class="droopmenu-tabcontent">
                                                                <div class="droopmenu-row">
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>آلات موسیقی</h4></li>
                                                                        <li><a href="products.html">گیتار</a></li>
                                                                        <li><a href="products.html">ویالون</a></li>
                                                                        <li><a href="products.html">ارگ</a></li>
                                                                        <li><a href="products.html">پیانو</a></li>
                                                                        <li><a href="products.html">سنتور</a> </li>
                                                                        <li><a href="products.html">ساز دهنی</a></li>
                                                                        <li><a href="products.html">گیتار برقی</a></li>
                                                                        <li><a href="products.html">درام</a></li>
                                                                        <li><a href="products.html">تجهیزات استدیو</a></li>
                                                                        <li><a href="products.html">جانبی موسیقی</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>صنایع دستی</h4></li>
                                                                        <li><a href="products.html">کالاهای مسی</a></li>
                                                                        <li><a href="products.html">معرق</a></li>
                                                                        <li><a href="products.html">سفال</a></li>
                                                                        <li><a href="products.html">لعلینه</a> </li>
                                                                        <li><a href="products.html">محصولات چرمی</a></li>
                                                                        <li><a href="products.html">تابلو و ساعت</a></li>
                                                                        <li><a href="products.html">میناکاری</a></li>
                                                                        <li><a href="products.html">سوزن دوزی</a></li>
                                                                        <li><a href="products.html">فیروزه کوبی</a></li>
                                                                        <li><a href="products.html">خاتم و منبت</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4 d-none d-lg-inline-block">
                                                                        <li><img src="assets/images/megamenu/megamenu-image4.png" alt=""></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="droopmenu-tabsection" id="droopmenutab14">
                                                            <a class="droopmenu-tabheader" href="#">سلامت و زیبایی</a>
                                                            <div class="droopmenu-tabcontent">
                                                                <div class="droopmenu-row">
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>محصولات</h4></li>
                                                                        <li><a href="products.html">لوازم آرایشی</a></li>
                                                                        <li><a href="products.html">شامپو</a></li>
                                                                        <li><a href="products.html">نرم کننده</a></li>
                                                                        <li><a href="products.html">برس و شانه</a></li>
                                                                        <li><a href="products.html">انواع ماسک</a></li>
                                                                        <li><a href="products.html">تقویت کننده مو</a></li>
                                                                        <li><a href="products.html">رنگ مو</a></li>
                                                                        <li><a href="products.html">دستمال کاغذی</a></li>
                                                                        <li><a href="products.html">سایر محصولات</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>برند ها</h4></li>
                                                                        <li><a href="products.html">صحت</a></li>
                                                                        <li><a href="products.html">پرژک</a></li>
                                                                        <li><a href="products.html">داروگر</a></li>
                                                                        <li><a href="products.html">طبیعت</a></li>
                                                                        <li><a href="products.html">گلرنگ</a></li>
                                                                        <li><a href="products.html">گلنار</a></li>
                                                                        <li><a href="products.html">کلیر</a></li>
                                                                        <li><a href="products.html">شبنم</a></li>
                                                                        <li><a href="products.html">آیسان</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4 d-none d-lg-inline-block">
                                                                        <li><img src="assets/images/megamenu/megamenu-image5.png" alt=""></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="droopmenu-tabsection" id="droopmenutab15">
                                                            <a class="droopmenu-tabheader" href="#">جواهرات</a>
                                                            <div class="droopmenu-tabcontent">
                                                                <div class="droopmenu-row">
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>زنانه</h4></li>
                                                                        <li><a href="products.html">حلقه ازدواج</a></li>
                                                                        <li><a href="products.html">ساعت</a></li>
                                                                        <li><a href="products.html">گردنبند</a></li>
                                                                        <li><a href="products.html">ساعت</a></li>
                                                                        <li><a href="products.html">النگو</a></li>
                                                                        <li><a href="products.html">انگشتر</a></li>
                                                                        <li><a href="products.html">دستبند</a></li>
                                                                        <li><a href="products.html">سایر</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4">
                                                                        <li><h4>مرانه</h4></li>
                                                                        <li><a href="products.html">ساعت</a></li>
                                                                        <li><a href="products.html">دستبند</a></li>
                                                                        <li><a href="products.html">گردنبند</a></li>
                                                                        <li><a href="products.html">انگشتر</a></li>
                                                                        <li><a href="products.html">عینک</a></li>
                                                                        <li><a href="products.html">سایر</a></li>
                                                                    </ul>
                                                                    <ul class="droopmenu-col droopmenu-col4 d-none d-lg-inline-block">
                                                                        <li><img src="assets/images/megamenu/megamenu-image6.png" alt=""></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href={{route('about')}}>درباره ما<em class="droopmenu-topanim"></em></a></li>

                                            <li class="droopmenu-parent" aria-haspopup="true">
                                                <a href={{route('contact')}} aria-expanded="false">تماس با فروشگاه<em class="droopmenu-topanim"></em></a><div class="dm-arrow"></div>
                                                <ul style="">
                                                    <li><a href={{route('faq')}}>سوالات متداول</a></li>
                                                    <li><a href={{route('contact')}}>تماس با ما</a></li>
                                                </ul>
                                            </li>
                                            <li class="droopmenu-parent" aria-haspopup="true">
                                                <a href="{{route('blog_list')}}" aria-expanded="false">بلاگ آموزشی<em class="droopmenu-topanim"></em></a><div class="dm-arrow"></div>

                                            </li>
                                            <li class="droopmenu-parent" aria-haspopup="true">
                                                <a href="#" aria-expanded="false">سایر صفحات<em class="droopmenu-topanim"></em></a><div class="dm-arrow"></div>
                                                <ul style="">
                                                    <li><a href="compare.html">مقایسه محصول</a></li>
                                                    <li><a href="">سبد خرید</a></li>
                                                    <li><a href=""checkout.html">پیش فاکتور</a></li>
                                                    <!-- <li class="dm-bottom-separator"></li> -->
                                                    <!-- <li><a href=>عضویت/ورود به سایت</a></li> -->
                                                    <!-- <li><a href="register.html">عضویت در سایت</a></li> -->
                                                    <!-- <li><a href="reset-password.html">بازگردانی رمز عبور</a></li> -->


                                                </ul>
                                            </li>
                                            <li class="droopmenu-parent" aria-haspopup="true">
                                                <a href={{route('personal')}} aria-expanded="false">پروفایل کاربری<em class="droopmenu-topanim"></em></a><div class="dm-arrow"></div>
                                                <ul style="">
                                                    <li><a href={{route('personal')}}>مشخصات کاربری</a></li>
                                                    <li><a href={{route('factors')}}>سفارشات</a></li>
                                                    <li><a href={{route('adresses')}}>آدرس ها</a></li>
                                                    <li><a href={{route('favorites')}}>علاقه مندی ها</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Header Menu Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main NavBar -->
</section>
<!-- /Header -->













@yield('content')




















<!-- Footer -->
<section class="pt-4 pb-3" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="title">دسترسی سریع</div>
                <ul>
                    <li><a href="blog.html">بلاگ آموزشی</a></li>
                    <li><a href={{route('faq')}}>راهنمای خرید</a></li>
                    <li><a href={{route('faq')}}>شیوه های پرداخت</a></li>
                    <li><a href={{route('contact')}}>پیگیری سفارش</a></li>
                    <li><a href={{route('faq')}}>سوالات متداول</a></li>
                    <li><a href={{route('about')}}>درباره ما</a></li>
                    <li><a href={{route('contact')}}>تماس با ما</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2">
                <div class="title">گروه های محصولات</div>
                <ul>
                    <li><a href="products.html">تجهیزات کامپیوتر</a></li>
                    <li><a href="products.html">گوشی موبایل</a></li>
                    <li><a href="products.html">جانبی موبایل</a></li>
                    <li><a href="products.html">ساعت هوشمند</a></li>
                    <li><a href="products.html">جانبی کامپیوتر</a></li>
                    <li><a href="products.html">دوربین</a></li>
                    <li><a href="products.html">لپ تاپ</a></li>
                </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 d-none d-sm-inline-block">
                <div class="title">ناحیه کاربری</div>
                <ul>
                    <li><a href="">ورود به سایت</a></li>
                    <li><a href="register.html">عضویت در سایت</a></li>
                    <li><a href="reset-password.html">بازیابی رمز عبور</a></li>
                    <li><a href="">سبد خرید</a></li>
                    <li><a href="checkout.html">پیش فاکتور</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-6">
                <hr class="d-lg-none">
                <img src="assets/images/logo.png" alt=""> روبیک مارکت
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                <div class="row">
                    <div class="col-12 col-md-6 text-center p-2" id="encode43vfbb65gtabfb">
                        <div>7 روز هفته، 24 ساعت شبانه روز</div>
                        <div>پاسخگوی شما هستیم</div>
                        <div>09351234567</div>
                    </div>
                    <div class="col-12 col-md-6 pt-2 pt-md-0" id="encode43vfbbbfb">
                        <div class="row">
                            <div class="col-4 text-center">
                                <a href="#"><img src="assets/images/encode43vfbbbfb/enamad.html" alt=""></a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#"><img src="assets/images/encode43vfbbbfb/samandehi.html" alt=""></a>
                            </div>
                            <div class="col-4 text-center">
                                <a href="#"><img src="assets/images/encode43vfbbbfb/etehadiye.html" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Footer -->

<!-- Copyright -->
<section class="py-2" id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6" id="social-links">
                <span>ما را دنبال کنید</span>
                <a href="#"><img src="assets/images/social/insta.png" alt=""></a>
                <a href="#"><img src="assets/images/social/facebook.png" alt=""></a>
                <a href="#"><img src="assets/images/social/linkedin.png" alt=""></a>
                <a href="#"><img src="assets/images/social/twitter.png" alt=""></a>
                <a href="#"><img src="assets/images/social/youtube.png" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 text-sm-end pt-2 pt-sm-0">
                <span>کلیه حقوق و مادی معنوی محفوط است.</span>
            </div>
        </div>
    </div>
</section>
<!-- Copyright -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/fontawesome/js/all.min.js"></script>
<script src="assets/plugins/aos-master/dist/aos.js"></script>
<script src="assets/js/droopmenu.js"></script>
<script src="assets/js/nouislider.min.js"></script>
<!-- <script src="assets/js/pagination.js"></script> -->
<script src="assets/js/scripts.js"></script>
<script>let d =document.querySelectorAll('img');d.forEach(function (params) {params.addEventListener('contextmenu', event => event.preventDefault());});</script>
<!-- فقط برای سبد خرید  -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- فقط برای سبد خرید -->

@yield('Scripts')

<!-- /Scripts -->
</body>

<!-- Mirrored from rubik-market-html.wbrk.ir/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Aug 2023 06:32:42 GMT -->
</html>
