@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Lomba Menari</h1>
        <a class="btn btn-outline-secondary" href="/lombamenari/create">Daftar</a>
        <table class="table table-sm">
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>ASAL SEKOLAH</th>
                <th>KELAS</th>
                <th>JENIS KELAMIN</th>
                <th>NO.HP</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            @foreach($lombamenari as $l)
            <tr>
                <td>{{$l->id}}</td>
                <td>{{$l->nama}}</td>
                <td>{{$l->asal_sekolah}}</td>
                <td>{{$l->kelas}}</td>
                <td>{{$l->jenis_kelamin}}</td>
                <td>{{$l->no_hp}}</td>
                <td>{{$l->alamat}}</td>
                <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-warning" href="/lombamenari/{{$l->id}}/edit/">Edit</a>
                    <form action="/lombamenari/{{$l->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>
                </div>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
    

