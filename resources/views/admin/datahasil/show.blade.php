@foreach ($data as $d)
    <div class="modal fade" id="show_datahasil{{ $d->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                                        <td>: {{ $d->dataset->nama }} </td>
                                    </tr>
                                    <tr>
                                        <th>NIM</th>
                                        <td>: {{ $d->dataset->nim }} </td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>: {{ $d->status }} </th>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-6">
                                <table class="table table-borderless">
                                    <tr>
                                        <th>Tanggal Penerimaan</th>
                                        <td>: {{ $d->tgl_penerimaan }} </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-closes">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
