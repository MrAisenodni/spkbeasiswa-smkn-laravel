<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RankModel extends Model
{
    public function getAllData() {
        return DB::table('rank')
                    ->join('siswa', 'siswa.id_siswa', 'rank.id_siswa')
                    ->get();
    }

    public function getCount() {
        return DB::table('rank')->count();
    }

    public function getCountData($data) {
        if ($data == 'y') {
            return DB::table('rank')
                        ->where('total', '>', 75)
                        ->count();
        } else if ($data == 'm') {
            return DB::table('rank')
                        ->where('total', '<=', 75)
                        ->where('total', '>', 50)
                        ->count();
        } else {
            return DB::table('rank')
                        ->where('total', '<=', 50)
                        ->count();
        }
    }
}
