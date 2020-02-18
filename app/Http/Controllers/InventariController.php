<?php

namespace App\Http\Controllers;
use App\Inventari;
use App\Room;
use App\Officer;
use App\Type;
use Illuminate\Http\Request;

  

class InventariController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $inventaris = inventari::latest()->paginate(5);

  

        return view('inventaris.index',compact('inventaris'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

          $rooms=room::all();
          $officers=officer::all();
          $types=type::all();
         return view('inventaris.create',compact('rooms' , 'officers' , 'types' , $rooms ,  $officers ,  $types ));
    }

  

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $request->validate([

            'nama' => 'required',

            'kondisi' => 'required',

             'keterangan' => 'required',

             'jumlah' => 'required',

             'id_jenis' => 'required',

            'tgl_register' => 'required',

             'id_ruang' => 'required',

             'kd_inventaris' => 'required',

             'id_petugas' => 'required',


        ]);

  

        inventari::create($request->all());

   

        return redirect()->route('inventaris.index')

                        ->with('success','inventari created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\inventari  $inventari

     * @return \Illuminate\Http\Response

     */

    public function show(inventari $inventari)

    {

        return view('inventaris.show',compact('inventari'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\inventari  $inventari

     * @return \Illuminate\Http\Response

     */

    public function edit(inventari $inventari)

    {

         $rooms=room::get();
          $officers=officer::get();
          $types=type::get();
         return view('inventaris.edit',compact('rooms' , 'officers' , 'types' , 'inventari'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\inventari  $inventari

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, inventari $inventari)

    {

        $request->validate([

              'nama' => 'required',

            'kondisi' => 'required',

             'keterangan' => 'required',

             'jumlah' => 'required',

             'id_jenis' => 'required',

            'tgl_register' => 'required',

             'id_ruang' => 'required',

             'kd_inventaris' => 'required',

             'id_petugas' => 'required',
        ]);

  

        $inventari->update($request->all());

  

        return redirect()->route('inventaris.index')

                        ->with('success','inventari updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\inventari  $inventari

     * @return \Illuminate\Http\Response

     */

    public function destroy(inventari $inventari)

    {

        $inventari->delete();

  

        return redirect()->route('inventaris.index')

                        ->with('success','inventari deleted successfully');

    }

}

