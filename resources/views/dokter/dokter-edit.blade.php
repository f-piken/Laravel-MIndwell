@extends('layouts.app')

@section('title')
Dokter | MindWell
@endsection

@section('content')
<h1>Edit Data Dokter</h1>
<form action="{{ route('dokter.update', $dokter->id_dokter) }}" method="post">
    @csrf
    @method('put')
    <label for="nama">Nama Dokter :</label>
    <input type="text" id="nama" name="nama" value="{{ old('nama',$dokter->nama_dokter) }}" required>

    <label for="janji">Jumlah Janji :</label>
    <input type="number" id="janji" name="janji" value="{{ old('janji',$dokter->jml_janji) }}" required>

    <label for="gaji">Gaji :</label>
    <input type="number" id="gaji" name="gaji" value="{{ old('gaji',$dokter->gaji) }}" required>
    
    <button type="submit" class="simpan" name="simpan">Edit</button>
</form>
<a class="tambah" href="{{ route('dokter.index') }}">Data Dokter</a>
@endsection
