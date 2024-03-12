@foreach ($dataset as $d)
    <div class="modal fade" id="show_dataset{{ $d->nim }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Hitung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="row">
                            <div class="col-6">
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
                                        <th>Jenis Kelamin</th>
                                        <td>: {{ $d->jk }} </th>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>: {{ $d->status }} </th>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="table table-borderless d-inline-block ml-3">
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>: {{ $d->tempat_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>: {{ $d->tgl_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>: {{ $d->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>: {{ $d->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>HP</th>
                                        <td>: {{ $d->no_hp }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="btn-closes">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
