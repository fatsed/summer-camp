@extends('admin.admin')
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 76px;
            height: 68px;
            border-radius: 100%;
        }
    </style>
    <div class="col-lg-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">gallery Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>picture</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td>{{ $gallery->id}}</td>
                                <td>{{ $gallery->name}}</td>
                                <td><img src="{{ $gallery->picture}}"/></td>
                                <td>
                                    @method('edit')@csrf
                                    <a href="/admin/panel/gallery/edit.blade.php/{{$gallery->id}}"><button type="button" class="badge badge-info">edit</button></a>
                                </td>
                                </form>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/gallery/delete.blade.php/{{$gallery->id}}"><button type="button" class="badge badge-danger">delete</button></a>
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
