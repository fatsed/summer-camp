@extends('admin.admin')
@section('content')<div class="col-lg-10 grid-margin stretch-card">
    @include('admin.alerts.sweetalert.success')
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">user Table</h4>
                @can('create-user')
                <a class=" btn btn-warning"style="width: 200px"  href="/admin/layout/user/create.blade.php">+ Create New user</a>
                @endcan
                <br/>
                <br/>
                <form class=" mt-2 mt-md-0 d-lg-flex search" action="">
                    <input  name='search' type="text" class="form-control" placeholder="Search products" value="{{request('search')}}">
                </form>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>first name</th>
                            <th>family name</th>
                            <th>gender</th>
                            <th>img</th>
                            <th>address</th>
                            <th>age</th>
                            <th>phone</th>
                            <th>email</th>
                            <th>password</th>
                            <th>is active</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->UserId}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->family}}</td>
                                <td>{{ $user->genderName}}</td>
                                <td><img src="{{ $user->picture}}" width="200px" height="200px"></td>
                                <td>{{ $user->address}}</td>
                                <td>{{ $user->age}}</td>
                                <td>{{ $user->phone}}</td>
                                <td>{{ $user->email}}</td>
{{--                                <td>{{ $user->is_superuser}}</td>--}}
{{--                                <td>{{ $user->is_staff}}</td>--}}
                                <td>{{ $user->password}}</td>
                                <td>{{ $user->IsActive}}</td>
                                <td class="d-flex">
                                @method('edit')@csrf
                                @can('edit-user')
                                <a class="badge badge-info" href="/admin/panel/user/edit.blade.php/{{$user->UserId}}">edit<i class="mdi mdi-file-check btn-icon-append"/></a>
                                @endcan
                                @method('delete')@csrf
                                    @can('delete-user')
                                    <a class="badge badge-danger" href="/admin/panel/user/delete.blade.php/{{$user->UserId}}">delete<i class="mdi mdi-cup"/></a>
                                    @endcan
                                        @method('permission')@csrf
                                @if($user->is_staff())
                                    @can('staff-user-permissions')
                                        <a href="/admin/user/{{$user->UserId}}/permissions"><button type="button" class="badge badge-warning">permissions</button></a>
                                    @endcan
                                @endif
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
