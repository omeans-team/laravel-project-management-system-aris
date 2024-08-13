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
                                            <img src="../assets/images/login/mail.png" class="img-fluid" width="80"
                                                alt="">
                                            <h2 class="mt-3 mb-0 text-white">Success !</h2>
                                            <p class="cnf-mail mb-1">A email has been send to youremail@domain.com.
                                                Please check for an
                                                email from company and click
                                                on the included link to reset your password.</p>
                                            <div class="d-inline-block w-100">
                                                <a href="{{ route('dashboard') }}" class="btn btn-white mt-3">Back to
                                                    Home</a>
                                            </div>
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
