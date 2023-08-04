@extends('new-ui.layout.auth-layout')
@section('content')
<div class="container">
    <div class="row py-5 mt-4 align-items-center">
        <!-- For Demo Purpose -->
        <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
            <img src="new-ui-assets/assets/img/illustrationlogin.png" alt="" class="img-fluid mb-3 d-none d-md-block">

        </div>

        <!-- Registration Form -->
        <div class="col-md-7 col-lg-6 ml-auto">
           <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row">


                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-envelope text-muted"></i>
                        </span>
                    </div>
                    <input id="email" type="email" name="email" placeholder="Email Address"
                        class="form-control bg-white border-left-0 border-md input-sm">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <!-- Password -->
                <div class="input-group col-lg-12 mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white px-4 border-md border-right-0">
                            <i class="fa fa-lock text-muted"></i>
                        </span>
                    </div>
                    <input id="password" type="password" name="password" placeholder="Password"
                        class="form-control bg-white border-left-0 border-md input-sm">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>

                <!-- Submit Button -->
                <div class="form-group col-lg-12 mx-auto mb-0">
                    <button  type="submit" class="btn btn-primary btn-block py-2" id="logIn" style="background-color: #2b2b2b;">
                        <span class="font-weight-bold">Log Into Your Account</span>
                    </button>
                </div><br> <br>


                <!-- Already Registered -->
                <div class="text-center w-100">
                    <p class="text-muted font-weight-bold">Dont have an account? <a href="{{ url('/siteregister') }}"
                            class="text-primary ml-2">Create account</a></p>
                </div>

            </div>
            </form>
        </div>
    </div>
</div>
@endsection
