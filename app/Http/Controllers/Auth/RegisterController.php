<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register (Request $request)
    {
        try{
         $fields = $request->validate([
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'phone' => 'required|string|unique:profiles,phone',
                'email' => 'required|string|unique:users,email',
                "address" => "string",
                "city" => "string",
                "state" => "string",
                "zip" => "integer",
                "country" => "string",
                'password' => 'required|string|confirmed'
            ]);
        }
        catch(\Exception $e){
            $errors = $e->validator->errors();
            return response()->json([
                'message' => 'Validation Error',
                'errors' => $errors  
            ], 400);
        }

        $user = User::create([
            'email' => $fields['email'],
            'password' => bcrypt($fields['password'])
        ]);
        // create a profile for the user
        $user->profile()->create($fields);

        $token = $user->createToken('myapptoken')->plainTextToken;
         // user data its user and profile data
         $userData = User::with('profile')->where('id', $user->id)->first();
        $response = [
            'user' => $userData,
            'acces_token' => $token,
            'token_type' => 'Bearer'
        ];

        return response($response, 201);
    }
   
}
