<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {

        $settings = Setting::all();

        if(count($settings) > 0) {
            return view('setting.settings')->with('settings', Setting::first());
        } else {
            return view('setting.create');
        }
    }

    public function store(Request $request) {
        $this->validate($request, [
            'blog_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'logo' => 'required | image',
            'home_photo' => 'required | image',
        ]);


        $settings = new Setting;


        $logo = $request->logo;
        $logo_new_name =time().$logo->getClientOriginalName();
        $logo->move('upload/setting', $logo_new_name);
        $settings->logo = 'upload/setting/' .$logo_new_name;

        $home_photo = $request->home_photo;
        $home_photo_new_name =time().$home_photo->getClientOriginalName();
        $home_photo->move('upload/setting', $home_photo_new_name);
        $settings->home_photo = 'upload/setting/' .$home_photo_new_name;


        $settings->blog_name = $request->blog_name;
        $settings->phone_number = $request->phone_number;
        $settings->email = $request->email;
        $settings->address = $request->address;
        $settings->save();
        return redirect()->back();
    }




    


    public function update(Request $request) {
        $setting = Setting::first();
        
        $this->validate($request, [
            'blog_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'logo' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            
            $logo = $request->logo;
            $logo_new_name =time().$logo->getClientOriginalName();
            $logo->move('upload/setting', $logo_new_name);
            $setting->logo = 'upload/setting/' .$logo_new_name;
            
        }

        if ($request->hasFile('home_photo')) {
            
            $home_photo = $request->home_photo;
            $home_photo_new_name =time().$home_photo->getClientOriginalName();
            $home_photo->move('upload/setting', $home_photo_new_name);
            $setting->home_photo = 'upload/setting/' .$home_photo_new_name;
            
        }


        $setting->blog_name = $request->blog_name;
        $setting->phone_number = $request->phone_number;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->save();
        return redirect()->back();

    }
}
