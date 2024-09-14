<?php

namespace App\Http\Controllers\Alumni;

use App\Models\User;
use App\Models\Alumni;
use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlumniProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::with('kategori_id')->get();
        
        return view('alumni.produk.index', compact('produks'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::get();

        return view('alumni.produk.create',[
            'kategori' => $kategoris,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          // Validasi input
            $validatedData = $request->validate([
                'nama' => 'required|string|max:255',
                'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
                'kategori_id' => 'required|exists:kategoris,id',
                'harga_produk' => 'required|numeric|min:0',
                'persen_diskon' => 'nullable|numeric|min:0|max:100',
                'rating' => 'nullable|numeric|min:0|max:5',
            ]);
    
            // Proses upload gambar
            if ($request->hasFile('gambar')) {
                $imageName = time().'.'.$request->gambar->extension();
                $request->gambar->move(public_path('images/produk'), $imageName);
                $validatedData['gambar'] = $imageName;
            }
    
            // Menyimpan data produk ke database
            Produk::create($validatedData);
    
            // Redirect ke halaman index dengan pesan sukses
            return redirect()->route('data-produk.index')
                             ->with('success', 'Produk berhasil ditambahkan.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
