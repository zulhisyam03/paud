    <table id="" class="table table-striped" width="100%">
        <thead>
            <tr>
                <th valign="middle">#</th>
                <th valign="middle" class="">Sanitasi Sekolah</th>
                <th class="responHp text-center">
                    Uraian
                </th>                                   
            </tr>
            <tr>
                <td>1</td>
                <td class="">Sumber Air</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->sumberAir }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>2</td>
                <td class="">Sumber Air Minum</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->sumberAirMinum }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>3</td>
                <td class="">Kecukupan Air Bersih</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->airBersih }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>4</td>
                <td class="">Sekolah Menyediakan Jamban Yang Dilengkapi dengan Fasilitas Pendukung untuk digunakan oleh siswa berkebutuhan khusus</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->jambanDifable }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>5</td>
                <td class="">Tipe Jamban</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->tipeJamban }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>6</td>
                <td class="">Jumlah hari dalam seminggu siswa mengikuti kegiatan cuci tangan berkelompok</th></th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->jmlHariCuciTangan }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>7</td>
                <td class="">Jumlah tempat cuci tangan</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->jmlTempatCuciTangan }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>8</td>
                <td class="">Jumlah tempat cuci tangan rusak</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->jmlTempatCuciTanganRusak }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>9</td>
                <td class="">Apakah Sabun dan air mengalir pada tempat cuci tangan</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->airMengalirTempatCuciTangan }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>10</td>
                <td class="">Sekolah memiliki saluran pembuangan air limbah dari jamban</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->saluranLimbaJamban }}</td>                                   
                    @endforeach                
            </tr>
            <tr>
                <td>11</td>
                <td class="">Sekolah Pernah Menguras Tangki Septik dalam 3 hingga 5 tahun terakhir dengan truk/motor sedot tinja</th>
                    @foreach ($sanitasi as $item)
                    <td class="responHp text-center">{{ $item->mengurasSeptik }}</td>                                   
                    @endforeach                
            </tr>        
        </thead>
        <tbody>

        </tbody>
    </table>
