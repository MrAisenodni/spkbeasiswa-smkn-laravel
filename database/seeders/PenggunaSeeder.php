<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data dummy
        $current_time = Carbon::now()->toDateTimeString();

        DB::table('pengguna')
            ->insert([
                [
                    'nama'      => 'Administrator',
                    'jenkel'    => 'l',
                    'email'     => 'administrator@gmail.com',
                    'no_hp'     => '085718093600',
                    'alamat'    => 'Jl Narogong Raya No 35, Kel Bojong Rawalumbu, Kec Rawalumbu, Kota Bekasi 17116',
                    'created_at'=> $current_time,
                    'created_by'=> 'Admin',
                ],
                [
                    'nama'      => 'User',
                    'jenkel'    => 'p',
                    'email'     => 'user@gmail.com',
                    'no_hp'     => '0895333093116',
                    'alamat'    => 'Jl Narogong Raya No 77, Kel Bojong Rawalumbu, Kec Rawalumbu, Kota Bekasi 17116',
                    'created_at'=> $current_time,
                    'created_by'=> 'Admin',
                ],
            ]);
    }
}
