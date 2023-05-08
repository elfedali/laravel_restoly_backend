<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function update(Request $request, User $user)
    {
        // validate profile data
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city_id' => 'required|exists:cities,id',
            'zip' => 'required|string',
            'country_id' => 'required|exists:countries,id',
            'user_id' => 'required|exists:users,id',
        ]);
        // if user has profile then update profile
        if ($user->profile) {
            // if user has avatar then delete it
            if ($user->profile->avatar) {
                unlink(public_path($user->profile->avatar));
            }
            // if user has avatar then upload it
            if ($request->hasFile('avatar')) {
                $request->avatar = $request->file('avatar')->store('public/avatars');
            }
            // update profile
            $user->profile->update($request->all());
        } else {
            // if user has avatar then upload it
            if ($request->hasFile('avatar')) {
                $request->avatar = $request->file('avatar')->store('public/avatars');
            }
            // create new profile
            $user->profile()->create($request->all());
        }
        return redirect()->route('web.user.index', $user->id)->with('success', 'Profile updated successfully.');
    }
}
