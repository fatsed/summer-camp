@extends('admin.admin')
@section('content')
<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">gender form </h4>
        <div class="card-body">
            <form role="form"  action="/admin/panel/order/delete.blade.php/{{$order->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label>user id</label>
                    <input name="UserId" type="number" class="form-control" value="{{$order->UserId}}">
                </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"> TravelId</label>
                    <input name="TravelId" type="number" class="form-control" id="inputSuccess" value="{{$order->TravelId}}">
                </div>
                <div class="form-group">
                    <label>
                        <span>{{$order->genderName}}</span>
                        <input name="genderName" type="radio" class="minimal-red" value="{{$order->genderName}}"  checked>
                    </label>
                    <br>
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning">price</label>
                    <input name="price" type="number" class="form-control" id="inputWarning"  value="{{$order->price}}">
                </div>
                <div class="form-group has-warning">
                    <label class="control-label" for="inputWarning">tracking_code</label>
                    <input name="tracking_code" type="text" class="form-control" id="inputWarning" value="{{$order->tracking_code}}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-danger">delete</button>
                </div>
            </form>
        </div>
@endsection
