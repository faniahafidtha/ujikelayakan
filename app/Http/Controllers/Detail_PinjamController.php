<?php

namespace App\Http\Controllers;
use App\detail_pinjam;
use App\Inventari;
use Illuminate\Http\Request;

  

class detail_pinjamController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $detail_pinjams = detail_pinjam::latest()->paginate(5);

  

        return view('detail_pinjams.index',compact('detail_pinjams'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {
        $inventaris=inventari::all();
        return view('detail_pinjams.create',compact('inventaris' , $inventaris));

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

            'id_inventaris' => 'required',
            'jumlah' => 'required',

        ]);

  

        detail_pinjam::create($request->all());

   

        return redirect()->route('detail_pinjams.index')

                        ->with('success','detail pinjam created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\detail_pinjam  $detail_pinjam

     * @return \Illuminate\Http\Response

     */

    public function show(detail_pinjam $detail_pinjam)

    {

        return view('detail_pinjams.show',compact('detail_pinjam'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\detail_pinjam  $detail_pinjam

     * @return \Illuminate\Http\Response

     */

    public function edit(detail_pinjam $detail_pinjam)

    {

        $inventaris=inventari::all();
        return view('detail_pinjams.create',compact('inventaris' , 'detail_pinjam'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\detail_pinjam  $detail_pinjam

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, detail_pinjam $detail_pinjam)

    {

        $request->validate([
            
            'id_inventaris' => 'required',
            'jumlah' => 'required',

        ]);

  

        $detail_pinjam->update($request->all());

  

        return redirect()->route('detail_pinjams.index')

                        ->with('success','detail pinjam updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\detail_pinjam  $detail_pinjam

     * @return \Illuminate\Http\Response

     */

    public function destroy(detail_pinjam $detail_pinjam)

    {

        $detail_pinjam->delete();

  

        return redirect()->route('detail_pinjams.index')

                        ->with('success','detail_pinjam deleted successfully');

    }

}

