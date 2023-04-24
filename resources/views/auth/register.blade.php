@extends('layouts.master')
@section('content')
<section class="wizard-section">
    <div class="row no-gutters">
        <div class="col-lg-6 col-md-6">
            <div class="wizard-content-left d-flex justify-content-center align-items-center">
                <h1>Create Your Account</h1>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="form-wizard">
                @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>

                @endif
                <form method="post" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-wizard-header">
                        <p>Fill all form field to go next step</p>
                        <ul class="list-unstyled form-wizard-steps clearfix">
                            <li class="active"><span>1</span></li>
                            <li><span>2</span></li>
                        </ul>
                    </div>
                    <fieldset class="wizard-fieldset show">
                        <h5>Personal Information</h5>

                        <div class="picture-container">
                            <div class="picture">
                                <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no"
                                    class="picture-src" id="wizardPicturePreview" title="">
                                <input type="file" id="wizard-picture" class="" name="picture" required>
                            </div>
                            <h6 class="">Choose Picture</h6>

                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                id="fname" />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="fname" class="wizard-form-text-label ">First Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group">
                            <input type="text"
                                class="form-control wizard-required @error('family') is-invalid @enderror" name="family"
                                value="{{ old('family') }}" required autocomplete="family" autofocus id="lname" />
                            @error('family')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="lname" class="wizard-form-text-label">Last Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control wizard-required @error('phone') is-invalid @enderror"
                                name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus
                                id="phone" />
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="phone" class="wizard-form-text-label">phone</label>
                            <div class="wizard-form-error"></div>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control wizard-required @error('age') is-invalid @enderror"
                                name="age" value="{{ old('age') }}" required autocomplete="age" autofocus id="age" />
                            @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="age" class="wizard-form-text-label">age</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <div class="wizard-form-radio">
                                <input name="radio-name" id="radio1" type="radio" />
                                <label for="radio1">Male</label>
                            </div>
                            <div class="wizard-form-radio">
                                <input name="radio-name" id="radio2" type="radio" />
                                <label for="radio2">Female</label>
                            </div>
                            <div class="wizard-form-radio">
                                <input name="radio-name" id="radio1" type="radio" />
                                <label for="radio1">another</label>
                            </div>
                        </div>
                        <a class="ihave" href="{{route('login')}}">I have an account. Log in to your account</a>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>

                    <fieldset class="wizard-fieldset">
                        <h5>Account Information</h5>
                        <div class="form-group">
                            <input type="email"
                                class="form-control wizard-required @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" requiremailed autocomplete="email" autofocus id="email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="email" class="wizard-form-text-label">Email*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="row mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm"
                                class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea type="text"
                                class="form-control wizard-required  @error('address') is-invalid @enderror"
                                name="address" value="{{ old('address') }}" required autocomplete="address" autofocus
                                id="address " rows="3"></textarea>
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="address" class="wizard-form-text-label">address</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left ">Previous</a>
                            {{-- <a href="{{route('login')}}" class="form-wizard-next-btn
                            float-right">{{ __('Register') }}</a>--}}
                            <button type="submit" class="btn btn-primary">{{__('Register') }}</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function() {
        readURL(this);
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
