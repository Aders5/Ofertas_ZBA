<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ofertas = Oferta::all();
        return view('ofertas.oferta_index', compact('contactos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ofertas.oferta_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'titulo' => 'required|min:0|max:50',
        'vigencia' => 'required',
        'tienda' => 'required|min:0|max:50',
        'precio_original' => 'decimal:10,2',
        'precio_descuento' => 'decimal:10,2',
       ]);

       $oferta = new Oferta();
       $oferta->titulo = $request->titulo;
       $oferta->vigencia = $request->vigencia;
       $oferta->tienda = $request->tienda;
       $oferta->precio_original = $request->precio_original;
       $oferta->precio_descuento = $request->precio_descuento;
       $oferta->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
