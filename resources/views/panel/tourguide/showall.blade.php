@extends('admin.admin')
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 70px;
            height: 70px;
            border-radius: 100%;
        }
    </style>
    <div class="col-lg-11 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">article Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>family</th>
                            <th>path</th>
                            <th>address</th>
                            <th>email</th>
                            <th>gender_id</th>
                            <th>age</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tourguides as $tourguide)
                            <tr>
                                <td>{{ $tourguide->TourGuideId}}</td>
                                <td> {{ $tourguide->TourGuideName}} </td>
                                <td>{{$tourguide->TourGuideFamily}}</td>
                                <td><img src="{{$tourguide->TourGuideImg}}" width="200px" height="200px"></td>
                                <td> {{ $tourguide->TourGuideAddress}} </td>
                                <td>{{$tourguide->TourGuideEmail}}</td>
                                <td> {{ $tourguide->genderName}} </td>
                                <td>{{$tourguide->TourGuideAge}}</td>
                                <td>
                                    @method('edit')@csrf
                                    <a href="/admin/panel/tourguide/edit.blade.php/{{$tourguide->TourGuideId}}"><button type="button" class="badge badge-info">edit</button></a>
                                </td>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/tourguide/delete.blade.php/{{$tourguide->TourGuideId}}"><button type="button" class="badge badge-danger">delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
