<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artis;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lst = Artis::all();
        return view('Album.add', compact('lst'));
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
            'nama_album' => 'required'
        ],
        [
            'nama_album.required' => 'Nama wajib diisi'
        ]);
        Album::create([
            'nama_album' => $request->nama_album,
            'artis_id' => $request->artis_id
        ]);
        return redirect('album');
        
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
        $row = Album::findOrFail($id);
        $lst = Artis::all();
        return view('album.edit', compact('row','lst'));
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
            'nama_album' => 'required'
        ],
        [
            'nama_album.required' => 'Nama wajib diisi'
        ]);
        $row = Album::findOrFail($id);
        $row->update([
            'nama_album' => $request->nama_album,
            'artis_id' => $request->artis_id
        ]);

        return redirect('album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Album::findOrFail($id);
        $row->delete();

        return redirect('album'); 
    }
}
