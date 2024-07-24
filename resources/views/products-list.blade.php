@extends('base')
@section('content')

<section class="inner-page" id="products-page">
    <div class="container-fluid" id="page-hero">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h1>فروشگاه روبیک مارکت</h1>
                            <p>هر آنچه نیاز دارید در این فروشگاه موجود است</p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">صفحه نخست</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">محصولات</li>
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
                        <div class="col-12 col-lg-3 px-3 px-lg-0">
                            <!-- Side Panel -->
                            <div class="accordion filters-container">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            گروه های محصولات
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="form-group">
                                                <input type="checkbox" id="category1">
                                                <label for="category1">گوشی موبایل</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="category2">
                                                <label for="category2">جانبی موبایل</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="category3">
                                                <label for="category3">دوربین دیجیتال</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="category4">
                                                <label for="category4">ساعت هوشمند</label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="category5">
                                                <label for="category5">لپ تاپ</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion filters-container mt-3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            محدوده قیمت
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-12 py-1 px-4 mt-3">
                                                    <div id="steps-slider" dir="rtl"></div>
                                                </div>
                                                <div class="col-6 text-center encode4365gbf265g43d-range mt-3">
                                                    <div>از</div>
                                                    <div id="encode4365gbf265g43d-range-from">10000</div>
                                                    <div>تومان</div>
                                                </div>
                                                <div class="col-6 text-center encode4365gbf265g43d-range mt-3">
                                                    <div>از</div>
                                                    <div id="encode4365gbf265g43d-range-to">500000</div>
                                                    <div>تومان</div>
                                                </div>
                                                <div class="col-12 text-center py-2">
                                                    <div class="btn btn-warning">اعمال محدوده تخفیف</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion filters-container mt-3">
                                <div class="accordion-item">
                                    <div id="collapseThree" class="accordion-collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body pb-2">
                                            <div class="form-group">
                                                <input type="checkbox" id="only-available">
                                                <label for="only-available">فقط کالاهای موجود</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion filters-container mt-3">
                                <div class="accordion-item">
                                    <div id="collapseFour" class="accordion-collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body pb-2">
                                            <div class="form-group">
                                                <input type="checkbox" id="only-warranty">
                                                <label for="only-warranty">فقط کالاهای دارای گارانتی</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion filters-container mt-3">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            جدیدترین محصولات
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <!-- Side Product -->
                                                <div class="col-12 col-md-4 col-lg-12 px-0 mt-2">
                                                    <a href="product.html">
                                                        <div class="side-product">
                                                            <div class="row pl-3">
                                                                <div class="col-3 pl-2">
                                                                    <div class="image" style="background-image: url('assets/images/products/p100.png')"></div>
                                                                </div>
                                                                <div class="col-9 pr-0">
                                                                    <h2>گوشی موبایل سامسونگ مدل Galaxy A51</h2>
                                                                    <div class="row">
                                                                        <div class="col-7 pl-0">
                                                                            <span class="encode4365gbf265g43d">320.000 تومان</span>
                                                                        </div>
                                                                        <div class="col-5 pr-0 text-end">
                                                                            <span class="views">321 بازدید</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Side Product -->
                                                <!-- Side Product -->
                                                <div class="col-12 col-md-4 col-lg-12 px-0 mt-2">
                                                    <a href="product.html">
                                                        <div class="side-product">
                                                            <div class="row pl-3">
                                                                <div class="col-3 pl-2">
                                                                    <div class="image" style="background-image: url('assets/images/products/p100.png')"></div>
                                                                </div>
                                                                <div class="col-9 pr-0">
                                                                    <h2>گوشی موبایل سامسونگ مدل Galaxy A51</h2>
                                                                    <div class="row">
                                                                        <div class="col-7 pl-0">
                                                                            <span class="encode4365gbf265g43d">320.000 تومان</span>
                                                                        </div>
                                                                        <div class="col-5 pr-0 text-end">
                                                                            <span class="views">321 بازدید</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Side Product -->
                                                <!-- Side Product -->
                                                <div class="col-12 col-md-4 col-lg-12 px-0 mt-2">
                                                    <a href="product.html">
                                                        <div class="side-product">
                                                            <div class="row pl-3">
                                                                <div class="col-3 pl-2">
                                                                    <div class="image" style="background-image: url('assets/images/products/p100.png')"></div>
                                                                </div>
                                                                <div class="col-9 pr-0">
                                                                    <h2>گوشی موبایل سامسونگ مدل Galaxy A51</h2>
                                                                    <div class="row">
                                                                        <div class="col-7 pl-0">
                                                                            <span class="encode4365gbf265g43d">320.000 تومان</span>
                                                                        </div>
                                                                        <div class="col-5 pr-0 text-end">
                                                                            <span class="views">321 بازدید</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Side Product -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Side Panel -->
                        </div>
                        <div class="col-12 col-lg-9 px-0 pl-lg-0 pr-lg-2 mt-2 mt-lg-0">
                            <!-- Filters -->
                            <div id="order-filters">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-10 my-1">
                                            <span class="d-block d-sm-inline-block">مرتب سازی بر اساس:</span>
                                            <span class="order-filter d-block d-sm-inline-block active">جدیدترین</span>
                                            <span class="order-filter d-block d-sm-inline-block">پربازدیدترین</span>
                                            <span class="order-filter d-block d-sm-inline-block">پرفروش‌ترین</span>
                                            <span class="order-filter d-block d-sm-inline-block">ارزان‌ترین</span>
                                        </div>
                                        <div class="col-12 col-sm-2 pt-1 text-end">
                                            <span>
                                                <a href="products-list.html" class="products-view-type active"><i class="fa fa-th-list"></i></a>
                                                <a href="products.html" class="products-view-type"><i class="fa fa-th"></i></a>
                                            </span>
                                            &nbsp;|&nbsp;
                                            <span>122 کالا</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filters -->
                            <div class="mt-2" id="pager">
                                <div class="container">
                                    <div class="row row-cols-1 gx-md-4">
                                        <!-- Products -->
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb-row">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <a href="product.html"><div class="image" style="background-image: url('assets/images/products/p100.png')"></div></a>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="details py-3 px-3">
                                                            <div class="category">
                                                                <a href="products.html">گوشی موبایل</a>
                                                                &nbsp;/&nbsp;
                                                                <a href="products.html">سامسونگ</a>
                                                            </div>
                                                            <a href="product.html"><h2>گوشی موبایل سامسونگ مدل Galaxy A51 دو سیم کارت</h2></a>
                                                            <div class="rate">
                                                                <i class="fa fa-star-half-alt"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                            </div>
                                                            <p>گوشی موبایل Galaxy A51 با رم 6 گیگابایتی روانه بازار شده است. این محصول دارای صفحه‌نمایش سوپر آمولد است و ظاهر زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند.</p>
                                                            <div class="encode4365gbf265g43d mb-2">6.000.000 تومان</div>
                                                            <a href="#"><div class="btn btn-sm btn-success">مشاهده و خرید</div></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb-row">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <a href="product.html"><div class="image" style="background-image: url('assets/images/products/p101.png')"></div></a>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="details py-3 px-3">
                                                            <div class="category">
                                                                <a href="products.html">گوشی موبایل</a>
                                                                &nbsp;/&nbsp;
                                                                <a href="products.html">سامسونگ</a>
                                                            </div>
                                                            <a href="product.html"><h2>گوشی موبایل سامسونگ مدل Galaxy A51 دو سیم کارت</h2></a>
                                                            <div class="rate">
                                                                <i class="fa fa-star-half-alt"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                            </div>
                                                            <p>گوشی موبایل Galaxy A51 با رم 6 گیگابایتی روانه بازار شده است. این محصول دارای صفحه‌نمایش سوپر آمولد است و ظاهر زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند.</p>
                                                            <div class="encode4365gbf265g43d mb-2">6.000.000 تومان</div>
                                                            <a href="#"><div class="btn btn-sm btn-success">مشاهده و خرید</div></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb-row">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <a href="product.html"><div class="image" style="background-image: url('assets/images/products/p102.png')"></div></a>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="details py-3 px-3">
                                                            <div class="category">
                                                                <a href="products.html">گوشی موبایل</a>
                                                                &nbsp;/&nbsp;
                                                                <a href="products.html">سامسونگ</a>
                                                            </div>
                                                            <a href="product.html"><h2>گوشی موبایل سامسونگ مدل Galaxy A51 دو سیم کارت</h2></a>
                                                            <div class="rate">
                                                                <i class="fa fa-star-half-alt"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                            </div>
                                                            <p>گوشی موبایل Galaxy A51 با رم 6 گیگابایتی روانه بازار شده است. این محصول دارای صفحه‌نمایش سوپر آمولد است و ظاهر زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند.</p>
                                                            <div class="encode4365gbf265g43d mb-2">6.000.000 تومان</div>
                                                            <a href="#"><div class="btn btn-sm btn-success">مشاهده و خرید</div></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <div class="col">
                                            <!-- Product Box -->
                                            <div class="encode4326654321vfb-row">
                                                <div class="row">
                                                    <div class="col-12 col-md-4">
                                                        <a href="product.html"><div class="image" style="background-image: url('assets/images/products/p103.png')"></div></a>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <div class="details py-3 px-3">
                                                            <div class="category">
                                                                <a href="products.html">گوشی موبایل</a>
                                                                &nbsp;/&nbsp;
                                                                <a href="products.html">سامسونگ</a>
                                                            </div>
                                                            <a href="product.html"><h2>گوشی موبایل سامسونگ مدل Galaxy A51 دو سیم کارت</h2></a>
                                                            <div class="rate">
                                                                <i class="fa fa-star-half-alt"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <span class="encode43bf265g43d">(14 رای دهنده)</span>
                                                            </div>
                                                            <p>گوشی موبایل Galaxy A51 با رم 6 گیگابایتی روانه بازار شده است. این محصول دارای صفحه‌نمایش سوپر آمولد است و ظاهر زیبایی دارد. سامسونگ تلاش کرده است حاشیه را در این تولید جدید خود تا حد امکان کم کند.</p>
                                                            <div class="encode4365gbf265g43d mb-2">6.000.000 تومان</div>
                                                            <a href="#"><div class="btn btn-sm btn-success">مشاهده و خرید</div></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /Product Box -->
                                        </div>
                                        <!-- /Products -->
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div id="pagination-bg">
                                            <ul class="pagination justify-content-center pagination-sm"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
