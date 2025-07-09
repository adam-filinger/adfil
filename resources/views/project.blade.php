<x-layout>
    <x-slot:heading>Project {{ $project->name }}</x-slot:heading>
    <p><strong>Description:</strong> {{ $project->description }}</p>
    <p><strong>Skill: </strong> {{ $project->skill->name }}</p>
</x-layout>
