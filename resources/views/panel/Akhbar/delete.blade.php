@extends('admin.admin')
@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">news edit Form</h4>
                @if($errors->any())
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form role="form" class="forms-sample" method="post"action="/admin/panel/akhbar/delete.blade.php/{{$akhbar->id}}">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="Title" class="form-control" id="exampleInputUsername2" value="{{$akhbar->Title}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">UploadTime</label>
                        <div class="col-sm-9">
                            <input type="date" name="UploadTime" class="form-control" id="exampleInputUsername2" value="{{$akhbar->UploadTime}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Reference</label>
                        <div class="col-sm-9">
                            <input type="text" name="Reference" class="form-control" id="exampleInputMobile" value="{{$akhbar->Reference}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="writer" class="col-sm-3 col-form-label">writer</label>
                        <div class="col-sm-9">
                            <input type="text" name="writer" class="form-control" id="writer" value="{{$akhbar->writer}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="UserPicture" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input name="img" type="text" class="form-control" value="{{$akhbar->img}}" disabled style="color: #0a0a0a">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">delete</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
