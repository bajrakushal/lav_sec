<?php

namespace App\Http\Controllers;

use App\Models\artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Artist::all();
        return view('Admin.Artist.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Artist.create');
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
            'image' => 'required|mimes:png,jpg,jpeg|max:5048'
        ]);

        $imageName = time().'-'.$request->artist.'.'.$request->image->extension();

        $request->image->move(public_path('images'),$imageName);


        $data = new Artist();
        $data -> name = $request->artist;
        $data -> genre = $request->genre;
        $data -> album = $request->album;
        $data -> date = $request->year;
        $data -> price = $request->price;
        $data -> image_path = $imageName;
        $data -> description = $request->desc;
        
        $data->save();

        return redirect('/admin/artist')->with('success','Artist added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit($artist)
    {
        $datas = Artist::find($artist);
        return view('Admin.Artist.edit',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artist $artist)
    {
        $artist = Artist::find($artist->id);
        $artist -> name = $request->artist;
        $artist -> genre = $request->genre;
        $artist -> album = $request->album;
        $artist -> date = $request->year;
        $artist -> price = $request->price;
        $artist -> description = $request->desc;

        $artist->save();

        return redirect('/admin/artist')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy( $artist)
    {
        $data = Artist::find($artist);
        $data->delete();
        return redirect('/admin/artist')->with('success','Deleted Successfully');


    }
}
