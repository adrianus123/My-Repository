@extends('main')

@section('container')
    <div class="container bg-white m-0 p-3 rounded shadow-sm">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h3 text-gray-800">Edit Produk</h1>
        </div>
        <div class="col-md-5">
            <form action="/edit/{{ $data->id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="nama_barang" class="form-label @error('nama_barang') is-invalid @enderror">Nama Produk</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ old('slug', $data->nama_barang) }}" required autofocus>
                    @error('nama_barang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="harga_satuan" class="form-label">Harga Satuan</label>
                    <input type="number" class="form-control @error('harga_satuan') is-invalid @enderror" id="harga_satuan" name="harga_satuan" value="{{ old('slug', $data->harga_satuan) }}" required>
                    @error('harga_satuan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
