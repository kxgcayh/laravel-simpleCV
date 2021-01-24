<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'company' => 'required',
            'exp_title' => 'required',
            'exp_description' => 'required',
            'from_date' => 'required|date',
            'to_date' => 'required|date',
        ]);

        // $experience = new Experience();
        // $experience->user_id = Auth::id();
        // $experience->company = $request->company;
        // $experience->title = $request->exp_title;
        // $experience->description = $request->exp_description;
        // $experience->from_date = $request->from_date;
        // $experience->to_date = $request->to_date;
        // $experience->save();

        Experience::create([
            'user_id' => Auth::id(),
            'company' => $request->company,
            'exp_title' => $request->exp_title,
            'exp_description' => $request->exp_description,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
        ]);

        return redirect()->route('home');
    }
}
