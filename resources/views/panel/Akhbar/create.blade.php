@extends('admin.admin')
@section('content')
    @if($Status)
        <p style="color: #22935e;font-size: 23px;font-weight: 600;">"Registration was done successfully"</p>
    @endif
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">news Form</h4>
                @if($errors->any())
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form role="form" class="forms-sample" method="post" action="/admin/panel/akhbar/create.blade.php" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="Title" class="form-control" id="exampleInputUsername2" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">UploadTime</label>
                        <div class="col-sm-9">
                            <input type="date" name="UploadTime" class="form-control" id="exampleInputUsername2" placeholder="UploadTime">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Reference</label>
                        <div class="col-sm-9">
                            <input type="text" name="Reference" class="form-control" id="exampleInputMobile" placeholder="Reference">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="writer" class="col-sm-3 col-form-label">writer</label>
                        <div class="col-sm-9">
                            <input type="text" name="writer" class="form-control" id="writer" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="UserPicture" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input name="img" type="file" class="form-control" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
