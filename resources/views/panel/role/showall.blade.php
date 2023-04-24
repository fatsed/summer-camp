@extends('admin.admin')
@section('content')<div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">roles Table</h4>
                @can('create-role')
                <a class=" btn btn-warning"style="width: 200px"  href="/admin/panel/role/create.blade.php">+ Create New roles</a>
                @endcan
                <form class=" mt-2 mt-md-0 d-lg-flex search" action="">
                    <input  name='search' type="text" class="form-control" placeholder="Search products" value="{{request('search')}}">
                </form>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
{{--                            <th>#</th>--}}
                            <th>name role</th>
                            <th>label role</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
{{--                                <td>{{ $role->id}}</td>--}}
                                <td>{{ $role->name}}</td>
                                <td>{{ $role->label}}</td>
                                <td>
                                    @method('edit')@csrf
                                    @can('edit-role')
                                    <a href="/admin/panel/role/edit.blade.php/{{$role->id}}"><button type="button" class="badge badge-info">edit<i class="mdi mdi-file-check btn-icon-append"/></button></a>
                                    @endcan
                                </td>
                                </form>
                                <td>@method('delete')@csrf
                                    @can('delete-role')
                                    <a href="/admin/panel/role/delete.blade.php/{{$role->id}}"><button type="button" class="badge badge-danger">delete</button></a>
                                    @endcan
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
