<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('layouts.index',[
            'users'=> $users
        ]);
    }

    public function create()
    {
        return view('layouts.create');
    }


    public function store(Request $request)
    {
        $newPost = User::create([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'type' => $request->type,
            'user_id' => 1
        ]);

        return redirect('/');
    }


    public function show(User $user)
    {
        return view('layouts.show', [
            'user' => $user,
        ]);
    }

    public function edit(User $user)
    {
        return view('layouts.edit',[
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'id_number' => $request->id_number,
            'type' => $request->type
        ]);
        return redirect('/');
    }

    public function destroy(User $user )
    {
        $user->delete();
        return redirect('/');
    }
}
