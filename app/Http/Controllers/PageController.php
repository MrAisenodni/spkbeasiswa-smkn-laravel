<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Dashboard Admin
    public function admin() {
        return view('admin.index');
    }
}
