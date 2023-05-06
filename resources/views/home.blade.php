
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> ویکسانا-داشبرد</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template">
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content=" ">
    <meta name="Version" content="v1.2.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('img/wixana.png')}}">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- simplebar -->
    <link href="{{asset('assets/css/simplebar.css')}}" rel="stylesheet" type="text/css">
    <!-- Select2 -->
    <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet">
    <!-- Icons -->
    <link href="{{asset('assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/remixicon.css')}}" rel="stylesheet" type="text/css">

    <!-- SLIDER -->
    <link href="../assets/css/tiny-slider.css" rel="stylesheet">
    <!-- Iconscout -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../assets/css/unicons.iconscout.com/release/v3.0.6/css/line.css" rel="stylesheet">
    <!-- Css -->
    <link href="../assets/css/style-rtl.min.css" rel="stylesheet" type="text/css" id="theme-opt">

</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->

<div class="page-wrapper doctris-theme toggled">
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content" data-simplebar="" style="height: calc(100% - 60px);">
            <div class="sidebar-brand">
                <a href="index.html">
                    <img src="../assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                    <img src="../assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                </a>
            </div>

            <ul class="sidebar-menu pt-3">
                <li><a href="index.html"><i class="uil uil-dashboard ms-2 d-inline-block"></i>داشبرد</a></li>
                <li><a href="appointment.html"><i class="uil uil-stethoscope ms-2 d-inline-block"></i>نوبت دهی</a></li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-user ms-2 d-inline-block"></i>پزشکان</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="doctors.html">پزشکان</a></li>
                            <li><a href="add-doctor.html">افزودن پزشک</a></li>
                            <li><a href="dr-profile.html">پروفایل</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-wheelchair ms-2 d-inline-block"></i>بیماران</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="patients.html">بیماران</a></li>
                            <li><a href="add-patient.html">افزودن بیمار</a></li>
                            <li><a href="patient-profile.html">پروفایل</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-apps ms-2 d-inline-block"></i>برنامه‌ها</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="chat.html">چت</a></li>
                            <li><a href="email.html">ایمیل</a></li>
                            <li><a href="calendar.html">تقویم</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-shopping-cart ms-2 d-inline-block"></i>داروخانه</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="shop.html">فروشگاه</a></li>
                            <li><a href="product-detail.html">جزییات محصول</a></li>
                            <li><a href="shopcart.html">سبد خرید</a></li>
                            <li><a href="checkout.html">ادامه خرید</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-flip-h ms-2 d-inline-block"></i>بلاگ</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="blogs.html">بلاگ</a></li>
                            <li><a href="blog-detail.html">جزییات بلاگ</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-file ms-2 d-inline-block"></i>صفحات</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="faqs.html">سوالات متدوال</a></li>
                            <li><a href="review.html">نظرات</a></li>
                            <li><a href="invoice-list.html">لیست فاکتور</a></li>
                            <li><a href="invoice.html">فاکتور</a></li>
                            <li><a href="terms.html">مقررات و سیاست‌ها</a></li>
                            <li><a href="privacy.html">حفظ حریم شخصی</a></li>
                            <li><a href="error.html">404 !</a></li>
                            <li><a href="blank-page.html">صفحه خالی</a></li>
                        </ul>
                    </div>
                </li>

                <li class="sidebar-dropdown">
                    <a href="javascript:void(0)"><i class="uil uil-sign-in-alt ms-2 d-inline-block"></i>احراز هویت</a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="login.html">ورود</a></li>
                            <li><a href="signup.html">ثبت نام</a></li>
                            <li><a href="forgot-password.html">فراموشی رمزعبور</a></li>
                            <li><a href="lock-screen.html">قفل صفحه</a></li>
                            <li><a href="thankyou.html">ممنونیم..</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="components.html"><i class="uil uil-cube ms-2 d-inline-block"></i>کامپوننت‌ها</a></li>

                <li><a href="../landing/index-two.html" target="_blank"><i class="uil uil-window ms-2 d-inline-block"></i>لندینگ پیچ</a></li>
            </ul>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <ul class="sidebar-footer list-unstyled mb-0">
            <li class="list-inline-item mb-0 me-1">
                <a href="#" class="btn btn-icon btn-pills btn-soft-primary">
                    <i class="uil uil-comment icons"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- sidebar-wrapper  -->

    <!-- Start Page Content -->
    <main class="page-content bg-light">
        <div class="top-header">
            <div class="header-bar d-flex justify-content-between border-bottom">
                <div class="d-flex align-items-center">
                    <a href="#" class="logo-icon">
                        <img src="../assets/images/logo-icon.png" height="30" class="small" alt="">
                        <span class="big">
                                    <img src="../assets/images/logo-dark.png" height="24" class="logo-light-mode" alt="">
                                    <img src="../assets/images/logo-light.png" height="24" class="logo-dark-mode" alt="">
                                </span>
                    </a>
                    <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary me-2" href="#">
                        <i class="uil uil-bars"></i>
                    </a>
                    <div class="search-bar p-0 d-none d-md-block me-2">
                        <div id="search" class="menu-search mb-0">
                            <form role="search" method="get" id="searchform" class="searchform">
                                <div>
                                    <input type="text" class="form-control border rounded-pill" name="s" id="s" placeholder="جستجو کلیدواژه...">
                                    <input type="submit" id="searchsubmit" value="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <ul class="list-unstyled mb-0">
                    <li class="list-inline-item mb-0 me-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/language/american.png" class="avatar avatar-ex-small rounded-circle p-2" alt=""></button>
                            <div class="dropdown-menu dd-menu drop-ups dropdown-menu-end bg-white shadow border-0 mt-3 p-2" data-simplebar="" style="height: 175px;">
                                <a href="javascript:void(0)" class="d-flex align-items-center">
                                    <img src="../assets/images/language/chinese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                    <div class="flex-1 text-right ms-2 overflow-hidden">
                                        <small class="text-dark mb-0">چینی</small>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                    <img src="../assets/images/language/european.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                    <div class="flex-1 text-right ms-2 overflow-hidden">
                                        <small class="text-dark mb-0">اوروپایی</small>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                    <img src="../assets/images/language/indian.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                    <div class="flex-1 text-right ms-2 overflow-hidden">
                                        <small class="text-dark mb-0">هندی</small>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                    <img src="../assets/images/language/japanese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                    <div class="flex-1 text-right ms-2 overflow-hidden">
                                        <small class="text-dark mb-0">ژاپنی</small>
                                    </div>
                                </a>

                                <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                    <img src="../assets/images/language/russian.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                    <div class="flex-1 text-right ms-2 overflow-hidden">
                                        <small class="text-dark mb-0">روسی</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item mb-0 me-1">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 me-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail" class="fea icon-sm"></i></button>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4 <span class="visually-hidden">پیام های خوانده نشده</span></span>

                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 px-2 py-2" data-simplebar="" style="height: 320px; width: 300px;">
                                <a href="#" class="d-flex align-items-center justify-content-between py-2">
                                    <div class="d-inline-flex position-relative overflow-hidden">
                                        <img src="../assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <small class="text-dark mb-0 d-block text-truncat ms-3"> یک ایمیل جدید دریافت کردید <b> جولیا </b> <small class="text-muted fw-normal d-inline-block">1 ساعت قبل</small></small>
                                    </div>
                                </a>

                                <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                    <div class="d-inline-flex position-relative overflow-hidden">
                                        <img src="../assets/images/client/Codepen.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <small class="text-dark mb-0 d-block text-truncat ms-3"> یک ایمیل جدید دریافت کردید <b> کدپن </b>   <small class="text-muted fw-normal d-inline-block">4 ساعت قبل</small></small>
                                    </div>
                                </a>

                                <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                    <div class="d-inline-flex position-relative overflow-hidden">
                                        <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <small class="text-dark mb-0 d-block text-truncat ms-3"> یک ایمیل جدید دریافت کردید <b> کریستینا</b> <small class="text-muted fw-normal d-inline-block">5 ساعت قبل</small></small>
                                    </div>
                                </a>

                                <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                    <div class="d-inline-flex position-relative overflow-hidden">
                                        <img src="../assets/images/client/dribbble.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <small class="text-dark mb-0 d-block text-truncat ms-3"> یک ایمیل جدید دریافت کردید <b>دریبل</b> <small class="text-muted fw-normal d-inline-block">24 ساعت قبل</small></small>
                                    </div>
                                </a>

                                <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                    <div class="d-inline-flex position-relative overflow-hidden">
                                        <img src="../assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <small class="text-dark mb-0 d-block text-truncat ms-3"> یک ایمیل جدید دریافت کردید <b> دونالد اریکاری </b> <small class="text-muted fw-normal d-inline-block">1 day ago</small></small>
                                    </div>
                                </a>

                                <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                    <div class="d-inline-flex position-relative overflow-hidden">
                                        <img src="../assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                        <small class="text-dark mb-0 d-block text-truncat ms-3"> یک ایمیل جدید دریافت کردید <b> کوین </b> <small class="text-muted fw-normal d-inline-block">2 day ago</small></small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="list-inline-item mb-0 me-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark" href="profile.html">
                                    <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow ms-2" alt="">
                                    <div class="flex-1 ">
                                        <span class="d-block mb-1" >کلوین کارلو</span>
                                        <small class="text-muted"> ارتوپدی </small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span>داشبرد</a>
                                <a class="dropdown-item text-dark" href="dr-profile.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span>تنظیمات پروفایل</a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> خروج</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container-fluid">
            <div class="layout-specing">
                <h5 class="mb-0">داشبرد</h5>

                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                        <div class="card features feature-primary rounded border-0 shadow p-4">
                            <div class="d-flex align-items-center">
                                <div class="icon text-center rounded-md">
                                    <i class="uil uil-bed h3 mb-0"></i>
                                </div>
                                <div class="flex-1 me-2">
                                    <h5 class="mb-0">558</h5>
                                    <p class="text-muted mb-0">بیماران</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                        <div class="card features feature-primary rounded border-0 shadow p-4">
                            <div class="d-flex align-items-center">
                                <div class="icon text-center rounded-md">
                                    <i class="uil uil-file-medical-alt h3 mb-0"></i>
                                </div>
                                <div class="flex-1 me-2">
                                    <h5 class="mb-0">2164</h5>
                                    <p class="text-muted mb-0">هزینه میانگین</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                        <div class="card features feature-primary rounded border-0 shadow p-4">
                            <div class="d-flex align-items-center">
                                <div class="icon text-center rounded-md">
                                    <i class="uil uil-social-distancing h3 mb-0"></i>
                                </div>
                                <div class="flex-1 me-2">
                                    <h5 class="mb-0">112</h5>
                                    <p class="text-muted mb-0">کارکنان</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                        <div class="card features feature-primary rounded border-0 shadow p-4">
                            <div class="d-flex align-items-center">
                                <div class="icon text-center rounded-md">
                                    <i class="uil uil-ambulance h3 mb-0"></i>
                                </div>
                                <div class="flex-1 me-2">
                                    <h5 class="mb-0">16</h5>
                                    <p class="text-muted mb-0">وسایل</p>
                                </div>
                            </div>

                        </div>
                    </div><!--end col-->

                    <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                        <div class="card features feature-primary rounded border-0 shadow p-4">
                            <div class="d-flex align-items-center">
                                <div class="icon text-center rounded-md">
                                    <i class="uil uil-medkit h3 mb-0"></i>
                                </div>
                                <div class="flex-1 me-2">
                                    <h5 class="mb-0">220</h5>
                                    <p class="text-muted mb-0">نوبت گرفتن</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                        <div class="card features feature-primary rounded border-0 shadow p-4">
                            <div class="d-flex align-items-center">
                                <div class="icon text-center rounded-md">
                                    <i class="uil uil-medical-drip h3 mb-0"></i>
                                </div>
                                <div class="flex-1 me-2">
                                    <h5 class="mb-0">10</h5>
                                    <p class="text-muted mb-0">اپراطور</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-xl-8 col-lg-7 mt-4">
                        <div class="card shadow border-0 p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="align-items-center mb-0">بیماران بر اساس جنسیت</h6>

                                <div class="mb-0 position-relative">
                                    <select class="form-select form-control" id="yearchart">
                                        <option selected>1400</option>
                                        <option value="1400">1400</option>
                                        <option value="1398">1398</option>
                                    </select>
                                </div>
                            </div>
                            <div id="dashboard" class="apex-chart"></div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-4 col-lg-5 mt-4">
                        <div class="card shadow border-0 p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="align-items-center mb-0">بیماران بر اساس دپارتمان</h6>

                                <div class="mb-0 position-relative">
                                    <select class="form-select form-control" id="dailychart">
                                        <option selected>امروز</option>
                                        <option value="2019">دیروز</option>
                                    </select>
                                </div>
                            </div>
                            <div id="department" class="apex-chart"></div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-xl-4 col-lg-6 mt-4">
                        <div class="card border-0 shadow rounded">
                            <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                                <h6 class="mb-0"><i class="uil uil-calender text-primary ms-1 h5"></i>آخرین نوبت ها</h6>
                                <h6 class="text-muted mb-0">55 بیمار</h6>
                            </div>

                            <ul class="list-unstyled mb-0 p-4">
                                <li>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="../assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">کلوین کارلو</h6>
                                                <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="../assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">جویا خان</h6>
                                                <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">امیلی مولی</h6>
                                                <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="../assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">نیک رونالدو</h6>
                                                <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                        </div>
                                    </div>
                                </li>

                                <li class="mt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-inline-flex">
                                            <img src="../assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="me-3">
                                                <h6 class="text-dark mb-0 d-block">کریس جوژپه</h6>
                                                <small class="text-muted">نوبت در 27ام اسفند 1400</small>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check icons"></i></a>
                                            <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times icons"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-4 col-lg-6 mt-4">
                        <div class="card chat chat-person border-0 shadow rounded">
                            <div class="d-flex justify-content-between border-bottom p-4">
                                <div class="d-flex">
                                    <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 overflow-hidden me-3">
                                        <a href="#" class="text-dark mb-0 h6 d-block text-truncate">کریستسن مورفی</a>
                                        <small class="text-muted"><i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i> آنلاین</small>
                                    </div>
                                </div>

                                <ul class="list-unstyled mb-0">
                                    <li class="dropdown dropdown-primary list-inline-item">
                                        <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-ellipsis-h icons"></i></button>
                                        <div class="dropdown-menu dd-menu dropdown-menu-start bg-white shadow border-0 mt-3 py-3">
                                            <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block ms-1"><i class="uil uil-user align-middle h6"></i></span>پروفایل</a>
                                            <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block ms-1"><i class="uil uil-setting align-middle h6"></i></span>تنظیمات پروفایل</a>
                                            <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block ms-1"><i class="uil uil-trash align-middle h6"></i></span>حذف</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <ul class="p-4 list-unstyled mb-0 chat" data-simplebar style="background: url('../assets/images/bg/bg-chat.png') center center; max-height: 295px;">
                                <li>
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1">سلام کریستوفر</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>59 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-right">
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative chat-user-image">
                                                <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1">سلام کریستین</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>45 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-right">
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative chat-user-image">
                                                <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1">چطور میتونم کمکت کنم؟</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>44 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1">خوشحالم میبینمت</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>42 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1">امیدوارم حالت خیلی خوب باشه</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>40 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-right">
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative chat-user-image">
                                                <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1">خیلی خوبم ممنونم میپرسی</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>45 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1"> من علاقه مندم درباره قیمت ها و خدماتی که ارائه می دهید بیشتر بدانم </p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>35 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-right">
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative chat-user-image">
                                                <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1"> لطفاً برای یافتن اطلاعات مفیدتر لینک زیر را بررسی کنید <a href=" " target="_blank" class="text-primary">http://google.com/</a></p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>25 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1"> ممنونم😊</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>20 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="chat-right">
                                    <div class="d-inline-block">
                                        <div class="d-flex chat-type mb-3">
                                            <div class="position-relative chat-user-image">
                                                <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                            </div>

                                            <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                <p class="text-muted small msg px-3 py-2 bg-light rounded mb-1">خواهش میکنم</p>
                                                <small class="text-muted msg-time"><i class="uil uil-clock-nine ms-1"></i>18 دقیقه قبل</small>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="p-2 rounded-bottom shadow">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control border" placeholder="اینجا تایپ کنید">
                                    </div>
                                    <div class="col-auto">
                                        <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-message icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-smile icons"></i></a>
                                        <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-paperclip icons"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-4 col-lg-12 mt-4">
                        <div class="card border-0 shadow rounded">
                            <div class="p-4 border-bottom">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0"><i class="uil uil-user text-primary ms-1 h5"></i>نظرات بیماران</h6>

                                    <div class="mb-0 position-relative">
                                        <select class="form-select form-control" id="dailypatient">
                                            <option selected>جدید</option>
                                            <option value="2019">قدیمی</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 355px;">
                                <li class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/doctors/01.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                        <div class="flex-1 me-3">
                                            <span class="d-block h6 mb-0">پزشک. کلوین کارلو</span>
                                            <small class="text-muted"> ارتوپدی </small>

                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item text-muted">(45)</li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class="text-muted mb-0">150 بیمار</p>
                                </li>

                                <li class="d-flex align-items-center justify-content-between mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                        <div class="flex-1 me-3">
                                            <span class="d-block h6 mb-0">پزشک. کریستین مورفی</span>
                                            <small class="text-muted"> زنان </small>

                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item text-muted">(75)</li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class="text-muted mb-0">350 بیمار</p>
                                </li>

                                <li class="d-flex align-items-center justify-content-between mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/doctors/03.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                        <div class="flex-1 me-3">
                                            <span class="d-block h6 mb-0">پزشک. آیا ردی</span>
                                            <small class="text-muted"> روان درمانی </small>

                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item text-muted">(48)</li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class="text-muted mb-0">450 بیمار</p>
                                </li>

                                <li class="d-flex align-items-center justify-content-between mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/doctors/04.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                        <div class="flex-1 me-3">
                                            <span class="d-block h6 mb-0">پزشک. تونی کاور</span>
                                            <small class="text-muted"> دندانپزشک </small>

                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item text-muted">(68)</li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class="text-muted mb-0">484 بیمار</p>
                                </li>

                                <li class="d-flex align-items-center justify-content-between mt-4">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/doctors/05.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                        <div class="flex-1 me-3">
                                            <span class="d-block h6 mb-0">پزشک. جنیفر بالانس</span>
                                            <small class="text-muted"> قلب و عروق </small>

                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item text-muted">(55)</li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <p class="text-muted mb-0">476 بیمار</p>
                                </li>
                            </ul>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div><!--end container-->

        <!-- Footer Start -->
        <footer class="bg-white shadow py-3">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="text-sm-start text-center">
                            <p class="mb-0 text-muted"> © داکتریس - ارائه <i class="mdi mdi-heart text-danger"></i> از <a href="" target="_blank" class="text-reset">آفرید تیم<p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0">
            <img src="../assets/images/logo-dark.png" height="24" class="light-version" alt="">
            <img src="../assets/images/logo-light.png" height="24" class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4 px-md-5">
        <div class="row">
            <div class="col-12">
                <!-- Style switcher -->
                <div id="style-switcher">
                    <div>
                        <ul class="text-center list-unstyled mb-0">
                            <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="../assets/images/layouts/light-dash-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="../assets/images/layouts/dark-dash-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark-rtl')"><img src="../assets/images/layouts/dark-dash-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت تاریک</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style-rtl')"><img src="../assets/images/layouts/light-dash-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت روشن</span></a></li>
                            <li class="d-grid"><a href="../landing/index.html" target="_blank" class="mt-4"><img src="../assets/images/layouts/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">صفحات لندینگ</span></a></li>
                        </ul>
                    </div>
                </div>
                <!-- end Style switcher -->
            </div><!--end col-->
        </div><!--end row-->
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon mb-0">
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/doctris-html-template" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="خرید"></i></a></li>
            <li class="list-inline-item mb-0"><a href=" " target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.rtl-theme.com/author/afaridteam/" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
            <li class="list-inline-item mb-0"><a href=" " target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
        </ul><!--end icon-->
    </div>
</div>
<!-- Offcanvas End -->

<!-- javascript -->
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<!-- simplebar -->
<script src="../assets/js/simplebar.min.js"></script>
<!-- Chart -->
<script src="../assets/js/apexcharts.min.js"></script>
<script src="../assets/js/columnchart.init.js"></script>
<!-- Icons -->
<script src="../assets/js/feather.min.js"></script>
<!-- Main Js -->
<script src="../assets/js/app.js"></script>

</body>

</html>
