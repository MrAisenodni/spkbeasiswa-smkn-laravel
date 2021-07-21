@extends('layouts.admin')

@section('title', 'Ranking')
    
@section('container')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- col button -->
                <div class="col-lg-9">
                    <a href="/admin/rank/laporan" class="btn btn-info"><i class="fa fa-file-pdf"></i> Laporan Ranking</a>
                    <br><br>
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
                                    <th class="border border-secondary">Total</th>
                                    <th class="border border-secondary">Status</th>
                                    <th class="border border-secondary" width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rank as $data)
                                    <tr class="text-center">
                                        <td class="border border-secondary">{{ $loop->iteration }}</td>
                                        <td class="border border-secondary">{{ $data->nim }}</td>
                                        <td class="border border-secondary">{{ $data->nama }}</td>
                                        <td class="border border-secondary">{{ $data->total }}</td>
                                        <td class="border border-secondary">
                                            @if ($data->total > 75)
                                                <p class="text-success">DITERMA</p>
                                            @elseif ($data->total > 50 && $data->total <= 75)
                                                <p class="text-warning">DIPERTIMBANGKAN</p>
                                            @else
                                                <p class="text-danger">DITOLAK</p>
                                            @endif    
                                        </td>
                                        <td class="border border-secondary">
                                            {{-- <a href="/admin/rank/{{ $data->id_rank }}/edit" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a> --}}
                                            <a href="/admin/rank/{{ $data->id_rank }}" class="btn btn-info">
                                                <i class="fas fa-list"></i>
                                            </a>
                                            {{-- <form method="POST" action="/admin/rank/{{ $data->id_rank }}" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form> --}}
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