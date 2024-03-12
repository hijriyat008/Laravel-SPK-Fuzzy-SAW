@extends('layouts.admin')
@section('container')
    @include('admin.dataset.show')
    @include('admin.datahitung.show')
    @include('admin.datahasil.show')
    <div class="title-admin">
        <h1>Data Penerima</h1>
    </div>
    <div class="container">
        <table id="datahasil" class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Action</th>
                    <th sc ope="col">Action</th>
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
                $('#datahasil').DataTable({
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
                            data: 'dataset.nim',
                            name: 'dataset.nim'
                        },
                        {
                            data: 'action_datahasil',
                            name: 'action_datahasil',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'action2_datahasil',
                            name: 'action2_datahasil',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });
            });

        });
    </script>
@endpush
