@extends('admin.admin')
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">edit role</h3>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form role="form" action="/admin/panel/permission/edit.blade.php/{{$permission->id}}" method="post" ENCTYPE="multipart/form-data">
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label for="name">permission name</label>
                    <input id="name" name="name" type="text" class="form-control"  value="{{$permission->name}}">
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label for="label">label permission</label>
                    <input id="label"name="label" type="text" class="form-control" value="{{$permission->label}}">
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">edit</button>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection
