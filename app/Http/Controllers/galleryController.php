<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;
use App\Gallery;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gallery.index')->with('gallery', Gallery::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gallery.create')->with('tags', Tags::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'tag_name' => 'required',
            'photo' => 'required | image',
        ]);



        $photo = $request->photo;
        $photo_new_name =time().$photo->getClientOriginalName();
        $photo->move('upload/posts', $photo_new_name);




        $gallery = Gallery::create([
            'title' => $request->title,
            'tag_name' => $request->tag_name,
            'photo' => 'upload/posts/'. $photo_new_name,
        ]);

        $gallery_item = new Gallery;
        $gallery_item->title = $request->title;
        $gallery_item->tag_name = $request->tag_name;
        $gallery_item->photo = $request->photo;
        return redirect()->back();
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
        $gallery = Gallery::find($id);
        return view('gallery.edit')
                                    ->with('gallery', $gallery)
                                    ->with('tags', Tags::all());
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
        $gallery = Gallery::find($id);

        $this->validate($request, [
            'title' => 'required',
            'tag_name' => 'required',
            // 'photo' => 'required | image',
        ]);

        if ($request->hasFile('photo')) {
            
            $photo = $request->photo;
            $photo_new_name =time().$photo->getClientOriginalName();
            $photo->move('upload/posts', $photo_new_name);
            $gallery->photo = 'upload/posts/'.$photo_new_name;
        }
            $gallery->title = $request->title;
            $gallery->tag_name = $request->tag_name;
            $gallery->save();
            return redirect()->route('gallery');      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back();
    }
}
