@extends('admin.admin')
@section('content')
    <form role="form" action="/editcontact/{{$contact->id}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">

                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">قالب آماده ورودی</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>قالب تاریخ :</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-person"></i>اسم</span>
                                </div>
                                <input name="Name" type="text" class="form-control ltr" value="{{$contact->Name}}">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-person"></i>نام خانوادگی</span>
                                </div>
                                <input name="Family" type="text" class="form-control ltr" value="{{$contact->Family}}">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">ایمیل</span>
                                </div>
                                <input name="email" type="email" class="form-control ltr" value="{{$contact->email}}">
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">ادرس</span>
                                </div>
                                <input name="adders" type="text" class="form-control ltr" value="{{$contact->adders}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i>تاریخ تولد</span>
                                </div>
                                <input name="Birth" type="text" class="form-control ltr" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask  value="{{$contact->Birth}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>قالب شماره همراه:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                </div>
                                <input name="PhoneNumber" type="text" class="form-control"
                                       data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask value="{{$contact->PhoneNumber}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>قالب آی پی:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-laptop"></i>پسورد</span>
                                </div>
                                <input name="Pass" type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask value="{{$contact->Pass}}">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-danger">ویرایش</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
