@include('backend.layouts.header')
@section('sidebar')
    this is the master sidebar <br>
@show
@yield('body1')
@yield('body2')
@yield('body3')
@include('backend.layouts.footer')
