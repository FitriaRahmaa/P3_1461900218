<?php

namespace Database\Seeders;

use App\Models\dokter;
use Illuminate\Database\Seeder;

class dokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokter = new dokter();
        $dokter->nama_dokter = "Zam";
        $dokter->jabatan = "Dokter Umum";
        $dokter->save();
    }
}
