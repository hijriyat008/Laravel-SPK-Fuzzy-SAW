@extends('layouts.user')
@section('container')
    <div class="title-dashboard-user">
        <h1>السَّلاَمُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ</h1>
        <h3>Selamat Datang, di Sistem Penerimaan Laba Koperasi Syariah Amal Jariyah</h3>
    </div>
    <div class="content-dashboard-user">
        <div class="card">
            <h3> Hai, {{ auth()->user()->name }}</h3>
            @if ($data_penerima)
                @if (empty(auth()->user()->dataset->datahitung->dataset_id))
                    <h3 style="color:rgba(74, 74, 243, 0.911) "> Silahkan Daftarkan Diri Sebagai Calon Penerima dengan
                        Verifikasi
                        Data !!!</h3>
                @else
                    @if (auth()->user()->dataset->datahitung->status === 'Valid')
                        <h3 style="color: rgb(11, 219, 11)">Data Anda Sudah di Validasi, Silahkan Tunggu Hasil Penyeleksian
                        </h3>
                    @endif
                    @if (auth()->user()->dataset->datahitung->status === 'Proses')
                        @if (empty(auth()->user()->dataset->file))
                            <h3 style="color:rgba(74, 74, 243, 0.911) "> Silahkan Upload Berkas Data Anda
                                !!!</h3>
                        @else
                            <h3 style="color: rgb(248, 232, 0)">Terimakasih .. Data Anda Dalam Proses Validasi, Silahkan
                                Tunggu
                                Hasil Validasi
                            </h3>
                        @endif
                    @endif
                    @if (auth()->user()->dataset->datahitung->status === 'Not Valid')
                        <h3 style="color: rgb(255, 13, 13)">Mohon Maaf Data yang Anda Input Belum Valid, Silahkan Check
                            Kembali Data Anda!
                        </h3>
                    @endif
                    {{-- @if (auth()->user()->dataset->status === 'Penerima')
                        <h3 style="color: rgb(255, 13, 13)">Selamat Anda Lolos..
                        </h3>
                    @endif
                    @if (auth()->user()->dataset->status === 'Non Penerima')
                        <h3 style="color: rgb(255, 13, 13)">Mohon Maaf Anda Tidak Lolos
                        </h3>
                    @endif --}}
                @endif
            @else
                @if (auth()->user()->dataset->status === 'Non Penerima')
                    <h3 style="color:rgba(74, 74, 243, 0.911) ">Data Anda Sudah di Validasi, Silahkan Tunggu Hasil
                        Penyeleksian</h3>
                @else
                    <h3 style="color: rgb(11, 219, 11)">Selamat Anda Lolos.. Tunggu Seleksi Selanjutnyaa!
                    </h3>
                @endif
            @endif
        </div>
    </div>
@endsection
