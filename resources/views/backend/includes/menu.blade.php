<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> {{__('backend.dashboard')}}</a>
            </li>
            <li>
                <a href="{{route('category')}}"><i class="fa fa-bar-chart-o fa-fw"></i> {{__('backend.category')}}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('category')}}">{{__('backend.title')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-cube fa-fw"></i> {{__('backend.product')}}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('product')}}">{{__('backend.title')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> {{__('backend.user')}}<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('user')}}">{{__('backend.title')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    {{__('backend.article')}}
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('article')}}">{{__('backend.title')}}</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
