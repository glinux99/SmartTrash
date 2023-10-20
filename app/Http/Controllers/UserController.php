<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all users
        $users = User::all();

        // Return the users
        return view('users.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
        $avatar = $request->file('avatar');
        if ($request->file('avatar')) {
            $avatarPath = $avatar->store('avatars');
            $request['avatar'] = $avatarPath;
        }

        // Create a new user
        User::create($request->all());


        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Get the user
        $user = User::find($id);

        // Return the user
        return view('users.user', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Get the user
        //return $request;
        $user = User::find($id);
        // Validate the request
        // $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        // ]);

        // Update the user
        $user->update($request->except(['avatar']));

        if ($request->hasFile('avatar')) {
            $fileName = 'avatar-' . $user->id . '.png';
            $path = $request->file('avatar')->storeAs(
                'avatar' . $user->id,
                $fileName,
                'public'
            );


            $user->update(['avatar' => "/" . "storage/" . $path]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);

        // Delete the user
        $user->delete();
        return $this->index();
    }
}
