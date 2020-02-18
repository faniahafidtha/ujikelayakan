<?php

namespace App\Http\Controllers;
use App\type;

use Illuminate\Http\Request;

class typeController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $types = type::latest()->paginate(5);

  

        return view('types.index',compact('types'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('types.create');

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

            'nama_jenis' => 'required',

            'kd_jenis' => 'required',

            'keterangan' => 'required',

        ]);

  

        type::create($request->all());

   

        return redirect()->route('types.index')

                        ->with('success','type created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\type  $type

     * @return \Illuminate\Http\Response

     */

    public function show(type $type)

    {

        return view('types.show',compact('type'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\type  $type

     * @return \Illuminate\Http\Response

     */

    public function edit(type $type)

    {

        return view('types.edit',compact('type'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\type  $type

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, type $type)

    {

        $request->validate([

            
            'nama_jenis' => 'required',

            'kd_jenis' => 'required',

            'keterangan' => 'required',


        ]);

  

        $type->update($request->all());

  

        return redirect()->route('types.index')

                        ->with('success','type updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\type  $type

     * @return \Illuminate\Http\Response

     */

    public function destroy(type $type)

    {

        $type->delete();

  

        return redirect()->route('types.index')

                        ->with('success','type deleted successfully');

    }

}

