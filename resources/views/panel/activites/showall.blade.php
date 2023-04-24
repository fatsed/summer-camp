@extends('admin.admin')
@section('content')
 <style>
     .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
         width: 70px;
         height: 70px;
         border-radius: 100%;
     }
 </style>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">activites Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>text</th>
                            <th>picture</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($activites as $activite)
                            <tr>
                                <td>{{ $activite->id}}</td>
                                <td>{{ $activite->text}}</td>
                                <td><img src="{{$activite->picture}}"  width="300px" height="500px" /></td>
                                <td>
                                    @method('edit')@csrf
                                    <a href="/admin/panel/activites/edit.blade.php/{{$activite->id}}"><button type="button" class="badge badge-info">edit</button></a>
                                </td>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/activites/delete.blade.php/{{$activite->id}}"><button type="button" class="badge badge-danger">delete</button></a>
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
