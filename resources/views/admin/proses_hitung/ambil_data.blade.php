<div class="modal fade" id="ambil_data" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ambil Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card align-items-center">
                    <form action="/ambil_data" method="post">
                        @csrf
                        <div class="row align-items-center m-5">
                            <div class="col-auto">
                                <label for="data" class="col-form-label">Ambil Penerima</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" min="1" id="data" name="data" class="form-control"
                                    aria-describedby="" required>
                            </div>
                            <div class="col-auto mt-3">
                                <span id="" class="form-text mt-3">
                                    Ambil Penerima Sesuai Kebutuhan Penerimaan
                                </span>
                            </div>
                            <div class="col mt-5 ">
                                <div class="btn-save">
                                    <button type="submit" class="btn btn-primary"
                                        onclick="return confirm('Are you sure Verification Data')">Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
