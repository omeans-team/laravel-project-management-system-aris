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
                                    <h4 class="card-title">Equal-width multi-row</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Create equal-width columns that span multiple rows by inserting a <code>.w-100</code>
                                    where you want the columns to break to a new line. Make the breaks responsive by
                                    mixing the <code>.w-100</code> with some <a
                                        href="/docs/4.3/utilities/display/">responsive display utilities</a>.</p>
                                <div class="media mb-2">
                                    <img src="../assets/images/page-img/15.jpg" class="mr-3 avatar-70 img-fluid rounded"
                                        alt="#">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="../assets/images/page-img/16.jpg" class="mr-3 avatar-70 img-fluid rounded"
                                        alt="#">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                        <div class="media mt-3">
                                            <a class="mr-3" href="#">
                                                <img src="../assets/images/page-img/17.jpg" alt="#"
                                                    class="avatar-70 img-fluid rounded">
                                            </a>
                                            <div class="media-body">
                                                <h5 class="mt-0">Media heading</h5>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec lacinia congue felis in faucibus.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Order</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Change the order of content in media objects by modifying the HTML itself, or by
                                    adding some custom flexbox CSS to set the <code>order</code> property (to an integer
                                    of your choosing).</p>
                                <div class="media mb-5">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">Media object</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                    </div>
                                    <img src="../assets/images/page-img/18.jpg" class="ml-3 avatar-70 img-fluid rounded"
                                        alt="#">
                                </div>
                                <div class="media mb-5">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">Center-aligned media</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                    </div>
                                    <img src="../assets/images/page-img/19.jpg"
                                        class="align-self-center mr-3 avatar-70 img-fluid rounded" alt="#">
                                </div>
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="mt-0 mb-1">Bottom-aligned media</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.
                                    </div>
                                    <img src="../assets/images/page-img/20.jpg"
                                        class="align-self-end mr-3 avatar-70 img-fluid rounded" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Media object</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>The images or other media can be aligned top, middle, or bottom. The default is top
                                    aligned.</p>
                                <div class="media mb-4">
                                    <img src="../assets/images/page-img/21.jpg"
                                        class="align-self-start mr-3 avatar-70 img-fluid rounded" alt="#">
                                    <div class="media-body">
                                        <h5 class="mt-0">Top-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <div class="media mb-4">
                                    <img src="../assets/images/page-img/22.jpg"
                                        class="align-self-center rounded mr-3 avatar-70 rounded" alt="#">
                                    <div class="media-body">
                                        <h5 class="mt-0">Center-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <img src="../assets/images/page-img/23.jpg"
                                        class="align-self-end rounded mr-3 avatar-70 rounded" alt="#">
                                    <div class="media-body">
                                        <h5 class="mt-0">Bottom-aligned media</h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Media list</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>Because the media object has so few structural requirements, you can also use these
                                    classes on list HTML elements. On your <code>&lt;ul&gt;</code> or
                                    <code>&lt;ol&gt;</code>, add the <code>.list-unstyled</code> to remove any browser
                                    default list styles, and then apply <code>.media</code> to your
                                    <code>&lt;li&gt;</code>s. As always, use spacing utilities wherever needed to fine
                                    tune.
                                </p>
                                <ul class="list-unstyled mb-0">
                                    <li class="media">
                                        <img src="../assets/images/page-img/24.jpg" class="mr-3 avatar-70 img-fluid rounded"
                                            alt="#">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img src="../assets/images/page-img/15.jpg" class="mr-3 avatar-70 img-fluid rounded"
                                            alt="#">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img src="../assets/images/page-img/16.jpg" class="mr-3 avatar-70 img-fluid rounded"
                                            alt="#">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">List-based media object</h5>
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                            ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                            viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec
                                            lacinia congue felis in faucibus.
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
