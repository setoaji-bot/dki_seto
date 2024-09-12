<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PengumumanController extends Controller
{
    public function create()
    {
        return view('pengumuman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pengumuman' => 'required|string|max:100',
            'kuota' => 'required|integer|max:99',
            'tanggal_batas_pendaftaran' => 'required|date',
            'deskripsi' => 'required|string',
            'penyelenggara' => 'required|string|max:50',
        ]);

        $response = Http::post('https://disppkukmdev.jakarta.go.id/pelatihan/api/submit-pengumuman', [
            'nama_pengumuman' => $request->nama_pengumuman,
            'kuota' => $request->kuota,
            'tanggal_batas_pendaftaran' => $request->tanggal_batas_pendaftaran,
            'deskripsi' => $request->deskripsi,
            'penyelenggara' => $request->penyelenggara,

        ]);

        if ($response->successful()) {
            //return redirect()->back()->with('success', 'Pengumuman submitted successfully!');
            return redirect()->back()->with('alert','hello');
        } else {
            return redirect()->back()->withErrors(['error' => 'Failed to submit pengumuman.']);
        }
    }
}

