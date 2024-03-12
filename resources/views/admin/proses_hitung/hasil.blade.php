@extends('layouts.admin')
@section('container')
    <div class="title-admin">
        <h1>Data Hasil Perhitungan</h1>
    </div>
    @if (session()->has('Success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('Success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <table id="hasil" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Alternatif</th>
                    <th scope="col">Total</th>
                    <th scope="col">Rank</th>
                </tr>
            </thead>
        </table>
    </div>
    @include('admin.proses_hitung.tentukan_penerima')
    {{-- @foreach ($data as $data) --}}
    @if ($data_hitung)
    @else
        @if ($data_hasil)
            @if (auth()->user()->level === 'pimpinan')
                <div class="btn-show">
                    <button type="button" class="btn btn-outline-primary my-3" data-bs-toggle="modal"
                        data-bs-target="#ambil_data" id=""><img src="/icons/check.png" width="30px"
                            alt="" style="margin-right:3px">Tentukan Penerima
                    </button>
                </div>
            @endif
        @else
        @endif
    @endif
    {{-- @endforeach --}}
@endsection
@push('scripts')
    <script>
        $(function() {
            $(document).ready(function() {
                $('#hasil').DataTable({
                    processing: true,
                    serverSide: true,
                    info: true,
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
                            data: 'dataset.nim'
                        },
                        {
                            data: 'alternatif'
                        },
                        {
                            data: 'total_prefensi'
                        },
                        {
                            data: 'rank'
                        },
                    ],
                    order: [
                        [4, 'desc']
                    ]
                });
            });

        });
    </script>
@endpush
