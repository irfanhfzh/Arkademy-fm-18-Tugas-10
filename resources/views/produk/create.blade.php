@extends('layout')
@section('title', 'Membuat Produk')
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
            <form action="{{ route('produk.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Produk :</label>
                    <input type="text" class="form-control" name="nama"/>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan :</label>
                    <textarea rows="6" columns="6" class="form-control" name="keterangan"></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga :</label>
                    <input type="number" class="form-control" name="harga"/>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah :</label>
                    <input type="number" class="form-control" name="jumlah"/>
                </div>
                <button type="submit" class="btn btn-outline-primary">Tambahkan Produk</button>
            </form>
        </div>
    </div>
@endsection