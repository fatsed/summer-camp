@extends('admin.admin')
@section('content')
    @if($Status)
        <p style="color: #22935e;font-size: 23px;font-weight: 600;">"Registration was done successfully"</p>
    @endif
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">contact form </h4>
                        @if($errors->any())
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <ul>
                                    @foreach($errors->all() as $err)
                                        <li>{{$err}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form  class="forms-sample" method="post" role="form" action="/panel/contact/create.blade.php" >
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Username</label>
                                <input name="Name" type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">subject</label>
                                <input name="subject" type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleTextarea1">message</label>
                                <textarea name="message" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
