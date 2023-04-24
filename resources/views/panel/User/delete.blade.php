@extends('admin.admin')
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title"> delete user</h3>
        </div>
        <div class="card-body">
            <form role="form" action="/admin/panel/user/delete.blade.php/{{$user->UserId}}" method="post">
            @csrf
                <div class="form-group">
                    <label>User name</label>
                    <input name="Username" type="text" class="form-control" value="{{$user->name}}">
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label>User Family</label>
                    <input name="UserFamily" type="text" class="form-control"  value="{{$user->family}}">
                </div>
                <!-- input states -->
                <div class="form-group">
                    <label>
                        <span>{{$user->genderName}}</span>
                        <input name="genderName" type="radio" class="minimal-red" value="{{$user->genderName}}"  checked>
                    </label>
                    <br>
                </div>
                    <div class="form-group">
                        <label>UserPicture</label>
                        <input name="UserPicture" type="file" class="form-control" value="{{$user->picture}}">
                    </div>
                    <div class="form-group">
                        <label>UserAddress </label>
                        <input name="UserAddress" type="text" class="form-control"   value="{{$user->address}}">
                    </div>
                    <div class="form-group">
                        <label>UserAge</label>
                        <input name="UserAge" type="number" class="form-control"  value="{{$user->age}}">
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="inputWarning"> UserPhone </label>
                        <input name="UserPhone" type="number" class="form-control" id="inputWarning"
                                value="{{$user->phone}}">
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="inputWarning"> UserEmail </label>
                        <input name="UserEmail" type="email" class="form-control" id="inputWarning"
                                value="{{$user->email}}">
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="inputWarning">  UserPassword </label>
                        <input name="UserPassword" type="password" class="form-control" id="inputWarning"
                                value="{{$user->password}}">
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="inputWarning">  IsActive </label>
                        <input name="IsActive" type="checkbox"   value="{{$user->IsActive}}">
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
            </form>
        </div>
    </div>
@endsection
