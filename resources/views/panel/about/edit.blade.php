@extends('admin.admin')
@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">about edit Form</h4>
                <form role="form" action="/admin/panel/about/edit.blade.php/{{$about->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="Name" class="form-control" id="exampleInputUsername2" value="{{$about->Name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">address</label>
                        <textarea name="address" class="form-control" id="exampleTextarea1" rows="4"  value="{{$about->address}}"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input name="email" type="email" class="form-control" id="exampleInputEmail2" value="{{$about->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" name="numberUs" class="form-control" id="exampleInputMobile" value="{{$about->numberUs}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">text</label>
                        <div class="col-sm-9">
                            <input type="text" name="text" class="form-control" id="exampleInputUsername2" value="{{$about->text}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="UserPicture" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input name="picture" type="file" class="form-control"  value="{{$about->picture}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">edit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
