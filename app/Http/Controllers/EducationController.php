<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'institution' => 'required',
            'major' => 'required',
            'edu_description' => 'required',
            'date' => 'required|date',
        ]);

        $education = new Education();
        $education->user_id = Auth::id();
        $education->institution = $request->institution;
        $education->major = $request->major;
        $education->edu_description = $request->edu_description;
        $education->date = $request->date;
        $education->save();

        return redirect()->route('home');
    }
}
