<?php

namespace App\Http\Controllers;

use App\Product;
use App\Directory;
use App\Http\Request\DirectoryRequest;
use Illuminate\Http\Request;
use Auth;

class DirectoryController extends Controller
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
       return view('directories.index')->with('drts', Directory::orderBy('id', 'DESC')->paginate(9)->setPath('directories'));
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
            return view('directories.create');
        }else{
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
        $drts = Directory::find($id);
        $prds = Product::all();
        return view('directories.show')->with('drts', $drts)->with('prds', $prds);
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
            $drts = Directory::find($id);
            return view('directories.edit')->with('drts', Directory::findOrFail($id));
        }else{
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
        $drts         = Directory::find($id);
        $drts->nombre = $request->input('nombre');
        if ($request->hasFile('foto')) {
            $file = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('imgs'), $file);
            $drts->foto    = "imgs/".$file;
        }
        $drts->descripcion = $request->input('descripcion');
        if($drts->save()) {
            return redirect('directories')
                    ->with('status', 'La Noticia '.$drts->nombre.' se modifico con Exito!');
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
        $drts = Directory::findOrFail($id);
        if($drts->delete()){
            return redirect('directories')
                ->with('status', 'El Proyecto '.$drts->titulo.' se elimino con Exito.');
        };
    }
}
