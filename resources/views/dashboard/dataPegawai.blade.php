<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
            <th>No.Handphone</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pegawai as $item)
            <tr>
                <td>{{ $item['idPegawai'] }}</td>
                <td>{{ $item['namaPegawai'] }}</td>
                <td>{{ $item['jabatan'] }}</td>
                <td>{{ $item['noHp'] }}</td>
                <td>{{ $item['Status'] }}</td>
                <td>-</td>
            </tr>
        @endforeach
    </tbody>
</table>
