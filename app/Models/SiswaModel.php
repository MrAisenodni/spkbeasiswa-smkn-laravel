<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public function getAllData() {
        return DB::table('siswa')->get();
    }

    public function getData($id) {
        return DB::table('siswa')
                    ->where('id_siswa', $id)
                    ->first();
    }

    public function getCount() {
        return DB::table('siswa')->count();
    }

    public function tambahData($data) {
        return DB::table('siswa')->insert($data);
    }
}
