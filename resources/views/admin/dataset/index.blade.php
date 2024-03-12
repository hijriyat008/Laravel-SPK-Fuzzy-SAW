@extends('layouts.admin')
@section('container')
    @include('admin.dataset.show')
    @include('admin.datahitung.show')
    @include('admin.dataset.add')
    @include('admin.dataset.edit')
    @include('admin.excel.show')
    <div class="title-admin">
        <h1>Data Target Penerima </h1>
    </div>
    @if (session()->has('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Data Failed..Something is wrong with this field!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="btn-action d-flex">
        <div class="btn-excel d-flex mb-4">
            <div class="d-grid gap-2 d-md-flex">
                <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#export_data">
                    <img src="/icons/export.png" width="30px" alt="" style="margin-right: 3px">
                    Export
                </button>
            </div>
            <div class="d-grid gap-2 d-md-flex">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#import_data">
                    <img src="/icons/import.png" width="30px" alt="" style="margin-right: 3px">
                    Import
                </button>
            </div>
        </div>
        <form action="/reset_datahitung" method="post">
            @csrf
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                <div class="btn-reset">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure RESET DATA?')">
                        <img src="/icons/bin.png" width="30px" alt="" style="margin-right:2px">
                        Reset Data
                    </button>
                </div>
            </div>
        </form>
    </div>
    {{-- <button type="button" class="btn btn-outline-primary mb-2" data-bs-toggle="modal" data-bs-target="#add_dataset"
        id="add_data">Add
    </button> --}}
    <div class="container">
        <table id="dataset" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Email</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                    <th scope="col">Data Kriteria</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
@push('scripts')
    @include('admin.dataset.script')
@endpush
