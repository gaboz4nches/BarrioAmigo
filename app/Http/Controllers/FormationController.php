<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Http\Requests\FormationRequest;
use Illuminate\Http\Request;
use Auth;

class FormationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
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
        $user = Auth::user();
        if ($user->role == 'admin') {
            return view('formations.create');
        }
        else{
            return redirect('/home');
        }
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
        $fmts              = new Formation;
        $fmts->titulo      = $request->input('titulo');
        $fmts->foto        = "imgs/".$file;
        $fmts->descripcion = $request->input('descripcion');
        if($fmts->save()) {
            return redirect('events')
                    ->with('status', 'La Noticia '.$fmts->titulo.' se Adiciono con Exito!');
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
        return view('formations.show')->with('fmts', Formation::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if ($user->role == 'admin') {
            $fmts = Formation::find($id);
            return view('formations.edit')->with('fmts', Formation::findOrFail($id));
        }
        else{
            return redirect('/home');
        }
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
        $fmts         = Formation::find($id);
        $fmts->titulo = $request->input('titulo');
        if ($request->hasFile('foto')) {
            $file = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('imgs'), $file);
            $fmts->foto    = "imgs/".$file;
        }
        $fmts->descripcion = $request->input('descripcion');
        if($fmts->save()) {
            return redirect('events')
                    ->with('status', 'La Noticia '.$fmts->titulo.' se modifico con Exito!');
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
        $fmts = Formation::findOrFail($id);
        if($fmts->delete()){
            return redirect('events')
                ->with('status', 'El Proyecto '.$fmts->titulo.' se elimino con Exito.');
        };
    }
}
