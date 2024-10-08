@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/04.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-whatsapp iq-card-btn"> <i
                                                class="ri-whatsapp-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Ira Membrit</h5>
                                    <p class="mb-2">Developer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-success rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-success-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/05.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-instagram iq-card-btn"> <i
                                                class="ri-instagram-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Cliff Hanger</h5>
                                    <p class="mb-2">Designer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-info rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-info-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/06.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-twitter iq-card-btn"> <i
                                                class="ri-twitter-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Anna Mull</h5>
                                    <p class="mb-2">Developer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-warning rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-warning-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/07.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-facebook iq-card-btn"> <i
                                                class="ri-facebook-fill m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Rock lai</h5>
                                    <p class="mb-2">Designer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-primary rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-primary-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/04.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-whatsapp iq-card-btn"> <i
                                                class="ri-whatsapp-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Ira Membrit</h5>
                                    <p class="mb-2">Developer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-success rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-success-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/05.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-instagram iq-card-btn"> <i
                                                class="ri-instagram-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Cliff Hanger</h5>
                                    <p class="mb-2">Designer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-info rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-info-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/06.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-twitter iq-card-btn"> <i
                                                class="ri-twitter-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Anna Mull</h5>
                                    <p class="mb-2">Developer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-warning rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-warning-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/07.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-facebook iq-card-btn"> <i
                                                class="ri-facebook-fill m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Rock lai</h5>
                                    <p class="mb-2">Designer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-primary rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-primary-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/04.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-whatsapp iq-card-btn"> <i
                                                class="ri-whatsapp-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Ira Membrit</h5>
                                    <p class="mb-2">Developer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-success rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-success-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/05.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-instagram iq-card-btn"> <i
                                                class="ri-instagram-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Cliff Hanger</h5>
                                    <p class="mb-2">Designer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-info rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-info-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/06.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-twitter iq-card-btn"> <i
                                                class="ri-twitter-line m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Anna Mull</h5>
                                    <p class="mb-2">Developer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-warning rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-warning-light rounded rounded-small ml-1">Enterprise</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-body">
                                <div class="subscriber-detail text-center">
                                    <div class="image mb-2 position-relative d-inline-block">
                                        <img src="../assets/images/user/07.jpg" alt="profile"
                                            class="img-fluid rounded-circle avatar-100 text-center">
                                        <button type="button"
                                            class="btn btn-icon rounded-circle title-facebook iq-card-btn"> <i
                                                class="ri-facebook-fill m-0"></i>
                                        </button>
                                    </div>
                                    <h5>Rock lai</h5>
                                    <p class="mb-2">Designer</p>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <button class="btn btn-primary rounded-small"><i class="ri-mail-line m-0"></i>
                                        </button>
                                        <div class="title bg-primary-light rounded rounded-small ml-1">Enterprise</div>
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
