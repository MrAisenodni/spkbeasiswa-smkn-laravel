<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiswaModel extends Model
{
    public function getAllData() {
        return DB::table('siswa')->get();
    }

    public function getCount() {
        return DB::table('siswa')->count();
    }
}
