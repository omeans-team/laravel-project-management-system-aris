@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Default Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-primary mt-2">Primary</button>
                                <button type="button" class="btn btn-secondary mt-2">Secondary</button>
                                <button type="button" class="btn btn-success mt-2">Success</button>
                                <button type="button" class="btn btn-danger mt-2">Danger</button>
                                <button type="button" class="btn btn-warning mt-2">Warning</button>
                                <button type="button" class="btn btn-info mt-2">Info</button>
                                <button type="button" class="btn btn-light mt-2">Light</button>
                                <button type="button" class="btn btn-dark mt-2">Dark</button>
                                <button type="button" class="btn btn-link mt-2">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Default Buttons Rounded Shape</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-primary rounded-pill mt-2">Primary</button>
                                <button type="button" class="btn btn-secondary rounded-pill mt-2">Secondary</button>
                                <button type="button" class="btn btn-success rounded-pill mt-2">Success</button>
                                <button type="button" class="btn btn-danger rounded-pill mt-2">Danger</button>
                                <button type="button" class="btn btn-warning rounded-pill mt-2">Warning</button>
                                <button type="button" class="btn btn-info rounded-pill mt-2">Info</button>
                                <button type="button" class="btn btn-light rounded-pill mt-2">Light</button>
                                <button type="button" class="btn btn-dark rounded-pill mt-2">Dark</button>
                                <button type="button" class="btn btn-link rounded-pill mt-2">Link</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Outline Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-outline-primary mt-2">Primary</button>
                                <button type="button" class="btn btn-outline-secondary mt-2">Secondary</button>
                                <button type="button" class="btn btn-outline-success mt-2">Success</button>
                                <button type="button" class="btn btn-outline-danger mt-2">Danger</button>
                                <button type="button" class="btn btn-outline-warning mt-2">Warning</button>
                                <button type="button" class="btn btn-outline-info mt-2">Info</button>
                                <button type="button" class="btn btn-outline-dark mt-2">Dark</button>
                                <button type="button" class="btn btn-outline-link mt-2">Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Rounded Outline Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-outline-primary rounded-pill mt-2">Primary</button>
                                <button type="button"
                                    class="btn btn-outline-secondary rounded-pill mt-2">Secondary</button>
                                <button type="button" class="btn btn-outline-success rounded-pill mt-2">Success</button>
                                <button type="button" class="btn btn-outline-danger rounded-pill mt-2">Danger</button>
                                <button type="button" class="btn btn-outline-warning rounded-pill mt-2">Warning</button>
                                <button type="button" class="btn btn-outline-info rounded-pill mt-2">Info</button>
                                <button type="button" class="btn btn-outline-dark rounded-pill mt-2">Dark</button>
                                <button type="button" class="btn btn-outline-link rounded-pill mt-2">Link</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Default Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="mt-2 btn btn-primary"><i
                                        class="ri-bill-fill"></i>Primary</button>
                                <button type="button" class="mt-2 btn btn-secondary"><i
                                        class="ri-heart-fill"></i>Secondary</button>
                                <button type="button" class="mt-2 btn btn-success"><i
                                        class="ri-bill-fill"></i>Success</button>
                                <button type="button" class="mt-2 btn btn-danger"><i
                                        class="ri-heart-fill"></i>Danger</button>
                                <button type="button" class="mt-2 btn btn-warning"><i
                                        class="ri-bill-fill"></i>Warning</button>
                                <button type="button" class="mt-2 btn btn-info"><i
                                        class="ri-heart-fill"></i>Info</button>
                                <button type="button" class="mt-2 btn btn-light"><i
                                        class="ri-bill-fill"></i>Light</button>
                                <button type="button" class="mt-2 btn btn-dark"><i
                                        class="ri-heart-fill"></i>Dark</button>
                                <button type="button" class="mt-2 btn btn-link"><i
                                        class="ri-bill-fill"></i>Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Default Buttons Rounded Shape</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="mt-2 btn btn-primary rounded-pill"><i
                                        class="ri-bill-fill"></i>Primary</button>
                                <button type="button" class="mt-2 btn btn-secondary rounded-pill"><i
                                        class="ri-heart-fill"></i>Secondary</button>
                                <button type="button" class="mt-2 btn btn-success rounded-pill"><i
                                        class="ri-bill-fill"></i>Success</button>
                                <button type="button" class="mt-2 btn btn-danger rounded-pill"><i
                                        class="ri-heart-fill"></i>Danger</button>
                                <button type="button" class="mt-2 btn btn-warning rounded-pill"><i
                                        class="ri-bill-fill"></i>Warning</button>
                                <button type="button" class="mt-2 btn btn-info rounded-pill"><i
                                        class="ri-heart-fill"></i>Info</button>
                                <button type="button" class="mt-2 btn btn-light rounded-pill"><i
                                        class="ri-bill-fill"></i>Light</button>
                                <button type="button" class="mt-2 btn btn-dark rounded-pill"><i
                                        class="ri-heart-fill"></i>Dark</button>
                                <button type="button" class="mt-2 btn btn-link rounded-pill"><i
                                        class="ri-bill-fill"></i>Link</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Outline Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-outline-primary mt-2"><i
                                        class="ri-heart-line"></i>Primary</button>
                                <button type="button" class="btn btn-outline-secondary mt-2"><i
                                        class="ri-alert-line"></i>Secondary</button>
                                <button type="button" class="btn btn-outline-success mt-2"><i
                                        class="ri-heart-line"></i>Success</button>
                                <button type="button" class="btn btn-outline-danger mt-2"><i
                                        class="ri-alert-line"></i>Danger</button>
                                <button type="button" class="btn btn-outline-warning mt-2"><i
                                        class="ri-heart-line"></i>Warning</button>
                                <button type="button" class="btn btn-outline-info mt-2"><i
                                        class="ri-alert-line"></i>Info</button>
                                <button type="button" class="btn btn-outline-dark mt-2"><i
                                        class="ri-alert-line"></i>Dark</button>
                                <button type="button" class="btn btn-outline-link mt-2"><i
                                        class="ri-heart-line"></i>Link</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Rounded Outline Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-outline-primary rounded-pill mt-2"><i
                                        class="ri-heart-line"></i>Primary</button>
                                <button type="button" class="btn btn-outline-secondary rounded-pill mt-2"><i
                                        class="ri-alert-line"></i>Secondary</button>
                                <button type="button" class="btn btn-outline-success rounded-pill mt-2"><i
                                        class="ri-heart-line"></i>Success</button>
                                <button type="button" class="btn btn-outline-danger rounded-pill mt-2"><i
                                        class="ri-alert-line"></i>Danger</button>
                                <button type="button" class="btn btn-outline-warning rounded-pill mt-2"><i
                                        class="ri-heart-line"></i>Warning</button>
                                <button type="button" class="btn btn-outline-info rounded-pill mt-2"><i
                                        class="ri-alert-line"></i>Info</button>
                                <button type="button" class="btn btn-outline-dark rounded-pill mt-2"><i
                                        class="ri-alert-line"></i>Dark</button>
                                <button type="button" class="btn btn-outline-link rounded-pill mt-2"><i
                                        class="ri-heart-line"></i>Link</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Button Tags</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <a class="mt-2 btn btn-primary" href="#" role="button">Link</a>
                                <button class="mt-2 btn btn-success" type="submit">Button</button>
                                <input class="mt-2 btn btn-danger" type="button" value="Input">
                                <input class="mt-2 btn btn-warning" type="submit" value="Submit">
                                <input class="mt-2 btn btn-info" type="reset" value="Reset">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Buttons Sizes</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-primary btn-sm mr-2">Small Button</button>
                                <button type="button" class="btn btn-success mr-2">Button</button>
                                <button type="button" class="btn btn-info btn-lg">Large Button</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Block Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-primary btn-block">Block level button</button>
                                <button type="button" class="btn btn-success btn-block">Block level button</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Icons Buttons</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-primary mt-2"><i
                                        class="ri-heart-fill pr-0"></i></button>
                                <button type="button" class="btn btn-secondary mt-2"><i
                                        class="ri-star-fill pr-0"></i></button>
                                <button type="button" class="btn btn-success mt-2"><i
                                        class="ri-settings-4-fill pr-0"></i></button>
                                <button type="button" class="btn btn-danger mt-2"><i
                                        class="ri-radio-button-fill pr-0"></i></button>
                                <button type="button" class="btn btn-warning mt-2"><i
                                        class="ri-delete-bin-2-fill pr-0"></i></button>
                                <button type="button" class="btn btn-info mt-2"><i
                                        class="ri-lock-fill pr-0"></i></button>
                                <button type="button" class="btn btn-light mt-2"><i
                                        class="ri-time-fill pr-0"></i></button>
                                <button type="button" class="btn btn-dark mt-2"><i
                                        class="ri-sun-fill pr-0"></i></button>
                                <button type="button" class="btn btn-link"><i class="ri-moon-fill pr-0"></i></button>
                                <div class="d-inline-block w-100">
                                    <button type="button" class="btn btn-primary mt-2"><i
                                            class="ri-heart-fill"></i>Buttons</button>
                                    <button type="button" class="btn btn-secondary mt-2"><i
                                            class="ri-star-fill"></i>Buttons</button>
                                    <button type="button" class="btn btn-success mt-2"><i
                                            class="ri-settings-4-fill"></i>Buttons</button>
                                    <button type="button" class="btn btn-danger mt-2"><i
                                            class="ri-radio-button-fill"></i>Buttons</button>
                                    <button type="button" class="btn btn-info mt-2"><i
                                            class="ri-lock-fill"></i>Buttons</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Social Disabled State</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="mt-2 btn btn-primary" disabled>Primary button</button>
                                <button type="button" class="mt-2 btn btn-success" disabled>Button</button>
                                <button type="button" class="mt-2 btn btn-outline-primary" disabled>Button</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Buttons Toggle States</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-primary" data-toggle="button"
                                    aria-pressed="false">
                                    Single toggle
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Default Buttons Active</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <button type="button" class="btn btn-primary active mt-2">Active</button>
                                <button type="button" class="btn btn-secondary active mt-2">Active</button>
                                <button type="button" class="btn btn-warning active mt-2">Active</button>
                                <button type="button" class="btn btn-accent disabled mt-2"
                                    disabled="">Disabled</button>
                                <button type="button" class="btn btn-primary disabled mt-2"
                                    disabled="">Disabled</button>
                                <button type="button" class="btn btn-outline-primary disabled mt-2"
                                    disabled="">Disabled</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Button Group Sizing</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <div class="d-block">
                                    <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary mt-2">Left</button>
                                        <button type="button" class="btn btn-primary mt-2">Middle</button>
                                        <button type="button" class="btn btn-primary mt-2">Right</button>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="btn-group mt-2" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Left</button>
                                        <button type="button" class="btn btn-primary">Middle</button>
                                        <button type="button" class="btn btn-primary">Right</button>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="btn-group  btn-group-sm mt-2" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Left</button>
                                        <button type="button" class="btn btn-primary">Middle</button>
                                        <button type="button" class="btn btn-primary">Right</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Button Group</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-primary">Left</button>
                                    <button type="button" class="btn btn-primary">Middle</button>
                                    <button type="button" class="btn btn-primary">Right</button>
                                </div>
                                <div class="btn-toolbar mt-2" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-secondary">1</button>
                                        <button type="button" class="btn btn-secondary">2</button>
                                        <button type="button" class="btn btn-secondary">3</button>
                                        <button type="button" class="btn btn-secondary">4</button>
                                    </div>
                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-secondary">5</button>
                                        <button type="button" class="btn btn-secondary">6</button>
                                        <button type="button" class="btn btn-secondary">7</button>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="Third group">
                                        <button type="button" class="btn btn-secondary">8</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Button Dropdown</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been
                                    the industry's standard dummy text ever</p>
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <button type="button" class="btn btn-primary">1</button>
                                    <button type="button" class="btn btn-primary">2</button>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                            <a class="dropdown-item" href="#">Dropdown link</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block mt-2">
                                    <div class="btn-group-vertical" role="group"
                                        aria-label="Button group with nested dropdown">
                                        <button type="button" class="btn btn-primary">1</button>
                                        <button type="button" class="btn btn-primary">2</button>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop2" type="button"
                                                class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                                <a class="dropdown-item" href="#">Dropdown link</a>
                                            </div>
                                        </div>
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
