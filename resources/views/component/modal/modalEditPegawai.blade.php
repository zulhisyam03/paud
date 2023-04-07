<!-- Modal -->
<div class="modal fade" id="ShowEditPegawai{{ $item->idPegawai }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 bg-white" id="exampleModalLabel">EDIT DATA PEGAWAI </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group text-start">
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>Nama Pegawai: </strong></label>
                        <input type="text" name="namaPegawai" value="{{ $item->namaPegawai }}" class="form-control text-capitalize">
                    </div>
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>ID Pegawai: </strong></label>
                        <input type="text" name="idPegawai" id="" value="{{ $item->idPegawai }}"
                            class="form-control">
                    </div>
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>Jenis Kelamin: </strong></label>
                        <select name="jk" id="" class="form-select">
                            @if ($item->jk != '')
                                <option selected hidden value="{{ $item->jk }}">{{ $item->jk }}</option>
                            @else
                                <option selected hidden>Pilih...</option>
                            @endif
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>No.Handphone: </strong></label>
                        <input type="text" name="noHp" id="" value="{{ $item->noHp }}"
                            onkeypress="return hanyaAngka(event)" class="form-control">
                    </div>
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>Jabatan: </strong></label>
                        <select name="jabatan" id="" class="form-select">
                            @if ($item->jabatan != '')
                                <option selected hidden value="{{ $item->jabatan }}">{{ $item->jabatan }}</option>
                            @else
                                <option selected hidden>Pilih...</option>
                            @endif
                            <option value="Guru">Guru</option>
                            <option value="Staf TU">Staf TU</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>Status: </strong></label>
                        <select class="form-select @error('status') is-invalid @enderror" name="status" id="status">
                            @if ($item->status != '')
                                <option selected hidden value="{{ $item->status }}">{{ $item->status }}</option>
                            @else
                                <option selected hidden>Pilih...</option>
                            @endif
                            <option value="PNS">PNS</option>
                            <option value="Non PNS">Non PNS</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>Golongan: </strong></label>
                        <select class="form-select @error('golongan') is-invalid @enderror" name="golongan" id="golongan">
                            @if ($item->golongan != '')
                                <option selected hidden value="{{ $item->golongan }}">{{ $item->golongan }}</option>
                            @else
                                <option selected hidden>Pilih...</option>
                            @endif
                            <option value="III A">III A</option>
                            <option value="III C">III C</option>
                            <option value="-">Lainnya</option>
                        </select>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="col-sm-12 col-form-label"><strong>Tempat, Tgl.Lahir:
                            </strong></label>
                            <div class="col-sm px-0">
                                <input type="text" name="tempatLahir" value="{{ $item->tempatLahir }}" id="tempatLahir"
                                    class="col-sm-3 form-control @error('tempatLahir') is-invalid @enderror text-capitalize" placeholder="Tempat Lahir">
                            </div>
                            <div class="col-sm-4 px-0">
                                <input type="date" class="form-control @error('tglLahir') is-invalid @enderror" name="tglLahir"
                                    id="tglLahir" placeholder="1995/05/03" value="{{ $item->tglLahir }}"/>
                            </div>
                    </div>
                    <div class="row mb-2">
                        <label for="" class="form-label"><strong>Pendidikan Terakhir: </strong></label>
                        <select class="form-select @error('pT') is-invalid @enderror" name="pT" id="pT">
                            @if ($item->pT != '')
                                <option selected hidden value="{{ $item->pT }}">{{ $item->pT }}</option>
                            @else
                                <option selected hidden>Pilih...</option>
                            @endif
                            <option value="S2">S2</option>
                            <option value="S1">S1</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form action="Data/Pegawai/{{ $item->idPegawai }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-primary"><i class='bx bx-paper-plane'></i> Simpan</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
