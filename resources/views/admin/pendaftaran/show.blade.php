@extends('layouts.admin')

@section('title', 'Detail Siswa')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid center">
            <div class="row">
                <div class="col-md-12 bg-white">
                    <form class="p-2 mb-2">
                        @csrf
                        <div class="row">
                            <div class="form-group col-3">
                                <label for="nis">Nomor Induk Siswa</label>
                                <input type="text" class="form-control" id="nis" value="{{ $siswa->nim }}" disabled>
                            </div>
                            <div class="form-group col-9">
                                <label for="nama_siswa">Nama Siswa</label>
                                <input type="text" class="form-control" id="nama_siswa" value="{{ $siswa->nama }}" disabled>
                            </div>
                            <div class="form-group col-3">
                                <label for="jenkel">Jenis Kelamin</label>
                                <select name="jenkel" id="jenkel" class="form-control" disabled>
                                    @if ($siswa->jenkel == 'l')
                                        <option value="l">Laki-Laki</option>
                                    @elseif ($siswa->jenkel == 'p')
                                        <option value="p">Perempuan</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-3">
                                <label for="no_hp">Nomor HP</label>
                                <input type="text" class="form-control" id="no_hp" value="{{ $siswa->no_hp }}" disabled>
                            </div>
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" value="{{ $siswa->email }}" disabled>
                            </div>
                            <div class="form-group col-12">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" disabled id="alamat" cols="30" rows="5">{{ $siswa->alamat }}</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="/admin/siswa">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                <i class="fas fa-window-close"></i> Kembali
                                </button>
                            </a>
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