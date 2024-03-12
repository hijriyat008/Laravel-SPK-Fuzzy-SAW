<div class="modal fade" id="import_dataset" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Import Dataset</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/datasets/import" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="file" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-back">
                        <button type="button" class="btn btn-secondary"data-bs-toggle="modal"
                            data-bs-target="#import_data">Back</button>
                    </div>
                    <div class="btn-save">
                        <button type="submit" class="btn btn-primary"
                            onclick="return confirm('Are You sure Import Data?')">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="import_datahitung" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Import Datahitung</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/datahitungs/import" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <input type="file" name="file" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="btn-action d-flex">
                        <div class="btn-back">
                            <button type="button" class="btn btn-secondary"data-bs-toggle="modal"
                                data-bs-target="#import_data">Back</button>
                        </div>
                        <div class="btn-save">
                            <button type="submit" class="btn btn-primary"
                                onclick="return confirm('Are You sure Import Data?')">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="import_data" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Import Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dropdown">
                    <div class="btn-back">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Data
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#import_dataset">
                                    Dataset
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                    data-bs-target="#import_datahitung">
                                    DataHitung
                                </button>
                            </li>
                        </ul>
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
<div class="modal fade" id="export_data" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Export Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dropdown">
                    <div class="btn-back">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Pilih Data
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <form action="/datasets/export" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"
                                        onclick="return confirm('Are you sure Export Data?')">
                                        Dataset
                                    </button>
                                </form>
                            </li>
                            <li>
                                <form action="/datahitungs/export" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item"
                                        onclick="return confirm('Are you sure Export Data?')">
                                        Datahitung
                                    </button>
                                </form>
                            </li>
                        </ul>
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
