@extends('backend.layout.index')
@section('title')
    Sửa loại sản phẩm
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- Page Content -->
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('store-category')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Category Name :</label>
                        <input class="form-control" name="name" value="{{$category->name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Active : </label>
                        @if($category->active)
                            <input type="radio" name="active" value="1" checked/> Active
                            <input type="radio" name="active" value="0"/> Unactivated
                        @else
                            <input type="radio" name="active" value="1"/> Active
                            <input type="radio" name="active" value="0" checked/> Unactivated
                        @endif

                    </div>
                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>

        </div>
        <!-- /.row -->
    </div>

@endsection
