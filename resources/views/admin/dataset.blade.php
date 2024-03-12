<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
</head>

<body>
    <h1>Data Target Penyaluran</h1>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Penghasilan Orang Tua</th>
                    <th scope="col">Tanggungan Orang Tua</th>
                    <th scope="col">Status Rumah</th>
                    <th scope="col">Kondisi Rumah</th>
                    <th scope="col">Jumlah Aset/Tabungan</th>
                    <th scope="col">Jumlah Kendaraan</th>
                    <th scope="col">Usia</th>
                    <th scope="col">Beasiswa/Bantuan Lain</th>
                    <th scope="col">IPK</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th><?= $set->id ?></th>
                    <td><?= $set->nama ?></td>
                    <td><?= $set->penghasilan_orangtua ?></td>
                    <td><?= $set->tanggungan_orangtua ?></td>
                    <td><?= $set->status_rumah ?></td>
                    <td><?= $set->kondisi_rumah ?></td>
                    <td><?= $set->tabungan ?></td>
                    <td><?= $set->kendaraan ?></td>
                    <td><?= $set->usia ?></td>
                    <td><?= $set->bantuan ?></td>
                    <td><?= $set->ipk ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
