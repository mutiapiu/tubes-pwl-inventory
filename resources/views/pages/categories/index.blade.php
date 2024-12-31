@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Jenis Barang</h1>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="/categories/create" class="btn btn-sm btn-primary" >
                        Tambah Jenis
                    </a>
                </div>
                <div class="card body">
                    <table class="table table-bordered" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Barang</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <div class="d-flex" >
                                        <a href="/categories/edit/{{ $category->id }}" class="btn btn-sm btn-warning mr-2" >
                                            Edit
                                        </a>
                                        <form action="/categories/{{ $category->id }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" >
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection