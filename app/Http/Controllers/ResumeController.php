<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Auth;

class ResumeController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $users = User::select('id')->where('id', $userId)->get();

        return view('resume.pdf', compact('userId', 'users'));
    }

    public function getPDF($id)
    {
        $users = User::find($id)->with('experiences', 'education');
        $pdf = PDF::loadView('resume.pdf', compact('users'));

        return $pdf->download('myCurriculumVitae.pdf');
    }
}
