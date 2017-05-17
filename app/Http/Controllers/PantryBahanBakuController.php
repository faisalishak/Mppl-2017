<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use App\Bahan_baku;
use Illuminate\Http\Request;
use App\bahanbakumodel;


class PantryBahanBakuController extends Controller
{
     public function tambahBahanBaku()
    {
        //$bahan_pokok = Bahan_baku::where('jenis', 'Bahan Pokok')->get();
        return view('restourant.pantry.tambahbahanbaku');
    }
    public function registerPantry(Request $req)
    {
         $rules = array(
        'nama_bahan_baku' => 'required',
        'stok' => 'required',
        'harga' => 'required',
        'jenis' => 'required',
        'satuan' => 'required'
        
      );
      // for Validator
      $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      else {
        $bahan_baku = new Bahan_baku();
        $bahan_baku->nama_bahan_baku = $req->nama_bahan_baku;
        $bahan_baku->stok = $req->stok;
        $bahan_baku->harga = $req->harga;
        $bahan_baku->jenis = $req->jenis;
        $bahan_baku->satuan = $req->satuan;
        $bahan_baku->save();
        return view('restourant.pantry.tambahbahanbaku');
        
      }


    }

    public function notifPantry(){
         $notif1 = bahanbakumodel::where('status', 1)->where('jenis', 'Rempah')->count();
         $notif2 = bahanbakumodel::where('status', 1)->where('jenis', 'Sayuran')->count();
         $notif3 = bahanbakumodel::where('status', 1)->where('jenis', 'Buah')->count();
         $notif4 = bahanbakumodel::where('status', 1)->where('jenis', 'Daging')->count();
         $notif5 = bahanbakumodel::where('status', 1)->where('jenis', 'Bumbu')->count();
         $notif6 = bahanbakumodel::where('status', 1)->where('jenis', 'Bahan Pokok')->count();

         $data = array();
         $data['notif1'] = $notif1;
         $data['notif2'] = $notif2;
         $data['notif3'] = $notif3;
         $data['notif4'] = $notif4;
         $data['notif5'] = $notif5;
         $data['notif6'] = $notif6;

         return response()->json($data);
    }

}
