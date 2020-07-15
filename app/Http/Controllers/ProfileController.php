<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $profile = Profile::all();

        if(count($profile) > 0) {
            return view('profile.index')->with('profile', Profile::first());
        } else {
            return view('profile.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

            'name'=> 'required',
            'user_photo'=> 'required | image',
            'location'=> 'required',
            'desc'=> 'required',
            'job_year'=> 'required',
            'proj'=> 'required',
            'status'=> 'required',
            'cv'=> 'required|mimes:pdf|max:10000',    
        ]);

        $user_photo = $request->user_photo;
        $user_photo_new_name =time().$user_photo->getClientOriginalName();
        $user_photo->move('upload/setting/', $user_photo_new_name);


        $cv = $request->cv;
        $cv_new_name =time().$cv->getClientOriginalName();
        $cv->move('upload/setting/', $cv_new_name);


        $profile = Profile::create([
            'name'=> $request->name,
            'user_photo'=> 'upload/setting/'.$user_photo_new_name,
            'location'=> $request->location,
            'desc'=> $request->desc,
            'job_year'=> $request->job_year,
            'proj'=> $request->proj,
            'status'=> $request->status,
            'cv'=> 'upload/setting/'.$cv_new_name,
        ]);

        $profile->save();
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $profile = Profile::first();

        $this->validate($request, [

            'name'=> 'required',
            'location'=> 'required',
            'desc'=> 'required',
            'job_year'=> 'required',
            'proj'=> 'required',
            'status'=> 'required',
        ]);

        if($request->hasFile('user_photo')){

            $user_photo = $request->user_photo;
            $user_photo_new_name =time().$user_photo->getClientOriginalName();
            $user_photo->move('upload/setting/', $user_photo_new_name);
            $profile->user_photo = 'upload/setting/' .$user_photo_new_name;


        } elseif($request->hasFile('cv')) {

            $cv = $request->cv;
            $cv_new_name =time().$cv->getClientOriginalName();
            $cv->move('upload/setting/', $cv_new_name);
            $profile->cv = 'upload/setting/'. $cv_new_name;

        }

            $profile->name = $request->name;
            $profile->location = $request->location;
            $profile->desc = $request->desc;
            $profile->job_year = $request->job_year;
            $profile->proj = $request->proj;
            $profile->status = $request->status;
            $profile->save();
            return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
