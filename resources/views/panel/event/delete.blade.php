@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">event edit form</h4>
                    <form role="form" class="forms-sample" method="post" action="/admin/panel/event/delete.blade.php/{{$event->eventId}}" >
                        @csrf
                        <div class="form-group">
                            <label>picture</label>
                            <input name="picture" type="file" class="form-control" value="{{$event->picture}}">
                        </div>

                        <div class="form-group">
                            <label>title</label>
                            <input name="title" type="text" class="form-control" value="{{$event->title}}">
                        </div>
                        <div class="form-group">
                            <label>price</label>
                            <input name="price" type="text" class="form-control" value="{{$event->price}}">
                        </div>
                        <div class="form-group">
                            <label>text</label>
                            <input name="text" type="text" class="form-control" value="{{$event->text}}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">delete</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
            </div>
@endsection
