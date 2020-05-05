@extends('backend.layout.index')
@section('title', 'Sửa người dùng')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{route('update-user', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{{ old('name') ?: $user->name }}" placeholder="Please Enter Username" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" type="email" value="{{ old('email') ?: $user->email }}" placeholder="Please Enter Email" />
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input class="form-control" name="phone" type="tel" value="{{ old('phone') ?: $user->phone }}" placeholder="Please Enter Phone" />
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Please Enter Password" />
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input class="form-control" type="password" name="confirm_password" placeholder="Please Enter Confirm Password" />
                    </div>

                    <div class="form-group">
                        <label>Role</label>
                        <div class="section-role d-flex flex-row">
                            <input class="custom-radio" type="radio" name="role" id="{{ ROLE_USER[1] }}" value="{{ ADMIN }}" {{ (old('role') ?: $user->role) === ADMIN ? "checked" : "" }} />
                            <label for="{{ ROLE_USER[1] }}" class="mr-2" style="margin-right: 1rem">{{ ROLE_USER[1] }}</label>
                            <input class="custom-radio" type="radio" name="role" id="{{ ROLE_USER[0] }}" value="{{ USER }}" {{ (old('role') ?: $user->role) === USER || (!old('role') && !$user->role) ? "checked" : "" }} />
                            <label for="{{ ROLE_USER[0] }}">{{ ROLE_USER[0] }}</label>
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">User Update</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->
@endsection
