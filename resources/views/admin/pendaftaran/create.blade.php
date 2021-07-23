@extends('layouts.admin')

@section('title', 'Tambah Siswa')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid center">
            <div class="row">
                <div class="col-md-12 bg-white">
                    <form method="POST" class="p-2 mb-2" action="/admin/siswa">
                        @csrf
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="nis">Nomor Induk Siswa</label>
                                <select name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror">
                                    @foreach ($siswa as $data)
                                        @if (old('nis') == $data->id_siswa)
                                            <option value="{{ $data->id_siswa }}">{{ $data->nim }}</option>
                                        @endif
                                    @endforeach
                                    <option value="" hidden>--- PILIH NIS ---</option>
                                    @foreach ($siswa as $data)
                                        <option value="{{ $data->id_siswa }}">{{ $data->nim }}</option>
                                    @endforeach
                                </select>
                                @error('nis')
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
                                        {{-- @while ($subkriteria.$data->id_kriteria)
                                            
                                        @endwhile --}}
                                            @foreach ($subkriteria = '$subkriteria'.$data->id_kriteria as $data)
                                                <option value="{{ $data->bobot }}">{{ $data->nama }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <a href="/admin/siswa">
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