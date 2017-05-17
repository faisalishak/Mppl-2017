<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_pesanan;
use App\Pesanan;
use App\Menu;
use App\User;
use DB;

class KokiDaftarPesananController extends Controller
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
        $detailpesanan = Detail_pesanan::all();
        $pesanan = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->get();

        return view('restourant.koki.daftarpesanan')
            ->with('detailpesanan', $detailpesanan)
            ->with('pesanan', $pesanan);
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
       
    }

    public function notification(Request $request){
        ini_set('max_execution_time', 1); 

        $data = Detail_pesanan::where('notification', 0)
                ->where('id', $request->input('id_user'))->count();

            return response()->json($data);

       /* while (Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->count() < 1){
            usleep(1000);
        }

        if(Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->count() > 0){
            $dp = Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->first();
            $id = $dp->id_detail_pesanan;
            $edit = Detail_pesanan::where('id_detail_pesanan', $id)->first();
            $edit->status = 1;
            $edit->save();
            
            
        }*/
        
    }

    public function daftarPesanan(Request $request){
        ini_set('max_execution_time', 1);

        while (Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->count() < 1){
            usleep(1000);
        }

        if(Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->count() > 0){
            $dp = Detail_pesanan::where('status' , 0)->where('id', $request->input('id_user'))->first();
            $id = $dp->id_detail_pesanan;
            
           if($dp->notification != 0){
               if($dp->notification == $request->input('id_user')){
                   Detail_pesanan::where('id_detail_pesanan', $id)
                    ->update([ 'status' => 2, 'id' => $dp->notification, 'notification' => 1 ]);
               }else{
                   Detail_pesanan::where('id_detail_pesanan', $id)->delete();
               }
                /*$edit->status = 2;
                $edit->id = $edit->notification;        
                $edit->notification = 1;
                $edit->save();*/

                $pesanan = array();    
                $pesanan['data1'] = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->where('pesanan.id_pesanan', $dp->id_pesanan)->get();
                $pesanan['data2'] = $dp;

                return response()->json($pesanan);
            }else{
                Detail_pesanan::where('id_detail_pesanan', $id)
                    ->update([ 'status' => 1 ]);
                $edit = Detail_pesanan::where('id_detail_pesanan', $id)->first();
                $edit->status = 1;

                $pesanan = array();    
                $pesanan['data1'] = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->where('pesanan.id_pesanan', $edit->id_pesanan)->get();
                $pesanan['data2'] = $edit;

                return response()->json($pesanan);
            }
        }
    }


    public function editDaftarPesanan(Request $request){
        Detail_pesanan::where('id_pesanan', $request->input('id_pesanan'))
            ->update([ 'status' => 0, 'notification' => $request->input('id') ]);

        Pesanan::where('id_pesanan', $request->input('id_pesanan'))
            ->update([ 'status' => 1 ]);    
        /*foreach($dp as $item){
            $item->status = 0;
            $item->notification = 1;
            $item->id = $request->input('id');
            $item->save();
        }*/

        return response()->json();
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
