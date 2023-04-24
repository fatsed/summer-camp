@extends('admin.admin')
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 80px;
            height: 80px;
            border-radius: 100%;
        }
    </style>
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">news Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>path</th>
                                <th>title</th>
                                <th>abstract</th>
                                <th>text</th>
                                <th>time</th>
                                <th>writer</th>
                                <th>source</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->id}}</td>
                                    <td><img src="{{ $article->ArticlePicture}}" width="200px" height="200px"></td>
                                    <td>{{ $article->title}}</td>
                                    <td>{{ $article->abstract}}</td>
                                    <td>{{ $article->text}}</td>
                                    <td>{{ $article->time}}</td>
                                    <td>{{ $article->writer}}</td>
                                    <td>{{ $article->source}}</td>
                                    <td>
                                            @method('edit')@csrf
                                        <a href="/admin/panel/article/edit.blade.php/{{$article->id}}"><button type="button" class="badge badge-info">edit</button></a>
                                    </td>
                                    </form>
                                    <td>@method('delete')@csrf
                                        <a href="/admin/panel/article/delete.blade.php/{{$article->id}}"><button type="button" class="badge badge-danger">delete</button></a>
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
