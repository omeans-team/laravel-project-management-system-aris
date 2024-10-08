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
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                        aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>
                                <label for="basic-url">Your URL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                                    </div>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text text-area">With textarea</span>
                                    </div>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Simple Icon</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon4"><i
                                                class="las la-bell font-size-20"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Notification"
                                        aria-label="notification" aria-describedby="basic-addon4">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Notification"
                                        aria-label="notification" aria-describedby="basic-addon5">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon5"><i
                                                class="las la-bell font-size-20"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Spinning Icon</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon6"><i
                                                class="fa fa-spinner fa-spin"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                                        aria-describedby="basic-addon6">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                                        aria-describedby="basic-addon7">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon7"><i
                                                class="fa fa-spinner fa-spin"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Switch</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <div class="custom-control custom-switch custom-switch-color">
                                                <input type="checkbox" class="custom-control-input bg-primary"
                                                    id="customSwitch01" checked="">
                                                <label class="custom-control-label" for="customSwitch01"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <div class="custom-control custom-switch custom-switch-color">
                                                <input type="checkbox" class="custom-control-input bg-success"
                                                    id="customSwitch02" checked="">
                                                <label class="custom-control-label" for="customSwitch02"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Buttons with dropdowns</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Segmented buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-primary">Action</button>
                                        <button type="button"
                                            class="btn btn-outline-primary dropone dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="las la-angle-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Text input with segmented dropdown button">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Text input with segmented dropdown button">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary">Action</button>
                                        <button type="button"
                                            class="btn btn-secondary dropone dropdown-toggle  dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="las la-angle-down"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Custom select</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group mb-4">
                                    <select class="custom-select" id="inputGroupSelect02">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                    </div>
                                </div>
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect03">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Sizing</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group input-group-sm mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Default"
                                        aria-describedby="inputGroup-sizing-default">
                                </div>
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Large"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Dropdown Icon</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">

                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary  dropone dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="las la-cog font-size-20"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Dropdown"
                                        aria-label="dropdown">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1 "></i>Right </p>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Text input with dropdown button">
                                    <div class="input-group-append">
                                        <button class="btn btn-success dropone dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="las la-cog font-size-20"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Checkboxes</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Text input with checkbox">
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Checkbox"
                                        aria-label="checkbox" aria-describedby="basic-addon1">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Checkbox"
                                        aria-label="checkbox" aria-describedby="basic-addon5">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="checkbox" aria-label="Text input with checkbox" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Radios</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="radio" name="custom-radio-1" checked>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Checkbox">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Checkbox">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <input type="radio" name="custom-radio-1" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Multiple inputs</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="first">First and last name</span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Multiple addons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control"
                                        aria-label="Amount (to the nearest dollar)">
                                    <div class="input-group-append">
                                        <span class="input-group-text">$</span>
                                        <span class="input-group-text">0.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Custom select</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label="">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group mb-4">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">Button</button>
                                    </div>
                                </div>
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-primary" type="button">Button</button>
                                        <button class="btn btn-outline-primary" type="button">Button</button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="" aria-label="">
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-primary" type="button">Button</button>
                                        <button class="btn btn-outline-primary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Custom file input</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group mb-4">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="upload">Upload</span>
                                    </div>
                                </div>
                                <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile03">
                                        <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                    </div>
                                </div>
                                <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
