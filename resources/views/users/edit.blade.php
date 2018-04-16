@extends("layouts.app")
@section("content")
 <div class="col-sm-8 blog-main">
        <form class="form-horizontal" action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="col-sm-2 control-label">用户名</label>
                <div class="col-sm-10">
                    <input class="form-control" name="name" type="text" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">头像</label>
                <div class="col-sm-2">
                    <input  type="file" value="用户名"  name="avatar">
                    
                </div>
            </div>
            <button type="submit" class="btn btn-default">修改</button>
        </form>
        <br>

    </div>
@include("layouts._sidebar")
@endsection