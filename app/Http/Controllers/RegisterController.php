<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            // 'username' => 'required|max:255|min:3|unique:users,username',
            // the second way to write is easier for update methods:
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => 'required|email|max:255|min:7|unique:users,email',
            'password' => ['required', 'min:7', 'max:255'],
        ]);

        // eloquent mutator (setPasswordAttributes from User.php)
        $user = User::create($attributes);

        // log the user
        auth()->login($user);


        // session()->flash('success', 'Your account has been created.');
        // return redirect('/');
        // or: 
        return redirect('/')->with('success', 'Your account has been created.');
    }
}
