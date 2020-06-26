<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artis;

class ArtisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Artis::all();
        return view('artis.index', compact('rows'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('artis.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_artis' => 'required'
        ],
        [
            'nama_artis.required' => 'Nama wajib diisi'
        ]);
        Artis::create([
            'nama_artis' => $request->nama_artis
        ]);

        return redirect('artis');
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
        $row = Artis::findOrFail($id);
        return view('artis.edit', compact('row'));
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
        $request->validate([
            'nama_artis' => 'required'
        ],
        [
            'nama_artis.required' => 'Nama wajib diisi'
        ]);
        $row = Artis::findOrFail($id);
        $row->update([
            'nama_artis' => $request->nama_artis
        ]);

        return redirect('artis');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Artis::findOrFail($id);
        $row->delete();

        return redirect('artis'); 
    }
}
