<x-layout>
    <x-slot:heading>Skill: {{ $skill['name'] }}</x-slot:heading>

    <strong><p>Details about the skill:</strong> {{ $skill['name'] }}</p>
    <strong><p>Projects:</strong> {{ $skill['projects'] }}</p>
    <strong><p>Experience:</strong>{{ $skill['length'] }}</p>

</x-layout>
