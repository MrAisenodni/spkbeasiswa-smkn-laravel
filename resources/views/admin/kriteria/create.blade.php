@extends('layouts.admin')

@section('title', 'Kriteria')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid center">
            <div class="row">
                <div class="col-md-12 bg-white">
                    <form method="POST" class="p-2 mb-2" action="/admin/kriteria">
                        @csrf
                        <div class="form-group">
                            <label for="kd_kriteria">Kode Kriteria</label>
                            <input type="text" class="form-control @error('kd_kriteria') is-invalid @enderror" id="kd_kriteria" name="kd_kriteria" value="{{ old('kd_kriteria') }}">
                            @error('kd_kriteria')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_kriteria">Nama Kriteria</label>
                            <input type="text" class="form-control @error('nama_kriteria') is-invalid @enderror" id="nama_kriteria" name="nama_kriteria" value="{{ old('nama_kriteria') }}">
                            @error('nama_kriteria')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bobot_kriteria">Bobot Kriteria</label>
                            <input type="text" class="form-control @error('bobot_kriteria') is-invalid @enderror" id="bobot_kriteria" name="bobot_kriteria" value="{{ old('bobot_kriteria') }}">
                            @error('nama_kriteria')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="modal-footer">
                                <a href="/admin/kriteria">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    <i class="fas fa-window-close"></i> Batal
                                    </button>
                                </a>
                                <button type="submit" class="btn btn-primary" name="tambah">
                                    <i class="fas fa-check"></i> Simpan
                                </button>
                            </div>
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