<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubkriteriaModel;
use App\Models\KriteriaModel;
use Carbon\Carbon;

class SubkriteriaController extends Controller
{
    public function __construct() {
        $this->subkriteria  = new SubkriteriaModel();
        $this->kriteria     = new KriteriaModel();
        $this->current_time = Carbon::now()->toDateTimeString();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Menampilkan Halaman Utama
        $data = [
            'subkriteria'      => $this->subkriteria->getAllData(),
        ];

        return view('admin.subkriteria.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan Halaman Tambah
        $data = [
            'kriteria'      => $this->kriteria->getAllData(),
        ];

        return view('admin.subkriteria.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambahkan Data ke dalam Tabel
        $validated = $request->validate([
            'kd_kriteria'       => 'required',
            'nama_subkriteria'  => 'required',
            'bobot_subkriteria' => 'required|numeric'
        ]);

        $data = [
            'id_kriteria'       => $request->kd_kriteria,
            'nama'              => $request->nama_subkriteria,
            'bobot'             => $request->bobot_subkriteria,
            'created_at'        => $this->current_time,
            'created_by'        => 'Admin',
        ];

        $save = $this->subkriteria->tambahData($data);

        if ($save) {
            return redirect('/admin/subkriteria')->with('status', 'Data subkriteria berhasil ditambahkan.');
        } else {
            return redirect('/admin/subkriteria')->with('error', 'Data subkriteria gagal ditambahkan.');
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
        // Menampilkan Halaman Detail
        $data = [
            'subkriteria'       => $this->subkriteria->getData($id),
        ];

        return view('admin.subkriteria.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Menampilkan Halaman Ubah
        $data = [
            'kriteria'          => $this->kriteria->getAllData(),
            'subkriteria'       => $this->subkriteria->getData($id),
        ];

        return view('admin.subkriteria.edit', $data);
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
        // Mengubah Data pada Tabel
        $validated = $request->validate([
            'kd_kriteria'       => 'required',
            'nama_subkriteria'  => 'required',
            'bobot_subkriteria' => 'required|numeric'
        ]);

        $data = [
            'id_kriteria'       => $request->kd_kriteria,
            'nama'              => $request->nama_subkriteria,
            'bobot'             => $request->bobot_subkriteria,
            'updated_at'        => $this->current_time,
            'updated_by'        => 'Admin',
        ];

        $save = $this->subkriteria->ubahData($data, $id);

        if ($save) {
            return redirect('/admin/subkriteria')->with('status', 'Data subkriteria berhasil diubah.');
        } else {
            return redirect('/admin/subkriteria')->with('error', 'Data subkriteria gagal diubah.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Menghapus Data dari Database
        $save = $this->subkriteria->hapusData($id);

        if ($save) {
            return redirect('/admin/subkriteria')->with('status', 'Data subkriteria berhasil dihapus.');
        } else {
            return redirect('/admin/subkriteria')->with('error', 'Data subkriteria gagal dihapus.');
        }
    }
}
