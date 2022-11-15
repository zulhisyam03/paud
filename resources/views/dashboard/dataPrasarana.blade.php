    <table id="" class="table table-striped" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th class="">Jenis Sarpras</th>
                @foreach ($prasarana as $item)
                <th class="responHp">Jumlah {{ $item->semester }}</th>                                   
                @endforeach
                <th></th>
            </tr>
            <tr>
                <td>#</td>
                <td class="">Ruang Kelas</th>
                    @foreach ($prasarana as $item)
                    <td class="responHp">{{ $item->kelas }}</td>                                   
                    @endforeach
                <td></td>
            </tr>
            <tr>
                <td>#</td>
                <td class="">Ruang Perpustakaan</th>
                    @foreach ($prasarana as $item)
                    <td class="responHp">{{ $item->perpustakaan }}</td>                                   
                    @endforeach
                <td></td>
            </tr>
            <tr>
                <td>#</td>
                <td class="">Ruang Laboratorium</th>
                    @foreach ($prasarana as $item)
                    <td class="responHp">{{ $item->laboratorium }}</td>                                   
                    @endforeach
                <td></td>
            </tr>
            <tr>
                <td>#</td>
                <td class="">Ruang Praktik</th>
                    @foreach ($prasarana as $item)
                    <td class="responHp">{{ $item->praktik }}</td>                                   
                    @endforeach
                <td></td>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
