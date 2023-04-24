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
                <h4 class="card-title">travel Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th>TravelId</th>
                            <th>UserId</th>
                            <th>TravelAddress</th>
                            <th>price</th>
                            <th>discount_trip</th>
                            <th>it_takes_day</th>
                            <th>departure_date</th>
                            <th>TravelPicture</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        @foreach ($travels as $travel)
                            <tr>
                                <td>{{ $travel->TravelId}}</td>
                                <td> {{ $travel->title}} </td>
                                <td>{{$travel->TravelAddress}}</td>
                                <td> {{ $travel->price}} </td>
                                <td>{{$travel->discount_trip}}</td>
                                <td> {{ $travel->it_takes_day}} </td>
                                <td>{{$travel->departure_date}}</td>
                                <td><img src="{{$travel->TravelPicture}}" width="200px" height="200px"></td>
                                <td>
                                    @method('edit')@csrf
                                    <a href="/admin/panel/travel/edit.blade.php/{{$travel->TravelId}}"><button type="button" class="badge badge-info">edit</button></a>
                                </td>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/travel/delete.blade.php/{{$travel->TravelId}}"><button type="button" class="badge badge-danger">delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
