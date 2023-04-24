@extends('admin.admin')
@section('content')
    @if($Status)
        <p style="color: #22935e;font-size: 23px;font-weight: 600;margin-top:10px;" >"Registration was done successfully"</p>
    @endif
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">event form</h4>
            @if($errors->any())
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form role="form" class="forms-sample" method="post" action="/admin/panel/event/create.blade.php" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>picture</label>
                    <input name="picture" type="file" class="form-control" placeholder="picture">
                </div>

                <div class="form-group">
                    <label>title</label>
                    <input name="title" type="text" class="form-control" placeholder="title">
                </div>
                <div class="form-group">
                    <label>price</label>
                    <input name="price" type="number" class="form-control" placeholder="price">
                </div>
                <div class="form-group">
                    <label>text</label>
                    <input name="text" type="text" class="form-control" placeholder="text">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
@endsection
