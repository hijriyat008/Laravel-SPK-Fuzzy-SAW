<div class="d-grid gap-2 d-md-block mr-0 p-0">
    <div class="btn-action d-flex">
        @if (empty($data->dataset->id))
        @else
            <div class="btn-show">
                <button type="button" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#show_dataset{{ $data->dataset->nim }}" id="show_data">
                    Show Dataset
                </button>
            </div>
        @endif
        @if (empty($data->datahitung->id))
        @else
            @if ($data->status == 'Sudah Menerima')
            @else
                <div class="btn-show" style="margin-left: 7px">
                    <button type="button" class="btn btn-icon btn-outline-primary mr-0" data-bs-toggle="modal"
                        data-bs-target="#show_datahitung{{ $data->dataset->nim }}" id="show_data">
                        Show Datahitung
                    </button>
                </div>
            @endif
        @endif
    </div>
</div>
