<?php

namespace App\Http\Controllers;

use App\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = produk::all();

        return view('produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|min:2|max:35',
            'keterangan' => 'required|string|max:254',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric'
        ]);

        produk::create($data);

        return redirect('/produk')->with('success', 'Produk Berhasil di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = produk::findOrFail($id);

        return view('produk.edit', compact("produks"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => 'required|string|min:2|max:35',
            'keterangan' => 'required|string|max:254',
            'harga' => 'required|numeric',
            'jumlah' => 'required|numeric'
        ]);

        produk::whereId($id)->update($data);

        return redirect('/produk')->with('success', 'Produk Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = produk::findOrFail($id);
        $produk->delete();

        return redirect('/produk')->with('success', 'Produk Berhasil di Hapus');
    }
}
