<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Dummy Table kriteria
        $current_time = Carbon::now()->toDateTimeString();

        return DB::table('kriteria')
                    ->insert([
                        [
                            'kd_kriteria'   => 'C1',
                            'nama'          => 'Penghasilan Orang Tua',
                            'bobot'         => 0.228,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                        [
                            'kd_kriteria'   => 'C2',
                            'nama'          => 'Kepemilikan Tempat Tinggal',
                            'bobot'         => 0.20,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                        [
                            'kd_kriteria'   => 'C3',
                            'nama'          => 'Kondisi Tempat Tinggal',
                            'bobot'         => 0.20,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                        [
                            'kd_kriteria'   => 'C4',
                            'nama'          => 'Anggota Keluarga Ditanggung',
                            'bobot'         => 0.086,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                        [
                            'kd_kriteria'   => 'C5',
                            'nama'          => 'Kepemilikan Kendaraan',
                            'bobot'         => 0.114,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                        [
                            'kd_kriteria'   => 'C6',
                            'nama'          => 'Kebutuhan Pokok',
                            'bobot'         => 0.057,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                        [
                            'kd_kriteria'   => 'C7',
                            'nama'          => 'Pembayaran Listrik & PDAM',
                            'bobot'         => 0.057,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                        [
                            'kd_kriteria'   => 'C8',
                            'nama'          => 'Jarak Rumah ke Sekolah',
                            'bobot'         => 0.057,
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ],
                    ]);
    }
}
