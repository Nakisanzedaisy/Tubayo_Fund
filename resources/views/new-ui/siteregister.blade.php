@extends('new-ui.layout.auth-layout')
@section('content')
    <br> <br>
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="new-ui-assets/assets/img/illustration.png" alt="" class="img-fluid mb-3 d-none d-md-block">


            </div>

            <!-- Registration Form -->
            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="{{ route("submit") }}" method="POST">
                    @csrf
                    <div class="row">

                        <!-- First Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="first_name" type="text" name="first_name" placeholder="First Name"
                                class="form-control bg-white border-left-0 border-md input-sm">
                        </div>

                        <!-- Last Name -->
                        <div class="input-group col-lg-6 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                            </div>
                            <input id="last_name" type="text" name="last_name" placeholder="Last Name"
                                class="form-control bg-white border-left-0 border-md input-sm">
                        </div>

                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" placeholder="Email Address"
                                class="form-control bg-white border-left-0 border-md input-sm">
                        </div>

                        <!-- Phone Number -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-phone-square text-muted"></i>
                                </span>
                            </div>
                            <select title="countryCode" id="countryCode" name="countryCode" style="max-width: 80px"
                                class="custom-select form-control bg-white border-left-0 border-md h-100 font-weight-bold text-muted">
                                <option value="+256">+256</option>
                                <option value="+254">+254</option>
                                <option value="+243">+243</option>
                                <option value="+257">+257</option>
                                <option value="+250">+250</option>
                                <option value="+255">+255</option>
                                <option value="+211">+211</option>
                            </select>
                            <input id="phoneNumber" type="tel" name="phone" placeholder="Phone Number"
                                class="form-control bg-white border-md border-left-0 pl-3 input-sm">
                        </div>
                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password"
                                placeholder="Password -  more than 6 characters"
                                class="form-control bg-white border-left-0 border-md input-sm">
                        </div>

                        <!-- Password Confirmation -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-white px-4 border-md border-right-0">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                            </div>
                            <input id="passwordConfirmation" type="password" name="passwordConfirmation"
                                placeholder="Confirm Password"
                                class="form-control bg-white border-left-0 border-md input-sm">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0"  >
                            <button type="submit">
                            <a href="#" class="btn btn-primary btn-block py-2 button" id="signUp"
                                style="background-color: #2b2b2b;">
                                <span class="font-weight-bold">Create Your Account</span>
                            </a>
                        </button>
                        </div>
                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Already Registered? <a href="{{ url('/sitelogin') }}"
                                    class="text-primary ml-2">Login</a></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
