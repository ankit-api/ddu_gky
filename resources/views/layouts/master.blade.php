@include('layouts.header')
@if (Auth::user()->role_id=='1')
    @include('layouts.admin_sidebar')

@elseif(Auth::user()->role_id=='2')
    @include('layouts.pia_sidebar')

@elseif(Auth::user()->role_id=='3')
    @include('layouts.qteam_sidebar')

@elseif(Auth::user()->role_id=='4')
    @include('layouts.mobilizer_sidebar')

@elseif(Auth::user()->role_id=='5')
    @include('layouts.centre_incharge_sidebar')

@elseif(Auth::user()->role_id=='6')
    @include('layouts.trainer_sidebar')

@endif
@yield('dashboard')
@include('layouts.footer')