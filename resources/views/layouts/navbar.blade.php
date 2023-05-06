<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar="" style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="{{asset('img/wixana.png')}}" height="24" class="logo-light-mode" alt="">
                <img src="{{asset('img/wixana.png')}}" height="24" class="logo-dark-mode" alt="">
            </a>
        </div>

        <ul class="sidebar-menu pt-3">
            <li><a href="{{url('home')}}"><i class="uil uil-dashboard ms-2 d-inline-block"></i>داشبرد</a></li>

            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-server ms-2 d-inline-block"></i>ریلیم</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('realm.index')}}">لیست ریلیم ها</a></li>
                        <li><a href="{{route('realm.create')}}">افزودن ریلیم</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-user ms-2 d-inline-block"></i>پلیر</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{route('player.index')}}">پلیر</a></li>
                        <li><a href="{{route('player.create')}}">افزودن پلیر</a></li>
                    </ul>
                </div>
            </li>
{{--            <li class="sidebar-dropdown">--}}
{{--                <a href="javascript:void(0)"><i class="uil uil-user ms-2 d-inline-block"></i>پزشکان</a>--}}
{{--                <div class="sidebar-submenu">--}}
{{--                    <ul>--}}
{{--                        <li><a href="doctors.html">پزشکان</a></li>--}}
{{--                        <li><a href="add-doctor.html">افزودن پزشک</a></li>--}}
{{--                        <li><a href="dr-profile.html">پروفایل</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}

            <li><a href="{{route('logout.user')}}" target="_blank"><i class="uil uil-sign-out-alt ms-2 d-inline-block"></i>خروج</a></li>
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
