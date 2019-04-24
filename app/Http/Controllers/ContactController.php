<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Request\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index')->with('cnts', Contact::orderBy('id', 'DESC')->paginate(9)->setPath('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
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
        $cnts         = new Contact;
        $cnts->cargo  = $request->input('cargo');
        $cnts->foto   = "imgs/".$file;
        $cnts->nombre = $request->input('nombre');
        $cnts->correo = $request->input('correo');
        $cnts->numero = $request->input('numero');
        if($cnts->save()) {
            return redirect('contacts')->with('success', 'el contacto '.$cnts->cargo.' se Adiciono con Exito!');
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
        $cnts = Contact::find($id);
        return view('contacts.edit')->with('cnts', Contact::findOrFail($id));
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
        $cnts = Contact::find($id);
        if ($request->hasFile('foto')) {
            $file = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('imgs'), $file);
            $cnts->foto   = "imgs/".$file;
        }
        $cnts->nombre = $request->input('nombre');
        $cnts->cargo = $request->input('cargo');
        $cnts->correo = $request->input('correo');
        $cnts->numero = $request->input('numero');
        if($cnts->save()) {
            return redirect('contacts')
                    ->with('status', 'El contacto '.$cnts->name.' se Modifico con Exito!');
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
        $cnts = Contact::findOrFail($id);
        if($cnts->delete()){
            return redirect('contacts')->with('succes', 'El contacto '.$cnts->nombre.' se elimino con Exito.');
        };
    }
}
