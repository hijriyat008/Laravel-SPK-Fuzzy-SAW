@foreach ($dataset as $d)
    @if (empty($d->datahitung->dataset_id))
        @include('admin.datahitung.add')
    @else
        @include('admin.datahitung.edit')
        <div class="modal fade" id="show_datahitung{{ $d->nim }}" tabindex="-1" data-bs-backdrop="static"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Kriteria</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-grid gap-2 d-md-block mb-3">
                            @if (auth()->user()->level == 'admin')
                                <div class="btn-action d-flex">
                                    <div class="btn-edit">
                                        <button class="btn btn-icon btn-outline-success" data-bs-toggle="modal"
                                            data-bs-target="#edit_datahitung{{ $d->id }}" id="edit_data">
                                            Edit
                                        </button>
                                    </div>
                                    <form action="/admin/datahitungs/{{ $d->datahitung->id }}" method="post"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-delete">
                                            <button class="btn btn-icon btn-outline-danger"
                                                onclick="return confirm('Are you sure Delete Data?')" id="delete_data">
                                                Delete
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            @else
                            @endif

                        </div>
                        <div class="card">
                            <div class="row">
                                <div class="col-4">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th>Nama</th>
                                            <td>: {{ $d->nama }} </td>
                                        </tr>
                                        <tr>
                                            <th>NIM</th>
                                            <td>: {{ $d->nim }} </td>
                                        </tr>
                                        <tr>
                                            <th>Status Data</th>
                                            <th>: @if ($d->datahitung->status == 'Proses')
                                                    Proses Validasi
                                                @else
                                                    @if ($d->datahitung->status == 'Not Valid')
                                                        Belum Valid
                                                    @else
                                                        Sudah Validasi
                                                    @endif
                                                @endif
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-4">
                                    <table class="table table-borderless">
                                        <tr>
                                            <th>Penghasilan Orangtua</th>
                                            <td>:
                                                Rp{{ number_format($d->datahitung->penghasilan_orangtua, 0, ',', '.') }}/bln
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggungan Orangtua</th>
                                            <td>: {{ $d->datahitung->tanggungan_orangtua }} Orang </td>
                                        </tr>
                                        <tr>
                                            <th>Status Rumah</th>
                                            <td>: {{ $d->datahitung->status_rumah }} </td>
                                        </tr>
                                        <tr>
                                            <th>Kondisi Rumah</th>
                                            <td>: {{ $d->datahitung->kondisi_rumah }} </td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Aset/Tabungan</th>
                                            <td>:Rp{{ number_format($d->datahitung->aset, 0, ',', '.') }} </td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Kendaraan</th>
                                            <td>: {{ $d->datahitung->kendaraan }} </td>
                                        </tr>
                                        <tr>
                                            <th>Usia</th>
                                            <td>: {{ $d->datahitung->usia }} </td>
                                        </tr>
                                        <tr>
                                            <th>Jumlah Bantuan/Beasiswa Lain</th>
                                            <td>: Rp{{ number_format($d->datahitung->bantuan, 0, ',', '.') }}/bln </td>
                                        </tr>
                                        <tr>
                                            <th>IPK</th>
                                            <td>: {{ $d->datahitung->ipk }} </td>
                                        </tr>
                                    </table>
                                </div>
                                @if (empty($d->file->dataset_id))
                                @else
                                    <div class="col-4">
                                        <table class="table table-borderless">
                                            <tr>
                                                <th>KTP</th>
                                                <td><a href="/storage/{{ $d->file->file1 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kartu Mahasiswa</th>
                                                <td><a href="/storage/{{ $d->file->file2 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Kartu Keluarga</th>
                                                <td><a href="/storage/{{ $d->file->file3 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Surat Keterangan Penghasilan Orangtua</th>
                                                <td><a href="/storage/{{ $d->file->file4 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Foto Rumah</th>
                                                <td><a href="/storage/{{ $d->file->file5 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Surat Keterangan Tidak Mampu</th>
                                                <td><a href="/storage/{{ $d->file->file6 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Surat Keterangan Tidak Menerima Beasiswa / Transkip Menerima
                                                    Beasiswa
                                                </th>
                                                <td><a href="/storage/{{ $d->file->file7 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Surat Rekomendasi Dari Tokoh Setempat</th>
                                                <td><a href="/storage/{{ $d->file->file8 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Transkip Nilai</th>
                                                <td><a href="/storage/{{ $d->file->file9 }}" target="_blank"
                                                        class="btn btn-primary">
                                                        Show
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        @if ($d->datahitung->status == 'Proses')
                            <div class="btn-closes">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                            @if (auth()->user()->level == 'admin')
                                @if (empty($d->file->dataset_id))
                                @else
                                    <div class="btn-action d-flex">
                                        <form action="/verifikasi/{{ $d->datahitung->id }}" method="post">
                                            @csrf
                                            <div class="btn-save">
                                                <button type="submit" class="btn btn-primary"
                                                    onclick="return confirm('Are you sure Validation Data')">Verification
                                                </button>
                                            </div>
                                        </form>
                                        <form action="/notverifikasi/{{ $d->datahitung->id }}" method="post">
                                            @csrf
                                            <div class="btn-delete">
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure Validation Data')">
                                                    Not Verification</button>
                                            </div>
                                        </form>
                                    </div>
                                @endif
                            @else
                            @endif
                        @else
                            <div class="btn-closes">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
