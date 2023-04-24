@extends('admin.admin')
@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">travel delete Form</h4>
                <div class="card-body">
                    <form role="form"  action="/admin/panel/travel/delete.blade.php/{{$travel->TravelId}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>UserId</label>
                            <input name="UserId" type="number" class="form-control"  value="{{$travel->UserId}}">
                        </div>

                        <div class="form-group">
                            <label>TravelAddress</label>
                            <textarea name="TravelAddress" class="form-control" rows="3"  value="{{$travel->TravelAddress}}"></textarea>
                        </div>

                        <div class="form-group">
                            <label>price</label>
                            <input name="price" type="number" class="form-control" value="{{$travel->price}}">
                        </div>

                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess"> discount_trip</label>
                            <input name="discount_trip" type="number" class="form-control" id="inputSuccess"
                                   value="{{$travel->discount_trip}}">
                        </div>
                        <div class="form-group">
                            <label for="">it_takes_day</label>
                            <input name="it_takes_day" type="number" class="form-control" value="{{$travel->it_takes_day}}">
                        </div>
                        <div class="form-group">
                            <label> departure_date</label>
                            <input name="departure_date" type="date" class="form-control" value="{{$travel->departure_date}}">
                        </div>
                        <div class="form-group">
                            <label>img of trip</label>
                            <input name="TravelPicture" type="file" class="form-control" value="{{$travel->TravelPicture}}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">delete</button>
                        <button class="btn btn-dark">Cancel</button>
                    </form>
                </div>
@endsection

