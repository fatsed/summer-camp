@extends('admin.admin')
@section('content')
    <div class="col-lg-9 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">contact Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>UserId</th>
                                <th>TravelId</th>
                                <th>genderName</th>
                                <th>price</th>
                                <th>tracking_code</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id}}</td>
                                    <td>{{ $order->UserId}}</td>
                                    <td>{{ $order->TravelId}}</td>
                                    <td>{{ $order->genderName}}</td>
                                    <td>{{ $order->price}}</td>
                                    <td>{{ $order->tracking_code}}</td>
                                    <td>
                                        @method('edit')@csrf
                                        <a href="/admin/panel/order/edit.blade.php/{{$order->id}}"><button type="button" class="badge badge-info">edit</button></a>
                                    </td>
                                    </form>
                                    <td>@method('delete')@csrf
                                        <a href="/admin/panel/order/delete.blade.php/{{$order->id}}"><button type="button" class="badge badge-danger">delete</button></a>
                                    </td>
                                </tr>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
