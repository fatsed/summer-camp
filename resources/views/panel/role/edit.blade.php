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
            <form role="form" action="/admin/panel/role/edit.blade.php/{{$role->id}}" method="post" ENCTYPE="multipart/form-data">
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label for="name">permission name</label>
                    <input id="name" name="name" type="text" class="form-control"  value="{{$role->name}}">
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label for="label">label permission</label>
                    <input id="label"name="label" type="text" class="form-control" value="{{$role->label}}">
                </div>
                <div class="form-group">
                    <label for="label">list permissions</label>
                    <select name="permissions[]" class="form-control" multiple>
                        @foreach(\App\Models\Permission::all() as $permission)
                            <option value="{{$permission->id}}"{{in_array($permission->id,$role->permissions->pluck('id')->toArray() )?'selected':''}}>{{$permission->name}} - {{$permission->label}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
