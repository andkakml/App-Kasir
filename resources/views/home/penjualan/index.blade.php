@extends('layouts.master')
@section('title','APP Kasir | Penjualan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Penjualan</h3>
                            <a href="/penjualan/tambah" class="btn btn-primary">Tambah Data</a> |
                            <a href="" class="btn btn-primary">Cetak Laporan</a>
                        </div>
                        <div class="card-body">
                            <div
                                class="table-responsive"
                                
                            >
                                <table
                                    class="table table-bordered table-striped"
                                >
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">Kasir</th>
                                            <th scope="col">Total Harga</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penjualan as $penjualan)
                                        <tr>
                                            <td>{{$penjualan ->tgl_penjualan}}</td>
                                            <td>{{$penjualan ->pelanggan->nama_pelanggan}}</td>
                                            <td>{{$penjualan ->user->name}}</td>
                                            <td>Rp.{{number_format($penjualan->total_harga)}}</td>     
                                            <td><a href="/detailpenjualan" class="btn btn-primary">Detail</a>
                                                <a href="/penjualan/struk" class="btn btn-primary">Cetak Struk</a> |    
                                                <a href="/penjualan/{{$penjualan->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin Akan dihapus?')">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection