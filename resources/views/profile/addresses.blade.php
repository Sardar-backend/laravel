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
                    @include('layouts.sidbar_prof')
                        <div class="col-12 col-lg-9 pl-lg-0 pr-lg-2 mt-2 mt-lg-0">
                            <!-- New Address Form -->
                            <div class="custom-container mb-2" id="new-address">
                                <div class="row pt-2 px-3">
                                    <div class="col-12"><h1>افزودن آدرس جدید</h1></div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <form action="{{route('adresses_post')}}" method="post">@csrf



                                        <div class="col-12 pt-3">
                                            <div class="row">
                                                <div class="col-12 col-md-4 pl-2">
                                                    <div class="form-group m-1">
                                                        <label for="province">استان:</label>
                                                        <select name="ostan" id="province" class="form-control">
                                                            <option value="tehran">تهران</option>
                                                            <option value="fars">فارس</option>
                                                            <option value="esfehan">اصفهان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 pl-2">
                                                    <div class="form-group m-1">
                                                        <label for="city">شهر:</label>
                                                        <select name="city" id="city" class="form-control">
                                                            <option value="tehran">تهران</option>
                                                            <option value="shiraz">شیراز</option>
                                                            <option value="esfehan">اصفهان</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-8 pl-2">
                                                    <div class="form-group m-1">
                                                        <label for="address">نشانی کامل:</label>
                                                        <input type="text" name="adress" id="address" class="form-control">
                                                        <input type="hidden" name="user_id" value="{{request()->user()->id}}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 pl-2">
                                                    <div class="form-group m-1">
                                                        <label for="postal_code">کد پستی:</label>
                                                        <input type="text" name="post_number" id="postal_code" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 pl-2">
                                                    <div class="form-group m-1">
                                                        <label for="receiver">تحویل گیرنده:</label>
                                                        <input type="text" name="tahvil" id="receiver" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 pl-2">
                                                    <div class="form-group m-1">
                                                        <label for="tel">تلفن تماس:</label>
                                                        <input type="text" name="number" id="tel" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group m-1 pb-3">
                                                        <input type="submit" class="btn btn-primary px-5" value="ذخیره آدرس">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form></div>
                                </div>
                            </div>
                            <!-- /New Address Form -->

                            <!-- User Addresses -->
                            <div class="custom-container" id="addresses">
                                <div class="row pt-2 px-3">
                                    <div class="col-12"><h1>آدرس های من</h1></div>
                                </div>
                                <hr>
                                <div class="container">
                                    <div class="row">
                                        <!-- Address Record -->
                                         @foreach ($adresses as $adress )
                                        <div class="col-12 address py-2">
                                            <div class="row">
                                                <div class="col-12 col-sm-10">
                                                    <div class="title">{{$adress->ostan}}، {{$adress->adress}}</div>
                                                    <div class="sub-title">{{$adress->ostan}}، {{$adress->city}}</div>
                                                    <div class="sub-title">{{$adress->post_number}}</div>
                                                    <div class="sub-title">{{$adress->tahvil}}</div>
                                                    <div class="sub-title">{{$adress->number}}</div>
                                                </div>

                                                <div class="col-12 col-sm-2 text-lg-end">
                                                <form id="aaa{{$adress->id}}" action="{{route('delete_adresses',['id'=>$adress->id])}}" method="post">
                                                    @csrf
                                                </form>
                                                    <a onclick="let cc = document.querySelector('#aaa{{$adress->id}}').submit()"  class="float-right float-sm-left pr-2 pl-sm-2"><i  id="iiii" class="fa fa-trash-alt font-weight-normal"></i></a>
                                                    <!-- <a href="#" class="float-right float-sm-left"><i class="fa fa-edit font-weight-normal"></i></a> -->
                                                    <!-- <a href="#" class="float-right float-sm-left ml-2" title="آدرس پیش فرض"><i class="fa fa-check-circle" style="color: #fcb941"></i></a> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <script>
                                        let y = document.querySelector('#iiii');y.addEventListener('click', function() {document.querySelector('#foorm').submit();});
                                        </script> -->
                                         @endforeach

                                        <!-- Address Record -->
                                        <!-- Address Record -->

                                        <!-- Address Record -->
                                    </div>
                                </div>
                            </div>
                            <!-- /User Addresses -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
