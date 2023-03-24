<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Http\Controllers\MahasiswaController;


class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $grade_count = [
            'A' => 0,
            'B' => 0,
            'C' => 0,
            'D' => 0
        ];

        foreach ($mahasiswa as $m) {
            if ($m->nilai <= 65) {
                $grade_count['D']++;
            } elseif ($m->nilai <= 75) {
                $grade_count['C']++;
            } elseif ($m->nilai <= 85) {
                $grade_count['B']++;
            } else {
                $grade_count['A']++;
            }
        }

        return view('mahasiswa.index', compact('mahasiswa', 'grade_count'));
    }

    public function laporanGrade()
{
    // Contoh sederhana untuk menghitung jumlah grade berdasarkan kondisi yang telah ditentukan
    $grade_count = [
        'A' => Mahasiswa::where('nilai_uas', '>=', 85)->count(),
        'B' => Mahasiswa::whereBetween('nilai_uas', [70, 84])->count(),
        'C' => Mahasiswa::whereBetween('nilai_uas', [55, 69])->count(),
        'D' => Mahasiswa::where('nilai_uas', '<', 55)->count(),
    ];

    return view('mahasiswa.laporan_grade', compact('grade_count'));
}

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->nilai_quis = $request->nilai_quis;
        $mahasiswa->nilai_tugas = $request->nilai_tugas;
        $mahasiswa->nilai_absensi = $request->nilai_absensi;
        $mahasiswa->nilai_praktek = $request->nilai_praktek;
        $mahasiswa->nilai_uas = $request->nilai_uas;
        $mahasiswa->save();

        return redirect('/mahasiswa');
    }
        // Untuk menampilkan mahasiswa/create
        
        public function create()
        {
            return view('mahasiswa.create');
        }
        
        // ...
    
}

