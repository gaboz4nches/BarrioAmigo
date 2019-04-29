<?php

namespace App\Http\Controllers;

use App\Directory;
use App\Http\Request\DirectoryRequest;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('directories.index')->with('drts', Directory::orderBy('id', 'DESC')->paginate(9)->setPath('directories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('foto')) {
            $file = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('imgs'), $file);
        }
        $drts              = new Directory;
        $drts->nombre      = $request->input('nombre');
        $drts->foto        = "imgs/".$file;
        $drts->descripcion = $request->input('descripcion');
        if($drts->save()) {
            return redirect('directories')
                    ->with('status', 'La Noticia '.$drts->nombre.' se Adiciono con Exito!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('directories.show')->with('drts', Directory::findOrFail($id));
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
