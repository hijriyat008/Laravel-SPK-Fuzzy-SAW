@extends('layouts.admin')
@section('container')
    @include('admin.kriteria.add')
    @include('admin.kriteria.edit')
    <div class="title-admin">
        <h1>Kriteria</h1>
    </div>
    <div class="btn-add mb-3">
        <input type="button" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal" data-bs-target="#add_kriteria"
            id="add_kriteria" value="Add">
    </div>
    <div class="container">
        <table id="kriteria" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Bobot</th>
                    <th scope="col">Atribut</th>
                    <th scope="col">Action</th>
            </thead>
        </table>
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $(document).ready(function() {
                $('#kriteria').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '',
                    columns: [{
                            data: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'kode'
                        },
                        {
                            data: 'nama_kriteria'
                        },
                        {
                            data: 'bobot'
                        },
                        {
                            data: 'atribut'
                        },
                        {
                            data: 'action'
                        }

                    ]
                });
            });

        });
    </script>
@endpush
