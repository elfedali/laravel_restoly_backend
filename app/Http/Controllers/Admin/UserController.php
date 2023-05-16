<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin|super-admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user)
    {
        $countries = User::all();
        return view('admin.user.create', compact('user', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate user data
        $request->validate([
            //'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            //'role' => 'required|string|in:super_admin,admin,subscriber',
            'password' => 'required|string|min:8|confirmed',
            'is_active' => 'boolean',
        ]);
        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }
        // create new user
        $user = User::create([
            'email' => $request->email,
            'role' => User::ROLE_SUBSCRIBER,
            'password' => bcrypt($request->password),
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('web.user.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // validate data
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            //'role' => 'required|string|in:super_admin,admin,subscriber',
            'is_active' => 'boolean',
        ]);

        if ($request->is_active == 'on') {
            $request->is_active = true;
        } else {
            $request->is_active = false;
        }

        // update user email 
        $user->update($request->all());

        return redirect()->route('web.user.edit', $user->id)->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return
            redirect()->route('web.user.index')->with('success', 'User deleted successfully.');
    }
    public function edit_password(User $user)
    {
        return view('admin.user.edit_password', compact('user'));
    }

    public function change_password(Request $request, User $user)
    {
        // validate data
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // update user password
        $user->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('web.user.index')->with('success', 'User password updated successfully.');
    }
    // role

    public function edit_role(User $user)
    {
        return view('admin.user.edit_role', compact('user'));
    }

    public function change_role(Request $request, User $user)
    {
        //TODO : check the user password to change the role
        // validate data
        $request->validate([
            'role' => 'required|string|in:super_admin,admin,subscriber',
        ]);

        // update user role
        $user->update([
            'role' => $request->role,
        ]);

        return redirect()->route('web.user.index')->with('success', 'User role updated successfully.');
    }
}
