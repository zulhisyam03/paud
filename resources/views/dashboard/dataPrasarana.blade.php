    <table id="" class="table table-striped" width="100%">
        <thead>
            <tr>
                <th valign="middle">#</th>
                <th valign="middle" class="">Jenis Sarpras</th>
                @foreach ($prasarana as $item)
                    <th class="responHp text-center">
                        Jml {{ $item->semester }}
                    </th>
                @endforeach
            </tr>
            <tr>
                <td>1</td>
                <td class="">Ruang Kelas</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->kelas }}</td>
                @endforeach
            </tr>
            <tr>
                <td>2</td>
                <td class="">Ruang Perpustakaan</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->perpustakaan }}</td>
                @endforeach
            </tr>
            <tr>
                <td>3</td>
                <td class="">Ruang Laboratorium</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->laboratorium }}</td>
                @endforeach
            </tr>
            <tr>
                <td>4</td>
                <td class="">Ruang Praktik</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->praktik }}</td>
                @endforeach
            </tr>
            <tr>
                <td>5</td>
                <td class="">Ruang Pimpinan</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->pimpinan }}</td>
                @endforeach
            </tr>
            <tr>
                <td>6</td>
                <td class="">Ruang Guru</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->guru }}</td>
                @endforeach
            </tr>
            <tr>
                <td>7</td>
                <td class="">Ruang Ibadah</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->ibadah }}</td>
                @endforeach
            </tr>
            <tr>
                <td>8</td>
                <td class="">Ruang UKS</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->uks }}</td>
                @endforeach
            </tr>
            <tr>
                <td>9</td>
                <td class="">Toilet</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->toilet }}</td>
                @endforeach
            </tr>
            <tr>
                <td>10</td>
                <td class="">Ruang Gudang</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->gudang }}</td>
                @endforeach
            </tr>
            <tr>
                <td>11</td>
                <td class="">Ruang Sirkulasi</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->sirkulasi }}</td>
                @endforeach
            </tr>
            <tr>
                <td>12</td>
                <td class="">Tempat Bermain / Olahraga</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->tempatBermain }}</td>
                @endforeach
            </tr>
            <tr>
                <td>13</td>
                <td class="">Ruang TU</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->tu }}</td>
                @endforeach
            </tr>
            <tr>
                <td>14</td>
                <td class="">Ruang Konseling</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->konseling }}</td>
                @endforeach
            </tr>
            <tr>
                <td>15</td>
                <td class="">Ruang OSIS</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->osis }}</td>
                @endforeach
            </tr>
            <tr>
                <td>16</td>
                <td class="">Ruang Bangunan</th>
                    @foreach ($prasarana as $item)
                <td class="responHp text-center">{{ $item->bangunan }}</td>
                @endforeach
            </tr>
            <tr class="text-center">
                <th colspan="2">TOTAL</th>
                <th>{{ $jmlPrasaranaGanjil }}</th>
                <th>{{ $jmlPrasaranaGenap }}</th>
            </tr>
            <tr align="center">
                <td colspan="2"></td>
                @foreach ($prasarana as $item)
                    <td>
                        <form action="/Data/prasarana/{{ $item->semester }}">
                            @csrf
                            <input type="hidden" name="semester">
                            <button class="" style="background:none;border:0;"><i
                                    class="bx bx-trash text-danger"></i></button>
                            <a href="/Data/prasarana/edit/{{ $item->semester }}">
                                <i class="bx bx-pencil text-success"></i>
                            </a>
                        </form>
                    </td>
                @endforeach
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
