@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">gallery edit form</h4>
                    <form role="form" class="forms-sample" method="post" action="/admin/panel/gallery/edit.blade.php/{{$gallery->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>name</label>
                            <input name="name" type="text" class="form-control" value="{{$gallery->name}}">
                        </div>

                        <div class="form-group">
                            <label>picture</label>
                            <input name="picture" type="file" class="form-control" value="{{$gallery->picture}}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">edit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
@endsection
