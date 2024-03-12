@extends('layouts.admin')
@section('container')
    <div class="title-admin">
        <h1>Data Convert</h1>
    </div>
    <div class="container">
        <table id="convert" class="table table-striped">
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
                <a href="/admin/normalisasi" class="btn btn-primary mt-3"><img src="/icons/repost.png" width="20px"
                        alt="" style="margin-right:3px">Normalisasi</a>
            </div>
        @endif
    </div>
@endsection
@push('scripts')
    <script>
        $(function() {
            $(document).ready(function() {
                $('#convert').DataTable({
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
                            data: 'c1',
                            name: 'c1'
                        },
                        {
                            data: 'c2',
                            name: 'c2'
                        },
                        {
                            data: 'c3',
                            name: 'c3'
                        },
                        {
                            data: 'c4',
                            name: 'c4'
                        },
                        {
                            data: 'c5',
                            name: 'c5'
                        },
                        {
                            data: 'c6',
                            name: 'c6'
                        },
                        {
                            data: 'c7',
                            name: 'c7'
                        },
                        {
                            data: 'c8',
                            name: 'c8'
                        },
                        {
                            data: 'c9',
                            name: 'c9'
                        }
                    ]
                });
            });

        });
    </script>
@endpush
