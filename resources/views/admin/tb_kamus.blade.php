@extends('layout.admin.sidebar')

@section('title','Tabel Kamus')

@section('container')
<!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Kapal</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
                            <a href="/admin/form_tambah_kata" class="btn btn-success"><i class="far fa-plus-square fa-1x"></i> Tambah Kata</a>
                            @if(session('status'))
                                <div class="alert alert-success mt-2">
                                    {{session('status')}}
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>KD Kata</th>
                                            <th>Indonesia</th>
                                            <th>Allang</th>
                                            <th>Kalimat Allang</th>
                                            <th>Kalimat Indo</th>
                                            <th>Singkatan</th>
                                            <th>Audio</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>KD Kata</th>
                                            <th>Indonesia</th>
                                            <th>Allang</th>
                                            <th>Kalimat Allang</th>
                                            <th>Kalimat Indo</th>
                                            <th>Singkatan</th>
                                            <th>Audio</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                       @foreach($tb_kamus as $kamus)
                                        <tr>
                                            <td>{{$kamus->id}}</td>
                                            <td>{{$kamus->indonesia}}</td>
                                            <td>{{$kamus->allang}}</td>
                                            <td>{{$kamus->kalimat_allang}}</td>
                                            <td>{{$kamus->kalimat_indo}}</td>
                                            <td>{{$kamus->singkatan}}</td>
                                            <td>{{$kamus->audio}}</td>
                                            <td>
                                                
                                                <a href="/admin/form_ubah_kata/{{$kamus->id}}" class="btn btn-primary mb-1"><i class="fas fa-edit fa-1x"></i></a> 
                                                <form method="post" action="/admin/hapus/{{$kamus->id}}" class="d-inline-block">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Yakin Ingin Hapus')"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


@endsection