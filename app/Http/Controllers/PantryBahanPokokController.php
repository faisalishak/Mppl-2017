<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahan_baku;

class PantryBahanPokokController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bahan_pokok = Bahan_baku::where('jenis', 'Bahan Pokok')->get();
        return view('restourant.pantry.bahanpokok')->with('bahan_pokok', $bahan_pokok);
    }
     public function editItemRempah(Request $req) {
      $rempah = Bahan_baku::where ($req->id_bahan_baku);
      $rempah = Bahan_baku::where('jenis', 'Rempah')->get();
     
      $rempah->nama_bahan_baku = $req->nama_bahan_baku;
      $rempah->stok = $req->stok;
      $rempah->harga = $req->harga;
      $rempah->jenis = $req->jenis;
      $rempah->satuan = $req->satuan;
   
      Bahan_baku::where('id_bahan_baku', $req->id_bahan_baku)
                    ->update(['nama_bahan_baku' =>  $req->nama_bahan_baku 
                              ,'stok' => $req->stok 
                                ,'harga' => $req->harga
                                ,'jenis' => $req->jenis
                                ,'satuan' => $req->satuan
                            ]);
      return view('restourant.pantry.bahanpokok')->with('rempah', $rempah);
    }
    public function viewRempah(Request $req) {
      $rempah = Bahan_baku::where('id_bahan_baku',$req->id_bahan_baku)->get()->first();

      return view('restourant.pantry.bahanpokok')->with('rempah', $rempah);
    }
    public function deleteItemRempah(Request $req) {
        Bahan_baku::where('id_bahan_baku', $req->id_bahan_baku)->delete();
        $rempah = Bahan_baku::where('jenis', 'Bahan Pokok')->get();
       return view('restourant.pantry.bahanpokok')->with('bahan_pokok', $rempah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
