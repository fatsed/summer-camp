@extends('admin.admin')
@section('content')
@if($Status)
  <p style="color: #22935e;font-size: 23px;font-weight: 600;">"Registration was done successfully"</p>
@endif
<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">order form </h4>
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
            <form role="form" action="/admin/panel/order/create.blade.php" method="post">
                @csrf
                <div class="form-group">
                    <label>user id</label>
                    <input name="UserId" type="number" class="form-control" placeholder="UserId">
                </div>
                <div class="form-group">
                    <label>Travel id</label>
                    <input name="TravelId" type="number" class="form-control" placeholder="TravelId">
                </div>
                <label>
                    Female
                    <input name="genderName" type="radio" class="minimal-red" value="Female">
                </label>
                <label>
                    Man
                    <input name="genderName" type="radio" class="minimal-red" value="Man">
                </label>
                <label>
                    other
                    <input name="genderName" type="radio" class="minimal-red" value="other">
                </label>
                <div class="form-group">
                    <label>price</label>
                    <input name="price" type="number" class="form-control" placeholder="price">
                </div>
                <div class="form-group">
                    <label>tracking code</label>
                    <input name="tracking_code" type="text" class="form-control" placeholder="tracking_code">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
        </div>
      </div>
  </div>
</div>
@endsection
