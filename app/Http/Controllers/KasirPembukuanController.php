<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail_pesanan;
use Carbon\Carbon;
use DB;

class KasirPembukuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function hari()
    {
        $today = Carbon::today();
        $hari = Detail_pesanan::whereDate('updated_at', $today->toDateString())->where('status', 5)->get();
        $notif = Detail_pesanan::where('status', 4)->count();

        return view('restourant.kasir.pembukuan')
        ->with('collection', $hari)
        ->with('notif', $notif);
    }

    public function bulan()
    {
        $today = Carbon::today();
        //$hari = Detail_pesanan::whereDate('updated_at', $today->toDateString())->where('status', 5)->get();
        $notif = Detail_pesanan::where('status', 4)->count();

        $collection = Detail_pesanan::select(DB::raw('year(updated_at) as year'),
        DB::raw('DATE_FORMAT(updated_at,"%M") as month'),
        DB::raw('sum(total) as total'))
        ->groupBy('month')
        ->orderBy('year', 'DESC')->get();

        return view('restourant.kasir.pembukuan')
        ->with('collection', $collection)
        ->with('notif', $notif);
    }

    public function tahun()
    {
        $today = Carbon::today();
        //$hari = Detail_pesanan::whereDate('updated_at', $today->toDateString())->where('status', 5)->get();
        $notif = Detail_pesanan::where('status', 4)->count();

        $collection = Detail_pesanan::select(DB::raw('year(updated_at) as year'),
        DB::raw('sum(total) as total'))
        ->groupBy('year')
        ->orderBy('year', 'DESC')->get();

        return view('restourant.kasir.pembukuan')
        ->with('collection', $collection)
        ->with('notif', $notif);
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
