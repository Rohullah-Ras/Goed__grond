<x-app-layout>
    <x-slot name="header">
        Dashboard
    </x-slot>
    <div class="grid grid-cols-2 gap-6">
        <div>
            <h2 class="font-semibold text-lg mb-2">Een lijst van de laatste 10 projecten.</h2>
            <table class="w-full bg-white rounded shadow">
                <thead class="bg-gray-200 text-left">
                    <tr>
                        <th class="p-2">Titel</th>
                        <th class="p-2">Opdrachtgever</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projects as $project)
                    <tr class="border-t">
                        <td class="p-2">{{ $project->title }}</td>
                        <td class="p-2">{{ $project->client }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div>
            <h2 class="font-semibold text-lg mb-2">Een lijst van de laatste 20 analyses.</h2>
            <table class="w-full bg-white rounded shadow">
                <thead class="bg-gray-200 text-left">
                    <tr>
                        <th class="p-2">Datum</th>
                        <th class="p-2">Analyse</th>
                        <th class="p-2">Project</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($analyses as $analyse)
                    <tr class="border-t">
                        <td class="p-2">{{ $analyse->date }}</td>
                        <td class="p-2">{{ $analyse->method }}</td>
                        <td class="p-2">{{ $analyse->project->title }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>