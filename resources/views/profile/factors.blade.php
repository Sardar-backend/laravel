@extends('base')
@section('content')

<section class="inner-page" id="profile-page">
    <div class="container-fluid" id="page-hero">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h1>ناحیه کاربری</h1>
                            <p>به ناحیه کاربری روبیک مارکت خوش آمدید.</p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="../index.html">صفحه نخست</a></li>
                                    <li class="breadcrumb-item"><a href="#">ناحیه کاربری</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">سفارشات</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <!-- Side Panel -->
                            <div class="accordion" id="side-panel">
                                <div class="accordion-item menu-container">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                            <span class="row">
                                                <span class="col-3 col-sm-2 col-lg-3">
                                                    <img src="../assets/images/user-no-image.jpg" class="rounded-circle">
                                                </span>
                                                <span class="col-7 col-sm-8 col-lg-7 pt-0 pt-sm-2 pt-md-3 pt-lg-0 align-self-center">
                                                    <div id="full-name">مصطفی کلانتری</div>
                                                    <div class="mt-2" id="email-mobile">09351234567</div>
                                                </span>
                                            </span>
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    <a href="personal-info.html" class="active">
                                                        <div>
                                                            <div class="icon d-inline-block"><img src="../assets/images/icons/profile-menu/profile.webp" class="pl-2"></div> اطلاعات حساب
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="factors.html">
                                                        <div>
                                                            <div class="icon d-inline-block"><img src="../assets/images/icons/profile-menu/orders.webp" class="pl-2"></div> سفارش های من
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="favorites.html">
                                                        <div>
                                                            <div class="icon d-inline-block"><img src="../assets/images/icons/profile-menu/favorites.webp" class="pl-2"></div> علاقه مندی ها
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="addresses.html">
                                                        <div>
                                                            <div class="icon d-inline-block"><img src="../assets/images/icons/profile-menu/addresses.webp" class="pl-2"></div> آدرس های من
                                                        </div>
                                                    </a>
                                                </li>
                                                <li><hr></li>
                                                <li>
                                                    <a href="../index.html">
                                                        <div>
                                                            <div class="icon d-inline-block"><img src="../assets/images/icons/profile-menu/exit.webp" class="pl-2"></div> خروج از حساب
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Side Panel -->
                        </div>
                        <div class="col-12 col-lg-9 pl-lg-0 pr-lg-2 mt-2 mt-lg-0">
                            <!-- Factors Count -->
                            <div class="custom-container" id="orders-status">
                                <div class="container nowrap">
                                    <div class="row py-2">
                                        <div class="col-12 px-0">
                                            <ul class="px-3">
                                                <li>
                                                    <a href="#" class="active">
                                                        <span>در انتظار پرداخت</span>
                                                        <div class="badge badge-secondary">1</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>پرداخت شده</span>
                                                        <div class="badge badge-secondary">2</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>ارسال شده</span>
                                                        <div class="badge badge-secondary">3</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span>تکمیل شده</span>
                                                        <div class="badge badge-secondary">4</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Factors Count -->

                            <!-- Factors List -->
                            <div class="custom-container mt-2 order">
                                <div class="row pt-2 px-3">
                                    <div class="col-12 col-sm-6"><h2>سفارش شماره #1234</h2></div>
                                    <div class="col-12 col-sm-6 text-sm-end"><span>20 مرداد 1400</span> - <span>پرداخت شده</span></div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row py-2">
                                        <div class="col-12">
                                            <div>
                                                <div class="header">
                                                    <div class="total py-1"><span>مبلغ کل:</span> 3.000.000 تومان</div>
                                                </div>
                                                <div class="container products px-0">
                                                    <div class="row">
                                                        <!-- Order Record -->
                                                        <span class="col-12 col-sm-6 col-lg-4 col-xl-3 px-1">
                                                            <a href="../product.html" target="_blank">
                                                                <div class="encode4326654321vfb">
                                                                    <div class="image" style="background-image: url('../assets/images/products/p100.png')"></div>
                                                                    <div class="text-center px-1 px-sm-3">
                                                                        <h2>گوشی موبایل سامسونگ مدل Galaxy A21s</h2>
                                                                        <div class="number">تعداد: 1 عدد</div>
                                                                        <div class="encode4365gbf265g43d">مبلغ: 3.000.000 عدد</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </span>
                                                        <!-- /Order Record -->
                                                        <!-- Order Record -->
                                                        <span class="col-12 col-sm-6 col-lg-4 col-xl-3 px-1">
                                                            <a href="../product.html" target="_blank">
                                                                <div class="encode4326654321vfb">
                                                                    <div class="image" style="background-image: url('../assets/images/products/p100.png')"></div>
                                                                    <div class="text-center px-1 px-sm-3">
                                                                        <h2>گوشی موبایل سامسونگ مدل Galaxy A21s</h2>
                                                                        <div class="number">تعداد: 1 عدد</div>
                                                                        <div class="encode4365gbf265g43d">مبلغ: 3.000.000 عدد</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </span>
                                                        <!-- /Order Record -->
                                                        <!-- Order Record -->
                                                        <span class="col-12 col-sm-6 col-lg-4 col-xl-3 px-1">
                                                            <a href="../product.html" target="_blank">
                                                                <div class="encode4326654321vfb">
                                                                    <div class="image" style="background-image: url('../assets/images/products/p100.png')"></div>
                                                                    <div class="text-center px-1 px-sm-3">
                                                                        <h2>گوشی موبایل سامسونگ مدل Galaxy A21s</h2>
                                                                        <div class="number">تعداد: 1 عدد</div>
                                                                        <div class="encode4365gbf265g43d">مبلغ: 3.000.000 عدد</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </span>
                                                        <!-- /Order Record -->
                                                        <!-- Order Record -->
                                                        <span class="col-12 col-sm-6 col-lg-4 col-xl-3 px-1">
                                                            <a href="../product.html" target="_blank">
                                                                <div class="encode4326654321vfb">
                                                                    <div class="image" style="background-image: url('../assets/images/products/p100.png')"></div>
                                                                    <div class="text-center px-1 px-sm-3">
                                                                        <h2>گوشی موبایل سامسونگ مدل Galaxy A21s</h2>
                                                                        <div class="number">تعداد: 1 عدد</div>
                                                                        <div class="encode4365gbf265g43d">مبلغ: 3.000.000 عدد</div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </span>
                                                        <!-- /Order Record -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Factors List -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
