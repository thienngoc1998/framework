@extends('backend.layout.index')
@section('title')
    Danh sách đơn hàng
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">đơn hàng
                    <small>danh sách </small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Tên </th>
                    <th>Địa chỉ </th>
                    <th>Email</th>
                    <th>note</th>
                    <th>Sản phẩm </th>
                    <th>Số lượng </th>
                    <th>Tổng tiền  </th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr class="odd gradeX" align="center">
                        <td>{{$order->id}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->note}}</td>
                        <td>{{$order->product->name}}</td>
                        <td>{{$order->qty}}</td>
                        <td>{{$order->total}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"  data-toggle="modal" data-target="#modalDelete" data-delete-url="{{route('destroy-order', $order->id)}}">{{__('button.delete')}}</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
    <!-- /#page-wrapper -->
    <div class="modal fade" id="modalDelete" role="dialog">
        <div class="modal-dialog mt-270">
            <div class="modal-content">
                <div class="modal-header bg-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title text-white">{{__('modal.title_modal_del')}}</h4>
                </div>
                <div class="modal-body text-center">
                    <p>{{__('modal.content_modal_del')}}</p>
                </div>
                <div class="modal-footer">
                    <div class="text-center">
                        <a href="#" class="btn btn-success btn-delete-submit">
                            OK
                        </a>
                        <button type="button" class="btn btn-danger ml-20" data-dismiss="modal">
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
