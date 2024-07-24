@extends('base')
@section('content')

<section class="inner-page" id="contact-page">
    <div class="container-fluid" id="page-hero">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h1>ورود به ناحیه کاربری</h1>
                            <p>وارد ناحیه کاربری خود در روبیک مارکت شوید.</p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">صفحه نخست</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ورود</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-2 py-md-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1">
                <div class="content">
                    <div class="row">
                        <div class="col-12 col-lg-5 text-center">
                            <img src="assets/images/login.png" alt="">
                        </div>
                        <div class="col-12 col-lg-7 pt-5 pt-md-0 align-self-center">
                            <div class="title">وارد شوید</div>
                            <p>با عضویت در سایت از همه امکانات سایت بهره مند شوید.</p>
                            <div class="form-group">
                                <label for="email">پست الکترونیک :</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="password">رمز عبور :</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                            <div class="form-group">
                                <a href="profile/personal-info.html"><input type="submit" value="ورود به ناحیه کاربری" class="btn btn-success"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
