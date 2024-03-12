@extends('layouts.admin')
@section('container')
    <div class="title-admin">
        <h1>Data Normalisasi</h1>
    </div>
    <div class="container">
        <table id="normalisasi" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alternatif</th>
                    <th scope="col">C1</th>
                    <th scope="col">C2</th>
                    <th scope="col">C3</th>
                    <th scope="col">C4</th>
                    <th scope="col">C5</th>
                    <th scope="col">C6</th>
                    <th scope="col">C7</th>
                    <th scope="col">C8</th>
                    <th scope="col">C9</th>
                </tr>
            </thead>
        </table>
        @if ($data_hitung)
        @else
            <div class="btn-fuzzy">
                <a href="/admin/prefensi" class="btn btn-primary mt-3"><img src="/icons/repost.png" width="20px"
                        alt="" style="margin-right:3px">Prefensi</a>
            </div>
        @endif
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $(document).ready(function() {
                $('#normalisasi').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '',
                    columns: [{
                            data: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'dataset.nama'
                        },
                        {
                            data: 'alternatif'
                        },
                        {
                            data: 'n_c1',
                            name: 'n_c1'
                        },
                        {
                            data: 'n_c2',
                            name: 'n_c2'
                        },
                        {
                            data: 'n_c3',
                            name: 'n_c3'
                        },
                        {
                            data: 'n_c4',
                            name: 'n_c4'
                        },
                        {
                            data: 'n_c5',
                            name: 'n_c5'
                        },
                        {
                            data: 'n_c6',
                            name: 'n_c6'
                        },
                        {
                            data: 'n_c7',
                            name: 'n_c7'
                        },
                        {
                            data: 'n_c8',
                            name: 'n_c8'
                        },
                        {
                            data: 'n_c9',
                            name: 'n_c9'
                        }
                    ]
                });
            });

        });
    </script>
@endpush
