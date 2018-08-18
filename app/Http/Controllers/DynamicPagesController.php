<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit;
use App\User;

class DynamicPagesController extends Controller
{
    public function submit_property(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'location' => 'required',
            'status' => 'required',
            'image' => 'required',
            'video' => 'required',
            'address' => 'required',
            'price' => 'required',
            'size' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'tv' => 'required',
            'garages' => 'required',
            'pool' => 'required',
            'description' => 'required',
            'owner' => 'required'
        ]);

        $submit = new Submit;
        $submit->title = $request->input('title');
        $submit->location = $request->input('location');
        $submit->status = $request->input('status');
        //$submit->property = $request->input('image');
        if ($file = $request->file('image')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property'] = $name;
        }

        $submit->video = $request->input('video');
        $submit->map = $request->input('address');
        $submit->price = $request->input('price');
        $submit->size = $request->input('size');
        $submit->bathroom = $request->input('bathroom');
        $submit->bedroom = $request->input('bedroom');
        $submit->tv = $request->input('tv');
        $submit->garages = $request->input('garages');
        $submit->pool = $request->input('pool');
        $submit->description = $request->input('description');
        $submit->owner = $request->input('owner');

        //upload


        $submit->save();

        return redirect('/my_property')->with('success', 'Property has been Submitted');
    }

    public function getProperty(){
        $submit = Submit::all();
        return view('my_property')->with('submit',$submit);
    }

    public function Property(){
        $submit = Submit::all();
        return view('property')->with('submit',$submit);
    }

    public function posts(){
        $submit = Submit::all();
        return view('posts')->with('submit',$submit);
    }

    public function editproperty(Submit $submit){
        $submit = User::findOrFail($submit->id);
        return view('edit_property')->withUser('submit', $submit);
    }


}
