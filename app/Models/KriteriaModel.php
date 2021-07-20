<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KriteriaModel extends Model
{
    public function getAllData() {
        return DB::table('kriteria')->get();
    }

    public function getData($id) {
        return DB::table('kriteria')
                    ->where('id_kriteria', $id)
                    ->first();
    }

    public function tambahData($data) {
        return DB::table('kriteria')->insert($data);
    }

    public function ubahData($data, $id) {
        return DB::table('kriteria')
                    ->where('id_kriteria', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('kriteria')
                    ->where('id_kriteria', $id)
                    ->delete();
    }
}
