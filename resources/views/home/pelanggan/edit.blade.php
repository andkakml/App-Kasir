@extends('layouts.master')
@section('title','APP Kasir | Edit Pelanggan')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Edit Data Pelanggan</h3>
                            <a href="/pelanggan" class="btn btn-warning">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Nama Pelanggan</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_pelanggan"
                                        id=""
                                        value="{{$pelanggan -> nama_pelanggan}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">No Telepon</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        id=""
                                        value="{{$pelanggan -> no_telp}}"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection