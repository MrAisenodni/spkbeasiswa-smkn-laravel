@extends('layouts.admin')

@section('title', 'Ubah Siswa')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid center">
            <div class="row">
                <div class="col-md-12 bg-white">
                    <form method="POST" class="p-2 mb-2" action="/admin/siswa/{{ $siswa->id_siswa }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="nis">Nomor Induk Siswa</label>
                                <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ $siswa->nim }}">
                                @error('nis')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-9">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control @error('nama_siswa') is-invalid @enderror" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama }}">
                                @error('nama_siswa')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="jenkel">Jenis Kelamin</label>
                                <select name="jenkel" id="jenkel" class="form-control @error('jenkel') is-invalid @enderror">
                                    @if (old('jenkel') == 'l')
                                        <option value="l">Laki-Laki</option>
                                    @elseif (old('jenkel') == 'p')
                                        <option value="p">Perempuan</option>
                                    @endif
                                    <option value="{{ $siswa->jenkel }}" hidden>
                                        @if ($siswa->jenkel == 'l')
                                            Laki-Laki
                                        @else
                                            Perempuan
                                        @endif
                                    </option>
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                                @error('jenkel')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-3">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ $siswa->no_hp }}">
                                @error('no_hp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $siswa->email }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-12">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="30" rows="5">{{ $siswa->alamat }}</textarea>
                                @error('alamat')
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