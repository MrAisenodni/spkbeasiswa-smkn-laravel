@extends('layouts.admin')

@section('title', 'Detail Subsubkriteria')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid center">
            <div class="row">
                <div class="col-md-12 bg-white">
                    <form class="p-2 mb-2">
                        @csrf
                        <div class="form-group">
                            <label for="kd_kriteria">Kriteria</label>
                            <input type="text" class="form-control" id="kd_kriteria" value="{{ $subkriteria->kd_kriteria }} | {{ $subkriteria->nama_kriteria }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="nama_subkriteria">Nama Subsubkriteria</label>
                            <input type="text" class="form-control" id="nama_subkriteria" value="{{ $subkriteria->nama }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="bobot_subkriteria">Bobot Subsubkriteria</label>
                            <input type="text" class="form-control" id="bobot_subkriteria" value="{{ $subkriteria->bobot }}" disabled>
                        </div>
                            <div class="modal-footer">
                                <a href="/admin/subkriteria">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    <i class="fas fa-window-close"></i> Kembali
                                    </button>
                                </a>
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