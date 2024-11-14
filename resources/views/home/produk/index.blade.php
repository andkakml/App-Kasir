@extends('layouts.master')
@section('title','APP Kasir | Produk')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Produk</h3>
                            <a href="/produk/tambah" class="btn btn-primary">Tambah Data</a>
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
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stok</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produk as $produk)
                                        <tr>
                                            <td>{{$loop ->iteration}}</td>
                                            <td>{{$produk -> nama_produk}}</td>
                                            <td>Rp.{{number_format($produk -> harga)}}</td>
                                            <td>{{$produk -> stok}}</td>
                                            <td><a href="/produk/{{$produk->id}}/show" class="btn btn-warning">Edit</a> | 
                                                <a href="/produk/{{$produk->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin Akan dihapus?')">Delete</a></td>
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