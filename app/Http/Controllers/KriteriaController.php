<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KriteriaModel;
use Carbon\Carbon;

class KriteriaController extends Controller
{
    public function __construct() {
        $this->kriteria         = new KriteriaModel();
        $this->current_time     = Carbon::now()->toDateTimeString();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan Halaman Kriteria
        $data = [
            'kriteria'      => $this->kriteria->getAllData(),
        ];

        return view('admin.kriteria.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan Halaman Tambah Kriteria
        return view('admin.kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        $validated = $request->validate([
            'kd_kriteria'   => 'required|max:4|unique:kriteria,kd_kriteria',
            'nama_kriteria' => 'required',
            'bobot_kriteria'=> 'required|numeric',
        ]);

        $data = [
            'kd_kriteria'   => $request->kd_kriteria,
            'nama'          => $request->nama_kriteria,
            'bobot'         => $request->bobot_kriteria,
            'created_at'    => $this->current_time,
            'created_by'    => 'Admin',
        ];

        $save = $this->kriteria->tambahData($data);

        if ($save) {
            return redirect('/admin/kriteria')->with('status', 'Data kriteria berhasil ditambahkan.');
        } else {
            return redirect('/admin/kriteria')->with('error', 'Data kriteria gagal ditambahkan.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
