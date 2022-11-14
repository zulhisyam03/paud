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
                    <div class="d-block" style="width:70px;text-align:center;">
                        <a href="#showPegawai{{ $item->idPegawai }}" data-bs-toggle="modal"
                            data-bs-target="#showPegawai{{ $item->idPegawai }}"><i class='bx bx-show'
                                alt="Lihat"></i></a> 
                                @include('component.modal.modalPegawai')
                        <a href="#showEditPegawai{{ $item->idPegawai }}" data-bs-toggle="modal"
                            data-bs-target="#showEditPegawai{{ $item->idPegawai }}"><i class='bx bx-pencil text-success'
                                alt="Edit"></i></a>
                                <i class='bx bx-trash d-inline text-danger'
                                alt="Edit"></i>
                                @include('component.modal.modalEditPegawai')
                    </div>
                </td>
            </tr>                        
        @endforeach
    </tbody>
</table>
