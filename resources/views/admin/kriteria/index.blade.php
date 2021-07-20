@extends('layouts.admin')

@section('title', 'Kriteria')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- col button -->
                <div class="col-lg-9">
                    <a href="/admin/kriteria/create" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Kriteria</a>
                    <br><br>
                </div>
                <!-- ./col -->
                <div class="col-lg-12 col-12">
                    <!-- small box -->
                    <div class="table-responsive">
                        <table class="table table-striped table-hover border border-secondary">
                            <thead>
                                <tr class="text-center bg-white">
                                    <th class="border border-secondary">No.</th>
                                    <th class="border border-secondary">Kode Kriteria</th>
                                    <th class="border border-secondary">Nama Kriteria</th>
                                    <th class="border border-secondary">Bobot Kriteria</th>
                                    <th class="border border-secondary" width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria as $data)
                                    <tr class="text-center">
                                        <td class="border border-secondary">{{ $loop->iteration }}</td>
                                        <td class="border border-secondary">{{ $data->kd_kriteria }}</td>
                                        <td class="border border-secondary">{{ $data->nama }}</td>
                                        <td class="border border-secondary">{{ $data->bobot }}</td>
                                        <td class="border border-secondary">
                                            <a href="/admin/kriteria/{{ $data->id_kriteria }}/edit" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="/admin/kriteria/{{ $data->id_kriteria }}" class="btn btn-info">
                                                <i class="fas fa-list"></i>
                                            </a>
                                            <form action="/admin/kriteria/{{ $data->id_kriteria }}" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <a class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
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