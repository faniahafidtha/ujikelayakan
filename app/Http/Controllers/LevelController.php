<?php

namespace App\Http\Controllers;
use App\level;

use Illuminate\Http\Request;

  

class LevelController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $levels = level::latest()->paginate(5);

  

        return view('levels.index',compact('levels'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('levels.create');

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

            'nama_level' => 'required',

        ]);

  

        level::create($request->all());

   

        return redirect()->route('levels.index')

                        ->with('success','level created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\level  $level

     * @return \Illuminate\Http\Response

     */

    public function show(level $level)

    {

        return view('levels.show',compact('level'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\level  $level

     * @return \Illuminate\Http\Response

     */

    public function edit(level $level)

    {

        return view('levels.edit',compact('level'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\level  $level

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, level $level)

    {

        $request->validate([
            
            'nama_level' => 'required',

        ]);

  

        $level->update($request->all());

  

        return redirect()->route('levels.index')

                        ->with('success','level updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\level  $level

     * @return \Illuminate\Http\Response

     */

    public function destroy(level $level)

    {

        $level->delete();

  

        return redirect()->route('levels.index')

                        ->with('success','level deleted successfully');

    }

}

