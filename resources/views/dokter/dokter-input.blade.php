@extends('layouts.app')

@section('title')
Dokter | MindWell
@endsection

@section('content')
<h1>Input Data Dokter</h1>
<form action="{{ route('dokter.store') }}" method="post">
    @csrf
    <label for="nama">Nama Dokter :</label>
    <input type="text" id="nama" name="nama" required>

    <label for="janji">Jumlah Janji :</label>
    <input type="number" id="janji" name="janji" required>

    <label for="gaji">Gaji :</label>
    <input type="number" id="gaji" name="gaji" required>
    
    <button type="submit" class="simpan" name="simpan">Simpan</button>
</form>
<a class="tambah" href="{{ route('dokter.index') }}">Data Dokter</a>
@endsection
