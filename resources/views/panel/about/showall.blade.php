@extends('admin.admin')
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 90px;
            height: 90px;
            border-radius: 100%;
        }
    </style>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">about Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>address</th>
                            <th>email</th>
                            <th>numberUs</th>
                            <th>text</th>
                            <th>picture</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($abouts as $about)
                            <tr>
                                <td>{{ $about->id}}</td>
                                <td>{{ $about->Name}}</td>
                                <td>{{ $about->address}}</td>
                                <td>{{ $about->email}}</td>
                                <td>{{ $about->numberUs}}</td>
                                <td>{{ $about->text}}</td>
                                <td><img src="{{ $about->picture}}" width="200px" height="200px"></td>
                                <td>
                                    @method('edit')@csrf
                                    <a href="/admin/panel/about/edit.blade.php/{{$about->id}}"><button type="button" class="badge badge-info">edit</button></a>
                                </td>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/about/delete.blade.php/{{$about->id}}"><button type="button" class="badge badge-danger">delete</button></a>
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
