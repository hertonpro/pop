<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('pages.admin.user', ['users' => $users]);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $photo=storage::disk('public')->put('avatars', $request->photo);
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'photo' => $photo,
            'role' => $request->get('role'),
        ]);

        $user->save();

        return redirect('/admin/user')->with('success', 'User has been added');
    }

    public function show($id)
    {
        $user_selected = User::find($id);
        $users = User::all();

        return view('pages.admin.user', ['user_selected' => $user_selected,'users' => $users]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email  = $request->get('email');
        $user->password = $request->get('password');
        $user->photo = $request->get('photo');
        $user->role = $request->get('role');
        $user->save();

        return redirect('/admin/user')->with('success', 'User has been updated');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/admin/users')->with('success', 'User has been deleted');
    }
}
