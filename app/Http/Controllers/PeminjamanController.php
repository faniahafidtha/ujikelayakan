<?php

namespace App\Http\Controllers;
use App\Peminjaman;
use App\Pegawai;
use Illuminate\Http\Request;

  

class PeminjamanController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $peminjamans = peminjaman::latest()->paginate(5);

  

        return view('peminjamans.index',compact('peminjamans'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $pegawais=pegawai::all();
         return view('peminjamans.create',compact('pegawais' , $pegawais));


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

            'tgl_pinjam' => 'required',

             'tgl_kembali' => 'required',

              'status' => 'required',

              'id_pegawai' => 'required',

        ]);

  

        peminjaman::create($request->all());

   

        return redirect()->route('peminjamans.index')

                        ->with('success','peminjaman created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\peminjaman  $peminjaman

     * @return \Illuminate\Http\Response

     */

    public function show(peminjaman $peminjaman)

    {

        return view('peminjamans.show',compact('peminjaman'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\peminjaman  $peminjaman

     * @return \Illuminate\Http\Response

     */

    public function edit(peminjaman $peminjaman)

    {

        $pegawais=pegawai::get();
         return view('peminjamans.edit',compact('pegawais','peminjaman'));


    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\peminjaman  $peminjaman

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, peminjaman $peminjaman)

    {

        $request->validate([
            
             'tgl_pinjam' => 'required',

             'tgl_kembali' => 'required',

              'status' => 'required',

              'id_pegawai' => 'required',

        ]);

  

        $peminjaman->update($request->all());

  

        return redirect()->route('peminjamans.index')

                        ->with('success','peminjaman updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\peminjaman  $peminjaman

     * @return \Illuminate\Http\Response

     */

    public function destroy(peminjaman $peminjaman)

    {

        $peminjaman->delete();

  

        return redirect()->route('peminjamans.index')

                        ->with('success','peminjaman deleted successfully');

    }

}

