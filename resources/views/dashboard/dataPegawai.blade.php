<table id="example" class="table table-striped" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th class="responHp">ID Pegawai</th>
            <th>Nama Pegawai</th>
            <th class="responHp">Jabatan</th>
            <th class="responHp">No.Handphone</th>
            <th class="responHp">Status</th>
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
                <td class="responHp">{{ $item['idPegawai'] }}</td>
                <td class="text-capitalize">
                    {{ $item['namaPegawai'] }}
                    <div class="responShow">
                        <small>ID : {{ $item->idPegawai }}</small>
                    </div>
                </td>
                <td class="responHp">{{ $item['jabatan'] }}</td>
                <td class="responHp">{{ $item['noHp'] }}</td>
                <td class="responHp">{{ $item['status'] }}</td>
                <td>
                    <a href=""><i class='bx bx-show' alt="Lihat"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>