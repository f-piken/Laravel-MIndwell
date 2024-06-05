<?php

namespace App\Http\Controllers;

use App\Models\dokter;
use Illuminate\Http\Request;

class dokterController extends Controller
{
    public function index()
    {
        $dokter = dokter::all();
        return view('dokter.dokter', compact('dokter'));
    }

    public function create()
    {
        return view('dokter.dokter-input');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama' => 'required',
            'janji' => 'required',
            'gaji' => 'required',
        ]);

        dokter::create([
            'nama_dokter' => $request->nama,
            'jml_janji' => $request->janji,
            'gaji' => $request->gaji,
        ]);

        return redirect('/dokter');
    }

    public function edit($id_dokter)
    {
        $dokter = dokter::find($id_dokter);
        return view('dokter.dokter-edit', compact('dokter'));
    }

    public function update(Request $request, $id_dokter)
    {
        $request->validate([
            'nama' => 'required',
            'janji' => 'required',
            'gaji' => 'required',
        ]);

        $dokter = dokter::find($id_dokter);
        $dokter->update([
            'nama_dokter' => $request->nama,
            'jml_janji' => $request->janji,
            'gaji' => $request->gaji,
        ]);

        return redirect('/dokter');
    }

    public function delete($id_dokter)
    {
        $dokter = dokter::find($id_dokter);
        return view('dokter.dokter-hapus', compact('dokter'));
    }

    public function destroy($id_dokter)
    {
        $dokter = dokter::find($id_dokter);
        $dokter->delete();
        return redirect('/dokter');
    }
}
