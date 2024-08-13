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
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                    <h5>Desk</h5>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="dropdown status-dropdown mr-3">
                                            <div class="dropdown-toggle" id="dropdownMenuButton03" data-toggle="dropdown">
                                                <div class="btn bg-body"><span class="h6">Status :</span> In Progress<i
                                                        class="ri-arrow-down-s-line ml-2 mr-0"></i></div>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdownMenuButton03">
                                                <a class="dropdown-item" href="#"><i class="ri-mic-line mr-2"></i>In
                                                    Progress</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-attachment-line mr-2"></i>Priority</a>
                                                <a class="dropdown-item" href="#"><i
                                                        class="ri-file-copy-line mr-2"></i>Category</a>
                                            </div>
                                        </div>
                                        <div class="list-grid-toggle d-flex align-items-center mr-3">
                                            <div data-toggle-extra="tab" data-target-extra="#grid" class="active">
                                                <div class="grid-icon mr-3">
                                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <rect x="3" y="3" width="7" height="7"></rect>
                                                        <rect x="14" y="3" width="7" height="7"></rect>
                                                        <rect x="14" y="14" width="7" height="7"></rect>
                                                        <rect x="3" y="14" width="7" height="7"></rect>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div data-toggle-extra="tab" data-target-extra="#list">
                                                <div class="grid-icon">
                                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <line x1="21" y1="10" x2="3" y2="10">
                                                        </line>
                                                        <line x1="21" y1="6" x2="3" y2="6">
                                                        </line>
                                                        <line x1="21" y1="14" x2="3" y2="14">
                                                        </line>
                                                        <line x1="21" y1="18" x2="3" y2="18">
                                                        </line>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pl-3 btn-new border-left">
                                            <a href="#" class="btn btn-primary" data-target="#new-project-modal"
                                                data-toggle="modal">New Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="grid" class="item-content animate__animated animate__fadeIn active"
                    data-toggle-extra="tab-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card-transparent mb-0 desk-info">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Open Projects ( 05 )</h5>
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle py-2" id="dropdownMenuButton04"
                                                                data-toggle="dropdown">
                                                                <i class="ri-more-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton04">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-file-copy-2-line mr-2"></i>Duplicate</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-edit-2-line mr-2"></i>Rename</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-delete-bin-5-line mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Hotel Management App UI Kit</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="iq-progress-bar bg-secondary-light mb-4">
                                                        <span class="bg-secondary iq-progress progress-1"
                                                            data-percent="65"
                                                            style="transition: width 2s ease 0s; width: 65%;"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/01.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/02.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-secondary-light">Design</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">General Improvement in Landing pages</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="iq-progress-bar bg-info-light mb-4">
                                                        <span class="bg-info iq-progress progress-1" data-percent="65"
                                                            style="transition: width 2s ease 0s; width: 65%;"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/05.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/06.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/07.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/08.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-info-light">Testing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Product list view changes</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="iq-progress-bar bg-success-light mb-4">
                                                        <span class="bg-success iq-progress progress-1" data-percent="65"
                                                            style="transition: width 2s ease 0s; width: 65%;"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/05.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/06.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-success-light">SEO</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Add Multiple theme options</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="iq-progress-bar bg-warning-light mb-4">
                                                        <span class="bg-warning iq-progress progress-1" data-percent="65"
                                                            style="transition: width 2s ease 0s; width: 65%;"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/01.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/02.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-warning-light">Development</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-transparent mb-0 desk-info">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>In Progress ( 03 )</h5>
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle py-2" id="dropdownMenuButton05"
                                                                data-toggle="dropdown">
                                                                <i class="ri-more-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton05">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-file-copy-2-line mr-2"></i>Duplicate</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-edit-2-line mr-2"></i>Rename</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-delete-bin-5-line mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Product list view changes</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="iq-progress-bar bg-success-light mb-4">
                                                        <span class="bg-success iq-progress progress-1" data-percent="65"
                                                            style="transition: width 2s ease 0s; width: 65%;"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/05.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/06.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-success-light">SEO</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Admin Panel Customization</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="iq-progress-bar bg-primary-light mb-4">
                                                        <span class="bg-primary iq-progress progress-1" data-percent="65"
                                                            style="transition: width 2s ease 0s; width: 65%;"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/01.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/02.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-primary-light">Content</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Sidebar in dashboard plans</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="iq-progress-bar bg-secondary-light mb-4">
                                                        <span class="bg-secondary iq-progress progress-1"
                                                            data-percent="65"
                                                            style="transition: width 2s ease 0s; width: 65%;"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/01.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/02.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-secondary-light">Design</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card-transparent mb-0 desk-info">
                                <div class="card-body p-0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Compeleted ( 05 )</h5>
                                                        <div class="dropdown">
                                                            <span class="dropdown-toggle py-2" id="dropdownMenuButton06"
                                                                data-toggle="dropdown">
                                                                <i class="ri-more-fill"></i>
                                                            </span>
                                                            <div class="dropdown-menu dropdown-menu-right"
                                                                aria-labelledby="dropdownMenuButton06">
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-file-copy-2-line mr-2"></i>Duplicate</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-edit-2-line mr-2"></i>Rename</a>
                                                                <a class="dropdown-item" href="#"><i
                                                                        class="ri-delete-bin-5-line mr-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Login screen updated in mobile </h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/01.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-secondary-light">Design</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Helpdesk in dashboard plans</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/07.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/08.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-info-light">Testing</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Marketplace Admin Dashboard</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/05.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/06.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-success-light">SEO</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Multipurpose theme and design</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/02.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/03.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/04.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-primary-light">Content</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="mb-3">Minimal Design of IOT project</h5>
                                                    <p class="mb-3"><i class="las la-calendar-check mr-2"></i>02 / 02 /
                                                        2021</p>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="iq-media-group">
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/01.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                            <a href="#" class="iq-media">
                                                                <img src="../assets/images/user/02.jpg"
                                                                    class="img-fluid avatar-40 rounded-circle"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="btn bg-warning-light">Development</a>
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
                <div id="list" class="item-content animate__animated animate__fadeIn"
                    data-toggle-extra="tab-content">
                    <div class="table-responsive rounded bg-white mb-4">
                        <table class="table mb-0 table-borderless tbl-server-info tble-min-width">
                            <tbody>
                                <tr>
                                    <td>Hotel Management App UI Kit</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-secondary-light">
                                            <span class="bg-secondary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/01.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/02.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-secondary-light">Design</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>General Improvement</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-info-light">
                                            <span class="bg-info iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/05.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/06.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/07.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/08.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-info-light">Testing</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product list view changes</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-success-light">
                                            <span class="bg-success iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/05.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/06.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-success-light">SEO</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Add Multiple theme options</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-primary-light">
                                            <span class="bg-primary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/01.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/02.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-primary-light">Content</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product list view changes</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-success-light">
                                            <span class="bg-success iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/01.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/02.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-success-light">SEO</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Admin Panel Customization</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-primary-light">
                                            <span class="bg-primary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/01.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/02.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-primary-light">Content</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sidebar in dashboard plans</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-secondary-light">
                                            <span class="bg-secondary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/01.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/02.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-secondary-light">Design</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Login screen updated in mobile</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-secondary-light">
                                            <span class="bg-secondary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <a href="#" class="iq-media">
                                            <img class="img-fluid avatar-40 rounded-circle"
                                                src="../assets/images/user/01.jpg" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-secondary-light">Design</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Helpdesk in dashboard plans</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-info-light">
                                            <span class="bg-info iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/07.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/08.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-info-light">Testing</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Marketplace Admin Dashboard</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-secondary-light">
                                            <span class="bg-secondary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/07.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/08.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-secondary-light">Design</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Multipurpose theme and design</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-primary-light">
                                            <span class="bg-primary iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/02.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/03.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/04.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-primary-light">Content</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Minimal Design of IOT project</td>
                                    <td class="w-25">
                                        <div class="iq-progress-bar bg-warning-light">
                                            <span class="bg-warning iq-progress progress-1" data-percent="65"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="mb-0"><i class="las la-calendar-check mr-2"></i>02 / 02 / 2021</p>
                                    </td>
                                    <td>
                                        <div class="iq-media-group">
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/01.jpg" alt="">
                                            </a>
                                            <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle"
                                                    src="../assets/images/user/02.jpg" alt="">
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn bg-warning-light">Development</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Page end  -->
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
@endsection
