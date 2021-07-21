<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_time = Carbon::now()->toDateTimeString();

        return DB::table('siswa')
                    ->insert([
                        [
                            'nim'       => '1710512010',
                            'jenkel'    => 'p',
                            'nama'      => 'Siti Fatimah',
                            'email'     => 's.fatmagn9@gmail.com',
                            'no_hp'     => '0895333093116',
                            'alamat'    => 'Jl Masjid No 31',
                            'created_at'=> $current_time,
                            'created_by'=> 'Admin',
                        ],
                    ]);
    }
}
