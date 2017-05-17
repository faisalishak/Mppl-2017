<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Bahan_baku;
use App\Resep;
use DB;

class KokiPilihResepController extends Controller
{
    public function index($nama_makanan_minuman ,$jenis_makanan_minuman)
    {
        $menu = Menu::where('nama_makanan_minuman', $nama_makanan_minuman)->where('jenis_makanan_minuman', $jenis_makanan_minuman)->get()->first();
        $bumbu = Bahan_baku::where('jenis', 'Bumbu')->get();
        $bahan_pokok = Bahan_baku::where('jenis', 'Bahan Pokok')->get();
        $daging = Bahan_baku::where('jenis', 'Daging')->get();
        $sayuran = Bahan_baku::where('jenis', 'Sayuran')->get();
        $rempah = Bahan_baku::where('jenis', 'Rempah')->get();
        $reseps = Resep::join('bahan_baku', 'bahan_baku.id_bahan_baku', 'resep.id_bahan_baku')->where('resep.kode_makanan_minuman', $menu->kode_makanan_minuman)->get();

        return view('restourant.koki.pilihresep')
        ->with('menu', $menu)
        ->with('bumbu', $bumbu)
        ->with('bahan_pokok', $bahan_pokok)
        ->with('daging', $daging)
        ->with('sayuran', $sayuran)
        ->with('rempah', $rempah)
        ->with('reseps', $reseps);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahresep(Request $req)
    {
        $resep = new Resep;
        $resep -> kode_makanan_minuman = $req->input('kode_makanan_minuman');
        $resep -> id_bahan_baku = $req->input('id_bahan_baku');
        $resep -> qty = $req->input('qty');
        $resep -> save();

        //$data = Bahan_baku::where('id_bahan_baku', $req->input('id_bahan_baku'))->get();
      
        //return redirect('pilihresep/'.$req->input('nama_makanan_minuman').'/'.$req->input('jenis_makanan_minuman'));
        //return redirect()->intended('pilihresep/'.$req->input('nama_makanan_minuman').'/'.$req->input('jenis_makanan_minuman'));
        
        $menu = Menu::where('kode_makanan_minuman', $req->input('kode_makanan_minuman'))->get()->first();
        return response()->json($menu);
    }
}
