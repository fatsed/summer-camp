@extends('admin.admin')
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 110px;
            height: 110px;
            border-radius: 100%;
        }
    </style>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">news Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>UploadTime</th>
                            <th>Reference</th>
                            <th>writter</th>
                            <th>img</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($akhbars as $akhbar)
                            <tr>
                                <td>{{ $akhbar->id}}</td>
                                <td>{{ $akhbar->Title}}</td>
                                <td>{{ $akhbar->UploadTime}}</td>
                                <td>{{ $akhbar->Reference}}</td>
                                <td>{{ $akhbar->writer}}</td>
                                <td><img src="{{ $akhbar->img}}" width="200px" height="200px"></td>
                                <td>
                                    @method('edit')@csrf
                                    <a href="/admin/panel/akhbar/edit.blade.php/{{$akhbar->id}}"><button type="button" class="badge badge-info">edit</button></a>
                                </td>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/akhbar/delete.blade.php/{{$akhbar->id}}"><button type="button" class="badge badge-danger">delete</button></a>
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
