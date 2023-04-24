@extends('admin.admin')
@section('content')
<div class="row">
 <div class="col-md-6 grid-margin stretch-card justify-content-center">
  <div class="card">
   <div class="card-body">
      <h4 class="card-title">tourguide edit form</h4>
        <div class="card-body">
            <form role="form"  action="/admin/panel/tourguide/edit.blade.php/{{$tourguide->TourGuideId}}" method="post" ENCTYPE="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>name</label>
                    <input name="TourGuideName" type="text" class="form-control" value="{{$tourguide->TourGuideName}}">
                </div>
                    <div class="form-group">
                        <label>family</label>
                        <input name="TourGuideFamily" type="text" class="form-control" value="{{$tourguide->TourGuideFamily}}">
                    </div>
                <div class="form-group">
                    <label>img</label>
                    <input name="TourGuideImg" type="file" class="form-control" value="{{$tourguide->TourGuideImg}}">
                </div>
                    <div class="form-group">
                        <label>address</label>
                        <input name="TourGuideAddress" type="text" class="form-control" rows="3"  value="{{$tourguide->TourGuideAddress}}">
                    </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"> email</label>
                    <input name="TourGuideEmail" type="email" class="form-control" id="inputSuccess" value="{{$tourguide->TourGuideEmail}}">
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
                    <div class="form-group has-warning">
                        <label class="control-label" for="inputWarning"> age  </label>
                        <input name="TourGuideAge" type="number" class="form-control" id="inputWarning" value="{{$tourguide->TourGuideAge}}">
                    </div>
                <button type="submit" class="btn btn-primary mr-2">edit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
@endsection
