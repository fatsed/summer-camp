@extends('admin.admin')
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 86px;
            height: 68px;
            border-radius: 100%;
        }
    </style>
    <div class="col-lg-7 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">event Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>picture</th>
                            <th>title</th>
                            <th>price</th>
                            <th>text</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->eventId}}</td>
                                <td><img src="{{ $event->picture}}" /></td>
                                <td>{{ $event->title}}</td>
                                <td>{{ $event->price}}</td>
                                <td>{{ $event->text}}</td>
                                <td>
                                    @method('edit')@csrf
                                    <a href="/admin/panel/event/edit.blade.php/{{$event->eventId}}"><button type="button" class="badge badge-info">edit</button></a>
                                </td>
                                </form>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/event/delete.blade.php/{{$event->eventId}}"><button type="button" class="badge badge-danger">delete</button></a>
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
