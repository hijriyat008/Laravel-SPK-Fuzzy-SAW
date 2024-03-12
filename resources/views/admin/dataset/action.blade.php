<div class="d-grid gap-2 d-md-block">
    <div class="btn-action d-flex">
        <div class="btn-show">
            <button class="btn btn-icon btn-outline-primary" data-bs-toggle="modal"
                data-bs-target="#show_dataset{{ $data->nim }}" id="show_data">
                Show
            </button>
        </div>
        @if (auth()->user()->level == 'admin')
            <div class="btn-edit">
                <button class="btn btn-icon btn-outline-success" data-bs-toggle="modal"
                    data-bs-target="#edit_dataset{{ $data->id }}" id="edit_data">
                    Edit
                </button>
            </div>
            <form action="/admin/datasets/{{ $data->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <div class="btn-delete">
                    <button class="btn btn-icon btn-outline-danger"
                        onclick="return confirm('Are you sure Delete Data?')">
                        Delete
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>
