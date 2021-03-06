<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|unique:users',
            'password'  => 'required'
        ]);

        $user = new User;
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return response('', 201)->header('Location', "/api/users/{$user->id}");
    }

    public function show(Request $request, $user_id)
    {
        return User::find($user_id); 
    }

    public function me(Request $request)
    {
        return $request->user();
    }
}
