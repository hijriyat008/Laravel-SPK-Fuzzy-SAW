<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>NIM</th>
            <th>Penghasilan Orangtua</th>
            <th>Tanggungan Orangtua</th>
            <th>Status Rumah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->dataset->nama }}</td>
                <td>{{ $data->dataset->nim }}</td>
                <td>{{ $data->penghasilan_orangtua }}</td>
                <td>{{ $data->tanggungan_orangtua }}</td>
                <td>{{ $data->status_rumah }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
