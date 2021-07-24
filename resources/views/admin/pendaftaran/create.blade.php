@extends('layouts.admin')

@section('title', 'Tambah Siswa')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid center">
            <div class="row">
                <div class="col-md-12 bg-white">
                    <form method="POST" class="p-2 mb-2" action="/admin/pendaftaran">
                        @csrf
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="siswa">Nomor Induk Siswa</label>
                                <select name="siswa" id="siswa" class="form-control @error('siswa') is-invalid @enderror">
                                    @foreach ($siswa as $data)
                                        @if (old('siswa') == $data->id_siswa)
                                            <option value="{{ $data->id_siswa }}">{{ $data->nim }}</option>
                                        @endif
                                    @endforeach
                                    <option value="" hidden>--- PILIH NIS ---</option>
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id_siswa }}">{{ $data->nim }}</option>
                                    @endforeach
                                </select>
                                @error('siswa')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-9">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control" id="nama_siswa" value="{{ old('nama_siswa') }}" disabled>
                            </div>
                            @foreach ($kriteria as $data)
                                <div class="form-group col-6">
                                    <label for="{{ $data->kd_kriteria }}">{{ $data->nama }}</label>
                                    <select name="{{ $data->kd_kriteria }}" id="{{ $data->kd_kriteria }}" class="form-control @error($data->kd_kriteria) is-invalid @enderror">
                                        <option value="" hidden></option>
                                        @if ($data->id_kriteria == 1)
                                            @foreach ($subkriteria1 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 2)
                                            @foreach ($subkriteria2 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 3)
                                            @foreach ($subkriteria3 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 4)
                                            @foreach ($subkriteria4 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 5)
                                            @foreach ($subkriteria5 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 6)
                                            @foreach ($subkriteria6 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 7)
                                            @foreach ($subkriteria7 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 8)
                                            @foreach ($subkriteria8 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @elseif ($data->id_kriteria == 15)
                                            @foreach ($subkriteria15 as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                        @endif
                                        @error('{{ $data->kd_kriteria }}')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </select>
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <a href="/admin/pendaftaran">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fas fa-window-close"></i> Batal
                                </button>
                            </a>
                            <button type="submit" class="btn btn-primary" name="tambah">
                                <i class="fas fa-check"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection