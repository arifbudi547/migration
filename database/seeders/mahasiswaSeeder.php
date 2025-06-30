<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class mahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $mhs = new Mahasiswa();
        $mhs->nama = 'Jack Smith';
        $mhs->prodi = 'Teknik Informatika';
        $mhs->semester = 8;
        $mhs->biodata = 'Mahasiswa aktif semester 8';
        $mhs->created_at = new DateTime();
        $mhs->updated_at = new DateTime();
        $mhs->save();
    }
}
