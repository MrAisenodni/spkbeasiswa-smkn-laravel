<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RankModel;
use App\Models\FileModel;
use App\Models\SiswaModel;
use App\Models\KriteriaModel;
use App\Models\SubkriteriaModel;
use Carbon\Carbon;

class PendaftaranController extends Controller
{
    public function __construct() {
        $this->rank         = new RankModel();
        $this->file         = new FileModel();
        $this->siswa        = new SiswaModel();
        $this->kriteria     = new KriteriaModel();
        $this->subkriteria  = new SubkriteriaModel();
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
            'rank'      => $this->rank->getAllData(),
        ];

        return view('admin.pendaftaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan Halaman Tambah
        $data1 = [
            'siswa'         => $this->siswa->getAllData(),
            'kriteria'      => $this->kriteria->getAllData(),
            // 'ckriteria'     => $this->kriteria->getCount(),
            'skriteria'     => $this->subkriteria->getSelectId(),
        ];

        $item = $this->kriteria->getSelectId();

        for ($i = 0; $i < $this->kriteria->getCount(); $i++) {
            $id = $item[$i]->id_kriteria;
             
            $data2 = [
                'subkriteria'.$id   => $this->subkriteria->getDataKriteria($id),
            ];

            $data = $data1 + $data2;
            $data1 = $data;    
        }
        // dd($data);

        return view('admin.pendaftaran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Menambahkan Data ke dalam Database
        $data = [
            'penghasilan'       => $request->C1,
            'kepemilikan'       => $request->C2,
            'kondisi'       => $request->C3,
            'anggota'       => $request->C4,
            'kendaraan'       => $request->C5,
            'kebutuhan'       => $request->C6,
            'pembayaran'       => $request->C7,
            'jarak'       => $request->C8,
            'total'         => ($request->C1+$request->C2),
            'created_at'    => $this->current_time,
            'created_by'    => 'Admin',
        ];
        dd($data);

        $save = $this->rank->tambahData($data);

        if ($save) {
            redirect('/admin/pendaftaran')->with('status', 'Data siswa berhasil ditambahkan.');
        } else {
            redirect('/admin/pendaftaran')->with('error', 'Data siswa gagal ditambahkan.');
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
