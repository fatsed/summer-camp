@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">article delete form</h4>
                    <form role="form" action="/admin/panel/article/delete.blade.php/{{$article->id}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>img</label>
                            <input name="ArticlePicture" type="text" class="form-control"  value="{{$article->ArticlePicture}}">
                        </div>
                        <div class="form-group">
                            <label>title</label>
                            <input name="title" class="form-control"  type="text" value="{{$article->title}}">
                        </div>
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess"> abstract</label>
                            <input name="abstract" type="text" class="form-control" id="inputSuccess"
                                   value="{{$article->abstract}}">
                        </div>
                        <div class="form-group">
                            <label>text</label>
                            <input name="text" type="text" class="form-control" value="{{$article->text}}">
                        </div>
                        <div class="form-group">
                            <label> publication date</label>
                            <input name="time" type="time" class="form-control" value="{{$article->time}}">
                        </div>
                        <div class="form-group">
                            <label>writer</label>
                            <input name="writer" type="text" class="form-control" value="{{$article->writer}}">
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning">  source </label>
                            <input name="source" type="text" class="form-control" id="inputWarning"
                                   value="{{$article->source}}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">delete</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
@endsection
