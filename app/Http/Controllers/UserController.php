<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function login(Request $request){
        $incomingFields = $request->validate([
            'loginame' => "required",
            'loginpassword' => "required"
        ]);

        if(auth() -> attempt(['name' => $incomingFields['loginname'], 'password' => $incomingFields['loginpassword']])){
            $request -> session()->regenerate();
        }
    }

    public function logout(){
        auth() -> logout();
        return redirect('/');
    }

    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3','max:100', Rule::unique('users','name')],
            'email' => ['required','email', Rule::unique('users','email')],
            'password' => ['required','min:8','max:100'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);

        auth() -> login($user);

        return redirect('/');
    }
}
