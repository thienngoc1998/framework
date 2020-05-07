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
<section class="single">
    <div class="container">
        <div class="single-image">
            <img src="upload/images/articles/{{$article->img}}" alt="image" class="center-block">
        </div>
        <div class="single-detail mar-top-30 ">
            <div class="row">
                <div class="col-md-1 col-md-offset-1 col-sm-12 col-xs-12">
                    <div class="single-date">
                        <p>{{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="single-content">
                        <h4>{{$article->title}} </h4>
                        <ul class="author">
                            <li><i class="fa fa-user" aria-hidden="true"></i> By Admin</li>
                        </ul>
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

