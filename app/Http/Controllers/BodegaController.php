<?php

namespace App\Http\Controllers;

use App\Bodega;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\Util\Json;

class BodegaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodegas = Bodega::all();
        //return $bodegas;

        return view('bodegas.bodegas', ['bodegas' => $bodegas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bodegas.add_bodega');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('bodegas')->insert(
            ['nombre' => $request->nombre,
                'localizacion' => $request->direccion,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'pagina_contacto' => $request->pagina_contacto,
                'anyo_fundacion' => $request->anyo,
                'if_restaurante' => $request->rest_radio,
                'if_hotel' => $request->hotel_radio,
            ]
        );
        return redirect()->route('bodegas.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {

        $bodega = Bodega::find($id);
        $vinos = $bodega->vinos;
        return view('bodegas.detalle_bodegas', ['bodega' => $bodega, 'vinos' => $vinos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $bodega)
    {
        DB::table('bodegas')
            ->where('id', $request->bodega_id)
            ->update(['nombre' => $request->nombre,
                'localizacion' => $request->direccion,
                'telefono' => $request->telefono,
                'email' => $request->email,
                'pagina_contacto' => $request->pagina_contacto,
                'anyo_fundacion' => $request->anyo,
                'if_restaurante' => $request->rest_radio,
                'if_hotel' => $request->hotel_radio,
            ]);
        return redirect()->route('bodegas.show', ['id' => $request->bodega_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Bodega $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        DB::table('bodegas')->where('id', '=', $id)->delete();
        return redirect()->route('bodegas.index');
    }
}
