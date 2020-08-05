@extends('layout')
@section('title', 'Edit Produk')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            Tambahkan Produk
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('produk.update', $produks->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nama">Nama Produk :</label>
                    <input type="text" class="form-control" name="nama" value="{{ $produks->nama }}"/>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan :</label>
                    <textarea rows="6" columns="6" class="form-control" name="keterangan">{{ $produks->keterangan }}</textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga :</label>
                    <input type="number" class="form-control" name="harga" value="{{ $produks->harga }}"/>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah :</label>
                    <input type="number" class="form-control" name="jumlah" value="{{ $produks->jumlah }}"/>
                </div>
                <button type="submit" class="btn btn-outline-primary">Update Produk</button>
            </form>
        </div>
    </div>
@endsection