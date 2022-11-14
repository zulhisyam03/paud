<table id="example" class="table table-striped" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th class="responHp">ID Siswa</th>
            <th>Nama Siswa</th>
            <th class="responHp">Tempat, Tgl.Lahir</th>
            <th class="responHp">Nama Wali</th>
            <th class="responHp">Alamat</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php
            $no = 1;
        @endphp
        @foreach ($siswa as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td class="responHp">{{ $item['idSiswa'] }}</td>
                <td class="text-capitalize">
                    {{ $item['namaSiswa'] }}
                    <div class="responShow">
                        <small>ID : {{ $item->idSiswa }}</small>
                    </div>
                </td>
                <td class="responHp">{{ $item->tempatLahir }}, {{ date('d M Y', strtotime($item->tglLahir)) }}</td>
                <td class="responHp">{{ $item['waliSiswa'] }}</td>
                <td class="responHp">{{ $item['alamat'] }}</td>
                <td>
                    <div class="d-block" style="width:70px;text-align:center;">
                        <a href="#showPegawai{{ $item->idSiswa }}" data-bs-toggle="modal"
                            data-bs-target="#showPegawai{{ $item->idSiswa }}"><i class='bx bx-show'
                                alt="Lihat"></i></a>
                        <a href="#showEditPegawai{{ $item->idSiswa }}" data-bs-toggle="modal"
                            data-bs-target="#showEditPegawai{{ $item->idSiswa }}"><i class='bx bx-pencil text-success'
                                alt="Edit"></i></a>
                                <i class='bx bx-trash d-inline text-danger'
                                alt="Edit"></i>
                    </div>
                </td>
            </tr>
            @include('component.modal.modalPegawai')
            @include('component.modal.modalEditPegawai')
        @endforeach
    </tbody>
</table>
