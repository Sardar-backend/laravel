
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
                                    <li class="breadcrumb-item active" aria-current="page">محصولات مورد علاقه</li>
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
                            <!-- Favorite Products -->
                            <div class="custom-container" id="favorites">
                                <div class="row pt-2 px-3">
                                    <div class="col-12"><h1>محصولات مورد علاقه</h1></div>
                                </div>
                                <div class="container">
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-md-4">
                                        <!-- Products -->
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb">
                                                <a href="../product.html"><div class="image" style="background-image: url('../assets/images/products/p100.png')"></div></a>
                                                <div class="details p-3">
                                                    <div class="category">
                                                        <a href="../products.html">گوشی موبایل</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="../products.html">سامسونگ</a>
                                                    </div>
                                                    <a href="../product.html"><h2>گوشی موبایل سامسونگ مدل Galaxy A51 دو سیم کارت</h2></a>
                                                    <div class="encode4365gbf265g43d">6.000.000 تومان</div>
                                                    <div class="rate">
                                                        <i class="fa fa-star-half-alt"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb">
                                                <a href="../product.html"><div class="image" style="background-image: url('../assets/images/products/p400.png')"></div></a>
                                                <div class="details p-3">
                                                    <div class="category">
                                                        <a href="../products.html">گوشی موبایل</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="../products.html">سامسونگ</a>
                                                    </div>
                                                    <a href="../product.html"><h2>دوربین دیجیتال کانن مدل EOS 2000D به همراه لنز 18-55 میلی متر DC III</h2></a>
                                                    <div class="encode4365gbf265g43d">6.000.000 تومان</div>
                                                    <div class="rate">
                                                        <i class="fa fa-star-half-alt"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb">
                                                <a href="../product.html"><div class="image" style="background-image: url('../assets/images/products/p103.png')"></div></a>
                                                <div class="details p-3">
                                                    <div class="category">
                                                        <a href="../products.html">گوشی موبایل</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="../products.html">سامسونگ</a>
                                                    </div>
                                                    <a href="../product.html"><h2>گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت</h2></a>
                                                    <div class="encode4365gbf265g43d">3.000.000 تومان</div>
                                                    <div class="rate">
                                                        <i class="fa fa-star-half-alt"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb">
                                                <a href="../product.html"><div class="image" style="background-image: url('../assets/images/products/p103.png')"></div></a>
                                                <div class="details p-3">
                                                    <div class="category">
                                                        <a href="../products.html">گوشی موبایل</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="../products.html">سامسونگ</a>
                                                    </div>
                                                    <a href="../product.html"><h2>گوشی موبایل شیائومی مدل POCO X3 M2007J20CG دو سیم‌ کارت</h2></a>
                                                    <div class="encode4365gbf265g43d">3.000.000 تومان</div>
                                                    <div class="rate">
                                                        <i class="fa fa-star-half-alt"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb">
                                                <a href="../product.html"><div class="image" style="background-image: url('../assets/images/products/p400.png')"></div></a>
                                                <div class="details p-3">
                                                    <div class="category">
                                                        <a href="../products.html">گوشی موبایل</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="../products.html">سامسونگ</a>
                                                    </div>
                                                    <a href="../product.html"><h2>دوربین دیجیتال کانن مدل EOS 2000D به همراه لنز 18-55 میلی متر DC III</h2></a>
                                                    <div class="encode4365gbf265g43d">6.000.000 تومان</div>
                                                    <div class="rate">
                                                        <i class="fa fa-star-half-alt"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb">
                                                <a href="../product.html"><div class="image" style="background-image: url('../assets/images/products/p100.png')"></div></a>
                                                <div class="details p-3">
                                                    <div class="category">
                                                        <a href="../products.html">گوشی موبایل</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="../products.html">سامسونگ</a>
                                                    </div>
                                                    <a href="../product.html"><h2>گوشی موبایل سامسونگ مدل Galaxy A51 دو سیم کارت</h2></a>
                                                    <div class="encode4365gbf265g43d">6.000.000 تومان</div>
                                                    <div class="rate">
                                                        <i class="fa fa-star-half-alt"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Favorite Products -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
