<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataTindakan;

class DataTindakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataTindakan::create([
            'nama_tindakan' => 'Pemeriksaan Umum',
            'deskripsi' => 'Pemeriksaan umum oleh dokter.',
            'biaya' => 50000.00,
        ]);

        DataTindakan::create([
            'nama_tindakan' => 'Pemeriksaan Gigi',
            'deskripsi' => 'Pemeriksaan gigi oleh dokter gigi.',
            'biaya' => 75000.00,
        ]);
    }
}
