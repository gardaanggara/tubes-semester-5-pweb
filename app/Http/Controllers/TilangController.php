<?php

namespace App\Http\Controllers;

use App\Tilang;
use Illuminate\Http\Request;

class TilangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tilang = Tilang::with('User')->get();
        return view('dashboard', compact('tilang'));
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
        $tilang = new Tilang;
        $tilang->user_id = $request->user_id;
        $tilang->terdakwa = $request->terdakwa;
        $tilang->tilang = $request->tilang;
        $tilang->denda = $request->denda;
        $tilang->lokasi = $request->lokasi;
        $tilang->tanggal = $request->tanggal;
        $tilang->keterangan = $request->keterangan;
       
        // dd($product);  
        $tilang->save();
        return redirect()->route('dashboard.index');
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
