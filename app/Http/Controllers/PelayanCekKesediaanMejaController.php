<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meja;
use DB;

class PelayanCekKesediaanMejaController extends Controller
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
        $mejas = Meja::all(); 
        return view('restourant.pelayan.cekkesediaanmeja')->with('mejas', $mejas);
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
    public function editItem(Request $request)
    {
        if($request->input('status') == '1'){
             DB::table('meja')
            ->where('nomor_meja', $request->input('nomor_meja'))    
            ->update([
                'status'=> $request->input('status'), 
                'id_pesanan'=> $request->input('id_pesanan')
            ]);
        }else{
             DB::table('meja')
            ->where('nomor_meja', $request->input('nomor_meja'))    
            ->update([
                'status'=> $request->input('status'), 
                'id_pesanan'=> '0'
            ]);
        }
    }

     public function ajax(){
        ini_set('max_execution_time', 1);
        $data = Meja::all();

        return response()->json($data);
            
                //'nomor_meja' => $data -> nomor_meja,
                //'status' => $data -> status
            
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
