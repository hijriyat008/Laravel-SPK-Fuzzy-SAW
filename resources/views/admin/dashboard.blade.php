@extends('layouts.admin')
@section('container')
    <div class="title-admin">
        <h1>Dashboard</h1>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card-dashboard">
                        <div class="card p-3 pt-2">
                            <div class="row">
                                <div class="col ">
                                    <div class="icons-dashboard d-flex">
                                        <img src="/icons/user (4).png" width="80px" alst=""
                                            style="margin-right: 8px">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Data Target</p>
                                        <h4 class="mb-0">{{ $data_target }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card-dashboard">
                        <div class="card p-3 pt-2">
                            <div class="row">
                                <div class="col ">
                                    <div class="icons-dashboard d-flex">
                                        <img src="/icons/registered (1).png" width="80px" alst=""
                                            style="margin-right: 8px">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Data Kriteria</p>
                                        <h4 class="mb-0">{{ $data_kriteria }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card-dashboard">
                        <div class="card p-3 pt-2">
                            <div class="row">
                                <div class="col ">
                                    <div class="icons-dashboard d-flex">
                                        <img src="/icons/registered.png" width="80px" alst=""
                                            style="margin-right: 8px">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Data Validasi</p>
                                        <h4 class="mb-0">{{ $data_validasi }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                    <div class="card-dashboard">
                        <div class="card p-3 pt-2">
                            <div class="row">
                                <div class="col ">
                                    <div class="icons-dashboard d-flex">
                                        <img src="/icons/user (5).png" width="80px" alst=""
                                            style="margin-right: 8px">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Data Penerima</p>
                                        <h4 class="mb-0">{{ $data_penerima }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
