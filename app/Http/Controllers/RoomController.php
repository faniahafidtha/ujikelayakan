<?php

namespace App\Http\Controllers;
use App\Room;

use Illuminate\Http\Request;

  

class RoomController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $rooms = room::latest()->paginate(5);

  

        return view('rooms.index',compact('rooms'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('rooms.create');

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

            'nama_ruang' => 'required',

            'kd_ruang' => 'required',

             'keterangan' => 'required',

        ]);

  

        room::create($request->all());

   

        return redirect()->route('rooms.index')

                        ->with('success','room created successfully.');

    }

   

    /**

     * Display the specified resource.

     *

     * @param  \App\room  $room

     * @return \Illuminate\Http\Response

     */

    public function show(room $room)

    {

        return view('rooms.show',compact('room'));

    }

   

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\room  $room

     * @return \Illuminate\Http\Response

     */

    public function edit(room $room)

    {

        return view('rooms.edit',compact('room'));

    }

  

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\room  $room

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, room $room)

    {

        $request->validate([

            'nama_ruang' => 'required',

            'kd_ruang' => 'required',

             'keterangan' => 'required',

        ]);

  

        $room->update($request->all());

  

        return redirect()->route('rooms.index')

                        ->with('success','room updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\room  $room

     * @return \Illuminate\Http\Response

     */

    public function destroy(room $room)

    {

        $room->delete();

  

        return redirect()->route('rooms.index')

                        ->with('success','room deleted successfully');

    }

}

