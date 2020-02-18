<?php

namespace App\Http\Controllers;
use App\Officer;
use App\Level;
use Illuminate\Http\Request;

  

class OfficerController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $officers = officer::latest()->paginate(5);

  

        return view('officers.index',compact('officers'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $levels=level::all();
         return view('officers.create',compact('levels' , $levels));

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

            'username' => 'required',

            'password' => 'required',

             'nama_petugas' => 'required',

             'id_level' => 'required',

        ]);

  

        officer::create($request->all());

   

        return redirect()->route('officers.index')

                        ->with('success','officer created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\officer  $officer

     * @return \Illuminate\Http\Response

     */

    public function show(officer $officer)

    {

        return view('officers.show',compact('officer'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\officer  $officer

     * @return \Illuminate\Http\Response

     */

    public function edit(officer $officer)

    {

         $levels=level::get();
         return view('officers.edit',compact('levels' , 'officer'));


    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\officer  $officer

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, officer $officer)

    {

        $request->validate([

             'username' => 'required',

            'password' => 'required',

             'nama_petugas' => 'required',

             'id_level' => 'required',

        ]);

  

        $officer->update($request->all());

  

        return redirect()->route('officers.index')

                        ->with('success','officer updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\officer  $officer

     * @return \Illuminate\Http\Response

     */

    public function destroy(officer $officer)

    {

        $officer->delete();

  

        return redirect()->route('officers.index')

                        ->with('success','officer deleted successfully');

    }

}

