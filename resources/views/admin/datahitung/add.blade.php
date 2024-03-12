<div class="modal fade" id="add_datahitung{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">From Tambah Data Target</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="/admin/datahitungs/{{ $d->id }}" method="post">
                        @csrf
                        <div class="row m-2">
                            <div class="col-6">
                                {{-- <div class="dataset_id">
                                    <input type="hidden" name="dataset_id" value="9">
                                    <input type="hidden" name="status" value="Belum Verifikasi">
                                </div> --}}
                                <div class="penghasilan_orangtua mb-2">
                                    <label for="penghasilan_orangtua" class="form-label">Penghasilan Orangtua</label>
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
                                    <label for="tanggungan_orangtua" class="form-label">Tanggungan Orangtua</label>
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
                            <div class="col-12 mt-3 mb-3 ">
                                <div class="btn-save">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="btn-closes">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
