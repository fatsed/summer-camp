@extends('admin.admin')
@section('content')
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">gender</h3>
        </div>
        <div class="card-body">
            <form  action="/admin/panel/gender/edit.blade.php/{{$gender->genderId}}" method="post">
                @csrf
                <div class="form-group">
                    <label>
                        Female
                        <input name="genderName" type="radio" class="minimal-red" value="Female">
                    </label>
                    <br/>
                    <label>
                        Man
                        <input name="genderName" type="radio" class="minimal-red" value="Man">
                    </label>
                    <br/>
                    <label>
                        other
                        <input name="genderName" type="radio" class="minimal-red" value="other">
                    </label>
                    <br>
                    <button type="submit" class="btn btn-primary">edit</button>
                </div>
            </form>
        </div>

@endsection
