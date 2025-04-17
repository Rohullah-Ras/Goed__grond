@extends('layouts.app')


<h1>Projecten</h1>
@foreach ($projects as $project)
    <p>{{ $project->name }}</p>
@endforeach


@section('content')
    <div class="container">
        <h1>Projecten</h1>
        <a href="{{ route('projects.create') }}" class="btn btn-primary">Nieuw Project</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Locatie</th>
                    <th>Acties</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->location }}</td>
                        <td>
                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-info">Bekijken</a>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Bewerken</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Verwijderen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
