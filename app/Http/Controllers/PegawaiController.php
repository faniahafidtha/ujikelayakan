<?php

namespace App\Http\Controllers;
use App\Pegawai;

use Illuminate\Http\Request;

  

class PegawaiController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $pegawais = pegawai::latest()->paginate(5);

  

        return view('pegawais.index',compact('pegawais'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('pegawais.create');

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

             'nip' => 'required',

              'alamat' => 'required',

        ]);

  

        pegawai::create($request->all());

   

        return redirect()->route('pegawais.index')

                        ->with('success','pegawai created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\pegawai  $pegawai

     * @return \Illuminate\Http\Response

     */

    public function show(pegawai $pegawai)

    {

        return view('pegawais.show',compact('pegawai'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\pegawai  $pegawai

     * @return \Illuminate\Http\Response

     */

    public function edit(pegawai $pegawai)

    {

        return view('pegawais.edit',compact('pegawai'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\pegawai  $pegawai

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, pegawai $pegawai)

    {

        $request->validate([
            
            'nama' => 'required',

             'nip' => 'required',

              'alamat' => 'required',

        ]);

  

        $pegawai->update($request->all());

  

        return redirect()->route('pegawais.index')

                        ->with('success','pegawai updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\pegawai  $pegawai

     * @return \Illuminate\Http\Response

     */

    public function destroy(pegawai $pegawai)

    {

        $pegawai->delete();

  

        return redirect()->route('pegawais.index')

                        ->with('success','pegawai deleted successfully');

    }

}

