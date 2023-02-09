<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register()
    {
        return view('partials.register', [
            'title' => 'Register'
        ]);
    }


    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'firstname' => 'required|max:25|alpha',
            'lastname' => 'required|max:25|alpha',
            'email' => 'required|email:dns|unique:users,email',
            'password' => 'required|min:8|confirmed|regex:/[0-9]/',
            'password_confirmation' => 'required|same:password',
            'gender' => 'required',
            'RoleID' =>'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $validatedData['password'] = hash::make($validatedData['password']);

        if ($request->hasFile("picture")) {
            $files = $request->file("picture");
            $fileFullName = $files->getClientOriginalName();
            $fileName = pathinfo($fileFullName, PATHINFO_FILENAME);
            $fileExtension = $files->getClientOriginalExtension();
            $fileToStore = $fileName . "-" . time() . "." . $fileExtension;
            $files->storeAs("/public/images", $fileToStore);
        }

        // dd($request);

        // if($request->hasFile('picture')){
        //     $validateData['picture'] = $request->file('picture')->store('images','public');
        // }

        // User::create($validatedData);


        User::create([
            'firstname' => $validatedData['firstname'],
            'lastname' => $validatedData['lastname'],
            'email' => $validatedData['email'],
            'email_verified_at' => now(),
            'password' => $validatedData['password'],
            'gender' => $validatedData['gender'],
            'picture' => $fileToStore,
            'RoleID' => $validatedData['RoleID'],
            'remember_token' => Str::random(10),
        ]);
        $request->session()->flash('success', 'Registration Successfull! Please Login!');

        return redirect('/login');
    }
}
