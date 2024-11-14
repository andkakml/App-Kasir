@extends('layouts.master')
@section('title','APP Kasir | Tambah Penjualan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Penjualan</h3>
                            <a href="/Penjualan" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/penjualan/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Pilih Pelanggan</label>
                                    <select
                                        class="form-select form-select-lg form-control"
                                        name="id_pelanggan"
                                        id=""
                                    >
                                        <option selected>Pilih salah satu</option>
                                        @foreach($pelanggan as $pelanggan)
                                        <option value="{{$pelanggan-> id}}">{{$pelanggan->nama_pelanggan}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Pilih Kasir</label>
                                    <select
                                        class="form-select form-select-lg form-control"
                                        name="id_user"
                                        id=""
                                    >
                                        <option selected>Pilih salah satu</option>
                                        @foreach($user as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Tanggal Penjualan</label>
                                    <input
                                        type="date"
                                        class="form-control"
                                        name="tgl_penjualan"
                                        id=""
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection