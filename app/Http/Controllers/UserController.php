<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    //
    public function register(Request $request) {
        
        $validated = $request->validate([
            'name'=>'required|min:3',
            'phone'=>'numeric|min:3|unique:users',
            'county'=>'required|min:3',
            'ward'=>'required|min:3',
            'town'=>'required|min:3',
            'password'=>'required|min:6'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        $request->session()->put('user', $user);
        return redirect('/');
    }

    public function login(Request $request) {
        
        $validated = $request->validate([ 
            'phone'=>'numeric|min:8',
            'password'=>'required|min:6'
        ]); 
        $user = User::where('phone', $validated['phone'])->first();
        if(!$user) return back()->withErrors('No user with such phone number!');
        if(!Hash::check($validated['password'], $user->password)) return back()->withErrors('Wrong password!');
        $request->session()->put('user', $user);
        return redirect('/');
    }

    public function logout(Request $request) {
        $request->session()->forget('user');
        return redirect('/');
    }
}
