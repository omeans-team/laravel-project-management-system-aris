@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Default</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="/action_page.php">
                                    <p>Custom file:</p>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                    <p>Default file:</p>
                                    <input type="file" id="myFile" name="filename2">
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title"> file input</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="file-upload-form" class="uploader-file">
                                    <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                                    <label id="file-drag">
                                        <img id="file-image" src="#" alt="Preview" class="hidden">
                                        <span id="start-one">
                                            <i class="fa fa-download" aria-hidden="true"></i>
                                            <span class="d-block">Select a file or drag here</span>
                                            <span id="notimage" class="hidden d-block">Please select image</span>
                                            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                        </span>
                                        <span id="response" class="hidden">
                                            <span id="messages"></span>
                                            <progress class="progress" id="file-progress" value="0">
                                                <span>0</span>%
                                            </progress>
                                        </span>
                                    </label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
