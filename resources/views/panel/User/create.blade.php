@extends('admin.admin')
@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card justify-content-center">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">user form</h4>
                @if($errors->any())
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <ul>
                        @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form role="form" class="forms-sample" method="post" action="/admin/panel/user/create.blade.php" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Username</label>
                        <input name="name" type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Username">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">User family</label>
                        <input name="family" type="text" class="form-control" id="exampleInputEmail1"
                            placeholder="family name">
                    </div>

                    <label>
                        Female
                        <input name="genderName" type="radio" class="minimal-red" value="Female">
                    </label>
                    <label>
                        Man
                        <input name="genderName" type="radio" class="minimal-red" value="Man">
                    </label>
                    <label>
                        other
                        <input name="genderName" type="radio" class="minimal-red" value="other">
                    </label>

                    <div class="picture-container">
                        <div class="picture">
                            <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no"
                                 class="picture-src" id="wizardPicturePreview" title="">
                            <input type="file" id="wizard-picture" class="" name="picture" required>
                        </div>
                        <h6 class="">Choose Picture</h6>

                    </div>

                    <div class="form-group">
                        <label for="exampleTextarea1">address</label>
                        <textarea name="address" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputUsername1">Use rAge</label>
                        <input name="age" type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="UserAge">
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" id="exampleInputMobile"
                                placeholder="Mobile number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail2"
                                placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="Password">
                    </div>
                    {{--                        <div class="form-group">--}}
                    {{--                            <label for="exampleInputConfirmPassword1">Confirm Password</label>--}}
                    {{--                            <input type="password" class="form-control" name="password_confirmation" id="exampleInputConfirmPassword1" placeholder="Password">--}}
                    {{--                        </div>--}}

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    @endsection
