@extends('admin.admin')
@section('content')<div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">permissions Table</h4>
                @can('create-permission')
                <a class=" btn btn-warning"style="width: 200px"  href="/admin/panel/permission/create.blade.php">+ Create New permission</a>
                @endcan
                <form class=" mt-2 mt-md-0 d-lg-flex search" action="">
                    <input  name='search' type="text" class="form-control" placeholder="Search products" value="{{request('search')}}">
                </form>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
{{--                            <th>#</th>--}}
                            <th>name permission</th>
                            <th>label permission</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
{{--                                <td>{{ $permission->id}}</td>--}}
                                <td>{{ $permission->name}}</td>
                                <td>{{ $permission->label}}</td>
                                <td>
                                    @method('edit')@csrf
                                    @can('edit-permission')
                                    <a href="/admin/panel/permission/edit.blade.php/{{$permission->id}}"><button type="button" class="badge badge-info">edit<i class="mdi mdi-file-check btn-icon-append"/></button></a>
                                    @endcan
                                </td>
                                </form>
                                <td>@method('delete')@csrf
                                    @can('delete-permission')
                                    <a href="/admin/panel/permission/delete.blade.php/{{$permission->id}}"><button type="button" class="badge badge-danger">delete</button></a>
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
