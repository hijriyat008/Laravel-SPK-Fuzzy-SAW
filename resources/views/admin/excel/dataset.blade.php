<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Hp</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->nim }}</td>
                <td>{{ $data->jk }}</td>
                <td>{{ $data->tempat_lahir }}</td>
                <td>{{ $data->tgl_lahir }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->no_hp }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
