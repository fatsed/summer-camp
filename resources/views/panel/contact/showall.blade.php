@extends('admin.admin')
@section('content')
    <style>
        .inputrr{
            color: azure;
            background-color: rgb(29, 30, 49);
        }
        .bodym{
            background-color: rgba(25, 25, 35, 0.685);
        }
        .btnclose{
            background-color: crimson;
            color: rgb(16, 16, 21);
        }
        .btnSend{
            background-color: lawngreen;
            color: rgb(16, 16, 21);
        }
    </style>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">contact Table</h4>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>email</th>
                            <th>subject</th>
                            <th>message</th>
                            <th>Response</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id}}</td>
                                <td>{{ $contact->Name}}</td>
                                <td>{{ $contact->email}}</td>
                                <td>{{ $contact->subject}}</td>
                                <td>{{ $contact->message}}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Response</button>
                                    <form method="post" action="/admin/panel/contact/showall.blade.php"enctype="multipart/form-data">
                                        @csrf

                                    <div class="modal fade bodym" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog bodym">
                                            <div class="modal-content">

                                                <div class="modal-body inputrr">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Response</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="message-text" class="col-form-label">Message:</label>
                                                            <textarea class="form-control " id="message-text"></textarea>
                                                        </div>
                                                </div>
                                                <div class="modal-footer inputrr">
                                                    <button type="button" class="btn  btnclose" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn  btnSend">Send message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </td>
                                <td>@method('delete')@csrf
                                    <a href="/admin/panel/contact/delete.blade.php/{{$contact->id}}"><button type="button" class="badge badge-danger">delete</button></a>
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
