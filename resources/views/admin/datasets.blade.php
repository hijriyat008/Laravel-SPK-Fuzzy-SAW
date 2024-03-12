@extends('layouts.admin')
@section('container')
    <h1>Data Target Penyaluran </h1>
    <a class="btn btn-primary" href="/admin/datahitungs" role="button">Data Hitung</a>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $d)
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $d->nama ?></td>
                        <td><?= $d->nim ?></td>
                        <td><?= $d->jk ?></td>
                        <td><?= $d->tempat_lahir ?></td>
                        <td><?= $d->tgl_lahir ?></td>
                        <td><?= $d->alamat ?></td>
                        <td><?= $d->email ?></td>
                        <td><?= $d->no_hp ?></td>
                        <td><a class="btn btn-primary" href="/admin/dataset/{{ $d->nama }}"
                                role="button">Verifikasi</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
