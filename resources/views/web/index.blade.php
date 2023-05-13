<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>صفحه اصلی  | ویکسانا</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/wixana.png')}}">

    <!-- all css here -->

    <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/owl.transitions.css')}}">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('web/css/meanmenu.min.css')}}">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/icon.css')}}">
    <link rel="stylesheet" href="{{asset('web/css/flaticon.css')}}">
    <!-- magnific css -->
    <link rel="stylesheet" href="{{asset('web/css/magnific.min.css')}}">
    <!-- venobox css -->
    <link rel="stylesheet" href="{{asset('web/css/venobox.css')}}">
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">

    <!-- modernizr css -->
    <script src="{{asset('web/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div id="preloader"></div>
<!-- header end -->
@include('web.header')
<!-- Start Slider Area -->
<div class="intro-area">
    <div class="main-overly"></div>
    <div class="intro-carousel">
        <div class="intro-content">
            <div class="slider-images">
                <img src="{{asset('web/img/slider/s1.jpg')}}" alt="">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- layer 1 -->
                            <div class="layer-1-2">
                                <h1 class="title2">جادوگر دنیای مجازی خود را ایجاد کنید </h1>
                            </div>
                            <div class="layer-1-1 hidden-xs">
                                <p>استودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است. ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3">
                                <a href="#" class="ready-btn" >بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-content">
            <div class="slider-images">
                <img src="{{asset('web/img/slider/s2.jpg')}}" alt="">
            </div>
            <div class="slider-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <!-- layer 1 -->
                            <div class="layer-1-2">
                                <h1 class="title2">ما چالش بعدی خود را آماده می کنیم</h1>
                            </div>
                            <div class="layer-1-1 hidden-xs">
                                <p>استودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است. ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</p>
                            </div>
                            <!-- layer 3 -->
                            <div class="layer-1-3">
                                <a href="#" class="ready-btn" >بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Slider Area -->
<!-- Welcome service area start -->
<div class="services-area bg-color-2 area-padding">
    <div class="container">
        <div class="row">
            <div class="services-carousel">
                <!-- single-well end-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-services text-center">
                        <div class="services-img">
                            <img src="{{asset('web/img/feature/1.jpg')}}" alt="">
                            <div class="image-layer">
                                <img src="{{asset('web/img/icon/g1.png')}}" alt="icon Image">
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>موج دار شدن سلطنتی</h4>
                                <p>به زودی 4 فوریه 2019</p>
                                <a class="service-btn" href="#">بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-services text-center">
                        <div class="services-img">
                            <img src="{{asset('web/img/feature/2.jpg')}}" alt="">
                            <div class="image-layer">
                                <img src="{{asset('web/img/icon/g2.png')}}" alt="icon Image">
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>روی رقاص</h4>
                                <p>به زودی 4 فوریه 2019</p>
                                <a class="service-btn" href="#">بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-services text-center">
                        <div class="services-img">
                            <img src="{{asset('web/img/feature/3.jpg')}}" alt="">
                            <div class="image-layer">
                                <img src="{{asset('web/img/icon/g3.png')}}" alt="icon Image">
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>مبارزه با چالش</h4>
                                <p>به زودی 4 فوریه 2019</p>
                                <a class="service-btn" href="#">بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-well end-->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="single-services text-center">
                        <div class="services-img">
                            <img src="{{asset('web/img/feature/4.jpg')}}" alt="">
                            <div class="image-layer">
                                <img src="{{asset('web/img/icon/g4.png')}}" alt="icon Image">
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>آسمان آبی</h4>
                                <p>به زودی 4 فوریه 2019</p>
                                <a class="service-btn" href="#">بیشتر بدانید</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Welcome service area End -->
