@extends('admin.admin')
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title"> delete role</h3>
        </div>
        <div class="card-body">
            <form role="form" action="/admin/panel/role/delete.blade.php/{{$role->id}}" method="post">
            @csrf
                <div class="form-group">
                    <label for="name">permission name</label>
                    <input id="name" name="name" type="text" class="form-control"  value="{{$role->name}}">
                </div>
                <div class="form-group">
                    <label for="label">label permission</label>
                    <input id="label"name="label" type="text" class="form-control" value="{{$role->label}}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
            </form>
        </div>
    </div>
@endsection
