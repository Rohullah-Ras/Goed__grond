<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Analyse;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::where('user_id', auth()->id())->get();
        $analyses = Analyse::latest()->take(20)->get();

        return view('dashboard', compact('projects', 'analyses'));
    }
}

