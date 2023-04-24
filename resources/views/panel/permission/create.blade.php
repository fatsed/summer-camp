@extends('admin.admin')
@section('content')
@if($Status)
<p style="color: #22935e;font-size: 23px;font-weight: 600;margin-top:10px;">"Registration was done successfully"</p>
@endif
<div class="row">
    <div class="col-md-6 grid-margin stretch-card justify-content-center">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">permission form</h4>
                @if($errors->any())
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <ul>
                        @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form role="form" class="forms-sample" method="post" action="/admin/panel/permission/create.blade.php" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">name permission</label>
                        <input name="name" type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="name permission">
                    </div>

                    <div class="form-group">
                        <label for="label">label permission</label>
                        <input name="label" type="text" class="form-control" id="label"
                            placeholder="label permission">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark"><a herf="/admin/layout/permission/showall.blade.php">Cancel</a></button>
                </form>
            </div>
        </div>
    </div>
    @endsection
