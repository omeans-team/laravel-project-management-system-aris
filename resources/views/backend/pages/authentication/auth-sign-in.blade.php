@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">
        <section class="login-content">
            <div class="container">
                <div class="row align-items-center justify-content-center height-self-center">
                    <div class="col-lg-8">
                        <div class="card auth-card">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center auth-content">
                                    <div class="col-lg-6 bg-primary content-left">
                                        <div class="p-3">
                                            <h2 class="mb-2 text-white">Sign In</h2>
                                            <p>Login to stay connected.</p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" type="email"
                                                                placeholder=" ">
                                                            <label>Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" type="password"
                                                                placeholder=" ">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheck1">
                                                            <label class="custom-control-label control-label-1 text-white"
                                                                for="customCheck1">Remember Me</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <a href="{{ route('auth-recoverpw') }}" class="text-white float-right">Forgot
                                                            Password?</a>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-white">Sign In</button>
                                                <p class="mt-3">
                                                    Create an Account <a href="{{ route('auth-sign-up') }}"
                                                        class="text-white text-underline">Sign Up</a>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 content-right">
                                        <img src="../assets/images/login/01.png" class="img-fluid image-right"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Wrapper End-->
@endsection
