@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Tambah Jenis</h1>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            {{-- @if ($errors->any())
                @dd($errors->all())
            @endif --}}
            <form action="/categories/gudang" method="POST">
            @csrf
            @method('POST')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group"  >
                            <label for="name" class="form-label">Jenis Barang</label>
                            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                                <span class="invalid-feedback" >{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex">
                            <a href="/categories" class="btn btn-sm btn-secondary mr-2" >Batal</a>
                            <button type="submit" class="btn btn-sm btn-warning" >Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection