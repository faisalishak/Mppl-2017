<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_pesanan;
use App\Pesanan;
use App\Menu;
use DB;

class PelayanPesananSiapController extends Controller
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
        $detailpesanan = DB::table('detail_pesanan')->groupBy('id_pesanan')->having('notification', '!=', 0)->get();
        $pesanan = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->get();

        return view('restourant.pelayan.pesanansiap')
            ->with('detailpesanan', $detailpesanan)
            ->with('pesanan', $pesanan);
    }

//public function pesanansiap(Request $request){
//}

    public function pesanansiap(Request $request){
        ini_set('max_execution_time', 1);

        while (Detail_pesanan::where('status' , 2)->where('id_pelayan', $request->input('id'))->count() < 1){
            usleep(1000);
        }

        if(Detail_pesanan::where('status' , 2)->where('id_pelayan', $request->input('id'))->count() > 0){
            $dp = Detail_pesanan::where('status' , 2)->where('id_pelayan', $request->input('id'))->first();
            $id = $dp->id_detail_pesanan;
            
           if($dp->notification == 2){
               if($dp->id_pelayan == $request->input('id')){
                   Detail_pesanan::where('id_detail_pesanan', $id)
                    ->update([ 'status' => 3 ]);
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
                        ->update([ 'status' => 3 ]);
                $edit = Detail_pesanan::where('id_detail_pesanan', $id)->first();
                $edit->status = 3;

                $pesanan = array();    
                $pesanan['data1'] = Pesanan::join('menu', 'menu.kode_makanan_minuman', 'pesanan.kode_makanan_minuman')->where('pesanan.id_pesanan', $edit->id_pesanan)->get();
                $pesanan['data2'] = $edit;

                return response()->json($pesanan);
            }            
        }
    }

    public function pesananSudahDiantarkan(Request $request){
         Detail_pesanan::where('id_detail_pesanan', $request->input('id'))
                    ->update([ 'status' => 4 ]);

         //return redirect()->intended('customerservice/'+ pesanan[0].id_pesanan);           
        return response()->json($request->input('id_pesanan'));
    }

    public function notification(Request $request){
        ini_set('max_execution_time', 1);

        $data = Detail_pesanan::where('status',  3)->where('id_pelayan', $request->input('id'))->count();

            return response()->json($data);
        
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
