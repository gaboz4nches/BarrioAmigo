<?php

namespace App\Http\Controllers;

use App\Fair;
use App\Http\Requests\FairRequest;
use Illuminate\Http\Request;

class FairController extends Controller
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
        return view('fairs.create');
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
        $fars              = new Fair;
        $fars->titulo      = $request->input('titulo');
        $fars->foto        = "imgs/".$file;
        $fars->descripcion = $request->input('descripcion');
        if($fars->save()) {
            return redirect('events')
                    ->with('status', 'La Noticia '.$fars->titulo.' se Adiciono con Exito!');
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
        return view('fairs.show')->with('fars', Fair::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fars = Fair::find($id);
        return view('fairs.edit')->with('fars', Fair::findOrFail($id));
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
        $fars         = Fair::find($id);
        $fars->titulo = $request->input('titulo');
        if ($request->hasFile('foto')) {
            $file = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('imgs'), $file);
            $fars->foto    = "imgs/".$file;
        }
        $fars->descripcion = $request->input('descripcion');
        if($fars->save()) {
            return redirect('events')
                    ->with('status', 'La Noticia '.$fars->titulo.' se modifico con Exito!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fars = Fair::findOrFail($id);
        if($fars->delete()){
            return redirect('events')
                ->with('status', 'El Proyecto '.$fars->titulo.' se elimino con Exito.');
        };
    }
}