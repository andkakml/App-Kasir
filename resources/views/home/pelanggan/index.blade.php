@extends('layouts.master')
@section('title','APP Kasir | Pelanggan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data Pelanggan</h3>
                            <a href="/pelanggan/tambah" class="btn btn-primary">Tambah Data</a>
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
                                            <th scope="col">Nama Pelanggan</th>
                                            <th scope="col">No Telepon</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pelanggan as $pelanggan)
                                        <tr>
                                            <td>{{$loop ->iteration}}</td>
                                            <td>{{$pelanggan -> nama_pelanggan}}</td>
                                            <td>{{$pelanggan -> no_telp}}</td>
                                            <td><a href="/pelanggan/{{$pelanggan->id}}/show" class="btn btn-warning">Edit</a> | 
                                                <a href="/pelanggan/{{$pelanggan->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin Akan dihapus?')">Delete</a></td>
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