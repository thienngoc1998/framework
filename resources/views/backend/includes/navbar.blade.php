<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">Cửa hàng NVD</a>
</div>
<!-- /.navbar-header -->

@if(auth()->check())
    <ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> {{Auth::user()->name}} <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> {{__('backend.profile')}} </a>
            </li>
            <li><a href="#"><i class="fa fa-key fa-fw"></i> {{__('backend.change-password')}} </a>
            </li>
            <li class="divider"></li>
            <li><a href="{{route('admin-logout')}}"><i class="fa fa-sign-out fa-fw"></i> {{__('backend.logout')}}</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
@endif
<!-- /.navbar-top-links -->
