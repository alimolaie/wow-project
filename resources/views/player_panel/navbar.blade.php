<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content" data-simplebar="" style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html">
                <img src="{{asset('img/wixana.png')}}" height="24" class="logo-light-mode" alt="">
                <img src="{{asset('img/wixana.png')}}" height="24" class="logo-dark-mode" alt="">
            </a>
            <br>

        </div>
        <h4 class="text-center">{{Auth::guard('player')->user()->player_name}}</h4>
        <h5 class="text-center text-primary">User Name: {{Auth::guard('player')->user()->user_name}}</h5>
        @if(Auth::guard('player')->user()->discord_id!=null)
        <h5 class="text-center text-danger">Discord Id: {{Auth::guard('player')->user()->discord_id}}</h5>
        @endif
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
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="uil uil-coins ms-2 d-inline-block" style="color: goldenrod"></i>گلد</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{url('gold-calculator')}}">محاسبه کننده گلد</a></li>
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

            <li><a href="{{route('logout.user')}}"><i class="uil uil-sign-out-alt ms-2 d-inline-block"></i>خروج</a></li>
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
