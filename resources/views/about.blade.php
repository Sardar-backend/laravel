@extends('base')
@section('content')
<style>
    .about-button{
        background-color: black !important;
        padding: 1rem !important;
        margin-right: 0.2rem !important;
        border-radius: 0.5rem !important;;
        color: white !important;
    }
    .about-button:hover{
        background-color: white !important;
        color: black !important;
    }
</style>
<section class="inner-page" id="contact-page">
    <div class="container-fluid" id="page-hero">
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h1>درباره ما</h1>
                            <p>با ما بیشتر آشنا شوید.</p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">صفحه نخست</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">درباره ما</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br>
    <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6">
                        <!--About Image-->
                        <div class="about-img">
                            <img  src="assets/images/Untitled.jpg" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <!--About Content-->
                        <div class="about-content mt-5">
                            <div class="about-heading">
                                <h2>درباره من</h2>
                                <span>مرجع قالب و اسکریپت های فارسی</span>
                            </div>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد </p>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد </p>
                            <!--About Social Icons-->
                            <div class="social-icons">
                                <a class="ico" target="_blank" href="https://www.instagram.com/sardar.devloper"  ><i class="ico fab fa-instagram"></i></a>    <!-- اینستاگرام -->
                                <a class="ico" target="_blank" href="https://www.linkedin.com/in/mohammadjavad-sardar-48044a308"><i class="ico fab fa-linkedin"></i></a>     <!-- لینکدین -->
                                <a class="ico" target="_blank" href="https://t.me/Sardar_backend"><i class="ico fab fa-telegram"></i></a>     <!-- تلگرام -->
                                <a class="ico" target="_blank" href="https://github.com/Sardar-backend"><i class="ico fab fa-github"></i></a>       <!-- گیت‌هاب -->


                            </div><br><br>
                            <span class="about-button">
                                <a style="color: inherit;" class="main-btn" href="#">دانلود رزومه</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div><br><br>

    <!-- <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="row d-flex">
                        <div class="col-12 col-lg-5 align-self-center h-100">
                            <img src="assets/images/about-us.jpg" alt="image">
                        </div>
                        <div class="col-12 col-lg-7 mt-5">
                            <div class="title">معرفی فروشگاه</div>
                            <p>این یک متن آزمایشی است که به زودی توسط نویسنده این سایت، تکمیل یا حذف خواهد شد. اگر شما نویسنده‌ی این سایت هستید، برای حذف یا ویرایش این صفحه، کافی است از طریق مرکز مدیریت سایت خود وارد بخش مربوطه شده و محتوای این صفحه را ویرایش یا حذف کنید.</p>
                            <p>صفحات و محتوای آزمایشی همیشه بخشی از محتوای پیش‌نمایش قالب و افزونه های وب هستند که شما بتوانید ارتباط درستی با پیش نمایش قالب گرفته و تصمیم مناسبی بگیرید. این صفحات معمولا برای اطلاعات کلی در مورد سایت مثل «درباره ما»، «تماس با ما»، «فهرست» یا «نظرات شما» مفید هستند.</p>
                            <p>بنابراین نگران ویرایش و بروزرسانی محتوای این نوع صفحات نباشید. شما می‌توانید به سادگی و تنها با چند کلیک وارد ناحیه مدیریت وب‌سایت خود شده و مطلب مربوطه را ویرایش کنید.<br>
                            این یک متن آزمایشی است که به زودی توسط نویسنده این سایت، تکمیل یا حذف خواهد شد. اگر شما نویسنده‌ی این سایت هستید، برای حذف یا ویرایش این صفحه، کافی است از طریق مرکز مدیریت سایت خود وارد بخش مربوطه شده و محتوای این صفحه را ویرایش یا حذف کنید.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div> -->
</section>

@endsection
