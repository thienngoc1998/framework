@extends('backend.layout.index')
@section('title')
    Sửa sản phẩm
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{__('backend.product')}}
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('update-product', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Category</label>
                        <input type="hidden" name="id" value="{{ $product->id }}" />
                        <select name="id_category" class="form-control">
                            <option value="">Choose category</option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}" {{ $product->id_category === $item->id ? "selected" : '' }}>{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{{ $product->name }}"  />
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input class="form-control" name="amount" value="{{ $product->amount }}" />
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" value="{{ $product->price }}" />
                    </div>

                    <div class="form-group">
                        <label>Sale</label>
                        <input class="form-control" name="sale" value="{{ $product->sale }}" />
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <label class="radio-inline">
                            <input name="size" value="1" {{ $product->size === "1" ? "checked" : '' }} type="radio">L
                        </label>
                        <label class="radio-inline">
                            <input name="size" value="2" {{ $product->size === "2" ? "checked" : '' }} type="radio">M
                        </label>
                        <label class="radio-inline">
                            <input name="size" value="3" {{ $product->size === "3" ? "checked" : '' }} type="radio">XL
                        </label>
                        <label class="radio-inline">
                            <input name="size" value="4" {{ $product->size === "4" ? "checked" : '' }} type="radio">XXL
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <label class="radio-inline">
                            <input name="color" value="1" {{ $product->color === "1" ? "checked" : '' }} type="radio">White
                        </label>
                        <label class="radio-inline">
                            <input name="color" value="2" {{ $product->color === "2" ? "checked" : '' }} type="radio">Black
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="demo" class="ckeditor" name="content">{{ $product->content }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Product Update</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection
