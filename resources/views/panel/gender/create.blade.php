@extends('admin.admin')
@section('content')
    @if($Status)
        <p style="color: #22935e;font-size: 23px;font-weight: 600;">"Registration was done successfully"</p>
    @endif
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">gender form </h4>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <ul>
                        @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form role="form" action="/admin/panel/gender/create.blade.php" method="post">
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
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
      </div>
     </div>
    </div>
</div>
@endsection
