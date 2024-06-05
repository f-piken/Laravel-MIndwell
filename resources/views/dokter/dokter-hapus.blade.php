@extends('layouts.app')

@section('title')
Dokter | MindWell
@endsection

@section('content')
<h1>Hapus Data Dokter</h1>
<div>
    <h4>Ingin Menghapus Data ?</h4>
    <form action="{{ route('dokter.destroy',$dokter -> id_dokter) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn-yes" name="hapus">Yes</button>
        <a class="btn-no" href="{{ route('dokter.index') }}">No</a>
    </form>
</div>  
@endsection
