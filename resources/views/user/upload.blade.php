@extends('layouts.user')
@section('container')
    @if (empty(auth()->user()->dataset->user_id))
    @else
        @if (empty(auth()->user()->dataset->file->dataset_id))
            <div class="title-user">
                <h1>Upload Berkas</h1>
            </div>
            <div class="content-user">
                <div class="card">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="card mb-2">
                                    <label for="penghasilan_orangtua" class="form-label">Penghasilan
                                        Orangtua</label>
                                    <input type="file" name="file1" id="file1"
                                        class="form-control @error('file1') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                                <div class="card mb-2">
                                    <label for="tanggungan_orangtua" class="form-label">Tanggungan
                                        Orangtua</label>
                                    <input type="file" name="file2" id="file2"
                                        class="form-control @error('file2') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                        <div class="btn-action d-flex">
                                            <div class="btn-save">
                                                <button type="submit" class="btn btn-primary"
                                                    onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card mb-2">
                                    <label for="status_rumah" class="form-label">Status Rumah</label>
                                    <input type="file" name="file3" id="file3"
                                        class="form-control @error('file3') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file3')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                                <div class="card mb-2">
                                    <label for="kondisi_rumah" class="form-label">Kondisi Rumah</label>
                                    <input type="file" name="file4" id="file4"
                                        class="form-control @error('file4') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file4')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror>
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-2">
                                    <label for="aset" class="form-label">Kepemilikan Aset/Tabungan</label>
                                    <input type="file" name="file5" id="file5"
                                        class="form-control @error('file5') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file5')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}

                                </div>
                                <div class="card mb-2">
                                    <label for="kendaraan" class="form-label">Jumlah Kendaraan</label>
                                    <input type="file" name="file6" id="file6"
                                        class="form-control @error('file6') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file6')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}

                                </div>
                                <div class="card mb-2">
                                    <label for="usia" class="form-label">Usia</label>
                                    <input type="file" name="file7" id="file7"
                                        class="form-control @error('file7') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file7')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}

                                </div>
                                <div class="card mb-2">
                                    <label for="bantuan" class="form-label">Jumlah Beasiswa/Bantuan Lain</label>
                                    <input type="file" name="file8" id="file8"
                                        class="form-control @error('file8') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file8')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}

                                </div>
                                <div class="card mb-2">
                                    <label for="ipk" class="form-label">IPK</label>
                                    <input type="file" name="file9" id="file9"
                                        class="form-control @error('file9') is-invalid @enderror" required>
                                    <p class="mt-2" style="color: red">*maksimal 200kb</p>
                                    @error('file9')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- <div class="modal-footer">
                                    <div class="btn-action d-flex">
                                        <div class="btn-save">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="return confirm('Are You sure Import Data?')">Unggah</button>
                                        </div>
                                    </div>
                                </div> --}}
                                </div>
                            </div>
                            <div class="col-12 my-3 ">
                                <div class="btn-save">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @else
            <div class="title-user">
                <h1>Edit Berkas</h1>
                <div class="file">
                    <div class="cards">
                        @if (auth()->user()->dataset->datahitung->status == 'Valid')
                            <table cellpadding="10">
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">KTP</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file1 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Kartu Mahasiswa</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file2 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Kartu Keluarga</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file3 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Keterangan Penghasilan Orangtua</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file4 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Foto Rumah </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file5 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Keterangan Tidak Mampu </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file6 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Keterangan Tidak Menerima Beasiswa /
                                                Transkip
                                                Menerima Beasiswa </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file7 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Rekomendasi Dari Tokoh Setempat </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file8 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Transkip Nilai </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file9 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                            </table>
                        @else
                            @include('user.editfile')
                            <table cellpadding="10">
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">KTP</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file1 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Kartu Mahasiswa</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file2 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Kartu Keluarga</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file3 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Keterangan Penghasilan Orangtua</label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file4 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Foto Rumah </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file5 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Keterangan Tidak Mampu </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file6 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Keterangan Tidak Menerima Beasiswa /
                                                Transkip
                                                Menerima Beasiswa </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file7 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Surat Rekomendasi Dari Tokoh Setempat </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file8 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="file">
                                        <td> <label for="penghasilan_orangtua" class="form-label"
                                                style="font-weight: bold">Transkip Nilai </label>
                                        </td>
                                        <td> <button type="button" class="btn btn-success mx-3" data-bs-toggle="modal"
                                                data-bs-target="#editfile">
                                                Edit
                                            </button>
                                        </td>
                                        <td>
                                            <a href="/storage/{{ auth()->user()->dataset->file->file9 }}" target="_blank"
                                                class="btn btn-primary">
                                                Show
                                            </a>
                                        </td>
                                    </div>
                                </tr>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    @endif
@endsection
