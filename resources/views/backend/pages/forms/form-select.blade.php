@extends('layouts.app')

@section('contents')
    <!-- Wrapper Start -->
    <div class="wrapper">

        @include('backend.components.sidebar')
        @include('backend.components.navbar')

        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Basic select boxes</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <select class="form-control" id="sel1" name="sellist1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Mutiple select</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <select multiple class="form-control" id="sel2" name="sellist2">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Basic Select with Input Group</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                    </div>
                                    <select class="form-control" id="inputGroupSelect01">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <select class="form-control" id="inputGroupSelect02">
                                        <option selected="">Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Single Select2</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <select class="form-control ">
                                        <option>Java</option>
                                        <option>Javascript</option>
                                        <option>PHP</option>
                                        <option>Visual Basic</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Multiple Select2</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <select id="multiple" class="js-states form-control" multiple>
                                    <option>Red</option>
                                    <option>Green</option>
                                    <option>Blue</option>
                                    <option>Yellow</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Custom Select</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <select class="custom-select form-control">
                                    <option selected="">Open this menu</option>
                                    <option value="IT">IT</option>
                                    <option value="Blade Runner">Blade Runner</option>
                                    <option value="Thor Ragnarok">Thor Ragnarok</option>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Disabled Select</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <select disabled="disabled" id="disabledSelect" class="form-control">
                                    <option>Disabled select</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Custome Select with Input Group</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect03">Options</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect03">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <select class="custom-select" id="inputGroupSelect04">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <div class="input-group-append">
                                        <label class="input-group-text" for="inputGroupSelect04">Options</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Custom Select Menu Sizing</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <select class="custom-select custom-select-sm mb-3">
                                        <option selected>Small Custom Select Menu</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <select name="cars" class="custom-select mb-3">
                                        <option selected>Default Custom Select Menu</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <select name="cars" class="custom-select custom-select-lg mb-3">
                                        <option selected>Large Custom Select Menu</option>
                                        <option value="volvo">Volvo</option>
                                        <option value="fiat">Fiat</option>
                                        <option value="audi">Audi</option>
                                    </select>
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
