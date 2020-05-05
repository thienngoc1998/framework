@extends('backend.layout.index')
@section('title')
    Danh sách người dùng
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{__('backend.user')}}
                    <small>{{__('backend.title')}}</small>
                </h1>
                <a href="{{route('create-user')}}" class="btn btn-success" style="margin-bottom: 20px;">{{__('button.create')}}</a>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center" >
                    <th class="text-center">{{__('heading.id')}}</th>
                    <th class="text-center">{{__('heading.name')}}</th>
                    <th class="text-center">{{__('heading.email')}}</th>
                    <th class="text-center">{{__('button.delete')}}</th>
                    <th class="text-center">{{__('button.edit')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr class="odd gradeX" align="center">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="center">
                        <i class="fa fa-trash-o  fa-fw"></i>
                        <a href="#"  data-toggle="modal"
                           data-target="#modalDelete"
                           data-delete-url="{{route('destroy-user', $user->id)}}"
                        >
                            {{__('button.delete')}}</a>
                    </td>
                    <td class="center">
                        <i class="fa fa-pencil fa-fw"></i>
                        <a href="{{route('detail-user',$user->id)}}">{{__('button.edit')}}</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pull-right">
                {{ $users->appends($_GET)->links() }}
            </div>
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
