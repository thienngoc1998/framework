@extends('frontend.layout.index')

@section('content')
    <section class="categories_banner_area">
        <div class="container">
            <div class="c_banner_inner">
                <h3> Danh sách sản phẩm </h3>
                <ul>
                    <li><a href="#"> Trang chủ </a></li>
                    <li class="current"><a href="#">Danh sách sản phẩm </a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="categories_product_main p_80">
        <div class="container">
            <div class="categories_main_inner">
                <div class="row row_disable">
                    <div class="col-lg-9 float-md-right">
                        <div class="showing_fillter">
                            <div class="row m0">
                                <div class="first_fillter">
                                    <h4>Showing 1 to 12 of 30 total</h4>
                                </div>
                                <div class="secand_fillter">
                                    <h4>SORT BY :</h4>
                                    <select class="selectpicker">
                                        <option>Name</option>
                                        <option>Name 2</option>
                                        <option>Name 3</option>
                                    </select>
                                </div>
                                <div class="third_fillter">
                                    <h4>Show : </h4>
                                    <select class="selectpicker">
                                        <option>09</option>
                                        <option>10</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class="four_fillter">
                                    <h4>View</h4>
                                    <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                                    <a href="#"><i class="icon_grid-3x3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="c_product_grid_details">

                            <nav aria-label="Page navigation example" class="pagination_area">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item next"><a class="page-link" href="#"><i
                                                class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 float-md-right">
                        <div class="list-sidebar">
                            <div class="room-type list-sidebar-item">
                                <h4>Loại phòng</h4>
                                @foreach($category as $item)
                                    <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                        <input type="checkbox" class="common_selector type_room" value="{{$item->id}}"
                                               name="category">
                                        <div class="state p-warning-o">
                                            <label>{{$item->name}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{--                            <div class="list-group">--}}
                            {{--                                <h3>Price</h3>--}}
                            {{--                                <input type="hidden" id="hidden_minimum_price" value="0" />--}}
                            {{--                                <input type="hidden" id="hidden_maximum_price" value="65000" />--}}
                            {{--                                <p id="price_show">1000 - 65000</p>--}}
                            {{--                                <div id="price_range"></div>--}}
                            {{--                            </div>--}}
                            <div class="ratings list-sidebar-item">
                                <h4>Ratings</h4>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" class="common_selector star" value="5">
                                    <div class="state p-warning-o">
                                        <label>
                                        <span class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" class="common_selector star" value="4">
                                    <div class="state p-warning-o">
                                        <label>
                                        <span class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" class="common_selector star" value="3">
                                    <div class="state p-warning-o">
                                        <label>
                                        <span class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse mar-bottom-15">
                                    <input type="checkbox" class="common_selector star" value="2">
                                    <div class="state p-warning-o">
                                        <label>
                                        <span class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="pretty p-default p-thick p-pulse">
                                    <input type="checkbox" class="common_selector star" value="1">
                                    <div class="state p-warning-o">
                                        <label>
                                        <span class="rating">
                                            <span class="fa fa-star"></span>
                                        </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        <div class="categories_sidebar">--}}
                        {{--                            <aside class="l_widgest l_p_categories_widget">--}}
                        {{--                                <div class="l_w_title">--}}
                        {{--                                    <h3>Categories</h3>--}}
                        {{--                                </div>--}}
                        {{--                                <ul class="navbar-nav">--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a class="nav-link" href="#">Men’s Fashion--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item dropdown">--}}
                        {{--                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                            Women’s Fashion--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                        {{--                                            <li class="nav-item"><a class="nav-link" href="#">Hoodies & Sweatshirts</a></li>--}}
                        {{--                                            <li class="nav-item"><a class="nav-link" href="#">Jackets & Coats</a></li>--}}
                        {{--                                            <li class="nav-item"><a class="nav-link" href="#">Blouses & Shirts</a></li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a class="nav-link" href="#">Phone & Accessories--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a class="nav-link" href="#">Electronic Appliance--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a class="nav-link disabled" href="#">Computer & Networking--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a class="nav-link disabled" href="#">TV, Audiio & Gaming--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a class="nav-link disabled" href="#">Office Supplies--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a class="nav-link disabled" href="#">All Categories--}}
                        {{--                                            <i class="icon_plus" aria-hidden="true"></i>--}}
                        {{--                                            <i class="icon_minus-06" aria-hidden="true"></i>--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </aside>--}}
                        {{--                            <aside class="l_widgest l_fillter_widget">--}}
                        {{--                                <div class="l_w_title">--}}
                        {{--                                    <h3>Filter section</h3>--}}
                        {{--                                </div>--}}
                        {{--                                <div id="slider-range" class="ui_slider"></div>--}}
                        {{--                                <label for="amount">Price:</label>--}}
                        {{--                                <input type="text" id="amount" readonly>--}}
                        {{--                            </aside>--}}
                        {{--                            <aside class="l_widgest l_color_widget">--}}
                        {{--                                <div class="l_w_title">--}}
                        {{--                                    <h3>Color</h3>--}}
                        {{--                                </div>--}}
                        {{--                                <ul>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                    <li><a href="#"></a></li>--}}
                        {{--                                </ul>--}}
                        {{--                            </aside>--}}
                        {{--                            <aside class="l_widgest l_menufacture_widget">--}}
                        {{--                                <div class="l_w_title">--}}
                        {{--                                    <h3>Manufacturer</h3>--}}
                        {{--                                </div>--}}
                        {{--                                <ul>--}}
                        {{--                                    <li><a href="#">Nigel Cabourn.</a></li>--}}
                        {{--                                    <li><a href="#">Cacharel.</a></li>--}}
                        {{--                                    <li><a href="#">Calibre (Menswear)</a></li>--}}
                        {{--                                    <li><a href="#">Calvin Klein.</a></li>--}}
                        {{--                                    <li><a href="#">Camilla and Marc</a></li>--}}
                        {{--                                </ul>--}}
                        {{--                            </aside>--}}
                        {{--                            <aside class="l_widgest l_feature_widget">--}}
                        {{--                                <div class="l_w_title">--}}
                        {{--                                    <h3>Featured Products</h3>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="media">--}}
                        {{--                                    <div class="d-flex">--}}
                        {{--                                        <img src="img/product/featured-product/f-p-5.jpg" alt="">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="media-body">--}}
                        {{--                                        <h4>Jeans with <br /> Frayed Hems</h4>--}}
                        {{--                                        <h5>$45.05</h5>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="media">--}}
                        {{--                                    <div class="d-flex">--}}
                        {{--                                        <img src="img/product/featured-product/f-p-6.jpg" alt="">--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="media-body">--}}
                        {{--                                        <h4>Crysp Denim<br />Montana</h4>--}}
                        {{--                                        <h5>$45.05</h5>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </aside>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {

                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            filter_data();

            function filter_data() {
                $('.c_product_grid_details').html('<div id="loading" style="" ></div>');
                let sort = $('#dropDownId').val();
                let categories = get_filter('type_room');
                let star = get_filter('star');
                $.ajax({
                    type: 'POST',
                    url: '/home/get-product',
                    data: {categories: categories, star: star, sort: sort},

                    success: function (data) {
                        if (data.html === "") {
                            $('.c_product_grid_details').html("<h3 class='text-center'>Không có dữ liệu </h3>");
                        } else {
                            $('.c_product_grid_details').html(data.html);
                            $('.add_cart_btn').click(function (e) {
                                var url = $(this).data('url');
                                addCart(url);
                            });
                        }


                    }

                });
            }

            $('#dropDownId').on('change', function () {
                filter_data();
            });

            $('.common_selector').click(function () {
                filter_data();
            });


        });

        function get_filter(class_name) {
            var filter = [];
            $('.' + class_name + ':checked').each(function () {
                filter.push($(this).val());
            });
            return filter;
        }

        function addCart(url) {
            $.ajax({
                type: 'get',
                url: url,
                data: {},
                success: function (data) {
                    console.log(data);
                    getTotalItemCarts();
                    toastr.success(data.message);
                }
            })
        }

    </script>
@endsection
