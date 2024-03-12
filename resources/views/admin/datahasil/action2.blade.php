@if ($data->status == 'Belum Menerima')
    <div class="btn-action d-flex">
        @if (auth()->user()->level == 'validator')
            <form action="/valid/{{ $data->id }}" method="post">
                @csrf
                <div class="d-grid gap-2 d-md-block mr-0 p-0">
                    <div class="btn-edit">
                        <button type="submit" class="btn btn-icon btn-outline-success mr-0" id=""
                            onclick="return confirm('Are you Sure?')">
                            Data Valid
                        </button>
                    </div>
                </div>
            </form>
            <form action="/notvalid/{{ $data->id }}" method="post">
                @csrf
                <div class="d-grid gap-2 d-md-block mr-0 p-0">
                    <div class="btn-delete">
                        <button type="submit" class="btn btn-icon btn-outline-danger mr-0" id=""
                            onclick="return confirm('Are you Sure?')">
                            Data Not Valid
                        </button>
                    </div>
                </div>
            </form>
        @else
            <h6 style="color: rgb(255, 208, 0)">Proses Validasi</h6>
        @endif
    </div>
@else
    @if ($data->status == 'Not Valid')
        @if (auth()->user()->level == 'pimpinan')
            <form action="/admin/datahasils/{{ $data->id }}" method="post">
                @method('delete')
                @csrf
                <div class="d-grid gap-2 d-md-block mr-0 p-0">
                    <div class="btn-delete">
                        <button type="submit" class="btn btn-icon btn-outline-danger mr-0" id=""
                            onclick="return confirm('Are you Sure?')">
                            Delete
                        </button>
                    </div>
                </div>
            </form>
        @else
            <h6 style="color: rgb(245, 24, 8)">Data Tidak Valid</h6>
        @endif
    @endif
    @if ($data->status == 'Valid')
        @if (auth()->user()->level == 'pimpinan')
            <form action="/salurkan/{{ $data->id }}" method="post">
                @csrf
                <div class="d-grid gap-2 d-md-block mr-0 p-0">
                    <div class="btn-update">
                        <button type="submit" class="btn btn-icon btn-outline-warning mr-0" id=""
                            onclick="return confirm('Are you Sure?')">
                            Diterima
                        </button>
                    </div>
                </div>
            </form>
        @else
            <h6 style="color: rgb(10, 233, 22)">Proses Penerimaan</h6>
        @endif
    @endif
    @if ($data->status == 'Sudah Menerima')
        <div class="btn-show">
            <button class="btn btn-icon btn-outline-primary mr-0" data-bs-toggle="modal"
                data-bs-target="#show_datahasil{{ $data->id }}" id="show_data">Show</button>
        </div>
    @endif
@endif
