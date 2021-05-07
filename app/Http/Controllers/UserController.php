<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $page = "Users";
        $users = User::all();

        return view('backoffice.user.all', compact('page', 'users'));
    }

    public function destroy($id){

        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

    public function edit($id){

        $user = User::find($id);
        $page = "Edit user";

        return view('backoffice.user.edit', compact('user', 'page'));
    }

    public function update($id, Request $request){

        $user = User::find($id);
        
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->birthdate = $request->birthdate;
        $user->website = $request->website;
        $user->phoneNumber = $request->phoneNumber;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->degree = $request->degree;
        $user->email = $request->email;
        $user->freelance = $request->freelance;
        $user->updated_at = now();

        $user->save();

        return redirect()->route('users');

    }

    public function create(){

        $page = 'Create User';

        return view('backoffice.user.create', compact('page'));
    }

    public function store(Request $request){

        $user = new User();
        
        $user->lastname = $request->lastname;
        $user->firstname = $request->firstname;
        $user->birthdate = $request->birthdate;
        $user->website = $request->website;
        $user->phoneNumber = $request->phoneNumber;
        $user->city = $request->city;
        $user->age = $request->age;
        $user->degree = $request->degree;
        $user->email = $request->email;
        $user->freelance = $request->freelance;
        $user->created_at = now();

        $user->save();

        return redirect()->route('users');

    }
}
