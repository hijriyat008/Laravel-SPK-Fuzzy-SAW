@extends('layouts.admin')
@section('container')
    <div class="title-admin">
        <h1>Data Prefensi</h1>
    </div>
    <div class="container">
        <table id="prefensi" class="table table-striped">
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
                <a href="/admin/hasil" class="btn btn-primary mt-3"><img src="/icons/result.png" width="30px"
                        alt="" style="margin-right:3px">Hasil</a>
            </div>
        @endif
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $(document).ready(function() {
                $('#prefensi').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '',
                    columns: [{
                            data: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'dataset.nama',
                        },
                        {
                            data: 'alternatif'
                        },
                        {
                            data: 'p_c1',
                            name: 'p_c1'
                        },
                        {
                            data: 'p_c2',
                            name: 'p_c2'
                        },
                        {
                            data: 'p_c3',
                            name: 'p_c3'
                        },
                        {
                            data: 'p_c4',
                            name: 'p_c4'
                        },
                        {
                            data: 'p_c5',
                            name: 'p_c5'
                        },
                        {
                            data: 'p_c6',
                            name: 'p_c6'
                        },
                        {
                            data: 'p_c7',
                            name: 'p_c7'
                        },
                        {
                            data: 'p_c8',
                            name: 'p_c8'
                        },
                        {
                            data: 'p_c9',
                            name: 'p_c9'
                        }
                    ]
                });
            });

        });
    </script>
@endpush
