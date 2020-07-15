<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Gallery;
use App\Profile;
use App\Price;
use App\Resume;
use App\Skill;
use App\Blogs;
use App\Messages;

class SiteUIController extends Controller
{
    public function index() {
        // return view('index')
        //                     ->with('gallery', Gallery::all())
        //                     ->with('settings' , Setting::all());
        $settings = Setting::all();
        $gallery = Gallery::all();
        $profile = Profile::first();
        $prices = Price::all();
        $resume = Resume::all();
        $skills = Skill::all();
        $blogs = Blogs::all();
        $icons = [
            'fas fa-baby',
            'fas fa-child',
            'fas fa-user-tie'
        ];

        // dd($gallery);
        return view('index', compact('settings','gallery', 'profile', 'prices', 'resume', 'skills', 'blogs', 'icons'));
    }


    public function showBLog($slug) {

        $blogs = Blogs::where('slug', $slug)->first();


        $settings = Setting::first();
        $profile = Profile::first();

        // dd($gallery);
        return view('blog', compact('settings', 'blogs', 'profile'));


    }
    
}
