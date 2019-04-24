<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Tiding;
use App\Http\Requests\TidingRequest;
use Illuminate\Http\Request;

class TidingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('tidings.index')->with('tdgs', Tiding::orderBy('id', 'DESC')->paginate(9)->setPath('tidings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tidings.create');
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
        $tdgs              = new Tiding;
        $tdgs->titulo      = $request->input('titulo');
        $tdgs->foto        = "imgs/".$file;
        $tdgs->descripcion = $request->input('descripcion');
        if($tdgs->save()) {
            return redirect('tidings')
                    ->with('status', 'La Noticia '.$tdgs->titulo.' se Adiciono con Exito!');
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
        return view('tidings.show')->with('tdgs', Tiding::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tdgs = Tiding::find($id);
        return view('tidings.edit')->with('tdgs', Tiding::findOrFail($id));
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
        $tdgs         = Tiding::find($id);
        $tdgs->titulo = $request->input('titulo');
        if ($request->hasFile('foto')) {
            $file = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('imgs'), $file);
            $tdgs->foto    = "imgs/".$file;
        }
        $tdgs->descripcion = $request->input('descripcion');
        if($tdgs->save()) {
            return redirect('tidings')
                    ->with('status', 'La Noticia '.$tdgs->titulo.' se modifico con Exito!');
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
        $tdgs = Tiding::findOrFail($id);
        if($tdgs->delete()){
            return redirect('tidings')
                ->with('status', 'El Proyecto '.$tdgs->titulo.' se elimino con Exito.');
        };
    }
}
