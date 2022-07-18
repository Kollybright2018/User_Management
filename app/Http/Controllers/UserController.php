<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function createUser(request $request){
        // return view('pages.register');
        // $this->validate(request, ['name'])
      $user= new Users();
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->phone = $request->input('phone');
      $user->save();
      return redirect('/')->with('success', 'New user created successfully');

    }

 public function getUsers(){

    $users=Users::get();
    return view('pages.users')->with("users", $users);
 }
    public function index(){
        return view('pages.index');
    }
    public function editUser(Request $request){
        $user = Users::find($request->input('id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone'); 
        $user->update();
        return redirect('/')->with('success', 'Updated Successfully');
    }
    public function edit($id){
        $user= Users::find($id);
        return view('pages.edit')->with('user', $user);
    }
    public function delete($id){
    $user = Users::find($id);
    $user->delete();
    return redirect('/');
    }

}
