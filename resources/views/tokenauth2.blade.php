@extends('base')
@section('content')
<section class="inner-page" id="contact-page">


    <div class="container py-2 py-md-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-lg-5 text-center">
                            <img src="assets/images/1.png" alt="">
                        </div>

                        <div class="col-12 col-lg-7 pt-5 pt-md-0 align-self-center">
                        <form action={{route('postauth2')}} method="post">
                            @csrf
                            <div class="title">تائید پیامک احراز هویت دو مرحله ای</div>
                            <p>برای فعال سازی احراز هویت دو مرحله ای،  کد ارسال شده به شماره خود را وارد کنید.</p>
                            @guest
                            <div class="form-group">
                                <label for="email">کد تائید :</label>
                                <input type="email"  class="form-control" id="email">
                            </div>
                            @else
                            <div class="form-group">
                                <label for="email"> کد تائید:</label>
                                <input name="phonenumber"  class="form-control" id="email">
                            </div>
                            @endguest
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">تائید کد و فعال سازی</button>
                            </div></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
