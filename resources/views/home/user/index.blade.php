@extends('layouts.master')
@section('title','APP Kasir | User')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Data User</h3>
                            <a href="/user/tambah" class="btn btn-primary">Tambah Data</a>
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
                                            <th scope="col">Nama</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $user)
                                        <tr>
                                            <td>{{$loop ->iteration}}</td>
                                            <td>{{$user ->name}}</td>
                                            <td>{{$user ->email}}</td>
                                            <td>{{$user ->role}}</td>
                                            <td><a href="/user/{{$user->id}}/show" class="btn btn-warning">Edit</a> | 
                                                <a href="/user/{{$user->id}}/delete" class="btn btn-danger" onclick="return confirm('Yakin Akan dihapus?')">Delete</a></td>
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