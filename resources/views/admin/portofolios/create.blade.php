@extends('admin.layouts.master')
@section('title', 'Tambah Portfolio')

@section('content')
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tambah Portfolio</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <form action="/portfolio" method="POST" enctype="multipart/form-data">
                            @CSRF
                            <div class="card-body">
                            <div class="row">
                            <div class="col-8">
                            <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control @error('name')
                            is-invalid @enderror" placeholder="Masukkan judul" >
                            <small class="text-danger">@error('title') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            <div class="col-8">
                            <div class="form-group">
                            <label for="image_url">Link Gambar</label>
                            <input type="text" name="image_url" class="form-control @error('image_url')
                            is-invalid @enderror" placeholder="Masukkan Link Gambar" >
                            <small class="text-danger">@error('image_url') {{$message}}
                            @enderror</small>
                            </div>
                            </div>
                            </div>
                            </div>
                            <!-- /.row -->
                            <div class="card-footer">
                            <div class="d-flex justify-content-end">
                            <button type="submit" class="m-1 btn btn-success">Tambahkan</button>
                            </div>
                            </div>
                            </form>
                            </div>
                        </div>
                            
                        
                </main>
                @endsection