<!-- Start Product Area -->
<div class="product-area bg-color-1 area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <h3>بازی های ما</h3>
                    <p>استودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است. ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="best-product">
                <!-- Start single product -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-product">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="product">
                                <div class="product-img">
                                    <span class="category"> کامپیوتر</span>
                                    <img class="first-img" src="img/product/p1.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Start product content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="product-content text-center">
                                <h4 class="product-name">
                                    <a href="#">مبارزه با معبد</a>
                                </h4>
                                <div class="launch-date">
                                    <span>راه اندازی: ژوئن 2016</span>
                                </div>
                                <div class="price-box">
                                    <span class="price">قیمت: رایگان</span>
                                </div>
                                <div class="pro-rating no-rating">
                                    <span class="rating-rate"> امتیاز: 4.5</span>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="download-btn">
                                    <span class="play-btn"><img src="img/icon/gplay.png" alt=""></span>
                                    <span class="play-btn"><img src="img/icon/aplay.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <!-- End product content -->
                    </div>
                </div>
                <!-- End single product -->
                <!-- Start single product -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-product">
                        <!-- Start product content -->
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="product-content text-center">
                                <h4 class="product-name">
                                    <a href="#">خطرات جنگ</a>
                                </h4>
                                <div class="launch-date">
                                    <span>راه اندازی: ژوئن 2016</span>
                                </div>
                                <div class="price-box">
                                    <span class="price">قیمت: رایگان</span>
                                </div>
                                <div class="pro-rating no-rating">
                                    <span class="rating-rate"> امتیاز: 4.5</span>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="download-btn">
                                    <span class="play-btn"><img src="img/icon/gplay.png" alt=""></span>
                                    <span class="play-btn"><img src="img/icon/aplay.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <!-- End product content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="product">
                                <div class="product-img">
                                    <span class="category"> پی اس4</span>
                                    <img class="first-img" src="img/product/p2.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                            <div class="product-content text-center">
                                <h4 class="product-name">
                                    <a href="#">خطرات جنگ</a>
                                </h4>
                                <div class="launch-date">
                                    <span>راه اندازی: ژوئن 2016</span>
                                </div>
                                <div class="price-box">
                                    <span class="price">قیمت: رایگان</span>
                                </div>
                                <div class="pro-rating no-rating">
                                    <span class="rating-rate"> امتیاز: 4.5</span>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="download-btn">
                                    <span class="play-btn"><img src="img/icon/gplay.png" alt=""></span>
                                    <span class="play-btn"><img src="img/icon/aplay.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single product -->
                <!-- Start single product -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-product">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="product">
                                <div class="product-img">
                                    <span class="category"> موبایل</span>
                                    <img class="first-img" src="img/product/p3.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Start product content -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="product-content text-center">
                                <h4 class="product-name">
                                    <a href="#">فرشتگان مبارزه</a>
                                </h4>
                                <div class="launch-date">
                                    <span>راه اندازی: ژوئن 2016</span>
                                </div>
                                <div class="price-box">
                                    <span class="price">قیمت: 80 تومان</span>
                                </div>
                                <div class="pro-rating no-rating">
                                    <span class="rating-rate"> امتیاز: 4.5</span>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="download-btn">
                                    <span class="play-btn"><img src="img/icon/gplay.png" alt=""></span>
                                    <span class="play-btn"><img src="img/icon/aplay.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <!-- End product content -->
                    </div>
                </div>
                <!-- End single product -->
                <!-- Start single product -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="single-product last-item">
                        <!-- Start product content -->
                        <div class="col-md-6 col-sm-6 hidden-xs">
                            <div class="product-content text-center">
                                <h4 class="product-name">
                                    <a href="#">جنگ اژدها</a>
                                </h4>
                                <div class="launch-date">
                                    <span>راه اندازی: ژوئن 2018</span>
                                </div>
                                <div class="price-box">
                                    <span class="price">قیمت:100 تومان</span>
                                </div>
                                <div class="pro-rating no-rating">
                                    <span class="rating-rate"> امتیاز: 4.5</span>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="download-btn">
                                    <span class="play-btn"><img src="img/icon/gplay.png" alt=""></span>
                                    <span class="play-btn"><img src="img/icon/aplay.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                        <!-- End product content -->
                        <div class="col-md-6 col-sm-6">
                            <div class="product">
                                <div class="product-img">
                                    <span class="category"> کامپیوتر</span>
                                    <img class="first-img" src="img/product/p4.jpg" alt="">
                                    <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                        <i class="fa fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                            <div class="product-content text-center">
                                <h4 class="product-name">
                                    <a href="#">جنگ اژدها</a>
                                </h4>
                                <div class="launch-date">
                                    <span>راه اندازی: ژوئن 2018</span>
                                </div>
                                <div class="price-box">
                                    <span class="price">قیمت:100 تومان</span>
                                </div>
                                <div class="pro-rating no-rating">
                                    <span class="rating-rate"> امتیاز: 4.5</span>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                </div>
                                <div class="download-btn">
                                    <span class="play-btn"><img src="img/icon/gplay.png" alt=""></span>
                                    <span class="play-btn"><img src="img/icon/aplay.png" alt=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single product -->
            </div>
        </div>
    </div>
