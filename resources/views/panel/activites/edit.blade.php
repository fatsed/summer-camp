@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">activites edit form</h4>
                    <form role="form" class="forms-sample" method="post" action="/admin/panel/activites/edit.blade.php/{{$activite->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>text</label>
                            <input name="text" type="text" class="form-control" value="{{$activite->text}}">
                        </div>
                        <div class="form-group">
                            <label>picture</label>
                            <input name="picture" type="file" class="form-control" value="{{$activite->picture}}">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">edit</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
@endsection
