<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold text-gray-800 leading-tight">
            Overzicht van Analyses
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm rounded-lg p-6">
            @if($analyses->count())
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">Datum</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">Methode</th>
                            <th class="px-4 py-2 text-left text-sm font-medium text-gray-500">Project</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($analyses as $analyse)
                            <tr>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $analyse->date }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">{{ $analyse->method }}</td>
                                <td class="px-4 py-2 text-sm text-gray-800">
                                    {{ $analyse->project->name ?? 'Geen project gekoppeld' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p class="text-gray-600">Geen analyses gevonden.</p>
            @endif
        </div>
    </div>
</x-app-layout>
