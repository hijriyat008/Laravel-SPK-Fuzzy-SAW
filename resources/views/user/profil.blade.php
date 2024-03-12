@extends('layouts.user')
@section('container')
    @if (empty(auth()->user()->dataset->user_id))
    @else
        <div class="title-user">
            <h1>Profil</h1>
        </div>
        <div class="content-user">
            <div class="card">
                <form action="/profil_user/{{ auth()->user()->dataset->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="row m-2">
                        <div class="col-6">
                            <div class="nama mb-4">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                    id="nama" name="nama" required autofocus
                                    value="{{ old('nama', auth()->user()->dataset->nama) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="nim mb-4">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                                    name="nim" onkeypress="return wajibAngka(event)" required
                                    value="{{ old('nim', auth()->user()->dataset->nim) }}">
                                @error('nim')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="jk my-3 ">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <div class="jk d-flex">
                                    <div class="form-check">
                                        @if (old('jk', auth()->user()->dataset->jk) == 'L')
                                            <input class="form-check-input" type="radio" name="jk" id="jk"
                                                value="L" checked required>
                                            <label class="form-check-label" for="jk">
                                                Laki-laki
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio" name="jk" id="jk"
                                                value="L" required>
                                            <label class="form-check-label" for="jk">
                                                Laki-laki
                                            </label>
                                        @endif
                                    </div>
                                    <div class="form-check mx-4">
                                        @if (old('jk', auth()->user()->dataset->jk) == 'P')
                                            <input class="form-check-input" type="radio" name="jk" id="jk"
                                                value="P" checked required>
                                            <label class="form-check-label" for="jk">
                                                Perempuan
                                            </label>
                                        @else
                                            <input class="form-check-input" type="radio" name="jk" id="jk"
                                                value="P" required>
                                            <label class="form-check-label" for="jk">
                                                Perempuan
                                            </label>
                                        @endif
                                    </div>
                                    @error('jk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="tempatlahir mb-4">
                                <label for="tempat_lahir" class="form-label ">Tempat
                                    Lahir</label>
                                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                    id="tempat_lahir" name="tempat_lahir" required
                                    value="{{ old('tempat_lahir', auth()->user()->dataset->tempat_lahir) }}">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="tgllahir mb-4">
                                <label for="tgl_lahir" class="form-label">Tanggal
                                    lahir</label>
                                <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                    id="tgl_lahir" name="tgl_lahir" required
                                    value="{{ old('tgl_lahir', auth()->user()->dataset->tgl_lahir) }}">
                                @error('tgl_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="alamat mb-4">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    id="alamat" name="alamat" required
                                    value="{{ old('alamat', auth()->user()->dataset->alamat) }}">
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="email mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" required
                                    value="{{ old('email', auth()->user()->dataset->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="no_hp mb-4">
                                <label for="no_hp" class="form-label">No HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                    id="no_hp" name="no_hp" required
                                    value="{{ old('no_hp', auth()->user()->dataset->no_hp) }}"
                                    onkeypress="return wajibAngka(event)">
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="btn-update">
                            <div class="col-12 mt-3 mb-3 ">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif

@endsection
