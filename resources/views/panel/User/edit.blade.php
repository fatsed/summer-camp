@extends('admin.admin')
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">edit user</h3>
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
            <form role="form" action="/admin/panel/user/edit.blade.php/{{$user->UserId}}" method="post" ENCTYPE="multipart/form-data">
            @csrf
            <!-- text input -->
                <div class="form-group">
                    <label for="user">User name</label>
                    <input id="user" name="name" type="text" class="form-control"  value="{{$user->name}}">
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label for="family">User Family</label>
                    <input id="family"name="family" type="text" class="form-control" value="{{$user->family}}">
                </div>
                <!-- input states -->
                <div class="form-group">
                    <label>
                        Female
                        <input name="genderName" type="radio" class="minimal-red" value="Female">
                    </label>
                    <label>
                        Man
                        <input name="genderName" type="radio" class="minimal-red" value="Man">
                    </label>
                    <label>
                        other
                        <input name="genderName" type="radio" class="minimal-red" value="other">
                    </label>
                    <br>
                <div class="form-group">
                    <label>UserPicture</label>
                    <input name="picture" type="file" class="form-control"  value="{{$user->picture}}">
                </div>
                <div class="form-group">
                    <label for="address">UserAddress </label>
                    <input id="address" name="address" type="text" class="form-control" value="{{$user->address}}">
                </div>
                <div class="form-group">
                    <label for="age">UserAge</label>
                    <input id="age" name="age" type="number" class="form-control" value="{{$user->age}}">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"> UserPhone </label>
                    <input name="phone" type="number" class="form-control" id="inputWarning"
                           placeholder="وارد کردن اطلاعات ..."  value="{{$user->phone}}">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"> UserEmail </label>
                    <input name="email" type="email" class="form-control" id="inputWarning"
                           placeholder="وارد کردن اطلاعات ..."  value="{{$user->email}}">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning">  UserPassword </label>
                    <input name="password" type="password" class="form-control" id="inputWarning"
                           placeholder="وارد کردن اطلاعات ..."  value="{{$user->password}}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">edit</button>
                </div>
                </div>
            </form>
        </div>
    </div>
@endsection
