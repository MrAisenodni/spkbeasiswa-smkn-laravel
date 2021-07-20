@extends('layouts.admin')

@section('title', 'Ubah Subkriteria')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid center">
            <div class="row">
                <div class="col-md-12 bg-white">
                    <form method="POST" class="p-2 mb-2" action="/admin/subkriteria/{{ $subkriteria->id_subkriteria }}">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="kd_kriteria">Kriteria</label>
                            <select name="kd_kriteria" id="kd_kriteria" class="form-control @error('kd_kriteria') is-invalid @enderror">
                                @foreach ($kriteria as $data)
                                    @if (old('kd_kriteria') == $data->id_kriteria)
                                        <option value="{{ $data->id_kriteria }}">{{ $data->kd_kriteria }} | {{ $data->nama }}</option>
                                    @endif
                                @endforeach
                                <option value="{{ $subkriteria->id_kriteria }}" hidden>{{ $subkriteria->kd_kriteria }} | {{ $subkriteria->nama_kriteria }}</option>
                                @foreach ($kriteria as $data)
                                    <option value="{{ $data->id_kriteria }}">{{ $data->kd_kriteria }} | {{ $data->nama }}</option>
                                @endforeach
                            </select>
                            @error('kd_kriteria')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_subkriteria">Nama Subkriteria</label>
                            <input type="text" class="form-control @error('nama_subkriteria') is-invalid @enderror" id="nama_subkriteria" name="nama_subkriteria" value="{{ $subkriteria->nama }}">
                            @error('nama_subkriteria')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="bobot_subkriteria">Bobot Subkriteria</label>
                            <input type="text" class="form-control @error('bobot_subkriteria') is-invalid @enderror" id="bobot_subkriteria" name="bobot_subkriteria" value="{{ $subkriteria->bobot }}">
                            @error('bobot_subkriteria')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="modal-footer">
                                <a href="/admin/subkriteria">
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