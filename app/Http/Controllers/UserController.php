<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.User.create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|unique:users|alpha_dash|',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $fields = array(
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->email),
        );
        $create = User::Create($fields);
        if ($create) {
            $noti = array("message" => "User Create Successfully!", "alert-type" => "success");
            return redirect()->back()->with($noti);
        } else {
            $noti = array("message" => "Could not create user!", "alert-type" => "error");
            return redirect()->back()->with($noti);
        }
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
        if($id == auth()->id()){
            $user = User::find($id);
            return view('pages.User.edit_profile',compact('user'));
        }
//        abort(403, 'Unauthorized action.');
        $noti = array("message" => "Invalid Attempt !", "alert-type" => "warning");
        return redirect()->back()->with($noti);
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
        $user = User::find($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'unique:users|alpha_dash',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }
        $fields = array(
            'name' => $request->name,
            'username' => $request->username,
            'hash_key' => encrypt($request->hash_key),
            'password' => $request->password,
        );
        unset($fields['password']);
        if ($request->password) {
            $fields['password'] = bcrypt($request->password);
        }
        $update = User::where('id', $id)->update($fields);
        if ($update) {
            $noti = array("message" => "Profile Updated Successfully!", "alert-type" => "success");
            return redirect()->back()->with($noti);
        } else {
            $noti = array("message" => "Could not update Profile!", "alert-type" => "error");
            return redirect()->back()->with($noti);
        }
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
