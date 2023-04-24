@extends('admin.admin')
@section('content')
@if($Status)
  <p style="color: #22935e;font-size: 23px;font-weight: 600;margin-top:10px;" >"Registration was done successfully"</p>
@endif
 <div class="row">
   <div class="col-md-6 grid-margin stretch-card justify-content-center">
     <div class="card">
       <div class="card-body">
      <h4 class="card-title">tourguide form</h4>
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
            <form role="form" action="/admin/panel/tourguide/create.blade.php" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>name</label>
                    <input name="TourGuideName" type="text" class="form-control" placeholder="TourGuideName">
                </div>
                <div class="form-group">
                    <label>family</label>
                    <input name="TourGuideFamily" type="text" class="form-control" placeholder="TourGuideFamily">
                </div>
                <div class="form-group">
                    <label>img</label>
                    <input name="TourGuideImg" type="file" class="form-control" placeholder="TourGuideImg">
                </div>
                <div class="form-group">
                    <label>address</label>
                    <textarea name="TourGuideAddress" class="form-control" rows="3" placeholder="TourGuideAddress"></textarea>
                </div>
                <div class="form-group has-success">
                    <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> email</label>
                    <input name="TourGuideEmail" type="email" class="form-control" id="inputSuccess" placeholder="TourGuideEmail">
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
                    <label class="control-label" for="inputWarning">age </label>
                    <input name="TourGuideAge" type="number" class="form-control" id="inputWarning" placeholder="TourGuideAge">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
@endsection
