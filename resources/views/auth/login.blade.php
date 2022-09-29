@extends('auth.layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-7 col-lg-10 col-xl-8">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 border-end">

                    </div>
                    <div class="col-lg-6 ">
                        <div class="p-5 text-center primary-textcolor">
                            <h2>
                                Welcome Back!
                            </h2>
                        </div>


                        @if (session('error'))
                        <span class="text-danger"> {{ session('error') }}</span>
                        @endif
                        <form class="user ms-4" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input id="email" type="email"
                                    class="py-1 w-100 ps-4 @error('email') is-invalid @enderror" name="email" required
                                    autocomplete="email" autofocus placeholder="Enter Email Address.">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <input id="password" type="password" class="py-1 w-100 ps-4 @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password" placeholder="Enter Password">
                                    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <input class="mb-3" type="checkbox" name="remember" id="customCheck">

                            <label class="primary-textcolor lead" for="customCheck">Remember
                                Me</label>


                            <a href="{{route('password.request')}}" class="ms-3 text-decoration-none primary-textcolor lead">Forgot Password?</a>

                            <div class="mb-3 ms-3">

                                <button class="primarycolor py-1 w-75 text-align-center text-white">
                                    Login
                                </button>
                            </div>


                            <div class="my-3 lead">
                                <p class="primary-textcolor">New user <a href="{{ route('register') }}" class="text-decoration-none"><span class="secondary-textcolor">Create
                                        account</span></a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
