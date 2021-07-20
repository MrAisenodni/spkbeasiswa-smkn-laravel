<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Dummy Table login
        $current_time = Carbon::now()->toDateTimeString();

        return DB::table('login')
                    ->insert([
                        [
                            'id_siswa'      => 1,
                            'username'      => 'user',
                            'password'      =>  Hash::make('user'),
                            'akses'         => 'usr',
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin',
                        ],
                        [
                            'id_pengguna'   => 1,
                            'username'      => 'admin',
                            'password'      => Hash::make('admin'),
                            'akses'         => 'adm',
                            'created_at'    => $current_time,
                            'created_by'    => 'Admin'
                        ]
                    ]);
    }
}
