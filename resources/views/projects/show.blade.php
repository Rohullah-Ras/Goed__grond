@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p><strong>Locatie:</strong> {{ $project->location }}</p>
        <p><strong>Beschrijving:</strong> {{ $project->description }}</p>
        <a href="{{ route('projects.index') }}" class="btn btn-secondary">Terug naar overzicht</a>
    </div>
@endsection
