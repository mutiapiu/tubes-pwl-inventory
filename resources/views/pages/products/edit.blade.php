@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Pesanan Tiket</h1>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            {{-- @if ($errors->any())
                @dd($errors->all())
            @endif --}}
            <form action="/products/{{ $product->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="card">
                    <div class="card-body">
                        <div class="form-group"  >
                            <label for="name" class="form-label">Id Barang</label>
                            <input type="text" name="name" id="name" class="form-control  @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}">
                            @error('name')
                                <span class="invalid-feedback" >{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group"  >
                            <label for="description" class="form-label">Nama Barang</label>
                            <input type="text" name="description" id="description" class="form-control  @error('name') is-invalid @enderror" value="{{ old('description', $product->name) }}">
                            @error('description')
                                <span class="invalid-feedback" >{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sku" class="form-label">Tanggal Masuk</label>
                            <input type="text" name="sku" id="sku" class="form-control @error('sku') is-invalid @enderror" value="{{ old('sku', $product->sku) }}">
                                @error('sku')
                                    <span class="invalid-feedback" >{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="price" class="form-label">Harga</label>
                            <input type="number" inputmode="numeric" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" >
                                @error('price')
                                    <span class="invalid-feedback" >{{ $message }}</span>
                                @enderror   
                        </div>
                        <div class="form-group">
                            <label for="stock" class="form-label">Jumlah Stok</label>
                            <input type="number" inputmode="numeric" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}" >
                                @error('stock')
                                    <span class="invalid-feedback" >{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="category_id" class="form-label">Jenis Barang</label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror" >
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $product->category_id === $category->id ? 'selected' : '' }} >{{ $category->name }}</option> 
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" >{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex">
                            <a href="/products" class="btn btn-sm btn-secondary mr-2" >Batal</a>
                            <button type="submit" class="btn btn-sm btn-warning" >Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection