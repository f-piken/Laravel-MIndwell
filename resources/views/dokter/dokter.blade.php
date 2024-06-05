@extends('layouts.app')

@section('title')
Dokter | MindWell
@endsection

@section('content')
<h1>Data Dokter</h1>
<a class="tambah" href="{{ route('dokter.create') }}">Tambah</a>
<table>
  <thead>
    <tr>
        <th>NO.</th>
        <th>Nama Dokter</th>
        <th>Jumlah Janji</th>
        <th>Gaji</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($dokter as $no => $dokter)
    <tr>
      <td>{{ $no+1 }}.</td>
      <td>{{ $dokter->nama_dokter }}</td>
      <td>{{ $dokter->jml_janji }}</td>
      <td>RP. {{ number_format($dokter->gaji) }}</td>
      <td>
        <a class='btn-edit' href="{{ route('dokter.edit', $dokter->id_dokter) }}">Edit</a>
        |
        <a class='btn-hapus' href="/dokter/delete/{{ $dokter->id_dokter }}">Hapus</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection
