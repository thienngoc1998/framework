<div class="header_top_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="top_header_left">
                    <div class="selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="persuit/img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                            <option value='yu' data-image="persuit/img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                            <option value='yt' data-image="persuit/img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                            <option value='yu' data-image="persuit/img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                        </select>
                    </div>
                    <select class="selectpicker usd_select">
                        <option>USD</option>
                        <option>$</option>
                        <option>$</option>
                    </select>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                        <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button"><i class="icon-magnifier"></i></button>
                                </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="top_header_middle">
                    <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 987 654 321</span></a>
                    <a href="#"><i class="fa fa-envelope"></i> Email: <span>support@yourdomain.com</span></a>
                    <img src="persuit/img/logo.png" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top_right_header">
                    <ul class="header_social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                    <ul class="top_right">
                        @if(Auth::check())
                            <li class="user"><a href="#">{{Auth::user()->name}}</a></li>
                        @else
                        <li class="user"><a href="{{route('user.home-login')}}"><i class="icon-user icons"></i></a></li>
                        @endif
                        <li class="cart"><a href="{{route('home-cart')}}"><i class="icon-handbag icons"></i></a></li>
                        <li class="h_price">
                            <select class="selectpicker">
                                <option>$0.00</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Top Header Area =================-->

<!--================Menu Area =================-->
<header class="shop_header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="persuit/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav categories">
                    <li class="nav-item">
                        <select class="selectpicker">
                            <option value=""> Chọn thể loại </option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{route('home-product')}}"> Sản phẩm </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('home-get-article')}}"> Bài viết </a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html"> Liên hệ </a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