</div>
<!-- End Product Area -->
<!-- Start Gallery Area -->
<div class="project-area bg-color-2 fix area-padding">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <h3>گالری ما</h3>
                    <p>استودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است. ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="awesome-project fix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="awesome-menu text-center">
                        <ul class="project-menu">
                            <li><a href="#" class="active" data-filter="*" >همه</a></li>
                            <li><a href="#" data-filter=".screen">صفحه نمایش</a></li>
                            <li><a href="#" data-filter=".stream">استریم</a></li>
                            <li><a href="#" data-filter=".player">بازیکن</a></li>
                            <li><a href="#" data-filter=".challange">چالش</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="project-content">
                <!-- single-awesome-project start -->
                <div class="project-single screen">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p1.jpg">
                                <img src="img/gallery/p1.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single stream">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p2.jpg">
                                <img src="img/gallery/p2.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single challange">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p3.jpg">
                                <img src="img/gallery/p3.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single stream">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p4.jpg">
                                <img src="img/gallery/p4.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single screen">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p5.jpg">
                                <img src="img/gallery/p5.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single player">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p6.jpg">
                                <img src="img/gallery/p6.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single challange">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p7.jpg">
                                <img src="img/gallery/p7.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
                <!-- single-awesome-project start -->
                <div class="project-single stream">
                    <div class="single-awesome-project">
                        <div class="awesome-img">
                            <a class="venobox" data-gall="myGallery" href="img/gallery/p8.jpg">
                                <img src="img/gallery/p8.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
                <!-- single-awesome-project end -->
            </div>
        </div>
    </div>
    <!-- End main content -->
</div>
<!-- End portfolio Area -->
<!-- Start testimonials Area -->
<div class="reviews-area bg-color-1 fix area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <h3>بازیکن ها</h3>
                    <p>استودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است. ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="Reviews-content">
                    <!-- start testimonial carousel -->
                    <div class="testimonial-carousel item-indicator">
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="img/review/1.jpg" alt="">
                            </div>
                            <div class="testi-text">
                                <p>جایگزین کردن چندین متن از متن، متن ساختگی ساختگی مقدار خطوط را حفظ می کند. هنگام انتخاب یک جایگزین.</p>
                                <h4>آرنولد راشل</h4>
                                <span class="guest-rev">مشتری - <a href="#">مشتری عمومی</a></span>
                            </div>
                        </div>
                        <!-- End single item -->
                        <div class="single-testi">
                            <div class="testi-img ">
                                <img src="img/review/2.jpg" alt="">
                            </div>
                            <div class="testi-text">
                                <p>جایگزین کردن چندین متن از متن، متن ساختگی ساختگی مقدار خطوط را حفظ می کند. هنگام انتخاب یک جایگزین.</p>
                                <h4>آرنولد راشل</h4>
                                <span class="guest-rev">مشتری - <a href="#">مشتری عمومی</a></span>
                            </div>
                        </div>
                        <!-- End single item -->
                        <div class="single-testi">
                            <div class="testi-img">
                                <img src="img/review/3.jpg" alt="">
                            </div>
                            <div class="testi-text">
                                <p>جایگزین کردن چندین متن از متن، متن ساختگی ساختگی مقدار خطوط را حفظ می کند. هنگام انتخاب یک جایگزین.</p>

                                <h4>آرنولد راشل</h4>
                                <span class="guest-rev">مشتری  - <a href="#">مشتری عمومی</a></span>
                            </div>
                        </div>
                        <!-- End single item -->
                        <div class="single-testi">
                            <div class="testi-img">
                                <img src="img/review/4.jpg" alt="">
                            </div>

                            <div class="testi-text">
                                <p>جایگزین کردن چندین متن از متن، متن ساختگی ساختگی مقدار خطوط را حفظ می کند. هنگام انتخاب یک جایگزین.</p>
                                <h4>آرنولد راشل</h4>
                                <span class="guest-rev">مشتری - <a href="#">مدیر عمومی</a></span>
                            </div>
                        </div>
                        <!-- End single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End testimonials end -->
<!-- Start Challange Area -->
<div class="challange-area bg-color-2 area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <h3>مسابقه</h3>
                    <p>استودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است. ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- End single page -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="tab-menu">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active">
                            <a href="#p-view-1" role="tab" data-toggle="tab">
                                <img class="cha-img" src="img/challange/c1.jpg" alt="challange image">
                                <span class="title-date">
								        	<span class="cha-title">رقابت چلنجر مبارزه</span>
								            <span class="cha-date">05 سپتامبر 2018</span>
								        </span>
                            </a>
                        </li>
                        <li>
                            <a href="#p-view-2" role="tab" data-toggle="tab">
                                <img class="cha-img" src="img/challange/c2.jpg" alt="challange image">
                                <span class="title-date">
								        	<span class="cha-title">مبارزه با معبد چلنجر</span>
								            <span class="cha-date">05 سپتامبر 2018</span>
								        </span>
                            </a>
                        </li>
                        <li>
                            <a href="#p-view-3" role="tab" data-toggle="tab">
                                <img class="cha-img" src="img/challange/c3.jpg" alt="challange image">
                                <span class="title-date">
								        	<span class="cha-title">فرشتگان مبارزه مسابقه</span>
								            <span class="cha-date">05 سپتامبر 2018</span>
								        </span>
                            </a>
                        </li>
                        <li>
                            <a href="#p-view-4" role="tab" data-toggle="tab">
                                <img class="cha-img" src="img/challange/b4.jpg" alt="challange image">
                                <span class="title-date">
								        	<span class="cha-title">خطرات جنگ مرد جنگ</span>
								            <span class="cha-date">05 سپتامبر 2018</span>
								        </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="p-view-1">
                        <div class="tab-inner">
                            <div class="single-page">
                                <div class="page-img">
                                    <img src="img/challange/b1.jpg" alt="">
                                </div>
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="p-view-2">
                        <div class="tab-inner">
                            <div class="single-page">
                                <div class="page-img">
                                    <img src="img/challange/b2.jpg" alt="">
                                </div>
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="p-view-3">
                        <div class="tab-inner">
                            <div class="single-page">
                                <div class="page-img">
                                    <img src="img/challange/b3.jpg" alt="">
                                </div>
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="p-view-4">
                        <div class="tab-inner">
                            <div class="single-page">
                                <div class="page-img">
                                    <img src="img/challange/b4.jpg" alt="">
                                </div>
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end column -->
        </div>
        <!-- end Row -->
    </div>
