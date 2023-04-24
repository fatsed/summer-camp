@extends('admin.admin')
@section('content')
    @if($Status)
        <p style="color: #22935e;font-size: 23px;font-weight: 600;margin-top:10px;" >"Registration was done successfully"</p>
    @endif
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">article form</h4>
            @if($errors->any())
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form role="form" class="forms-sample" method="post" action="/admin/panel/article/create.blade.php" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                    <label>img</label>
                    <input name="ArticlePicture" type="file" class="form-control" placeholder="ArticlePicture">
                </div>
                <div class="form-group">
                    <label>title</label>
                    <input name="title" class="form-control"
                              placeholder="title">
                </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"> abstract</label>
                    <input name="abstract" type="text" class="form-control" id="inputSuccess"
                           placeholder="abstract">
                </div>
                <div class="form-group">
                    <label>text</label>
                    <input name="text" type="text" class="form-control" placeholder="text">
                </div>
                <div class="form-group">
                    <label>publication date</label>
                    <input name="time" type="time" class="form-control" placeholder="time">
                </div>
                <div class="form-group">
                    <label>writer</label>
                    <input name="writer" type="text" class="form-control" placeholder="writer">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning"> source </label>
                    <input name="source" type="text" class="form-control" id="inputWarning"
                           placeholder="source">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
@endsection
