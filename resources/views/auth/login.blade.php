@extends('layouts.master')
@section('content')
    <section class="wizard-section">
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-6">
                <div class="wizard-content-left d-flex justify-content-center align-items-center">
                    <h1>login to Your Account</h1>
                </div>
            </div>
   <div class="col-lg-6 col-md-6 ">
     <div class="form-wizard">
         @if($errors->any())
             <div class="alert alert-danger d-flex align-items-center" role="alert">
                 <ul>
                     @foreach($errors->all() as $err)
                         <li>{{$err}}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
          <form method="POST" action="{{ route('login')}}" role="form">
              @csrf
             <h5 style="  text-align: center; margin-top: 100px;">Personal Information</h5>

             <div class="form-group">
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                        required autocomplete="email" autofocus/>
                 @error('email')
                 <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                 </span>
                @enderror
                     <label for="email" class="wizard-form-text-label">email*</label>
                     <div class="wizard-form-error"></div>
                 </div>

              <div class="form-group">
                  <input  id="password" type="password" class="form-control wizard-required @error('password') is-invalid @enderror" name="password" required />
                  <label for="password" class="wizard-form-text-label">Password*</label>
                  <div class="wizard-form-error">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                      @enderror
                  </div>
              </div>
               <div class="row mb-3">
                   <div class="col-md-6 offset-md-4">
                       <div class="form-check">
                           <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                           <label class="form-check-label" for="remember">
                               {{ __('Remember Me') }}
                           </label>
                       </div>
                   </div>
               </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <a class="btn-book-a-table" href="{{route('register')}}">Register</a>
                    </div>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
