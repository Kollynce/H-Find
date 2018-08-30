<?php

namespace App\Http\Controllers;

use App\Submit;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Input;

class SubmitController extends Controller
{

    /** 
     * This is for thr authentication of routes
     * **/
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete','index','show','admin']]);
        // Alternatively
        $this->middleware('auth', ['except' => ['posted']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $submit = Submit::whereUserId($id, 'desc')->paginate(10);
        return view('property.index')->with('submit', $submit);
    }
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        $submit = Submit::orderBy('id', 'desc')->paginate(10);
        return view('property.admin')->with('submit', $submit);
    }

    public function posted()
    {
        $submit = Submit::orderBy('id','desc')->paginate(6);
        return view('property.posted')->with('submit',$submit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('property.create');
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
            'location' => 'required',
            'status' => 'required',
            'image1' => 'required',
            'address' => 'required',
            'price' => 'required',
            'size' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'tv' => 'required',
            'garages' => 'required',
            'pool' => 'required',
            'description' => 'required'
        ]);

        $submit = new Submit;
        $submit->title = $request->input('title');
        $submit->location = $request->input('location');
        $submit->status = $request->input('status');
        //$submit->property = $request->input('image');
        //Image upload section //
        if ($file = $request->file('image1')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property1'] = $name;
        }
        if ($file = $request->file('image2')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property2'] = $name;
        }
        if ($file = $request->file('image3')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property3'] = $name;
        }
        if ($file = $request->file('image4')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property4'] = $name;
        }
        //end of image upload section //
        $submit->gas = $request->has('gas');
        $submit->laundry = $request->has('laundry');
        $submit->yard = $request->has('yard');
        $submit->internet = $request->has('internet');
        $submit->conditioning = $request->has('conditioning');
        $submit->fire = $request->has('fire');
        $submit->cable = $request->has('cable');
        $submit->balcony = $request->has('balcony');
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
        $submit->user_id = auth()->user()->id;
        //upload


        $submit->save();

        return redirect('/property')->with('success', 'Property has been Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $submit = Submit::findOrFail($id);
        return view('property.show')->with('submit', $submit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $submit = Submit::findOrFail($id);
        return view('property.edit')->with('submit',$submit);
    }


    public  function search()
    {
        $price = $_GET['price'];
        $status = $_GET['status'];
        $location = $_GET['location'];
        $bedroom = $_GET['bedroom'];
        $bathroom = $_GET['bathroom'];
        $size = $_GET['size'];
        $title = $_GET['title'];

        $search = \App\Submit::where([
            ['price', '>=', $price],
            ['status', 'LIKE', '%' . $status . '%'],
            ['bedroom', '>=', $bedroom],
            ['bathroom', '>=', $bathroom],
            ['location', 'LIKE', '%' . $location . '%'],
            ['size', '>=', $size],
            ['title', 'LIKE', '%' . $title . '%'],
        ])->get();

        return view('property.search', compact('search'));
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

        $submit = Submit::findOrFail($id);
        $submit->title = $request->input('title');
        $submit->location = $request->input('location');
        $submit->status = $request->input('status');
        //$submit->property = $request->input('image');

        //Image upload section //
        if ($file = $request->file('image1')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property1'] = $name;
        }
        if ($file = $request->file('image2')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property2'] = $name;
        }
        if ($file = $request->file('image3')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property3'] = $name;
        }
        if ($file = $request->file('image4')){
            $name = $file ->getClientOriginalName();
            $file->move('image',$name);
            $submit['property4'] = $name;
        }
        //end of image upload section //

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
        $submit->user_id = auth()->user()->id;
        //upload

        $submit->save();

        return redirect()->route('property.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $submit = Submit::find($id);
        $submit->delete();
        return redirect('/property')->with('success', 'Property has been Submitted');
    }

    
}
