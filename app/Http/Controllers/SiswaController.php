<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use Carbon\Carbon;

class SiswaController extends Controller
{
    public function __construct() {
        $this->siswa            = new SiswaModel();
        $this->current_time     = Carbon::now()->toDateTimeString();
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
            'siswa'     => $this->siswa->getAllData(),
        ];
        return view('admin.siswa.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan Halaman Tambah
        return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambah Data ke dalam Database
        $validation = $request->validate([
            'nis'           => 'required|unique:siswa,nim|numeric',
            'nama_siswa'    => 'required',
            'jenkel'        => 'required',
            'no_hp'         => 'required|numeric|digits_between:12,13',
            'email'         => 'required|unique:siswa,email|email',
            'alamat'        => 'required',
        ]);

        $data = [
            'nim'           => $request->nis,
            'nama'          => $request->nama_siswa,
            'jenkel'        => $request->jenkel,
            'no_hp'         => $request->no_hp,
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'created_at'    => $this->current_time,
            'created_by'    => 'Admin',
        ];

        $save = $this->siswa->tambahData($data);

        if ($save) {
            return redirect('/admin/siswa')->with('status', 'Data siswa berhasil ditambahkan.');
        } else {
            return redirect('/admin/siswa')->with('error', 'Data siswa gagal ditambahkan.');
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
            'siswa'         => $this->siswa->getData($id),
        ];

        return view('admin.siswa.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Menampilkan Halaman Edit
        $data = [
            'siswa'         => $this->siswa->getData($id),
        ];

        return view('admin.siswa.edit', $data);
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
        // Mengubah Data ke dalam Database
        $validation = $request->validate([
            'nis'           => 'required|unique:siswa,nim,'.$id.',id_siswa|numeric',
            'nama_siswa'    => 'required',
            'jenkel'        => 'required',
            'no_hp'         => 'required|numeric|digits_between:12,13',
            'email'         => 'required|unique:siswa,email,'.$id.',id_siswa|email',
            'alamat'        => 'required',
        ]);

        $data = [
            'nim'           => $request->nis,
            'nama'          => $request->nama_siswa,
            'jenkel'        => $request->jenkel,
            'no_hp'         => $request->no_hp,
            'email'         => $request->email,
            'alamat'        => $request->alamat,
            'updated_at'    => $this->current_time,
            'updated_by'    => 'Admin',
        ];

        $save = $this->siswa->ubahData($data, $id);

        if ($save) {
            return redirect('/admin/siswa')->with('status', 'Data siswa berhasil diubah.');
        } else {
            return redirect('/admin/siswa')->with('error', 'Data siswa gagal diubah.');
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
        //
    }
}
