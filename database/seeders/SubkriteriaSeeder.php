<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SubkriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Dummy Table subkriteria
        $current_time = Carbon::now()->toDateTimeString();

        return DB::table('subkriteria')
                    ->insert([
                        [
                            'id_kriteria'   => 1,
                            'nama'          => '< Rp 1.500.000',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 1,
                            'nama'          => 'Rp 1.500.000 - Rp 3.000.000',
                            'bobot'         => 80,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 1,
                            'nama'          => 'Rp 3.000.001 - Rp 4.500.000',
                            'bobot'         => 40,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 1,
                            'nama'          => 'Rp 4.500.001 - Rp 5.500.000',
                            'bobot'         => 20,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 1,
                            'nama'          => '> Rp 5.500.000',
                            'bobot'         => 0,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 2,
                            'nama'          => 'Kontrak',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 2,
                            'nama'          => 'Bukan Milik Sendiri',
                            'bobot'         => 75,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 2,
                            'nama'          => 'Milik Keluarga Besar',
                            'bobot'         => 50,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 2,
                            'nama'          => 'Milik Sendiri',
                            'bobot'         => 25,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 3,
                            'nama'          => 'Non Permanen',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 3,
                            'nama'          => 'Semi Permanen',
                            'bobot'         => 60,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 3,
                            'nama'          => 'Permanen',
                            'bobot'         => 20,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 4,
                            'nama'          => '> 5',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 4,
                            'nama'          => '5',
                            'bobot'         => 75,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 4,
                            'nama'          => '4',
                            'bobot'         => 50,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 4,
                            'nama'          => '3',
                            'bobot'         => 25,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 4,
                            'nama'          => '<3',
                            'bobot'         => 0,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 5,
                            'nama'          => 'Tidak Punya',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 5,
                            'nama'          => 'Sepeda',
                            'bobot'         => 80,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 5,
                            'nama'          => 'Motor',
                            'bobot'         => 40,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 5,
                            'nama'          => 'Motor > 1',
                            'bobot'         => 0,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 6,
                            'nama'          => 'Rp 10.000 - Rp 25.000',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 6,
                            'nama'          => 'Rp 25.0001 - Rp 40.000',
                            'bobot'         => 75,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 6,
                            'nama'          => 'Rp 40.001 - Rp 55.000',
                            'bobot'         => 50,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 6,
                            'nama'          => '> Rp 55.000',
                            'bobot'         => 25,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 7,
                            'nama'          => '< Rp 100.000',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 7,
                            'nama'          => 'Rp 100.000 - Rp 200.000',
                            'bobot'         => 75,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 7,
                            'nama'          => 'Rp 200.001 - Rp 300.000',
                            'bobot'         => 50,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 7,
                            'nama'          => '> Rp 300.000',
                            'bobot'         => 25,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 8,
                            'nama'          => '> 2 KM',
                            'bobot'         => 100,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 8,
                            'nama'          => '1-2 KM',
                            'bobot'         => 60,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_kriteria'   => 8,
                            'nama'          => '< 1 KM',
                            'bobot'         => 40,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                    ]);
    }
}
