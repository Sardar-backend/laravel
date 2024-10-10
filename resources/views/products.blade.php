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
                                            @foreach ($categories as $category)
                                             <div class="form-group">
                                                <form id="ss{{$category->id}}" action="{{route('products')}}" method="get">
                                                <input type="hidden" name="search" value="{{$category->name}}"></form>
                                                <input onclick="let a = document.querySelector('#ss{{$category->id}}').submit()" type="checkbox"
                                                @if (request('search')==$category->name)
                                                    checked
                                                @endif
                                                 >
                                                <label for="category1">{{$category->name}}</label>
                                            </div>
                                            @endforeach
                                            <!-- <div class="form-group">
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
                                            </div> -->
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
                                                <form action="" method="get" id="formrange">
                                                    <input id="input-from" value="0" type="hidden" name="from">
                                                    <input id="input-up" value="5000000" type="hidden" name="up">
                                                </form>
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
                                                <div id="button" class="col-12 text-center py-2">
                                                    <div class="btn btn-warning">اعمال محدوده تخفیف</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                            let form =document.querySelector('#formrange');
                            let from =document.querySelector('#encode4365gbf265g43d-range-from');
                            let to =document.querySelector('#encode4365gbf265g43d-range-to');
                            let aaa =document.querySelector('#button');
                            let input_from =document.querySelector('#input-from');
                            let input_to =document.querySelector('#input-up');
                            // console.log(d.innerHTML);
                            aaa.addEventListener('click', function(){
                                // console.log(d.innerHTML);
                                let r =from.innerHTML
                                input_from.value = r
                                let g =to.innerHTML
                                input_to.value= g
                                form.submit();

                            })
                            </script>
                            <div class="accordion filters-container mt-3">
                                <div class="accordion-item">
                                    <div id="collapseThree" class="accordion-collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body pb-2">
                                        @if (Request::path()=='products_Existing')
                                        <div class="form-group">
                                            <form action="{{route('products')}}" method="get" id="formc">
                                            <!-- <input type="hidden" value="true" name="Existing"> -->
                                            </form>
                                            <!-- <a href="{{route('products')}}"> -->
                                                <input onclick="let sss = document.querySelector('#formc').submit()" type="checkbox" checked id="only-available">
                                            <!-- </a> -->
                                            <label for="only-available">فقط کالاهای موجود</label>
                                        </div>
                                        @else

                                        <div class="form-group">
                                            <form action="{{route('products_Existing')}}" method="get" id="formExisting">
                                                <!-- <input type="hidden" value="true" name="Existing"> -->
                                            </form>
                                            <input onclick="let formExisting = document.querySelector('#formExisting').submit() " type="checkbox"    id="only-available">
                                            <label for="only-available">فقط کالاهای موجود</label>
                                        </div>



                                        @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion filters-container mt-3">
                                <div class="accordion-item">
                                    <div id="collapseFour" class="accordion-collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body pb-2">
                                            @if (Request::path()=='products_status')
                                            <div class="form-group">
                                            <form action="{{route('products')}}" method="get" id="formcf">

                                            </form>

                                                <input onclick="let xc = document.querySelector('#formcf').submit()" type="checkbox" checked id="only-available">

                                                <label for="only-warranty">فقط کالاهای دارای گارانتی</label>
                                        </div>
                                            @else
                                            <div class="form-group">
                                                <form action="{{route('products_status')}}" method="get" id="formGarant">
                                                    <!-- <input type="hidden" value="1" name="status"> -->
                                                </form>

                                                <input onclick="let formGarant = document.querySelector('#formGarant').submit() " name="status" type="checkbox" id="only-warranty">
                                                <label for="only-warranty">فقط کالاهای دارای گارانتی</label>
                                            </div>

                                            @endif
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
                                                 <?php use App\Helpers\Zand; ?>
                                                 @foreach (Zand::ttt()[1] as $item )
                                                 <div class="col-12 col-md-4 col-lg-12 px-0 mt-2">
                                                     <a href="{{route('product',$id=$item->id)}}">
                                                         <div class="side-product">
                                                             <div class="row pl-3">
                                                                 <div class="col-3 pl-2">
                                                                     <div class="image" style="background-image: url('assets/images/products/p100.png')"></div>
                                                                 </div>
                                                                 <div class="col-9 pr-0">
                                                                     <h2>{{$item->name}}</h2>
                                                                     <div class="row">
                                                                         <div class="col-7 pl-0">
                                                                             <span class="encode4365gbf265g43d">{{$item->price}} تومان</span>
                                                                         </div>
                                                                         <div class="col-5 pr-0 text-end">
                                                                             <span class="views">{{$item->count_view}} بازدید</span>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </a>
                                                 </div>

                                                 @endforeach
                                                <!-- Side Product -->
                                                <!-- Side Product -->
                                                <!-- <div class="col-12 col-md-4 col-lg-12 px-0 mt-2">
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
                                                </div> -->
                                                <!-- Side Product -->
                                                <!-- Side Product -->
                                                <!-- <div class="col-12 col-md-4 col-lg-12 px-0 mt-2">
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
                                                </div> -->
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
                                            <form id="popular" action="{{route('products_popular')}}" method="get"></form>
                                            <form id="cheapest" action="{{route('products_cheapest')}}" method="get"></form>
                                            <form id="p" action="{{route('products')}}" method="get"></form>
                                            <span class="d-block d-sm-inline-block">مرتب سازی بر اساس:</span>
                                            <span onclick="let p = document.querySelector('#p').submit()" class="order-filter d-block d-sm-inline-block @if (Request::path()=='products') active @endif ">جدیدترین</span>
                                            <span onclick="let popular = document.querySelector('#popular').submit()" class="order-filter d-block d-sm-inline-block @if (Request::path()=='products_popular') active @endif ">پربازدیدترین</span>
                                            <span class="order-filter d-block d-sm-inline-block">پرفروش‌ترین</span>
                                            <span onclick="let cheapest = document.querySelector('#cheapest').submit()" class="order-filter d-block d-sm-inline-block @if (Request::path()=='products_cheapest') active @endif ">ارزان‌ترین</span>

                                        </div>
                                        <div class="col-12 col-sm-2 pt-1 text-end">
                                            <!-- <span>
                                                <a href="products-list.html" class="products-view-type"><i class="fa fa-th-list"></i></a>
                                                <a href="products.html" class="products-view-type active"><i class="fa fa-th"></i></a>
                                            </span> -->
                                            <!-- &nbsp;|&nbsp; -->
                                            <span>{{$products->count()}} کالا</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filters -->
                            <div class="mt-2" id="pager">
                                <div class="container">
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-md-4">
                                @if (! $products->total())
                                <div class="col">
                                    <p>کالایی برای نمایش وجود ندارد</p></div>
                                @endif
                                    @foreach ($products as $product )
                                <div class="col">
                                        <!-- Product Box -->
                                        <div class="encode4326654321vfb">
                                                <a href="{{route('product',$id=$product->id)}}"><div class="image" style="background-image: url('{{$product->gallery()->first()->image}}')"></div></a>
                                                <div class="details p-3">
                                                    <!-- <div class="category">
                                                        <a href="products.html">گوشی موبایل</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="products.html">سامسونگ</a>
                                                    </div> -->
                                                    <div class="category">
                                                        <a href="/products?search={{$product->category()->first()->name}}">{{$product->category()->first()->name}}</a>
                                                        &nbsp;/&nbsp;
                                                        <a href="/products?search={{$product->Brand}}">{{$product->Brand}}</a>
                                                    </div>
                                                    <a href="{{route('product',$id=$product->id)}}"><h2>{{$product->name}}</h2></a>
                                                    <div class="encode4365gbf265g43d">{{$product->price}} تومان</div>
                                                    <div class="rate">
                                                    @for ( $i=0; $i < $product->stars; $i++ )
                                <i class="fa fa-star"></i>

                                @endfor
                                                        <span class="encode43bf265g43d">@if($product->comment->count())( ({{$product->comment->count()}}) رای دهنده)@endif</span>
                                                    </div>
                                                </div>
                                        </div>
                                        <!-- /Product Box -->
                                </div>
                                @endforeach
                                </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                    <div class="cca card-footer d-flex">
                                        <div class="cca cart d-flex">
                                            {{$products->render()}}
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
    </div>
</section>



@endsection
