@foreach ($kriteria as $k)
    <div class="modal fade" id="edit_kriteria{{ $k->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kriteria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <form action="/admin/kriteria/{{ $k->id }}" method="post">
                            @csrf
                            <div class="row m-2">
                                <div class="col-12">
                                    <div class="nama_kriteria mb-2">
                                        <label for="nama_kriteria" class="form-label" style="font-weight: bold">Nama
                                            Kriteria</label>
                                        <input type="text"
                                            class="form-control @error('nama_kriteria') is-invalid @enderror"
                                            id="nama_kriteria" name="nama_kriteria" required autofocus
                                            value="{{ old('nama_kriteria' . $k->id . '', $k->nama_kriteria) }}">
                                        @error('nama_kriteria')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="atribut my-3 ">
                                        <label for="atribut" class="form-label"
                                            style="font-weight: bold">Atribut</label>
                                        <div class="atribut d-flex">
                                            <div class="form-check">
                                                @if (old('atribut' . $k->id . '', $k->atribut) == 'cost')
                                                    <input class="form-check-input" type="radio" name="atribut"
                                                        id="atribut" value="cost" checked required>
                                                    <label class="form-check-label" for="atribut">
                                                        Cost
                                                    </label>
                                                @else
                                                    <input class="form-check-input" type="radio" name="atribut"
                                                        id="atribut" value="cost" required>
                                                    <label class="form-check-label" for="atribut">
                                                        Cost
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-check mx-4">
                                                @if (old('atribut' . $k->id . '', $k->atribut) == 'benefit')
                                                    <input class="form-check-input" type="radio" name="atribut"
                                                        id="atribut" value="benefit" checked required>
                                                    <label class="form-check-label" for="atribut">
                                                        Benefit
                                                    </label>
                                                @else
                                                    <input class="form-check-input" type="radio" name="atribut"
                                                        id="atribut" value="benefit" required>
                                                    <label class="form-check-label" for="atribut">
                                                        Benefit
                                                    </label>
                                                @endif
                                            </div>
                                            @error('atribut')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="bobot mb-2">
                                        <label for="bobot" class="form-label" style="font-weight: bold">
                                            Bobot</label>
                                        <div class="input-atribut d-flex">
                                            <input type="number"
                                                class="form-control @error('bobot') is-invalid @enderror" id="bobot"
                                                name="bobot" style="width:18%" required
                                                value="{{ old('bobot' . $k->id . '', $k->bobot) }}">
                                            <h4 style="font-weight: bold; margin-left:5px;">%</h4>
                                        </div>
                                        @error('bobot')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 my-3 ">
                                    <div class="btn-update">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
