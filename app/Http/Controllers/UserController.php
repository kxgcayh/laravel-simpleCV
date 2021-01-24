<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
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
        $user->save();

        $experience = new Experience();
        $experience->user_id = Auth::id();
        $experience->company = $request->company;
        $experience->title = $request->exp_title;
        $experience->description = $request->exp_description;
        $experience->from_date = $request->from_date;
        $experience->to_date = $request->to_date;
        $experience->save();

        $education = new Education();
        $education->user_id = Auth::id();
        $education->institution = $request->institution;
        $education->major = $request->major;
        $education->description = $request->description;
        $education->date = $request->date;
        $education->save();

        return redirect()->route('home');
    }
}
