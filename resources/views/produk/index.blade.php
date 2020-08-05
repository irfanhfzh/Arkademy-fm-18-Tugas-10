@extends('layout')
@section('title', 'Tampilan Produk')
    <style>
        button a:hover {
            color: white;
            text-decoration: none;
        }
    </style>
@section('content')
    <div class="mt-5">  
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
    </div>
        <button class="btn btn-outline-primary mb-5" type="submit">
            <a href="{{ '/produk/create' }}">Tambahkan Produk</a>
        </button>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama Produk</td>
                <td>Keterangan</td>
                <td>Harga</td>
                <td>Jumlah</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $produks)
            <tr>
                <td>{{ $produks->id }}</td>
                <td>{{ $produks->nama }}</td>
                <td>{{ $produks->keterangan }}</td>
                <td>{{ $produks->harga }}</td>
                <td>{{ $produks->jumlah }}</td>
                <td><a href="{{ route('produk.edit', $produks->id) }}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('produk.destroy', $produks->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection