<?php

namespace Database\Seeders;

use App\Models\pasien;
use Illuminate\Database\Seeder;

class pasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasien1 = new pasien();
        $pasien1->nama_pasien = "Arif";
        $pasien1->alamat = "Sidoarjo";
        $pasien1->save();

        $pasien2 = new pasien();
        $pasien2->nama_pasien = "Ade";
        $pasien2->alamat = "Surabaya";
        $pasien2->save();
    }
}
