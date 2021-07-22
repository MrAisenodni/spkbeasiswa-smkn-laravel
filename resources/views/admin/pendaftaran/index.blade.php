@extends('layouts.admin')

@section('title', 'Pendaftaran')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- col button -->
                <div class="col-lg-9">
                    <a href="/admin/pendaftaran/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Pendaftaran</a>
                    <br><br>
                </div>
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                </div>
                <!-- ./col -->
                <div class="col-lg-12 col-12">
                    <!-- small box -->
                    <div class="table-responsive">
                        <table id="data-table" class="table table-striped table-hover border border-secondary" width="99.5%">
                            <thead>
                                <tr class="text-center bg-white">
                                    <th class="border border-secondary">No.</th>
                                    <th class="border border-secondary">NIS</th>
                                    <th class="border border-secondary">Nama</th>
                                    <th class="border border-secondary">Jenis Kelamin</th>
                                    <th class="border border-secondary" width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendaftaran as $data)
                                    <tr class="text-center">
                                        <td class="border border-secondary">{{ $loop->iteration }}</td>
                                        <td class="border border-secondary">{{ $data->nim }}</td>
                                        <td class="border border-secondary">{{ $data->nama }}</td>
                                        <td class="border border-secondary">
                                            @if ($data->jenkel == 'l')
                                                Laki-laki
                                            @else
                                                Permpuan
                                            @endif
                                        </td>
                                        <td class="border border-secondary">
                                            <a href="/admin/pendaftaran/{{ $data->id_pendaftaran }}/edit" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="/admin/pendaftaran/{{ $data->id_pendaftaran }}" class="btn btn-info">
                                                <i class="fas fa-list"></i>
                                            </a>
                                            <form method="POST" action="/admin/pendaftaran/{{ $data->id_pendaftaran }}" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>          
                    </div>
                </div>
                <!-- ./col -->
            </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection