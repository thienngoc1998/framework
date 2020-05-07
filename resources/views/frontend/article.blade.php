@extends('frontend.layout.index')

@section('content')
    <!--================Categories Banner Area =================-->
    <section class="solid_banner_area">
        <div class="container">
            <div class="solid_banner_inner">
                <h3> Tin tức </h3>
                <ul>
                    <li><a href="#">{{__('backend.home')}}</a></li>
                    <li><a href="track.html">Tin tức </a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->
    <section class="details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="list-content">
                        <div class="row">
                            @foreach($articles as $article)
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="news-item">
                                        <div class="news-image">
                                            <img src="upload/images/articles/{{$article->img}}" alt="image">
                                        </div>
                                        <div class="news-content">
                                            <p class="date">{{$article->created_at->format('d/m/Y')}}</p>
                                            <h4>{{$article->title}}</h4>
                                            <div class="room-services">
                                                <ul>
                                                    <li><i class="fa fa-user" aria-hidden="true"></i> By Jack Daniels</li>
                                                </ul>
                                            </div>
                                            <p>{{$article->description}}</p>
                                            <a href="{{route('home-get-detail-article',$article->id)}}">READ MORE <i class="fas fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="pagination-content text-center">
{{--                        @include('includes.pagination', ['paging' => $articles])--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

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
