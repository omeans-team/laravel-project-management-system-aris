@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Default</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac
                                    venenatis mollis, diam
                                    nibh finibus leo</p>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">textarea</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Horizontal Input</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac
                                    venenatis mollis, diam
                                    nibh finibus leo</p>
                                <div class="form-group row align-items-center">
                                    <div class="col-sm-3 col-4">
                                        <label class="col-form-label">Description</label>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        <textarea class="form-control" id="horizontalTextarea" rows="3" placeholder="Textarea"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Floating Label</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac
                                    venenatis mollis, diam
                                    nibh finibus leo</p>
                                <div class="form-label-group">
                                    <textarea class="form-control" id="exampleFormControlTextarea2" rows="4" placeholder="Label in Textarea"></textarea>
                                    <label>Textarea</label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Counter</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac
                                    venenatis mollis, diam
                                    nibh finibus leo</p>
                                <div class="form-label-group mb-0">
                                    <textarea data-length="20" class="form-control" id="exampleFormControlTextarea3" rows="3" placeholder="Counter"></textarea>
                                    <label>Counter</label>
                                </div>
                                <small class="counter-value-text float-right"><span class="char-count">0</span> / 20
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
