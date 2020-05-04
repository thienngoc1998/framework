@extends('frontend.layout.index')

@section('content')
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h3>{{__('backend.cart')}}</h3>
                <ul>
                    <li><a href="#">{{__('backend.home')}}</a></li>
                    <li><a href="track.html">{{__('backend.cart')}}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================login Area =================-->
    @if(asset($cart) && count($cart) > 0)
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_product_list">
                            <h3 class="cart_single_title">Discount Cupon</h3>
                            <div class="table-responsive-md">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">{{__('backend.product')}}</th>
                                        <th scope="col">{{__('heading.price')}}</th>
                                        <th scope="col">{{__('heading.qty')}}</th>
                                        <th scope="col">{{__('heading.total')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cart as $item)
                                        <tr id="{{$item->rowId}}">
                                            <th scope="row">

                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="upload/images/product/{{$item->options->image}}"
                                                             alt="product" height="70px">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>{{$item->name}}</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p>{{$item->price}} </p></td>
                                            <td>
                                                <input type="text" value="{{$item->qty}}"
                                                       style="display: block;margin: auto;" id="qty{{$item->rowId}}">
                                                <button class="btn btn-success btn-edit" style="margin: 10px 0;"
                                                        data-url="{{route('home-update-item',$item->rowId)}}"
                                                        data-rowid="{{$item->rowId}}">Update
                                                </button>
                                                <button class="btn btn-danger btn-delete" data-rowid="{{$item->rowId}}"
                                                        data-url="{{route('home-delete-item',$item->rowId)}}">Remove
                                                </button>
                                            </td>
                                            <td><p id="total-price{{$item->id}}">{{$item->price * $item->qty}}</p></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="total_amount_area">
                            <div class="cupon_box">
                                <h3 class="cart_single_title">Discount Cupon</h3>
                                <div class="cupon_box_inner">
                                    <input type="text" placeholder="Enter your code here">
                                    <button type="submit" class="btn btn-primary subs_btn">apply cupon</button>
                                </div>
                            </div>
                            <div class="cart_totals">
                                <h3 class="cart_single_title">Discount Cupon</h3>
                                <div class="cart_total_inner">
                                    <ul>
                                        <li><a href="#"><span>Cart Subtotal</span> <?php echo Cart::subtotal();?></a></li>
                                        <li><a href="#"><span>Shipping</span> Free</a></li>
                                        <li><a href="#"><span>Totals</span> $400.00</a></li>
                                    </ul>
                                </div>
                                <a href="{{route('home-checkout')}}"
                                   class="btn btn-primary checkout_btn">{{__('frontend.check-out')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="emty_cart_area p_100">
            <div class="container">
                <div class="emty_cart_inner">
                    <i class="icon-handbag icons"></i>
                    <h3>{{__('frontend.empty-cart')}}</h3>
                    <h4><a href="{{route('home')}}">{{__('frontend.shopping')}}</a></h4>
                </div>
            </div>
        </section>
        <!--================End login Area =================-->
    @endif

@endsection

@section('script')
    <script>
        $(document).ready(function () {


        });

        $('.btn-delete').click(function () {
            let url = $(this).data('url');
            let rowID = $(this).data('rowid');
            updateCart(url,'get', rowID);
        });

        $('.btn-edit').click(function () {
            let url = $(this).data('url');
            let rowID = $(this).data('rowid');
            let qty = parseInt($('#qty'+rowID).val());
            let type = 'post';
            if (qty > 0)
            {
                updateCart(url,type,null,qty)
            } else {
                toastr.error(' Số lượng sản phẩm không hợp lệ !!!');
                return false;
            }
        });

        function updateCart(url, type ,ID = null, qty = null ) {
            $.ajax({
                type: type,
                url: url,
                data: {qty: qty},
                success: function (data) {
                    getTotalItemCarts();
                    if (type === 'get') {
                        $('#' + ID).remove();
                        toastr.success(data);
                    }
                    if (type === 'post') {
                        $('#total-price'+data.cart.id).html(data.cart.qty * data.cart.price);
                        toastr.success(data.message);
                    }

                }
            })
        }
    </script>
@endsection
