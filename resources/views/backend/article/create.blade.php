@extends('backend.layout.index')
@section('title', "Thêm tin tức")
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Article
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('store-article')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" value="{{ old('title') }}" placeholder="Please Enter Title" />
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name="description" placeholder="Please Enter Description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="img">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea id="demo" class="ckeditor" name="content">{{ old('content') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Article Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection
