<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::where('UserID', auth()->user()->UserID)->first();
        // dd($user);
        return view('pages.profile', [
            'title' => 'Profile',
            'user' => $user,
            'role' => Role::all()
        ]);
    }

    public function updateProfile(Request $request, User $user)
    {
        $request->validate([
            'firstname' => 'required|max:25|alpha',
            'lastname' => 'required|max:25|alpha',
            'email' => 'required|email:dns|unique:users,email,'.auth()->id(). ',UserID',
            'password' => 'required|min:8|confirmed|regex:/[0-9]/',
            'password_confirmation' => 'required|same:password',
            'gender' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:4096',
        ]);
        // dd($request);

        // $validateData['photo'] = $request->file('photo')->getClientOriginalName();
        // $request->file('photo')->storeAs('images', $validateData['photo'], 'public');

        // Image
        $user = User::find($user->UserID);
        if ($request->has("picture")) {
            if ($user->picture != null) {
                Storage::delete("/public/images/" . $user->picture);
            }
            $files = $request->file("picture");
            $fileFullName = $files->getClientOriginalName();
            $fileName = pathinfo($fileFullName, PATHINFO_FILENAME);
            $fileExtension = $files->getClientOriginalExtension();
            $fileToStore = $fileName . "-" . time() . "." . $fileExtension;
            $files->storeAs("/public/images", $fileToStore);
            // $user->picture = $fileToStore;
        }
        // Store To DB
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->picture = $fileToStore;
        $user->save();
        return redirect('/profile')->with('success', 'Profile Updated!');
    }
}
