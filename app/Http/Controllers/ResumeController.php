<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resume.index')->with('resume', Resume::all());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resume.create');
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
            'place'=> 'required',
            'desc'=> 'required',
            'status'=> 'required'
        ]);

        $resume = Resume::create();
        $resume->title = $request->title;
        $resume->place = $request->place;
        $resume->desc = $request->desc;
        $resume->status = $request->status;
        $resume->save();
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
        $resume = Resume::find($id);
        return view('resume.edit')->with('resume', $resume);
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
        $resume = Resume::find($id);

        $this->validate($request, [
            'title' => 'required',
            'place'=> 'required',
            'desc'=> 'required',
            'status'=> 'required'
        ]);

        $resume->title = $request->title;
        $resume->place = $request->place;
        $resume->desc = $request->desc;
        $resume->save();
        return redirect()->route('resume');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resume = Resume::find($id);
        $resume->delete();
        return redirect()->back();
    }
}
