@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                            <div class="card-body text-center rounded">
                                <div class="pricing-header">
                                    <div class="icon-data"><i class="ri-star-line"></i>
                                    </div>
                                    <h2 class="mb-4 display-5 font-weight-bolder">$26<small
                                            class="font-size-14 text-muted">/ Month</small></h2>
                                </div>
                                <h3 class="mb-3">Basic Plan</h3>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary mt-5">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                            <div class="card-body text-center rounded">
                                <div class="pricing-header">
                                    <div class="icon-data"><i class="ri-star-line"></i>
                                    </div>
                                    <h2 class="mb-4 display-5 font-weight-bolder">$39<small
                                            class="font-size-14 text-muted">/ Month</small></h2>
                                </div>
                                <h3 class="mb-3">Standard Plan</h3>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary mt-5">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                            <div class="card-body text-center rounded">
                                <div class="pricing-header">
                                    <div class="icon-data"><i class="ri-star-line"></i>
                                    </div>
                                    <h2 class="mb-4 display-5 font-weight-bolder">$48<small
                                            class="font-size-14 text-muted">/ Month</small></h2>
                                </div>
                                <h3 class="mb-3">Professional Plan</h3>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary mt-5">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                            <div class="card-body text-center rounded">
                                <div class="pricing-header bg-primary text-white">
                                    <div class="icon-data"><i class="ri-star-line"></i>
                                    </div>
                                    <h2 class="mb-4 display-5 font-weight-bolder text-white">$26<small
                                            class="font-size-14">/ Month</small></h2>
                                </div>
                                <h3 class="mb-3">Business Plan</h3>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-primary mt-5">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                            <div class="card-body text-center rounded">
                                <div class="pricing-header bg-success text-white">
                                    <div class="icon-data"><i class="ri-star-line"></i>
                                    </div>
                                    <h2 class="mb-4 display-5 font-weight-bolder text-white">$26<small
                                            class="font-size-14">/ Month</small></h2>
                                </div>
                                <h3 class="mb-3">Premium Plan</h3>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-success mt-5">Activate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="card card-block card-stretch card-height blog pricing-details">
                            <div class="card-body text-center rounded">
                                <div class="pricing-header bg-danger text-white">
                                    <div class="icon-data"><i class="ri-star-line"></i>
                                    </div>
                                    <h2 class="mb-4 display-5 font-weight-bolder text-white">$26<small
                                            class="font-size-14">/ Month</small></h2>
                                </div>
                                <h3 class="mb-3">VIP Plan</h3>
                                <ul class="list-unstyled mb-0">
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                </ul> <a href="#" class="btn btn-danger mt-5">Activate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
