<?php

namespace App\Http\Controllers;

use App\Bodega;
use App\Vino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VinoController extends Controller
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
    public function create(int $bodegaId)
    {
        $bodega = Bodega::find($bodegaId);
        return view('vinos.add_vino', ["bodega" => $bodega]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('vinos')->insert(
            ['nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'anyo' => $request->anyo,
                'alcohol' => $request->alcohol,
                'tipo_de_vino' => $request->tipo_vino,
                'bodega_id' => $request->bodega_id
            ]
        );
        return redirect()->route('bodegas.show', ['id' => $request->bodega_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function show(int $bodegaId, int $vinoId)
    {
        $vino = Vino::find($vinoId);
        return view('vinos.detalle_vino', ['bodega' => $bodegaId, 'vino' => $vino]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('vinos')
            ->where('id', $request->vino_id)
            ->update(['nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'anyo' => $request->anyo,
                'alcohol' => $request->alcohol,
                'tipo_de_vino' => $request->tipo_vino
            ]);
        return redirect()->route('bodegas.show', ['id' => $request->bodega_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Vino $vino
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $vinoId, int $bodegaId)
    {
        DB::table('vinos')->where('id', '=', $vinoId)->delete();
        return redirect()->route('bodegas.show', ['id' => $bodegaId]);
    }
}
