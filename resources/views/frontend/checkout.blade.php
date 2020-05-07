@extends('frontend.layout.index')

@section('content')
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h3>{{__('frontend.check-out')}}</h3>
                <ul>
                    <li><a href="#">{{__('backend.home')}}</a></li>
                    <li><a href="track.html">{{__('frontend.check-out')}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================login Area =================-->
{{--    @if(Auth::user()->check)--}}
    <section class="register_area p_100">
        <div class="container">
            <div class="register_inner">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="billing_details">
                            <h2 class="reg_title">{{__('user.info')}}</h2>
                            <form class="billing_inner row" method="post" action="{{route('home-checkout-order')}}" >
                                @csrf
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">{{__('user.name')}}<span>*</span></label>
                                        <input type="text" class="form-control" id="name" name="username" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="address">{{__('user.address')}} <span>*</span></label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="email">Email <span>*</span></label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="phone">{{__('user.phone')}} <span>*</span></label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="order">{{__('user.note')}} <span>*</span></label>
                                        <textarea class="form-control" id="order" name="note" rows="3"></textarea>
                                    </div>
                                </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="order_box_price">
                            <h2 class="reg_title">{{__('frontend.order')}}</h2>
                            <div class="payment_list">
                                <div class="price_single_cost">
                                    <h3><span class="normal_text">Tổng tiền : </span> <span><?php echo Cart::subtotal();?></span></h3>
                                </div>
                                <div id="accordion" role="tablist" class="price_method">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
                                                    {{__('user.atm')}}
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>Họ tên : Nguyễn Văn Dũng </p>
                                                <p>STK : 1141460101</p>
                                                <p>Ngân hàng : VietinBank</p>
                                                <p>Chi nhánh  : Yên Mô - Ninh Bình</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingTwo">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                                    {{__('user.bank-transfer')}}
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                Thanh toán khi giao hàng
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" value="submit" class="btn subs_btn form-control">Đặt hàng </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
{{--    @else--}}
{{--    @endif--}}

@endsection

{{--@section('script')--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            --}}
{{--        });--}}
{{--        function addCart(url) {--}}
{{--            $.ajax({--}}
{{--                type: 'get',--}}
{{--                url: url,--}}
{{--                data: {},--}}
{{--                success: function (data) {--}}
{{--                    console.log(data);--}}
{{--                }--}}
{{--            })--}}
{{--        }--}}

{{--    </script>--}}
{{--@endsection--}}
