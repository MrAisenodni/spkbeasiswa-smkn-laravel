<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubkriteriaModel extends Model
{
    public function getAllData() {
        return DB::table('subkriteria')
                    ->join('kriteria', 'subkriteria.id_kriteria', 'kriteria.id_kriteria')
                    ->select('kriteria.kd_kriteria', 'kriteria.nama AS nama_kriteria', 'subkriteria.*')
                    ->get();
    }

    public function getData($id) {
        return DB::table('subkriteria')
                    ->where('id_subkriteria', $id)
                    ->join('kriteria', 'subkriteria.id_kriteria', 'kriteria.id_kriteria')
                    ->select('kriteria.kd_kriteria', 'kriteria.nama AS nama_kriteria', 'subkriteria.*')
                    ->first();
    }

    public function getDataKriteria($item) {
        return DB::table('subkriteria')
                    ->where('id_kriteria', $item)
                    ->get();
    }

    public function getCount() {
        return DB::table('subkriteria')->count();
    }

    public function getSelectId() {
        return DB::table('subkriteria')
                    ->select('id_kriteria')
                    ->get();
    }

    public function tambahData($data) {
        return DB::table('subkriteria')
                    ->insert($data);
    }

    public function ubahData($data, $id) {
        return DB::table('subkriteria')
                    ->where('id_subkriteria', $id)
                    ->update($data);
    }

    public function hapusData($id) {
        return DB::table('subkriteria')
                    ->where('id_subkriteria', $id)
                    ->delete();
    }
}
