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
                                            <img src="../assets/images/user/1.png" class="rounded avatar-80 mb-3"
                                                alt="">
                                            <h2 class="mb-2 text-white">Hi ! Ruben Dokidis</h2>
                                            <p>Enter your password to access the admin.</p>
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="floating-label form-group">
                                                            <input class="floating-input form-control" type="password"
                                                                placeholder=" ">
                                                            <label>Password</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-white">Login</button>
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
