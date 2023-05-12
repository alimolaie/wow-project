<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $players=\App\Player::all();
    $relams=\App\Relam::all();
        @endphp
    <meta charset="utf-8">
    <title> ویکسانا-داشبرد پلیر </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template">
    <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health">
    <meta name="author" content="Shreethemes">
    <meta name="email" content="support@shreethemes.in">
    <meta name="website" content=" ">
    <meta name="Version" content="v1.2.0">
    <!-- favicon -->

    <!-- simplebar -->
    <link href="{{asset('assets/css/simplebar.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons -->

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Icons -->
    <link href="{{asset('assets/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/remixicon.css')}}" rel="stylesheet" type="text/css">

    <!-- Iconscout -->
    {{--    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">--}}
    <link href="{{asset('assets/css/unicons.iconscout.com/release/v3.0.6/css/line.css')}}" rel="stylesheet">
    <!-- Css -->
    <link href="{{asset('assets/css/style-rtl.min.css')}}" rel="stylesheet" type="text/css" id="theme-opt">

</head>

<body>


<div class="page-wrapper doctris-theme toggled">
    @include('player_panel.navbar')
    <!-- Start Page Content -->
    <main class="page-content bg-light">
        <div class="top-header">
            <div class="header-bar d-flex justify-content-between border-bottom">
                <div class="d-flex align-items-center">
                    <a href="#" class="logo-icon">
                        <img src="{{asset('assets/images/logo-icon.png')}}" height="30" class="small" alt="">
                        <span class="big">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" height="24" class="logo-light-mode" alt="">
                                    <img src="{{asset('assets/images/logo-light.png')}}" height="24" class="logo-dark-mode" alt="">
                                </span>
                    </a>
                    <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary me-2" href="#">
                        <i class="uil uil-bars"></i>
                    </a>
                    <div class="search-bar p-0 d-none d-lg-block me-2">
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
@include('footer-admin')
        <!-- End -->
    </main>
    <!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0">
            <img src="{{asset('assets/images/logo-dark.png')}}" height="24" class="light-version" alt="">
            <img src="{{asset('assets/images/logo-light.png')}}" height="24" class="dark-version" alt="">
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
                            <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="{{asset('assets/images/layouts/light-dash-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="{{asset('assets/images/layouts/dark-dash-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">راست چین</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark-rtl')"><img src="{{asset('assets/images/layouts/dark-dash-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت تاریک</span></a></li>
                            <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style-rtl')"><img src="{{asset('assets/images/layouts/light-dash-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">حالت روشن</span></a></li>
                            <li class="d-grid"><a href="{{url('/')}}" target="_blank" class="mt-4"><img src="{{asset('assets/images/layouts/landing-light-rtl.png')}}" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">صفحات لندینگ</span></a></li>
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
<!-- Compose Mail Start -->
@include('email.compose')
<!-- Compose Mail End -->

<!-- javascript -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- simplebar -->
<script src="{{asset('assets/js/simplebar.min.js')}}"></script>
<!-- Icons -->
<script src="{{asset('js/jquery.min.js')}}"></script>

<script src="{{asset('assets/js/feather.min.js')}}"></script>
<!-- CK editor -->
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('js/tinymce.min.js')}}"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var postURL = "<?php echo url('addmore'); ?>";
        var i=1;


        $('#add').click(function(){
            i++;
            $('#dynamic_field').append('<div class="input-group mt-3" id="dynamic_field'+i+'"><select class="form-select" aria-label="Default select example" >@foreach($players as $p)<option>{{$p->player_name}}</option>@endforeach</select><INPUT class="form-control-sm" type="text" placeholder="ضریب"> <td><button type="button" name="remove" id="ali'+i+'" class="btn btn-danger btn_remove">x</button></td>');
        });


        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#ali'+button_id+'').remove();
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#submit').click(function(){
            $.ajax({
                url:postURL,
                method:"POST",
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
            });
        });


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $(".print-success-msg").css('display','none');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        var postURL = "<?php echo url('addmore'); ?>";
        var i=1;


        $('#add1').click(function(){
            i++;
            $('#dynamic_field1').append('<div class="input-group mt-3" id="dynamic_field1'+i+'"><select class="form-select" aria-label="Default select example" >@foreach($relams as $r)<option>{{$r->relam_name}}</option>@endforeach</select><INPUT class="form-control-sm" type="text" placeholder="مقدار گلد"> <td><button type="button" name="remove" id="ali'+i+'" class="btn btn-danger btn_remove">x</button></td>');
        });

        $(document).on('click', '.btn_remove1', function(){
            var button_id = $(this).attr("id");
            $('#ali'+button_id+'').remove();
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#submit').click(function(){
            $.ajax({
                url:postURL,
                method:"POST",
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
            });
        });


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $(".print-success-msg").css('display','none');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>
</body>

</html>
