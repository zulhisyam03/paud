<!-- Modal -->
<div class="modal fade" id="showPegawai{{ $item->idPegawai }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 bg-white" id="exampleModalLabel">Detil Pegawai </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group text-start">
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">Nama Pegawai: </label>
                        <div class="col-sm pt-2"><span class="label">{{ $item->namaPegawai }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">ID Pegawai: </label>
                        <div class="col-sm pt-2"><span class="label">{{ $item->idPegawai }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">Jenis Kelamin: </label>
                        <div class="col-sm pt-2"><span
                                class="label">{{ $item->jk }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">No.Handphone: </label>
                        <div class="col-sm pt-2"><span
                                class="label">{{ $item->noHp }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">Jabatan: </label>
                        <div class="col-sm pt-2"><span
                                class="label">{{ $item->jabatan }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">Status: </label>
                        <div class="col-sm pt-2"><span
                                class="label">{{ $item->status }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">Golongan: </label>
                        <div class="col-sm pt-2"><span
                                class="label">{{ $item->golongan }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label">Tempat, Tgl.Lahir: </label>
                        <div class="col-sm pt-2"><span
                                class="label">{{ $item->tempatLahir }}, {{ date('d M Y', strtotime($item->tglLahir)) }}</span></div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-4 col-form-label ">Pendidikan Terakhir: </label>
                        <div class="col-sm pt-2"><span
                                class="label">{{ $item->pT }}</span></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="Pegawai/{{ $item->idPegawai }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i
                            class="fa-solid fa-trash"></i> Hapus</button>
                </form>
                @if ($item->read == '0')
                    <form action="Pegawai/{{ $item->idPegawai }}" method="post">
                        @method('put')
                        @csrf
                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                @else
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                @endif
            </div>
        </div>
    </div>
</div>
