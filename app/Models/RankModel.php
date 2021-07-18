<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RankModel extends Model
{
    public function getAllData() {
        return DB::table('rank')->get();
    }

    public function getCount() {
        return DB::table('rank')->count();
    }
}
