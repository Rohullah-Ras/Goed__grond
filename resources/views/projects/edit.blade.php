@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bewerk Project</h1>
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Naam</label>
                <input type="text" class="form-control" name="name" value="{{ $project->name }}" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label">Locatie</label>
                <input type="text" class="form-control" name="location" value="{{ $project->location }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Beschrijving</label>
                <textarea class="form-control" name="description">{{ $project->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Opslaan</button>
        </form>
    </div>
@endsection
