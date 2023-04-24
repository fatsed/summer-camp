@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card justify-content-center">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Register access</h4>
                @if($errors->any())
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <ul>
                        @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form role="form" class="forms-sample" method="post" action="/admin/user/{{$user->UserId}}/permissions" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>list roles</label>
                        <select name="roles[]" class="form-control" multiple>
                            @foreach(\App\Models\Role::all() as $role)
                                <option value="{{$role->id}}"{{in_array($role->id,$user->roles->pluck('id')->toArray() )?'selected':''}}>{{$role->name}} - {{$role->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>list permissions</label>
                        <select name="permissions[]" class="form-control" multiple>
                            @foreach(\App\Models\Permission::all() as $permission)
                                <option value="{{$permission->id}}"{{in_array($permission->id,$user->permissions->pluck('id')->toArray() )?'selected':''}}>{{$permission->name}} - {{$permission->label}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark"><a herf="/admin/panel/permission/showall.blade.php">Cancel</a></button>
                </form>
            </div>
        </div>
    </div>
    @endsection
