@extends('layouts.master')

@section('content')

    <div class="container">
    <h1>Daftar LombaMenari</h1>
        <form action="/lombamenari/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            
            <label for="AS">Asal Sekolah:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Sekolah">
            
            <label for="Kelas">Kelas:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelas">
            
            <select class="form-control" name="Jenis_Kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select><br>

            <label for="NH">Nomor HP:</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor HP">

            <div class="mb-3">
            <label for="Alamat">Alamat:</label>
            <textarea class="form-control" name="alamat" rows="10" placeholder="Alamat"></textarea><br>
            <input class="btn btn-info" type="submit" name="submit" value="Save">
            </div>
        </div>

        </form>
    </div>
    
@endsection