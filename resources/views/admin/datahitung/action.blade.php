<div class="d-grid gap-2 d-md-block">
    @if (empty($data->datahitung->dataset_id))
        @if (auth()->user()->level == 'admin')
            <div class="btn-add">
                <input type="button" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#add_datahitung{{ $data->id }}" id="add_datahitung" value="Add">
            </div>
        @else
            <div class="btn-show">
                <button type="button" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal"
                    data-bs-target="#show_datahitung{{ $data->nim }}" id="show_data">
                    Not
                </button>
            </div>
        @endif
    @else
        <div class="btn-show">
            <button type="button" class="btn btn-icon btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#show_datahitung{{ $data->nim }}" id="show_data">
                Show
            </button>
        </div>
    @endif
</div>
