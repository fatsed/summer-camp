@extends('admin.admin')
@section('content')
    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title"> delete contact</h3>
        </div>
        <div class="card-body">
            <form role="form" action="/panel/contact/delete.blade.php/{{$contact->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label> name</label>
                    <input name="Name" type="text" class="form-control" value="{{$contact->Name}}">
                </div>
                <!-- textarea -->
                <div class="form-group">
                    <label>email </label>
                    <input name="email" type="email" class="form-control" value="{{$contact->email}}">
                </div>
                <!-- input states -->
                <div class="form-group">
                    <label>subject</label>
                    <input name="subject" type="text" class="form-control" value="{{$contact->subject}}">
                </div>
                <div class="form-group">
                    <label>message </label>
                    <input name="message" type="text" class="form-control" value="{{$contact->message}}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
