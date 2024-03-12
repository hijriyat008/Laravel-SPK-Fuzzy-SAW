<div class="modal fade" id="add_dataset" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">From Tambah Data Target</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="/admin/datasets" method="post">
                        @csrf
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="nama mb-2">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" required autofocus value="{{ old('nama') }}">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="nim mb-2">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" class="form-control @error('nim') is-invalid @enderror"
                                        id="nim" name="nim" onkeypress="return wajibAngka(event)" required
                                        value="{{ old('nim') }}">
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
                                            @if (old('jk') == 'L')
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="L" checked required>
                                                <label class="form-check-label" for="jk">
                                                    Laki-laki
                                                </label>
                                            @else
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="L" required>
                                                <label class="form-check-label" for="jk">
                                                    Laki-laki
                                                </label>
                                            @endif
                                        </div>
                                        <div class="form-check mx-4">
                                            @if (old('jk') == 'P')
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="P" checked required>
                                                <label class="form-check-label" for="jk">
                                                    Perempuan
                                                </label>
                                            @else
                                                <input class="form-check-input" type="radio" name="jk"
                                                    id="jk" value="P" required>
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
                                <div class="tempatlahir mb-2">
                                    <label for="tempat_lahir" class="form-label ">Tempat
                                        Lahir</label>
                                    <input type="text"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        id="tempat_lahir" name="tempat_lahir" required
                                        value="{{ old('tempat_lahir') }}">
                                    @error('tempat_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="tgllahir mb-2">
                                    <label for="tgl_lahir" class="form-label">Tanggal
                                        lahir</label>
                                    <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                        id="tgl_lahir" name="tgl_lahir" required value="{{ old('tgl_lahir') }}">
                                    @error('tgl_lahir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="alamat mb-2">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat" name="alamat" required value="{{ old('alamat') }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="email mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" required value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="nohp mb-2">
                                    <label for="no_hp" class="form-label">No HP</label>
                                    <input type="text" class="form-control @error('no_hp') is-invalid @enderror"
                                        id="no_hp" name="no_hp" required value="{{ old('no_hp') }}"
                                        onkeypress="return wajibAngka(event)">
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                {{-- <div class="state mb-2">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="file mb-2">
                                    <label for="inputZip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div> --}}
                            </div>
                            <div class="col-12 my-3 ">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
