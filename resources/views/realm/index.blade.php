
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> ویکسانا- ریلیم </title>
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
    @include('layouts.navbar')
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
                <div class="d-md-flex justify-content-between">
                    <h5 class="mb-0"> لیست ریلیم</h5>

                    <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                        <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html">ویکسانا</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ریلیم</li>
                        </ul>
                    </nav>
                </div>

                <div class="col-10 mt-4">

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام ریلیم</th>
                            <th scope="col">آدرس ریلیم</th>
                            <th scope="col">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($relame as $key=> $r)
                        <tr>
                            <th scope="row">{{++$key}}</th>
                            <td>{{$r->relam_name}}</td>
                            <td><a href="{{$r->relam_address}}">{{$r->relam_address}}</a></td>
                            <td>
                                <form method="post" action="{{route('realm.destroy',$r->id)}}">
                                    @csrf
                                    @method('delete')
                                <a href="{{route('realm.edit',$r->id)}}" class="btn btn-info" title="ویرایش"><i class="uil uil-pen text-white"></i> </a>
                                <button type="submit" class="btn btn-danger show_confirm" ><i class="uil uil-trash text-white"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

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



<!-- javascript -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- simplebar -->
<script src="{{asset('assets/js/simplebar.min.js')}}"></script>
<!-- Icons -->
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<!-- CK editor -->
<script src="{{asset('assets/js/feather.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>

<!-- Main Js -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>



<script type="text/javascript">

    $('.show_confirm').click(function(event) {
        var form =  $(this).closest("form");
        var name = $(this).data("relam_name");
        event.preventDefault();
        swal({
            title: `آیا مطمئنید که می خواهید این رکورد را حذف کنید؟`,
            text: "اگر این رکورد را حذف کنید برای همیشه از بین خواهد رفت.",
            icon: "error",
            buttons:["لغو","تایید"],
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
    });

</script>
</body>

</html>
