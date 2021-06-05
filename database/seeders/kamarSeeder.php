<?php

namespace Database\Seeders;

use App\Models\kamar;
use Illuminate\Database\Seeder;

class kamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar1 = new kamar();
        $kamar1->id_pasien = "2";
        $kamar1->id_dokter = "1";
        $kamar1->save();

        $kamar2 = new kamar();
        $kamar2->id_pasien = "1";
        $kamar2->id_dokter = "1";
        $kamar2->save();
    }
}
