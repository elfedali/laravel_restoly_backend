<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('role:admin|super-admin');
    }

    public function update(Request $request, User $user)
    {
        // validate profile data
        $request->validate([
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'zip_code' => 'nullable|string',
            'country' => 'nullable|string',
            'user_id' => 'nullable|exists:users,id',
        ]);
        // delete old avatar if new avatar uploaded

        if ($request->hasFile('avatar')) {
            $request->avatar = $request->file('avatar')->storePublicly('avatars', 'public');
            if ($user->profile->avatar) {
                if (Storage::disk('public')->exists($user->profile->avatar)) {
                    Storage::disk('public')->delete($user->profile->avatar);
                }
            }
            $user->profile->avatar = $request->avatar;
        }

        $user->profile->update($request->all());


        return redirect()->route('web.user.edit', $user->id)->with('success', 'Profile updated successfully.');
    }
}
