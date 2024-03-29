<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(User $user)
    {

        return $user->load('profile');
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|unique:profiles,phone,' . $user->profile->id,
            'address' => 'required',
        ]);

        $user->update($request->all());
        $user->profile->update($request->all());

        return response()->json([
            'message' => 'Profile updated successfully',
            'user' => $user->load('profile')
        ], 200);
    }

    // chek if user has profile
    public function hasProfile(Request $request)
    {
        $user = $request->user();
        if ($user->profile) {
            return response()->json([
                'message' => 'User has profile',
                'profile' => $user->profile
            ]);
        }
        return response()->json([
            'message' => 'User has no profile',
            'profile' => null
        ]);
    }
}
