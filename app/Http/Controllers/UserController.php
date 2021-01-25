<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'image' => 'nullable|image|max:1999',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->dateofbirth = $request->dateofbirth;
        $user->title = $request->title;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->about = $request->about;
        // Image
        if ($request->has('image')) {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid().'.'.$ext;
            $image->storeAs('public/pics', $filename);
            Storage::delete("public/pics/{$user->image}");
            $user->image = $filename;
        }
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return back();
    }
}
