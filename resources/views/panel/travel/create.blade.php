@extends('admin.admin')
@section('content')
@if($Status)
    <p style="color: #22935e;font-size: 23px;font-weight: 600;">"Registration was done successfully"</p>
@endif
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">travel Form</h4>
                @if($errors->any())
                    <div class="alert alert-danger d-flex align-items-center" role="alert" enctype="multipart/form-data">
                        <ul>
                            @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form role="form" method="post" action='/admin/panel/travel/create' enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>UserId</label>
                    <input name="UserId" type="number" class="form-control" placeholder="UserId">
                </div>
                <div class="form-group">
                    <label>address trip</label>
                    <input name="TravelAddress" type="text" class="form-control" placeholder="TravelAddress">
                </div>
                <div class="form-group">
                    <label>price</label>
                    <input name="price" class="form-control" type="text"
                              placeholder="price">
                </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"> discount_trip</label>
                    <input name="discount_trip" type="number" class="form-control" id="inputSuccess"
                           placeholder="discount_trip">
                </div>
                <div class="form-group">
                    <label for="">it_takes_day</label>
                    <input name="it_takes_day" type="number" class="form-control" placeholder="it_takes_day">
                </div>
                <div class="form-group">
                    <label> departure_date</label>
                    <input name="departure_date" type="date" class="form-control" placeholder="departure_date">
                </div>
                <div class="form-group">
                    <label>img of trip</label>
                    <input name="TravelPicture" type="file" class="form-control" placeholder="TravelPicture">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
@endsection
