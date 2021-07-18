<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;

class PageController extends Controller
{
    public function __construct() {
        $this->siswa = new SiswaModel();
    }

    // Dashboard Admin
    public function admin() {
        $data = [
            'csiswa'        => $this->siswa->getCount(),
        ];
        return view('admin.index', $data);
    }
}
