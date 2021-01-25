<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            // 'password' => 'required',
            // 'image' => 'nullable|image|max:1999',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->dateofbirth = $request->dateofbirth;
        $user->title = $request->title;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->about = $request->about;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        if (isset($request->avatar)) {
            $avatar = $request->avatar;
            $user->addMediaFromRequest($avatar)
                ->toMediaCollection('images')
            ;
        }

        $user->save();

        return redirect()->route('home');
    }
}
