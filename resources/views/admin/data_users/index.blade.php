@extends('layouts.admin')
@section('container')
    @include('admin.excel.data_users')
    <div class="title-admin">
        <h1>Data Users</h1>
    </div>
    @if (session()->has('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="d-grid gap-2 d-md-flex">
        <div class="btn-excel">
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#import_data_user">
                <img src="/icons/import.png" width="30px" alt="" style="margin-right: 3px">
                Import
            </button>
        </div>
    </div>
    <div class="container">
        <table id="user" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    {{-- <th scope="col">NIM</th> --}}
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            $(document).ready(function() {
                $('#user').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '',
                    columns: [{
                            data: 'DT_RowIndex',
                            name: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        // {
                        //     data: 'dataset.nim',
                        //     name: 'dataset.nim'
                        // },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'username',
                            name: 'username'
                        }
                    ]
                });
            });

        });
    </script>
@endpush
