<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use App\Models\RankModel;

class PageController extends Controller
{
    public function __construct() {
        $this->siswa    = new SiswaModel();
        $this->rank     = new RankModel();
    }

    // Dashboard Admin
    public function admin() {
        $data = [
            'csiswa'        => $this->siswa->getCount(),
            'cyrank'        => $this->rank->getCountData('y'),
            'cmrank'        => $this->rank->getCountData('m'),
            'cnrank'        => $this->rank->getCountData('n'),
        ];
        return view('admin.index', $data);
    }
}
