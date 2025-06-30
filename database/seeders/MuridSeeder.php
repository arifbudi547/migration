<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\murid;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Menggunakan QueryBuilder untuk mengisi data
        // DB::table('murid')->insert([
        // //key => value
        // 'nama' => 'Arif',
        // 'prodi' => 'Teknik Informatika',
        // 'semester' => '4',
        // 'created_at' => new DateTime(),
        // 'updated_at' => new DateTime(),
        // ]);

        //Menggunakan Model untuk mengisi data
        $mhs = new murid();
        $mhs->nama = 'Arif Budi';
        $mhs->prodi = 'Teknik Informatika';
        $mhs->semester = 4;
        $mhs->created_at = new DateTime();
        $mhs->updated_at = new DateTime();
        $mhs->save();
    }
}
