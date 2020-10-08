<div class="navbar-header">

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">
        Danh sách công việc
    </a>
    @foreach($menus as $menu)

        <div>
            <a href="#" style="color: red">{{$menu}}</a>
        </div>
    @endforeach
</div>



