@extends('layouts.admin')
@section('container')
    <div class="title-admin">
        <h1>Data Target Penerima</h1>
    </div>
    <div class="container">
        @if ($data_hitung)
        @else
            <form action="/reset_datahitung" method="post">
                @csrf
                <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
                    <div class="btn-resett">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure RESET DATA?')">
                            <img src="/icons/bin.png" width="30px" alt="" style="margin-right:2px">
                            Reset Data
                        </button>
                    </div>
                </div>
            </form>
        @endif
        <table id="datahitung" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Penghasilan Orang Tua</th>
                    <th scope="col">Tanggungan Orang Tua</th>
                    <th scope="col">Status Rumah</th>
                    <th scope="col">Kondisi Rumah</th>
                    <th scope="col">Jumlah Aset/Tabungan</th>
                    <th scope="col">Jumlah Kendaraan</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Beasiswa/Bantuan Lain</th>
                    <th scope="col">IPK
                </tr>
            </thead>
        </table>
        @if ($data_hitung)
        @else
            <div class="btn-fuzzy">
                <a href="/admin/convert" class="btn btn-primary mt-3"><img src="/icons/repost.png" width="20px"
                        alt="" style="margin-right:3px">Convert</a>
                <a href="/admin/hasil" class="btn btn-primary mt-3"><img src="/icons/result.png" width="30px"
                        alt="" style="margin-right:3px">Hasil</a>
            </div>
        @endif
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
                $('#datahitung').DataTable({
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
                            data: 'dataset.nama',
                            name: 'dataset.nama'
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
