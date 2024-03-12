<div class="modal fade" id="editfile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit File</h5>
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
