    @extends('layout')
    @section('container')
    
    <div class="gam mx-5">
        <table class="table table-striped table-bordered ">
            <tr>
                <td>Nis</td>
                <td>Nama</td>
                <td>Rayon</td>
                <td>Rombel</td>
                <td>Tujuan</td>
                <td>Tanggal</td>
                <td>Tanggal Pengembalian</td>
                <td>Guru</td>
                <td>Action</td>
            </tr>
            @foreach ($laptops as $laptop)
                <tr class="table-rows">
                    <td>{{ $laptop['nis'] }}</td>
                    <td>{{ $laptop['name'] }}</td>
                    <td>{{ $laptop['rayon'] }}</td>
                    <td>{{ $laptop['rombel'] }}</td>
                    <td>{{ $laptop['purposes'] }}</td>
                    {{-- 
                    F j, Y — January 15, 2019
                    j.F.Y — 15.January.2019
                    Y/m/d — 2019/01/15
                    m/d/Y — 01/15/2019
                    d-m-y — 15-01-2019
                    y-m-d — 19-01-15 
                    carbon parse untuk mengurai dan mengformat date atau tanggal--}}
                    <td>{{ \Carbon\Carbon::parse($laptop['date'])->format('j F, Y') }}</td>
                    {{-- Kalau data return date kosong maka akan menampilkan Belum di Kembalikan --}}
                    @if ($laptop['return_date'] == null)
                        <td class="text-warning">Belum dikembalikan</td>
                    @else
                    {{--Sedangkan kalao return date nya ada atau tidak null maka akan menampilkan tanggal dikembalikan--}}
                        <td class="text-warning">{{ \Carbon\Carbon::parse($laptop['return_date'])->format('j F, Y') }}
                        </td>
                    @endif
                    <td>{{ $laptop['teacher'] }}</td>
                    <td class="d-flex">
                    {{-- kalau tanggal dikembalikannya kosong atau null maka akan menampilkan button kembalikan, ketika tanggal dikembalikannya ada
                        maka tidak menampilkan apa apa --}}
                        @if ($laptop['return_date'] == null)
                            <form action="/done/{{ $laptop['id'] }}" method="POST">
                                @csrf
                                @method('patch')
                                <button type="submit" class="btn btn-info text-white" id="btn">Kembalikan</button>
                            </form>
                        @endif
                        <form action="/delete/{{ $laptop['id'] }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger text-white me-2" >Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @endsection