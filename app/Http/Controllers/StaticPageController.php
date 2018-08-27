<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
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

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id){

        $users = User::findOrFail($id);
        $users->name = $request -> name;
        $users->email = $request -> email;
        $users->password = Hash::make($request->password);
        $users-> phone = $request -> phone;
        $users-> about = $request -> about;
        $users-> facebook = $request -> facebook;
        $users-> instagram = $request -> instagram;

        $users ->save();
        return redirect()->route('profile.show',$id);
        //return redirect('profile.show',$id)->with('success', 'Property has been Submitted');
    }

}
