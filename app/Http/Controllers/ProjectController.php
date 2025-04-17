<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Analyse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Haal alle projecten op
    public function index()
    {
        $projects = \App\Models\Project::latest()->take(10)->get();
        $analyses = \App\Models\Analyse::with('project')->latest()->take(20)->get();
    
        return view('dashboard', compact('projects', 'analyses'));
    }
    
    

    // Maak een nieuw project
    public function create()
    {
        return view('projects.create');
    }

    // Sla het nieuwe project op
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->location = $request->location;
        $project->description = $request->description;
        $project->user_id = auth()->id();  // Verbind het project aan de ingelogde gebruiker
        $project->save();

        return redirect()->route('projects.index')->with('success', 'Project aangemaakt!');
    }

    // Toon een specifiek project
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Bewerken van een project
    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    // Opslaan van wijzigingen aan een project
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $project->update($request->only('name', 'location', 'description'));
        return redirect()->route('projects.index')->with('success', 'Project bijgewerkt!');
    }

    // Verwijder een project
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Project verwijderd!');
    }
}
