
@extends('frontend.layout.index')

@section('content')
<!--================Categories Banner Area =================-->
<section class="solid_banner_area">
    <div class="container">
        <div class="solid_banner_inner">
            <h3>LOgin</h3>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="track.html"> Đăng nhập </a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================login Area =================-->
<section class="login_area p_100">
    <div class="container">
        <div class="login_inner">
            <div class="row">
                <div class="col-lg-4">
                    <div class="login_title">
                        <h2>log in your account</h2>
                        <p>Log in to your account to discovery all great features in this template.</p>
                    </div>
                    <form class="login_form row" method="POST" action="{{route('user.login-customer')}}">
                        @csrf
                        <div class="col-lg-12 form-group">
                            <input class="form-control" type="email" placeholder="Email" id="email-login">
                        </div>
                        <div class="col-lg-12 form-group">
                            <input class="form-control" type="password" placeholder="Password" id="password-login">
                        </div>
                        <div class="col-lg-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option" name="selector">
                                <label for="f-option">Keep me logged in</label>
                                <div class="check"></div>
                            </div>
                            <h4>Quên mật khẩu ?</h4>
                        </div>
                        <div class="col-lg-12 form-group">
                            <button type="submit" class="btn update_btn form-control btn-login">{{__('backend.login')}}</button>
                        </div>
                    </form>
                </div>
{{--                <div class="col-lg-8">--}}
{{--                    <div class="login_title">--}}
{{--                        <h2>create account</h2>--}}
{{--                        <p>Follow the steps below to create email account enjoy the great mail.com emailing experience. Vivamus tempus risus vel felis condimentum, non vehicula est iaculis.</p>--}}
{{--                    </div>--}}
{{--                    <form class="login_form row">--}}
{{--                        <div class="col-lg-6 form-group">--}}
{{--                            <input class="form-control" type="text" placeholder="Name">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 form-group">--}}
{{--                            <input class="form-control" type="email" placeholder="Email">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 form-group">--}}
{{--                            <input class="form-control" type="text" placeholder="User Name">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 form-group">--}}
{{--                            <input class="form-control" type="text" placeholder="Phone">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 form-group">--}}
{{--                            <input class="form-control" type="password" placeholder="Password">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 form-group">--}}
{{--                            <input class="form-control" type="password" placeholder="Re-Password">--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-6 form-group">--}}
{{--                            <button  class="btn subs_btn form-control btn-register">register now</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
<!--================End login Area =================-->
@endsection