</div>
<!-- End Challange end -->
<!--Blog Area Start-->
<div class="blog-area bg-color-1 area-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline white-headline text-center">
                    <h3>اخبار بازی ها</h3>
                    <p>استودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است. ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog-grid">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-right-column">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
											<span class="date-type">
												15 ژوئیه، 2017
											</span>
                                    <span class="comments-type">
												<i class="fa fa-comment-o"></i>
												10
											</span>
                                </div>
                                <a href="#">
                                    <h4>اسنودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است</h4>
                                </a>
                                <p>جادوگر یک گروه مهندسی و قراردادی است که به دست آورده است.</p>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b2.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
											<span class="date-type">
												15 ژوئیه، 2017
											</span>
                                    <span class="comments-type">
												<i class="fa fa-comment-o"></i>
												32
											</span>
                                </div>
                                <a href="#">
                                    <h4>ما خدمات مشتریان خود را به مشتریان خود ارائه می دهیم.</h4>
                                </a>
                                <p>جادوگر یک گروه مهندسی و قراردادی است که به دست آورده است.</p>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b3.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
											<span class="date-type">
												15 ژوئیه، 2017
											</span>
                                    <span class="comments-type">
												<i class="fa fa-comment-o"></i>
												18
											</span>
                                </div>
                                <a href="#">
                                    <h4>اسنودیو جادوگر از سال 2003 شروع به تولید بازی های ابتکاری کرده است</h4>
                                </a>
                                <p>جادوگر یک گروه مهندسی و قراردادی است که به دست آورده است.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
                <!-- Start single blog -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a class="image-scale" href="#">
                                <img src="img/blog/b4.jpg" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
										<span class="date-type">
											15 ژوئیه، 2017
										</span>
                                <span class="comments-type">
											<i class="fa fa-comment-o"></i>
											23
										</span>
                            </div>
                            <a href="#">
                                <h4>ما به مشتریان خود را توسعه حرفه ای ارائه می دهیم.</h4>
                            </a>
                            <p>جادوگر یک گروه مهندسی و قراردادی است که به دست آورده است تخصص آن در شصت سال گذشته است. نقاشی مهندسی و پیمانکاری عمومی است.جادوگر یک گروه مهندسی و قراردادی است که به دست آورده است تخصص آن در طی شش سال گذشته است.</p>
                            <a class="read-more" href="#"> ادامه مطلب</a>
                        </div>
                    </div>
                </div>
                <!-- End single blog -->
            </div>
        </div>
        <!-- End row -->
    </div>
</div>
<!--End of Blog Area-->
<!-- Start Footer bottom Area -->
@include('web.footer')
<!-- all js here -->


<!-- jquery latest version -->
<script src="{{asset('web/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('web/js/bootstrap.min.js')}}"></script>
<!-- Google Map js -->
<script src="{{asset('web/js/mapcode.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{asset('web/js/owl.carousel.min.js')}}"></script>
<!-- isotope js -->
<script src="{{asset('web/js/isotope.pkgd.min.js')}}"></script>
<!-- magnific js -->
<script src="{{asset('web/js/magnific.min.js')}}"></script>
<!-- venobox js -->
<script src="{{asset('web/js/venobox.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{asset('web/js/jquery.meanmenu.js')}}"></script>
<!-- Form validator js -->
<script src="{{asset('web/js/form-validator.min.js')}}"></script>
<!-- plugins js -->
<script src="{{asset('web/js/plugins.js')}}"></script>
<!-- main js -->
<script src="{{asset('web/js/main.js')}}"></script>
</body>

</html>
