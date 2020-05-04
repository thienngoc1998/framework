@extends('backend.layout.index')
@section('title')
    Thêm loại sản phẩm
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('store-product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Category</label>
                        <select name="type_category" class="form-control">
                            <option value="">Choose category</option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input class="form-control" name="amount" placeholder="Please Enter Username" />
                    </div>

                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="price" placeholder="Please Enter Password" />
                    </div>

                    <div class="form-group">
                        <label>Sale</label>
                        <input class="form-control" name="sale" placeholder="Please Enter Password" />
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <label class="radio-inline">
                            <input name="size" value="1" checked type="radio">L
                        </label>
                        <label class="radio-inline">
                            <input name="size" value="2" type="radio">M
                        </label>
                        <label class="radio-inline">
                            <input name="size" value="2" type="radio">XL
                        </label>
                        <label class="radio-inline">
                            <input name="size" value="2" type="radio">XXL
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Color</label>
                        <label class="radio-inline">
                            <input name="color" value="1" checked="" type="radio">White
                        </label>
                        <label class="radio-inline">
                            <input name="color" value="2" type="radio">Black
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="demo" class="ckeditor" name="content_product"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Product Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection
