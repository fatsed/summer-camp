@extends('admin.admin')
@section('content')
    @if($Status)
        <p style="color: #22935e;font-size: 23px;font-weight: 600;">"Registration was done successfully"</p>
    @endif
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">about Form</h4>
                @if($errors->any())
                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form role="form" class="forms-sample" method="post" action="/admin/panel/about/create.blade.php" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="Name" class="form-control" id="exampleInputUsername2" placeholder="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">address</label>
                        <textarea name="address" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input name="email" type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" name="numberUs" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">text</label>
                        <div class="col-sm-9">
                            <input type="text" name="text" class="form-control" id="exampleInputUsername2" placeholder="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Picture</label>
                        <input type="file" name="UserPicture" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input name="picture" type="file" class="form-control" >
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
