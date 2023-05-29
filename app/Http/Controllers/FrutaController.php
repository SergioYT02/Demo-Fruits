<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fruta = Fruta::all();
     return view('index',compact('fruta'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('index');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fruta = new Fruta();
        $fruta->nombre = $request->nombre;
        $fruta->precio = $request->precio;
        $fruta->cantidad = $request->cantidad;
        $fruta->save();

        return redirect('/fruta');
    }


    /**
     * Display the specified resource.
     */
    public function show(Fruta $fruta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fruta $fruta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fruta $fruta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fruta $fruta)
    {
        //
    }
}
