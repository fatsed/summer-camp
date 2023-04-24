@extends('admin.admin')
@section('content')
    <div class="col-lg-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">contact Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>gender name</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($genders as $gender)
                                <tr>
                                    <td>{{ $gender->genderId}}</td>
                                    <td>{{ $gender->genderName}}</td>
                                    <td>
                                        @method('edit')@csrf
                                        <a href="/admin/panel/gender/edit.blade.php/{{$gender->genderId}}"><button type="button" class="badge badge-info">edit</button></a>
                                    </td>
                                    </form>
                                    <td>@method('delete')@csrf
                                        <a href="/admin/panel/gender/delete.blade.php/{{$gender->genderId}}"><button type="button" class="badge badge-danger">delete</button></a>
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
