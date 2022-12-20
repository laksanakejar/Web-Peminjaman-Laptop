@extends('layout')
@section('container')
    <section class="container">
        <form action="/store" class="form" method="POST">
            @csrf
            <div class="input-box">
                <label>Nama Lengkap</label>
                <input type="text" placeholder="Masukan Nama Lengkap" name="name" value="{{ old('name') }}" />
                @error('name')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="input-box">
                <label>Tujuan</label>
                <input type="text" placeholder="Masukan Tujuan" name="purposes" value="{{ old('purposes') }}" />
                @error('purposes')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="column">
                <div class="input-box">
                    <label>NIS</label>
                    <input type="number" placeholder="Masukan No NIS" name="nis" value="{{ old('nis') }}" />
                    @error('nis')
                        <p class="text-danger fw-bold mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="input-box">
                    <label>Rayon</label>
                    <input type="text" placeholder="Masukan Rayon" name="rayon" value="{{ old('rayon') }}" />
                    @error('rayon')
                        <p class="text-danger fw-bold mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>

            <div class="input-box">
                <label>Guru</label>
                <input type="text" placeholder="Masukan Nama Guru" name="teacher" value="{{ old('teacher') }}" />
                @error('teacher')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="input-box">
                <label>Rombel</label>
                <input type="text" placeholder="Masukan Rombel" name="rombel" value="{{ old('rombel') }}" />
                @error('rombel')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <div class="input-box">
                <label>Tanggal</label>
                <input type="date" name="date" value="{{ old('date') }}" />
                @error('date')
                    <p class="text-danger fw-bold mt-2">
                        {{ $message }}
                    </p>
                @enderror
            </div>
            <button class="btn submit" id="btn">Masukan</button>
        </form>
        <div hidden class="total">
            <h4 class="fw-bold fst-italic text-break mt-4 mx-3 text-white">Total</h4>
            <hr>
            <table class="table" id="oiw">
                <tr>
                    <td class="text-white" style="width: 20px"><i class="bi bi-box-arrow-in-right"
                            style="font-size: 45px"></i></td>
                    <td class="text-white" style="width: 300px">
                        <div class="kon">
                            <div class="fw-bold">
                                Dipinjamkan
                            </div>
                            Total laptop yang dipinjamkan hari ini
                        </div>
                    </td>
                    <td class="text-white" style="width: 60px">
                        <div class="pls px-2">
                            {{ $laptops->where('return_date', '=', null)->count() }}
                        </div>
                    </td>
                    <td class="text-white">
                        <div class="dkk">
                            {{ \Carbon\Carbon::now()->format('j-m') }}
                        </div>
                    </td>
                </tr>
            </table>
            <table class="table" id="oiw">
                <tr>
                    <td class="text-white" style="width: 20px"><i class="bi bi-arrow-left-right"
                            style="font-size: 45px"></i></td>
                    <td class="text-white" style="width: 300px">
                        <div class="kon">
                            <div class="fw-bold">
                                Dikembalikan
                            </div>
                            Total laptop yang dikembalikan hari ini
                        </div>
                    </td>
                    <td class="text-white" style="width: 60px">
                        <div class="pls px-2">
                            {{ $laptops->where('return_date', '!=', null)->count() }}
                        </div>
                    </td>
                    <td class="text-white">
                        <div class="dkk">
                            {{ \Carbon\Carbon::now()->format('j-m') }}
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </section>
@endsection
