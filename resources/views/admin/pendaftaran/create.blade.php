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
                                    @foreach ($siswa as $item)
                                        @if (old('nis') == $item->id_siswa)
                                            <option value="{{ $item->id_siswa }}">{{ $data->nim }}</option>
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
                            <div class="form-group col-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
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