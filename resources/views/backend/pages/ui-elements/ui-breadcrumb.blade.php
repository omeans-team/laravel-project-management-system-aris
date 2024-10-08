@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Breadcrumb</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Use the items in order to programatically generate the breadcrumb links.use class
                                    <code>.breadcrumb to ol</code>
                                </p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Breadcrumb With Icon</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Use the items in order to programatically generate the breadcrumb links.use class
                                    <code>.breadcrumb to ol</code> with Icon
                                </p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active" aria-current="page"><i
                                                class="ri-home-4-line mr-1 float-left"></i>Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Breadcrumb</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>use class <code>.breadcrumb .bg-primary</code></p>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb bg-primary">
                                        <li class="breadcrumb-item active text-white" aria-current="page">Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-primary">
                                        <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                                        <li class="breadcrumb-item active text-white" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-primary mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
                                        <li class="breadcrumb-item active text-white" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Breadcrumb With Icon</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>use class <code>.breadcrumb .bg-primary </code> With Icon.</p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-primary">
                                        <li class="breadcrumb-item active text-white" aria-current="page"><i
                                                class="ri-home-4-line mr-1 float-left"></i>Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-primary">
                                        <li class="breadcrumb-item"><a href="#" class="text-white"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item active text-white" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb bg-primary mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-white"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
                                        <li class="breadcrumb-item active text-white" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Breadcrumb With Icon</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>use class <code>.breadcrumb .iq-bg-primary</code></p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-primary">
                                        <li class="breadcrumb-item active" aria-current="page"><i
                                                class="ri-home-4-line mr-1 float-left"></i>Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-primary">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-primary mb-0">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item"><a href="#">Library</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Breadcrumb With Icon</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>use class <code>.breadcrumb .iq-bg-danger</code></p>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-danger">
                                        <li class="breadcrumb-item active" aria-current="page"><i
                                                class="ri-home-4-line mr-1 float-left"></i>Home</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-danger">
                                        <li class="breadcrumb-item"><a href="#" class="text-danger"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb iq-bg-danger mb-0">
                                        <li class="breadcrumb-item"><a href="#" class="text-danger"><i
                                                    class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="text-danger">Library</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Data</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
