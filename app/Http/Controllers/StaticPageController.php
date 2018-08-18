<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class StaticPageController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function profile()
    {
        return view('profile', array('user'=> Auth::user()));
    }

    public function submit()
    {
        return view('submit');
    }

    public function avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request -> file('avatar');
            $filename = time() . '.' . $avatar -> getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatar/' . $filename));

            $user = Auth::user();
            $user-> avatar = $filename;
            $user-> save();
        }
        return view('profile', array('user'=> Auth::user()));
    }

}
