<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_pesanan;
use DB;
use App\Pesanan;

class KasirDaftarPesananController extends Controller
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
        $detailpesanan = DB::table('detail_pesanan')->where('status', 4)->get();
        $pesanan = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->get();
        $notif = Detail_pesanan::where('status', 4)->count();

        return view('restourant.kasir.daftarpesanan')
        ->with('detailpesanan', $detailpesanan)
        ->with('pesanan', $pesanan)
        ->with('notif', $notif);
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
        Detail_pesanan::where('id_pesanan', $request->id_pesanan)
                    ->update([ 'jumlah_bayar' => $request->bayar, 'status' => 5 ]);

        $dp = Detail_pesanan::where('id_pesanan', $request->id_pesanan)->get()->first();
        $total = $dp->total;
        $jml_bayar = $dp->jumlah_bayar;
        $pesanan = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->where('id_pesanan', $request->id_pesanan)->get();
        $once = Pesanan::where('id_pesanan', $request->id_pesanan)->get()->first();
        $notif = Detail_pesanan::where('status', 4)->count();


        return view('restourant.kasir.bayarpesanan')
        ->with('pesanan', $pesanan)
        ->with('once', $once)
        ->with('total', $total)
        ->with('jml_bayar', $jml_bayar)
        ->with('notif', $notif);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pesanan)
    {
         //$reseps = Resep::join('bahan_baku', 'bahan_baku.id_bahan_baku', 'resep.id_bahan_baku')->where('resep.kode_makanan_minuman', $menu->kode_makanan_minuman)->get();
        $pesanan = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->where('id_pesanan', $id_pesanan)->get();
        $once = Pesanan::where('id_pesanan', $id_pesanan)->get()->first();
        $notif = Detail_pesanan::where('status', 4)->count();

        $total = 0;
        foreach($pesanan as $i){
            $total = $total + ($i->harga_makanan_minuman * $i->jumlah);
        }

        Detail_pesanan::where('id_pesanan', $id_pesanan)
                ->update([ 'total' => $total ]);

        return view('restourant.kasir.bayarpesanan')
        ->with('pesanan', $pesanan)
        ->with('once', $once)
        ->with('total', $total)
        ->with('jml_bayar', 0)
        ->with('notif', $notif);
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
