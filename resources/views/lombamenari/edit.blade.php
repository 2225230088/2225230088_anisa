@extends('layouts.master')

@section('content')
<h1>Edit Data</h1>

<form action="/lombamenari/{{$lombamenari->id}}" method="POST">
    @method('put')
    @csrf
    <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$lombamenari->nama}}">
            
            <label for="AS">Asal Sekolah:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Asal Sekolah" value="{{$lombamenari->asal_sekolah}}">
            
            <label for="Kelas">Kelas:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kelas" value="{{$lombamenari->kelas}}">
            
            <select class="form-control" name="Jenis_Kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="L" @if($lombamenari->jenis_kelamin == "L") selected @endif>Laki-laki</option>
                <option value="P" @if($lombamenari->jenis_kelamin == "P") selected @endif>Perempuan</option>
            </select><br>

            <label for="NH">Nomor HP:</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor HP" value="{{$lombamenari->no_hp}}">

            <div class="mb-3">
            <label for="Alamat">Alamat:</label>
            <textarea class="form-control" name="alamat" rows="10" placeholder="Alamat">{{$lombamenari->alamat}}</textarea><br>
            <input class="btn btn-info" type="submit" name="submit" value="update">
            </div>
        </div>

        </form>
    </div>


</form>

@endsection