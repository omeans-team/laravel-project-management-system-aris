@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Flat Button</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle btn-group-flat"> <a
                                                class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle btn-group-flat"> <a
                                                class="button btn button-icon bg-success" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-toggle btn-group-flat"> <a
                                                class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Edges Button</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle btn-group-edges"> <a
                                                class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle btn-group-edges"> <a
                                                class="button btn button-icon bg-success" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-toggle btn-group-edges"> <a
                                                class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Basic Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon bg-success" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Outline Middle Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon btn-outline-primary" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon btn-outline-primary" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon btn-outline-success" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon btn-outline-success" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon btn-outline-warning" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon btn-outline-warning" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Outline Side Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon btn-outline-primary" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon bg-success" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon btn-outline-success" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon btn-outline-warning" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Outline Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon btn-outline-primary" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon btn-outline-primary" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon btn-outline-primary" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon btn-outline-success" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon btn-outline-success" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon btn-outline-success" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-toggle"> <a
                                                class="button btn button-icon btn-outline-warning" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon btn-outline-warning" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon btn-outline-warning" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Toolbar Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="d-flex align-items-center justify-content-center mb-2">
                                        <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group1"> <a
                                                class="button btn button-icon bg-primary" target="_blank"
                                                href="#">1</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">2</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">3</a>
                                        </div>
                                        <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group2"> <a
                                                class="button btn button-icon bg-primary" target="_blank"
                                                href="#">4</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">5</a>
                                        </div>
                                        <div class="btn-group btn-group-toggle btn-group3"> <a
                                                class="button btn button-icon bg-primary rounded" target="_blank"
                                                href="#">6</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-center mb-2">
                                        <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group1"> <a
                                                class="button btn button-icon bg-success" target="_blank"
                                                href="#">1</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">2</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">3</a>
                                        </div>
                                        <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group2"> <a
                                                class="button btn button-icon bg-success" target="_blank"
                                                href="#">4</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">5</a>
                                        </div>
                                        <div class="btn-group btn-group-toggle btn-group3"> <a
                                                class="button btn button-icon bg-success rounded" target="_blank"
                                                href="#">6</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-center">
                                        <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group1"> <a
                                                class="button btn button-icon bg-warning" target="_blank"
                                                href="#">1</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">2</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">3</a>
                                        </div>
                                        <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group2"> <a
                                                class="button btn button-icon bg-warning" target="_blank"
                                                href="#">4</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">5</a>
                                        </div>
                                        <div class="btn-group btn-group-toggle btn-group3"> <a
                                                class="button btn button-icon bg-warning rounded" target="_blank"
                                                href="#">6</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card card-block card-stretch card-height blog">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Basic Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-inline p-0 m-0 text-center">
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle btn-group-sm  btn-group-edges"> <a
                                                class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-primary" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li class="mb-2">
                                        <div class="btn-group btn-group-toggle  btn-group-edges"> <a
                                                class="button btn button-icon bg-success" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-success" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="btn-group btn-group-toggle btn-group-lg  btn-group-edges"> <a
                                                class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Left</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Middle</a>
                                            <a class="button btn button-icon bg-warning" target="_blank"
                                                href="#">Right</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
