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
                            <input type="text" class="form-control" id="kd_kriteria" name="kd_kriteria" value="{{ old('kd_kriteria') }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Kriteria</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label for="bobot">Bobot Kriteria</label>
                            <input type="text" class="form-control" id="bobot" name="bobot" value="{{ old('bobot') }}">
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