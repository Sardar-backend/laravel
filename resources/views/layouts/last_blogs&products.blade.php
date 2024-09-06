<div class="col-12 col-lg-3">
                            <div class="row">
                                <!-- Side Panel -->
                                <div class="col-12 col-sm-6 col-lg-12 px-lg-2">
                                    <div class="blog-side-panel">
                                        <div class="row pt-2 px-3">
                                            <div class="col"><div class="title">پربازدیدترین محصولات</div></div>
                                        </div>
                                        <hr>
                                        <div class="container">
                                            <div class="row">
                                                <!-- Side Panel Product -->
                                                 @foreach ($last_products as $product )
                                                <div class="col-12 col-lg-12 px-0 mt-2">
                                                    <a href="product.html">
                                                        <div class="side-blog-product">
                                                            <div class="row pl-3">
                                                                <div class="col-4 pl-2">
                                                                    <div class="image" style="background-image: url(assets/images/products/p100.png)"></div>
                                                                </div>
                                                                <div class="col-8 px-0">
                                                                    <h2>گوشی موبایل سامسونگ مدل Galaxy A51 دو سیم کارت</h2>
                                                                    <div class="row">
                                                                        <div class="col-8 pl-0">
                                                                            <span class="encode4365gbf265g43d">3.200.000 تومان</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                 @endforeach

                                                <!-- /Side Panel Product -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-12 px-lg-2">
                                    <div class="blog-side-panel">
                                        <div class="row pt-4 pt-sm-2 px-3">
                                            <div class="col"><div class="title">پربازدیدترین مطالب</div></div>
                                        </div>
                                        <hr>
                                        <div class="container">
                                            <div class="row">
                                                <!-- Side Panel Post -->
                                                @foreach ($last_blog as $blog )
                                                <div class="col-12 col-lg-12 px-0 mt-2">
                                                    <div class="side-blog-post">
                                                        <div class="row pl-3">
                                                            <div class="col-4 pl-2">
                                                                <a href="blog-post.html"><div class="image" style="background-image: url(assets/images/blog/post100.jpg)"></div></a>
                                                            </div>
                                                            <div class="col-8 px-0">
                                                                <a href="blog-post.html"><h2>بررسی آیفون 12 پرو مکس اپل</h2></a>
                                                                <div class="row">
                                                                    <div class="col-12 col-xl-6 pl-0">
                                                                        <span class="category">دسته بندی: <a href="blog.html">اخبار</a></span>
                                                                    </div>
                                                                    <div class="col-12 col-xl-6 pr-0 text-start text-xl-end d-none d-xl-block">
                                                                        <span class="date">30 خرداد 1400</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Side Panel -->
                            </div>
                        </div>
