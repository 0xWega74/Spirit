<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Blogs;
use App\Tags;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('blog.index')->with('blogs', Blogs::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create')->with('tags', Tags::all());
        
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
            'content' => 'required'
        ]);



        $photo = $request->photo;
        $photo_new_name =time().$photo->getClientOriginalName();
        $photo->move('upload/posts/', $photo_new_name);




        $blogs = Blogs::create([
            'title' => $request->title,
            'photo' => 'upload/posts/'. $photo_new_name,
            'content' => $request->content,
            'tag_name' => $request->tag_name,
            'slug' => Str::slug($request->title)
        ]);

        return redirect()->back();

        $blog = new Blogs;
        $blog->title = $request->title;
        $blog->tag_name = $request->tag_name;
        $blog->photo = $request->photo;
        $blog->content = $request->content;
        return redirect()->route('blogs');
    
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
        $blogs = Blogs::find($id);
        return view('blog.edit')->with('blogs', $blogs)->with('tags', Tags::all());
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
        $blogs = Blogs::find($id);
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'tag_name' => 'required'
        ]);

        if($request->hasFile('photo')) {
            $photo = $request->photo;
            $photo_new_name =time().$photo->getClientOriginalName();
            $photo->move('upload/posts/', $photo_new_name);
            $blogs->photo = 'upload/posts/'.$photo_new_name;

        }

        $blogs->title = $request->title;
        $blogs->content = $request->content;
        $blogs->tag_name = $request->tag_name;
        $blogs->save();
        return redirect()->route('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blogs::find($id);
        $blog->delete();
        return redirect()->back();
    }
}
