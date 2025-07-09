<x-layout>
    <x-slot:heading>About Me</x-slot:heading>

    <p>{{ $content->where('position','main')->first()->content }}</p>

    <h2 class="text-2xl font-bold tracking-tight text-gray-900">My skills:</h2>
    <ul>
    @foreach ($skills as $skill)
        <li class="list-disc tracking-tight"><a href="/skill/{{ $skill->id }}">{{ $skill->name }}</a></li>
    @endforeach
    </ul>

</x-layout>
