@extends('base')
@section('content')

<section class="inner-page" id="cart-page">
    <div class="container-fluid" id="page-hero">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h1>سبد خرید</h1>
                            <p>مدیریت و خرید همزمان چند محصول</p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">صفحه نخست</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">سبد خرید</li>
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
                        <div class="col-12 col-lg-9">
                            <div id="cart-products">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 py-3">
                                            <div class="pb-3" id="return-to-shop">می‌خواهید محصولات دیگری اضافه کنید؟ <a href="{{route('products')}}">بازگشت به فروشگاه</a></div>
                                            <div class="d-none d-md-block">
                                                <div class="row my-2" id="heading">
                                                    <div class="col-4">
                                                        <div>کالا</div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div>قیمت واحد</div>
                                                    </div>
                                                    <div class="col-2 pl-4">
                                                        <div>تعداد</div>
                                                    </div>
                                                    <div class="col-2">
                                                        <div>تخفیف</div>
                                                    </div>
                                                    <div class="col-2 pr-0">
                                                        <div class="pr-3">قیمت نهایی</div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                            use App\Helpers\Cart\Cart;
                                            $totalPrice=Cart::all()->sum(function($cart){
                                             return $cart['price'] * $cart['quantity'];
                                            });
                                            $totalDiscust =Cart::all()->sum(function($cart){return (($cart['product']->discust)/100 * $cart['price'])* $cart['quantity'];});
                                            $FinalPrice = $totalPrice - $totalDiscust;
                                            @endphp
                                            @if (! Cart::all()->count())
                                            <p>سبد خرید شما خالی است</p>
                                            @endif
                                            <!-- Order Product Record -->
                                             @foreach (Cart::all() as $cart )
                                             @if (isset($cart['product']))
                                             @php
                                             $product = $cart['product'];
                                             @endphp
                                             <div class="row product">
                                                 <div class="col-12 col-md-4">
                                                     <div class="row">
                                                         <div class="col-2 col-md-4 pl-0">
                                                             <img src="assets/images/products/p100.png" alt="image">
                                                         </div>
                                                         <div class="col-10 col-md-8">
                                                             <a href="product.html" target="_blank"><div class="title pt-2">{{$product->name}}</div></a>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-6 col-md-2">
                                                     <div class="d-md-none font-weight-bold">قیمت</div>
                                                     <div class="pt-1"><span class="product-encode4365gbf265g43d">{{$product->price}}</span> <span>تومان</span></div>
                                                 </div>
                                                 <div class="col-6 col-md-2 pl-4 pr-0 pr-md-3">
                                                     <div class="d-md-none font-weight-bold">تعداد</div>
                                                     <div class="input-group mb-3 order-number">
                                                         <div class="input-group-prepend">
                                                             <button class="btn btn-outline-secondary btn-plus" type="button">+</button>
                                                         </div>
                                                         <input type="text" name="order-number[]"  max="10" value="{{$cart['quantity']}}" class="form-control text-center order-number" readonly>
                                                         <div class="input-group-prepend">
                                                             <button class="btn btn-outline-secondary btn-minus" type="button">_</button>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="col-6 col-md-2">
                                                     <div class="d-md-none font-weight-bold">تخفیف</div>
                                                     <div class="pt-1"><span class="product-discount">{{($product->discust)/100 * $product->price}}</span> <span>تومان</span></div>
                                                 </div>
                                                 <div class="col-6 col-md-2 pr-0">
                                                     <div class="d-md-none font-weight-bold">قیمت نهایی</div>
                                                     <div class="pt-1 pr-2 bg-light"><span class="product-total" >{{(100 - $product->discust)/100 * $product->price}}</span> <span>تومان</span></div>
                                                     <form id="fo{{$product->id}}" action="{{route('delete_cart',['product'=>$product])}}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                    </form>
                                                     <a onclick="let deleter = document.querySelector('#fo{{$product->id}}').submit()" class="product-remove btn-remove-from-basket" data-id=""><div class="small pl-2"><i class="fa fa-times"></i> حذف</div></a>
                                                 </div>
                                             </div>
                                             <hr>
                                             @endif
                                             @endforeach
                                            <!-- Order Product Record -->
                                            <!-- Order Product Record -->

                                            <!-- Order Product Record -->
                                            @if (Cart::all()->count())

                                            <div class="row product">
                                                <form id="all" action="{{route('delete_cart_All')}}" method="post">
                                                    @csrf
                                                </form>
                                                <div class="col-12">
                                                    <a onclick="let all = document.querySelector('#all').submit()" class="product-remove btn-remove-from-basket" data-id="all"><div class="float-end small pl-2 font-weight-bold">خالی کردن سبد</div></a>
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if (Cart::all()->count())
                        <div class="col-12 col-lg-3 mt-2 mt-lg-0 pr-3 pr-lg-0">
                            <div id="factor">
                                <div class="container">
                                    <div class="row py-2">
                                        <div class="col-6">
                                            <div>جمع کل فاکتور:</div>
                                        </div>
                                        <div class="col-6">
                                            <div><span id="factor-total-encode4365gbf265g43d"></span>{{$totalPrice}} تومان</div>
                                        </div>
                                    </div>
                                    <div class="row py-2 bg-light">
                                        <div class="col-6">
                                            <div>جمع تخفیف:</div>
                                        </div>
                                        <div class="col-6">
                                            <div><span id="factor-total-discount">{{$totalDiscust}}</span> تومان</div>
                                        </div>
                                    </div>
                                    <div class="row py-2" id="total">
                                        <div class="col-6">
                                            <div>مبلغ قابل پرداخت:</div>
                                        </div>
                                        <div class="col-6">
                                            <div><span id="factor-total">{{$FinalPrice}}</span> تومان</div>
                                        </div>
                                    </div>

                                    <div class="row py-2">
                                        <div class="col-12">
                                            <a href="{{route('checkout')}}"><input type="submit" value="ادامه ثبت سفارش" class="btn btn-success w-100"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- Suggested Products -->
                        <div class="col-12 pt-5" id="suggested-products">
                            <div class="title py-3 text-center">سایر محصولات پیشنهادی</div>
                            <div class="owl-carousel products-carousel">
                                @foreach ($products as $product )

                                <!-- Product Item -->
                                <div class="encode4326654321vfb item">
                                    <a href="{{route('product',['id'=>$product->id])}}"><div class="image" style="background-image: url('assets/images/products/p102.png')"></div></a>
                                    <div class="details p-3">
                                        <div class="category">
                                            <a href="products.html">گوشی موبایل</a>
                                            &nbsp;/&nbsp;
                                            <a href="products.html">سامسونگ</a>
                                        </div>
                                        <a href="{{route('product',['id'=>$product->id])}}""><h2>{{$product->name}}</h2></a>
                                        <div class="encode4365gbf265g43d">{{$product->price}} تومان</div>
                                        <div class="rate">
                                            <i class="fa fa-star-half-alt"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="encode43bf265g43d">({{$product->comment()->count()}} رای دهنده)</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Product Item -->
                                @endforeach
                            </div>
                        </div>
                        <!-- /Suggested Products -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
