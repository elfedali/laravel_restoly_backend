<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

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
