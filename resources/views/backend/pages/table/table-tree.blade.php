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
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Avatar Sizing</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tree-table-1" class="table table-hover table-bordered iq-bg-white tree">
                                        <thead class="bg-white">
                                            <tr>
                                                <th>Demo 1</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1" data-parent="0" data-level="1">
                                                <td data-column="name">Data 1</td>
                                            </tr>
                                            <tr data-id="2" data-parent="1" data-level="2">
                                                <td data-column="name">Data 1.1</td>
                                            </tr>
                                            <tr data-id="3" data-parent="2" data-level="3">
                                                <td data-column="name">Data 1.2</td>
                                            </tr>
                                            <tr data-id="4" data-parent="3" data-level="4">
                                                <td data-column="name">Data 1.3</td>
                                            </tr>
                                            <tr data-id="6" data-parent="0" data-level="1">
                                                <td data-column="name">Data 2</td>
                                            </tr>
                                            <tr data-id="7" data-parent="6" data-level="2">
                                                <td data-column="name">Data 2.1</td>
                                            </tr>
                                            <tr data-id="8" data-parent="7" data-level="3">
                                                <td data-column="name">Data 2.2</td>
                                            </tr>
                                            <tr data-id="9" data-parent="8" data-level="4">
                                                <td data-column="name">Data 2.3</td>
                                            </tr>
                                            <tr data-id="10" data-parent="0" data-level="1">
                                                <td data-column="name">Data 3</td>
                                            </tr>
                                            <tr data-id="11" data-parent="10" data-level="2">
                                                <td data-column="name">Data 3.1</td>
                                            </tr>
                                            <tr data-id="12" data-parent="11" data-level="3">
                                                <td data-column="name">Data 3.2</td>
                                            </tr>
                                            <tr data-id="13" data-parent="12" data-level="4">
                                                <td data-column="name">Data 3.3</td>
                                            </tr>
                                            <tr data-id="14" data-parent="0" data-level="1">
                                                <td data-column="name">Data 4</td>
                                            </tr>
                                            <tr data-id="15" data-parent="14" data-level="2">
                                                <td data-column="name">Data 4.1</td>
                                            </tr>
                                            <tr data-id="16" data-parent="15" data-level="3">
                                                <td data-column="name">Data 4.2</td>
                                            </tr>
                                            <tr data-id="17" data-parent="16" data-level="4">
                                                <td data-column="name">Data 4.3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Table Treeview</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tree-table-2" class="table table-hover table-bordered iq-bg-dark  tree">
                                        <thead class="bg-dark">
                                            <tr>
                                                <th>Demo 2</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1" data-parent="0" data-level="1">
                                                <td data-column="name">Data 1</td>
                                            </tr>
                                            <tr data-id="2" data-parent="1" data-level="2">
                                                <td data-column="name">Data 1.1</td>
                                            </tr>
                                            <tr data-id="3" data-parent="2" data-level="3">
                                                <td data-column="name">Data 1.2</td>
                                            </tr>
                                            <tr data-id="4" data-parent="3" data-level="4">
                                                <td data-column="name">Data 1.3</td>
                                            </tr>
                                            <tr data-id="6" data-parent="0" data-level="1">
                                                <td data-column="name">Data 2</td>
                                            </tr>
                                            <tr data-id="7" data-parent="6" data-level="2">
                                                <td data-column="name">Data 2.1</td>
                                            </tr>
                                            <tr data-id="8" data-parent="7" data-level="3">
                                                <td data-column="name">Data 2.2</td>
                                            </tr>
                                            <tr data-id="9" data-parent="8" data-level="4">
                                                <td data-column="name">Data 2.3</td>
                                            </tr>
                                            <tr data-id="10" data-parent="0" data-level="1">
                                                <td data-column="name">Data 3</td>
                                            </tr>
                                            <tr data-id="11" data-parent="10" data-level="2">
                                                <td data-column="name">Data 3.1</td>
                                            </tr>
                                            <tr data-id="12" data-parent="11" data-level="3">
                                                <td data-column="name">Data 3.2</td>
                                            </tr>
                                            <tr data-id="13" data-parent="12" data-level="4">
                                                <td data-column="name">Data 3.3</td>
                                            </tr>
                                            <tr data-id="14" data-parent="0" data-level="1">
                                                <td data-column="name">Data 4</td>
                                            </tr>
                                            <tr data-id="15" data-parent="14" data-level="2">
                                                <td data-column="name">Data 4.1</td>
                                            </tr>
                                            <tr data-id="16" data-parent="15" data-level="3">
                                                <td data-column="name">Data 4.2</td>
                                            </tr>
                                            <tr data-id="17" data-parent="16" data-level="4">
                                                <td data-column="name">Data 4.3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Tree view</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tree-table-3" class="table table-hover table-bordered iq-bg-primary  tree">
                                        <thead class="bg-primary">
                                            <tr>
                                                <th>Demo 3</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1" data-parent="0" data-level="1">
                                                <td data-column="name">Data 1</td>
                                            </tr>
                                            <tr data-id="2" data-parent="1" data-level="2">
                                                <td data-column="name">Data 1.1</td>
                                            </tr>
                                            <tr data-id="3" data-parent="2" data-level="3">
                                                <td data-column="name">Data 1.2</td>
                                            </tr>
                                            <tr data-id="4" data-parent="3" data-level="4">
                                                <td data-column="name">Data 1.3</td>
                                            </tr>
                                            <tr data-id="6" data-parent="0" data-level="1">
                                                <td data-column="name">Data 2</td>
                                            </tr>
                                            <tr data-id="7" data-parent="6" data-level="2">
                                                <td data-column="name">Data 2.1</td>
                                            </tr>
                                            <tr data-id="8" data-parent="7" data-level="3">
                                                <td data-column="name">Data 2.2</td>
                                            </tr>
                                            <tr data-id="9" data-parent="8" data-level="4">
                                                <td data-column="name">Data 2.3</td>
                                            </tr>
                                            <tr data-id="10" data-parent="0" data-level="1">
                                                <td data-column="name">Data 3</td>
                                            </tr>
                                            <tr data-id="11" data-parent="10" data-level="2">
                                                <td data-column="name">Data 3.1</td>
                                            </tr>
                                            <tr data-id="12" data-parent="11" data-level="3">
                                                <td data-column="name">Data 3.2</td>
                                            </tr>
                                            <tr data-id="13" data-parent="12" data-level="4">
                                                <td data-column="name">Data 3.3</td>
                                            </tr>
                                            <tr data-id="14" data-parent="0" data-level="1">
                                                <td data-column="name">Data 4</td>
                                            </tr>
                                            <tr data-id="15" data-parent="14" data-level="2">
                                                <td data-column="name">Data 4.1</td>
                                            </tr>
                                            <tr data-id="16" data-parent="15" data-level="3">
                                                <td data-column="name">Data 4.2</td>
                                            </tr>
                                            <tr data-id="17" data-parent="16" data-level="4">
                                                <td data-column="name">Data 4.3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-block card-stretch card-height">
                            <div class="card-header d-flex justify-content-between">
                                <div class="header-title">
                                    <h4 class="card-title">Avatar Sizing</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tree-table-4" class="table table-hover table-bordered iq-bg-success  tree">
                                        <thead class="bg-success">
                                            <tr>
                                                <th>Demo 4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-id="1" data-parent="0" data-level="1">
                                                <td data-column="name">Data 1</td>
                                            </tr>
                                            <tr data-id="2" data-parent="1" data-level="2">
                                                <td data-column="name">Data 1.1</td>
                                            </tr>
                                            <tr data-id="3" data-parent="2" data-level="3">
                                                <td data-column="name">Data 1.2</td>
                                            </tr>
                                            <tr data-id="4" data-parent="3" data-level="4">
                                                <td data-column="name">Data 1.3</td>
                                            </tr>
                                            <tr data-id="6" data-parent="0" data-level="1">
                                                <td data-column="name">Data 2</td>
                                            </tr>
                                            <tr data-id="7" data-parent="6" data-level="2">
                                                <td data-column="name">Data 2.1</td>
                                            </tr>
                                            <tr data-id="8" data-parent="7" data-level="3">
                                                <td data-column="name">Data 2.2</td>
                                            </tr>
                                            <tr data-id="9" data-parent="8" data-level="4">
                                                <td data-column="name">Data 2.3</td>
                                            </tr>
                                            <tr data-id="10" data-parent="0" data-level="1">
                                                <td data-column="name">Data 3</td>
                                            </tr>
                                            <tr data-id="11" data-parent="10" data-level="2">
                                                <td data-column="name">Data 3.1</td>
                                            </tr>
                                            <tr data-id="12" data-parent="11" data-level="3">
                                                <td data-column="name">Data 3.2</td>
                                            </tr>
                                            <tr data-id="13" data-parent="12" data-level="4">
                                                <td data-column="name">Data 3.3</td>
                                            </tr>
                                            <tr data-id="14" data-parent="0" data-level="1">
                                                <td data-column="name">Data 4</td>
                                            </tr>
                                            <tr data-id="15" data-parent="14" data-level="2">
                                                <td data-column="name">Data 4.1</td>
                                            </tr>
                                            <tr data-id="16" data-parent="15" data-level="3">
                                                <td data-column="name">Data 4.2</td>
                                            </tr>
                                            <tr data-id="17" data-parent="16" data-level="4">
                                                <td data-column="name">Data 4.3</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
