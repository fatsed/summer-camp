@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">gender form </h4>
        <div class="card-body">
            <form role="form"  action="/admin/panel/gender/delete.blade.php/{{$gender->genderId}}" method="post">
            @csrf
                <div class="form-group">
                    <label>
                        <span>{{$gender->genderName}}</span>
                        <input name="genderName" type="radio" class="minimal-red" value="{{$gender->genderName}}"  checked>
                    </label>
                    <br>
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
            </form>
        </div>
@endsection
