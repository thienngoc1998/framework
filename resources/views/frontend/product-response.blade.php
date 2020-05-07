@foreach($products as $product)
    <div class="c_product_item">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="c_product_img">
                    <a href="{{route('home-detail-product',$product->id)}}"><img class="img-fluid" src="upload/images/product/{{$product->img}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-6">
                <div class="c_product_text">
                    <h3><a href="{{route('home-detail-product',$product->id)}}">{{$product->name}}</a></h3>
                    <h5>{{$product->price}}</h5>
                    <ul class="product_rating">
                        @if($product->star == 1)
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                        @elseif ($product->star == 2)
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                        @elseif ($product->star == 3)
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>

                        @elseif ($product->star == 4)
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                        @elseif ($product->star == 5)
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                            <li><a href="#"> <span class="fa fa-star checked"></span></a></li>
                        @endif
                    </ul>
                    <h6>Available In <span>Stock</span></h6>
                    <p>{{$product->description}}</p>
                    <ul class="c_product_btn">
                        <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                        <li><button class="add_cart_btn" data-url="{{route('add-cart',$product->id)}}" data-id="{{$product->id}}">{{__('backend.add-cart')}}</button></li>
                        <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endforeach
