<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'store', 'edit', 'delete','show','admin']]);
        // Alternatively
        $this->middleware('auth', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::all();
        $users = DB::table('users')
            ->where('user_type','agent')
            ->orderBy('id','desc')->paginate(6);
        return view('profile.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $users = new User();
        $users-> name = $request -> input('name');
        $users-> phone = $request -> input('phone');
        $users-> email = $request -> input('email');
        $users-> about = $request -> input('about');
        $users-> facebook = $request -> input('facebook');
        $users-> instagram = $request -> input('instagram');
        $users-> password = $request -> input('password');

        $users ->save();
        //return redirect()->route('users.show',$id);
        return redirect('/',$users->id)->with('success', 'Property has been Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        return view('profile.show')->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $id = \Auth::user()->id;
//        $users = User::whereUserId($id)->get();
        $users = User::findOrFail($id);
        return view('profile.edit')->with('users',$users);
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
        $this->validate($request,[
            'email' => 'required|email|unique:users,email,'.$id,
        ]);

        $users = new User();
        $users-> name = $request -> input('name');
        $users-> phone = $request -> input('phone');
        $users-> email = $request -> input('email');
        $users-> about = $request -> input('about');
        $users-> facebook = $request -> input('facebook');
        $users-> instagram = $request -> input('instagram');
        $users-> password = $request -> input('password');

        $users ->save();
        return redirect()->route('profile.show',$id);
        //return redirect('profile.show',$id)->with('success', 'Property has been Submitted');
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
