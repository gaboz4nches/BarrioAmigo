<?php

namespace App\Http\Controllers;

use App\Directory;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $drts = Directory::all();
        return view('products.create')->with('drts', $drts);
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
        $prds              = new Product;
        $prds->nombre      = $request->input('nombre');
        $prds->foto        = "imgs/".$file;
        $prds->directory_id  = $request->input('directory_id');
        if($prds->save()) {
            return redirect('directories')
                    ->with('status', 'El Artículo '.$prds->name.' se Modifico con Exito!');
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
        $prds = Product::find($id);
        $drts = Directory::all();
        return view('products.edit')->with('prds', Product::findOrFail($id))->with('drts', $drts);
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
        $prds         = Product::find($id);
        $prds->nombre = $request->input('nombre');
        if ($request->hasFile('foto')) {
            $file = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('imgs'), $file);
            $prds->foto    = "imgs/".$file;
        }
        $prds->directory_id = $request->input('directory_id');
        if($prds->save()) {
            return redirect('directories')
                    ->with('status', 'La Noticia '.$prds->nombre.' se modifico con Exito!');
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
        $prds = Product::findOrFail($id);
        if($prds->delete()){
            return redirect('directories')
                ->with('status', 'El Proyecto '.$prds->titulo.' se elimino con Exito.');
        };
    }
}
