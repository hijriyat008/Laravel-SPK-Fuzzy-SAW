@extends('layouts.user')
@section('container')
    @if (empty(auth()->user()->dataset->user_id))
    @else
        @if (empty(auth()->user()->dataset->datahitung->dataset_id))
            <div class="title-user">
                <h1>Verifikasi Data</h1>
            </div>
            <div class="content-user">
                <div class="card">
                    <form action="/verif_datahitung" method="post">
                        @csrf
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="penghasilan_orangtua mb-2">
                                    <label for="penghasilan_orangtua" class="form-label">Penghasilan
                                        Orangtua</label>
                                    <input type="text"
                                        class="form-control @error('penghasilan_orangtua') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="penghasilan_orangtua"
                                        name="penghasilan_orangtua" value="{{ old('penghasilan_orangtua') }}" required>
                                    @error('penghasilan_orangtua')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="tanggungan_orangtua mb-2">
                                    <label for="tanggungan_orangtua" class="form-label">Tanggungan
                                        Orangtua</label>
                                    <input type="text"
                                        class="form-control @error('tanggungan_orangtua') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="tanggungan_orangtua"
                                        name="tanggungan_orangtua" value="{{ old('tanggungan_orangtua') }}" required>
                                    @error('tanggungan_orangtua')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="status_rumah mb-2">
                                    <label for="status_rumah" class="form-label">Status Rumah</label>
                                    <select id="status_rumah" name="status_rumah"
                                        class="form-select @error('status_rumah') is-invalid @enderror"
                                        aria-label="Default select example" required>
                                        <option></option>
                                        @if (old('status_rumah') == 'Menumpang')
                                            <option value="Menumpang" selected>Menumpang</option>
                                        @else
                                            <option value="Menumpang">Menumpang</option>
                                        @endif
                                        @if (old('status_rumah') == 'Sewa')
                                            <option value="Sewa" selected>Sewa</option>
                                        @else
                                            <option value="Sewa">Sewa</option>
                                        @endif
                                        @if (old('status_rumah') == 'Warisan')
                                            <option value="Warisan" selected>Warisan</option>
                                        @else
                                            <option value="Warisan">Warisan</option>
                                        @endif
                                        @if (old('status_rumah') == 'Milik Sendiri')
                                            <option value="Milik Sendiri" selected>Milik Sendiri</option>
                                        @else
                                            <option value="Milik Sendiri">Milik Sendiri</option>
                                        @endif
                                    </select>
                                    @error('status_rumah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="kondisi_rumah mb-2">
                                    <label for="kondisi_rumah" class="form-label">Kondisi Rumah</label>
                                    <select id="kondisi_rumah" name="kondisi_rumah"
                                        class="form-select @error('kondisi_rumah') is-invalid @enderror"
                                        aria-label="Default select example" required>
                                        <option></option>
                                        @if (old('kondisi_rumah') == 'Kayu')
                                            <option value="Kayu" selected>Kayu</option>
                                        @else
                                            <option value="Kayu">Kayu</option>
                                        @endif
                                        @if (old('kondisi_rumah') == 'Semi Permanen')
                                            <option value="Semi Permanen" selected>Semi Permanen</option>
                                        @else
                                            <option value="Semi Permanen">Semi Permanen</option>
                                        @endif
                                        @if (old('kondisi_rumah') == 'Permanen (Non Plaster)')
                                            <option value="Permanen (Non Plaster)" selected>Permanen (Non Plaster)
                                            </option>
                                        @else
                                            <option value="Permanen (Non Plaster)">Permanen (Non Plaster)</option>
                                        @endif
                                        @if (old('kondisi_rumah') == 'Permanen (Plaster)')
                                            <option value="Permanen (Plaster)" selected>Permanen (Plaster)</option>
                                        @else
                                            <option value="Permanen (Plaster)">Permanen (Plaster)</option>
                                        @endif
                                    </select>
                                    @error('kondisi_rumah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">

                                <div class="aset mb-2">
                                    <label for="aset" class="form-label">Kepemilikan Aset/Tabungan</label>
                                    <input type="text" class="form-control @error('aset') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="aset" name="aset"
                                        value="{{ old('aset') }}" required>
                                    @error('aset')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="kendaraan mb-2">
                                    <label for="kendaraan" class="form-label">Jumlah Kendaraan</label>
                                    <input type="text" class="form-control @error('kendaraan') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="kendaraan" name="kendaraan"
                                        value="{{ old('kendaraan') }}" required>
                                    @error('kendaraan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="usia mb-2">
                                    <label for="usia" class="form-label">Usia</label>
                                    <input type="text" class="form-control @error('usia') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="usia" name="usia"
                                        value="{{ old('usia') }}" required>
                                    @error('usia')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="bantuan mb-2">
                                    <label for="bantuan" class="form-label">Jumlah Beasiswa/Bantuan Lain</label>
                                    <input type="text" class="form-control @error('bantuan') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="bantuan" name="bantuan"
                                        value="{{ old('bantuan') }}" required>
                                    @error('bantuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="ipk mb-2">
                                    <label for="ipk" class="form-label">IPK</label>
                                    <input type="text" class="form-control @error('ipk') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="ipk" name="ipk"
                                        value="{{ old('ipk') }}" required>
                                    @error('ipk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                <h1>Verifikasi Data</h1>
            </div>
            <div class="content-user">
                <div class="card">
                    @if (auth()->user()->dataset->datahitung->status == 'Valid')
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="penghasilan_orangtua mb-2">
                                    <label for="penghasilan_orangtua" class="form-label">Penghasilan
                                        Orangtua</label>
                                    <input type="text"
                                        class="form-control @error('penghasilan_orangtua') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="penghasilan_orangtua"
                                        name="penghasilan_orangtua"
                                        value="{{ old('penghasilan_orangtua', auth()->user()->dataset->datahitung->penghasilan_orangtua) }}"
                                        required disabled>
                                    @error('penghasilan_orangtua')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="tanggungan_orangtua mb-2">
                                    <label for="tanggungan_orangtua" class="form-label">Tanggungan
                                        Orangtua</label>
                                    <input type="text"
                                        class="form-control @error('tanggungan_orangtua') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="tanggungan_orangtua"
                                        name="tanggungan_orangtua"
                                        value="{{ old('tanggungan_orangtua', auth()->user()->dataset->datahitung->tanggungan_orangtua) }}"
                                        required disabled>
                                    @error('tanggungan_orangtua')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="status_rumah mb-2">
                                    <label for="status_rumah" class="form-label">Status Rumah</label>
                                    <select id="status_rumah" name="status_rumah"
                                        class="form-select @error('status_rumah') is-invalid @enderror"
                                        aria-label="Default select example" required disabled>
                                        <option></option>
                                        @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Menumpang')
                                            <option value="Menumpang" selected>Menumpang</option>
                                        @else
                                            <option value="Menumpang">Menumpang</option>
                                        @endif
                                        @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Sewa')
                                            <option value="Sewa" selected>Sewa</option>
                                        @else
                                            <option value="Sewa">Sewa</option>
                                        @endif
                                        @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Warisan')
                                            <option value="Warisan" selected>Warisan</option>
                                        @else
                                            <option value="Warisan">Warisan</option>
                                        @endif
                                        @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Milik Sendiri')
                                            <option value="Milik Sendiri" selected>Milik Sendiri</option>
                                        @else
                                            <option value="Milik Sendiri">Milik Sendiri</option>
                                        @endif
                                    </select>
                                    @error('status_rumah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="kondisi_rumah mb-2">
                                    <label for="kondisi_rumah" class="form-label">Kondisi Rumah</label>
                                    <select id="kondisi_rumah" name="kondisi_rumah"
                                        class="form-select @error('kondisi_rumah') is-invalid @enderror"
                                        aria-label="Default select example" required disabled>
                                        <option></option>
                                        @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Kayu')
                                            <option value="Kayu" selected>Kayu</option>
                                        @else
                                            <option value="Kayu">Kayu</option>
                                        @endif
                                        @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Semi Permanen')
                                            <option value="Semi Permanen" selected>Semi Permanen</option>
                                        @else
                                            <option value="Semi Permanen">Semi Permanen</option>
                                        @endif
                                        @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Permanen (Non Plaster)')
                                            <option value="Permanen (Non Plaster)" selected>Permanen (Non Plaster)
                                            </option>
                                        @else
                                            <option value="Permanen (Non Plaster)">Permanen (Non Plaster)</option>
                                        @endif
                                        @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Permanen (Plaster)')
                                            <option value="Permanen (Plaster)" selected>Permanen (Plaster)</option>
                                        @else
                                            <option value="Permanen (Plaster)">Permanen (Plaster)</option>
                                        @endif
                                    </select>
                                    @error('kondisi_rumah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="aset mb-2">
                                    <label for="aset" class="form-label">Kepemilikan Aset/Tabungan</label>
                                    <input type="text" class="form-control @error('aset') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="aset" name="aset"
                                        value="{{ old('aset', auth()->user()->dataset->datahitung->aset) }}" required
                                        disabled>
                                    @error('aset')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="kendaraan mb-2">
                                    <label for="kendaraan" class="form-label">Jumlah Kendaraan</label>
                                    <input type="text" class="form-control @error('kendaraan') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="kendaraan" name="kendaraan"
                                        value="{{ old('kendaraan', auth()->user()->dataset->datahitung->kendaraan) }}"
                                        required disabled>
                                    @error('kendaraan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="usia mb-2">
                                    <label for="usia" class="form-label">Usia</label>
                                    <input type="text" class="form-control @error('usia') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="usia" name="usia"
                                        value="{{ old('usia', auth()->user()->dataset->datahitung->usia) }}" required
                                        disabled>
                                    @error('usia')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="bantuan mb-2">
                                    <label for="bantuan" class="form-label">Jumlah Beasiswa/Bantuan Lain</label>
                                    <input type="text" class="form-control @error('bantuan') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="bantuan" name="bantuan"
                                        value="{{ old('bantuan', auth()->user()->dataset->datahitung->bantuan) }}"
                                        required disabled>
                                    @error('bantuan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="ipk mb-2">
                                    <label for="ipk" class="form-label">IPK</label>
                                    <input type="text" class="form-control @error('ipk') is-invalid @enderror"
                                        onkeypress="return wajibAngka(event)" id="ipk" name="ipk"
                                        value="{{ old('ipk', auth()->user()->dataset->datahitung->ipk) }}" required
                                        disabled>
                                    @error('ipk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 my-3 ">
                                <div class="btn-update">
                                    <button type="submit" class="btn btn-warning" disabled>Update</button>
                                </div>
                            </div>
                        </div>
                    @else
                        <form action="/verif_datahitung/{{ auth()->user()->dataset->datahitung->id }}" method="post">
                            @method('put')
                            @csrf
                            <div class="row m-2">
                                <div class="col-6">
                                    <div class="penghasilan_orangtua mb-2">
                                        <label for="penghasilan_orangtua" class="form-label">Penghasilan
                                            Orangtua</label>
                                        <input type="text"
                                            class="form-control @error('penghasilan_orangtua') is-invalid @enderror"
                                            onkeypress="return wajibAngka(event)" id="penghasilan_orangtua"
                                            name="penghasilan_orangtua"
                                            value="{{ old('penghasilan_orangtua', auth()->user()->dataset->datahitung->penghasilan_orangtua) }}"
                                            required>
                                        @error('penghasilan_orangtua')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="tanggungan_orangtua mb-2">
                                        <label for="tanggungan_orangtua" class="form-label">Tanggungan
                                            Orangtua</label>
                                        <input type="text"
                                            class="form-control @error('tanggungan_orangtua') is-invalid @enderror"
                                            onkeypress="return wajibAngka(event)" id="tanggungan_orangtua"
                                            name="tanggungan_orangtua"
                                            value="{{ old('tanggungan_orangtua', auth()->user()->dataset->datahitung->tanggungan_orangtua) }}"
                                            required>
                                        @error('tanggungan_orangtua')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="status_rumah mb-2">
                                        <label for="status_rumah" class="form-label">Status Rumah</label>
                                        <select id="status_rumah" name="status_rumah"
                                            class="form-select @error('status_rumah') is-invalid @enderror"
                                            aria-label="Default select example" required>
                                            <option></option>
                                            @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Menumpang')
                                                <option value="Menumpang" selected>Menumpang</option>
                                            @else
                                                <option value="Menumpang">Menumpang</option>
                                            @endif
                                            @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Sewa')
                                                <option value="Sewa" selected>Sewa</option>
                                            @else
                                                <option value="Sewa">Sewa</option>
                                            @endif
                                            @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Warisan')
                                                <option value="Warisan" selected>Warisan</option>
                                            @else
                                                <option value="Warisan">Warisan</option>
                                            @endif
                                            @if (old('status_rumah', auth()->user()->dataset->datahitung->status_rumah) == 'Milik Sendiri')
                                                <option value="Milik Sendiri" selected>Milik Sendiri</option>
                                            @else
                                                <option value="Milik Sendiri">Milik Sendiri</option>
                                            @endif
                                        </select>
                                        @error('status_rumah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="kondisi_rumah mb-2">
                                        <label for="kondisi_rumah" class="form-label">Kondisi Rumah</label>
                                        <select id="kondisi_rumah" name="kondisi_rumah"
                                            class="form-select @error('kondisi_rumah') is-invalid @enderror"
                                            aria-label="Default select example" required>
                                            <option></option>
                                            @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Kayu')
                                                <option value="Kayu" selected>Kayu</option>
                                            @else
                                                <option value="Kayu">Kayu</option>
                                            @endif
                                            @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Semi Permanen')
                                                <option value="Semi Permanen" selected>Semi Permanen</option>
                                            @else
                                                <option value="Semi Permanen">Semi Permanen</option>
                                            @endif
                                            @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Permanen (Non Plaster)')
                                                <option value="Permanen (Non Plaster)" selected>Permanen (Non Plaster)
                                                </option>
                                            @else
                                                <option value="Permanen (Non Plaster)">Permanen (Non Plaster)</option>
                                            @endif
                                            @if (old('kondisi_rumah', auth()->user()->dataset->datahitung->kondisi_rumah) == 'Permanen (Plaster)')
                                                <option value="Permanen (Plaster)" selected>Permanen (Plaster)</option>
                                            @else
                                                <option value="Permanen (Plaster)">Permanen (Plaster)</option>
                                            @endif
                                        </select>
                                        @error('kondisi_rumah')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="aset mb-2">
                                        <label for="aset" class="form-label">Kepemilikan Aset/Tabungan</label>
                                        <input type="text" class="form-control @error('aset') is-invalid @enderror"
                                            onkeypress="return wajibAngka(event)" id="aset" name="aset"
                                            value="{{ old('aset', auth()->user()->dataset->datahitung->aset) }}" required>
                                        @error('aset')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="kendaraan mb-2">
                                        <label for="kendaraan" class="form-label">Jumlah Kendaraan</label>
                                        <input type="text"
                                            class="form-control @error('kendaraan') is-invalid @enderror"
                                            onkeypress="return wajibAngka(event)" id="kendaraan" name="kendaraan"
                                            value="{{ old('kendaraan', auth()->user()->dataset->datahitung->kendaraan) }}"
                                            required>
                                        @error('kendaraan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="usia mb-2">
                                        <label for="usia" class="form-label">Usia</label>
                                        <input type="text" class="form-control @error('usia') is-invalid @enderror"
                                            onkeypress="return wajibAngka(event)" id="usia" name="usia"
                                            value="{{ old('usia', auth()->user()->dataset->datahitung->usia) }}" required>
                                        @error('usia')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="bantuan mb-2">
                                        <label for="bantuan" class="form-label">Jumlah Beasiswa/Bantuan Lain</label>
                                        <input type="text" class="form-control @error('bantuan') is-invalid @enderror"
                                            onkeypress="return wajibAngka(event)" id="bantuan" name="bantuan"
                                            value="{{ old('bantuan', auth()->user()->dataset->datahitung->bantuan) }}"
                                            required>
                                        @error('bantuan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="ipk mb-2">
                                        <label for="ipk" class="form-label">IPK</label>
                                        <input type="text" class="form-control @error('ipk') is-invalid @enderror"
                                            onkeypress="return wajibAngka(event)" id="ipk" name="ipk"
                                            value="{{ old('ipk', auth()->user()->dataset->datahitung->ipk) }}" required>
                                        @error('ipk')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 my-3 ">
                                    <div class="btn-update">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    @endif
                </div>
            </div>
        @endif
    @endif
@endsection
