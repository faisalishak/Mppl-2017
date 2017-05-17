<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\KokiTambahDataModel;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class KokiTambahPesanan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahpesanan()
    {
        //
       // return view('restourant.koki.tambahpesanan');
        $menutersedia = KokiTambahDataModel::all();
        
        return view('restourant.koki.tambahpesanan')
            ->with('menutersedia', $menutersedia);
           
    }

     public function additem(Request $req) {
      $rules = array(
        'nama_makanan_minuman' => 'required',
        'jenis_makanan_minuman' => 'required'
      );
      // for Validator
      $validator = Validator::make ( Input::all (), $rules );
      if ($validator->fails())
      return Response::json(array('errors' => $validator->getMessageBag()->toArray()));

      else {
        $menutersedia = new KokiTambahDataModel();
        $menutersedia->nama_makanan_minuman = $req->nama_makanan_minuman;
        $menutersedia->jenis_makanan_minuman = $req->jenis_makanan_minuman;
        $menutersedia->harga_makanan_minuman = $req->harga_makanan_minuman;
        $menutersedia->save(); 

        return response()->json($menutersedia);
        
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('restourant.koki.tambahpesanan');
         

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
