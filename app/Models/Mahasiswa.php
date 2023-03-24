<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nilai_quis', 'nilai_tugas', 'nilai_absensi', 'nilai_praktek', 'nilai_uas'];

    public function getGradeAttribute()
    {
        $total_nilai = $this->nilai_quis + $this->nilai_tugas + $this->nilai_absensi + $this->nilai_praktek + $this->nilai_uas;

        if ($total_nilai <= 65) {
            return 'D';
        } elseif ($total_nilai <= 75) {
            return 'C';
        } elseif ($total_nilai <= 85) {
            return 'B';
        } else {
            return 'A';
        }
    }
}
