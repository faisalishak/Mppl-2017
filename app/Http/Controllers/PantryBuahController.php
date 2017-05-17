<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bahan_baku;

class PantryBuahController extends Controller
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
        $buah = Bahan_baku::where('jenis', 'Buah')->get();
        return view('restourant.pantry.buah')->with('buah', $buah);
    }
    public function deleteItemRempah(Request $req) {
        Bahan_baku::where('id_bahan_baku', $req->id_bahan_baku)->delete();
        $rempah = Bahan_baku::where('jenis', 'Buah')->get();
       return view('restourant.pantry.buah')->with('buah', $rempah);
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
