<?php

namespace App\Http\Controllers\Backend;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Backend\Venue;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $venue = Venue::all();
        return view('backend.venue.index',compact('venue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.venue.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'venue' => 'required|unique:venues',
            ]);
        $venue = new Venue;
        $venue->venue = $request->venue;
        $venue->slug = str_slug($request->venue);
        $venue->save();
        Toastr::Success('Venue successfully save)','Success');
        return redirect('dashboard/venue');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $venue = Venue::findorFail($id);
        return view('backend.venue.edit',compact('venue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $venue = Venue::findorFail($id);
        $venue->venue = $request->venue;
        $venue->slug = str_slug($request->venue);
        $venue->save();
        Toastr::Success('Venue successfully update)','Success');
        return redirect('dashboard/venue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Venue::find($id)->delete();
        Toastr::success('Venue Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
