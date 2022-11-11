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
        @php
            $no = 1;
        @endphp
        @foreach ($pegawai as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item['idPegawai'] }}</td>
                <td>{{ $item['namaPegawai'] }}</td>
                <td>{{ $item['jabatan'] }}</td>
                <td>{{ $item['noHp'] }}</td>
                <td>{{ $item['status'] }}</td>
                <td>-</td>
            </tr>
        @endforeach
    </tbody>
</table>
