<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analyse;
use App\Models\Project;

class AnalyseController extends Controller
{
    public function index()
    {
        $analyses = \App\Models\Analyse::with('project')->latest()->take(20)->get();
        return view('analyses.index', compact('analyses'));
    }
    
}

