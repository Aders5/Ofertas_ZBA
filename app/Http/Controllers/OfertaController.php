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
        return view('ofertas.oferta_index', compact('ofertas'));
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
        'vigencia' => 'required|date|after:today',
        'tienda' => 'required|min:0|max:50',
        'precio_original'  => 'required|numeric|min:0|max:999999.99',
        'precio_descuento' => 'required|numeric|min:0|lte:precio_original',
       ]);

       $oferta = new Oferta();
       $oferta->titulo = $request->titulo;
       $oferta->vigencia = $request->vigencia;
       $oferta->tienda = $request->tienda;
       $oferta->precio_original = $request->precio_original;
       $oferta->precio_descuento = $request->precio_descuento;
       $oferta->save();

       return redirect()->route('ofertas.create')->with('info', '¡Formulario Recibido!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Oferta $oferta)
    {
        return view('ofertas.oferta_show', compact('oferta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oferta $oferta)
    {
        return view('ofertas.oferta_edit', compact('oferta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oferta $oferta)
    {
        $request->validate([
        'titulo' => 'required|min:0|max:50',
        'vigencia' => 'required|date|after:today',
        'tienda' => 'required|min:0|max:50',
        'precio_original'  => 'required|numeric|min:0|max:999999.99',
        'precio_descuento' => 'required|numeric|min:0|lte:precio_original',
       ]);

       $oferta->titulo = $request->titulo;
       $oferta->vigencia = $request->vigencia;
       $oferta->tienda = $request->tienda;
       $oferta->precio_original = $request->precio_original;
       $oferta->precio_descuento = $request->precio_descuento;
       $oferta->save();

       return redirect()->route('ofertas.show', $oferta);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('ofertas.index');
    }
}
