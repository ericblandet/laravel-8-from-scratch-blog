<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attempt to authenticateand log the user in
        // based on the provided credentials
        if (!auth()->attempt($attributes)) {
            // auth failed
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);
            // or :
            // return back()
            //     ->withInput()
            //     ->withErrors(['email' => 'Your provided credentials could not be verified']);
        }

        session()->regenerate(); // in order to prevent session fixation of a hacker
        $user = auth()->user();

        return redirect('/')->with('success', "Welcome, {$user->name}!");
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
