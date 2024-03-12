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
                    <th scope="col">Alternatif</th>
                    <th scope="col">C1</th>
                    <th scope="col">C2</th>
                    <th scope="col">C3</th>
                    <th scope="col">C4</th>
                    <th scope="col">C5</th>
                    <th scope="col">C6</th>
                    <th scope="col">C7</th>
                    <th scope="col">C8</th>
                    <th scope="col">C9</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($data as $d)
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $d->dataset->nama ?></td>
                        <td><?= $d->alternatif ?></td>
                        <td><?= $d->c1 ?></td>
                        <td><?= $d->c2 ?></td>
                        <td><?= $d->c3 ?></td>
                        <td><?= $d->c4 ?></td>
                        <td><?= $d->c5 ?></td>
                        <td><?= $d->c6 ?></td>
                        <td><?= $d->c7 ?></td>
                        <td><?= $d->c8 ?></td>
                        <td><?= $d->c9 ?></td>
                        <td><?= $d->c9 ?></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>
