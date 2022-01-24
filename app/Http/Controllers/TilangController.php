<?php

namespace App\Http\Controllers;

use App\Tilang;
use Auth;
use Illuminate\Http\Request;

class TilangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        if (!Auth::check()) {
            return redirect('/');
        }
    }

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
        $tilang->user_id = Auth::user()->id;
        $tilang->terdakwa = $request->terdakwa;
        $tilang->tilang = $request->tilang;
        $tilang->denda = $request->denda;
        $tilang->lokasi = $request->lokasi;
        $tilang->tanggal = $request->tanggal;
        $tilang->keterangan = $request->keterangan;
               
 
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
        $tilang = Tilang::findOrFail($id);
        return view('edit_dashboard',compact('tilang'));
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
        $this->validate($request,[
        'terdakwa' => 'required',
        'tilang' => 'required',
        'denda'=>'required',
        'lokasi' => 'required',
        'tanggal' => 'required',        
        'keterangan' => 'required'
        ]);
        $tilang = Tilang::findOrFail($id);
        $tilang->terdakwa = $request->terdakwa;
        $tilang->tilang = $request->tilang;
        $tilang->denda = $request->denda;
        $tilang->lokasi= $request->lokasi;
        $tilang->tanggal= $request->tanggal;
        $tilang->keterangan= $request->keterangan;
        $tilang->save();
        return redirect()->route('dashboard.index')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tilang = Tilang::findOrFail($id);
        $tilang->delete();
        return redirect()->route('dashboard.index');
    }
}
