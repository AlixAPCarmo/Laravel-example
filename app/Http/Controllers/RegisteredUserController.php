<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate the form
        $validatedAttributes  = request()->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::min(5)->letters()->numbers()->symbols(), 'confirmed'], // confirmed ->feld must be password_confirmation
        ]);

        //create the user
        $user = User::create($validatedAttributes);
        // sign up the user
        Auth::login($user);
        // redirect somewhere
        return redirect('/jobs');
    }


}
