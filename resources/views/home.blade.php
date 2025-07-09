<x-layout>
    <x-slot:heading>Home</x-slot:heading>
    <strong>{{ $content->where('position','header')->first()->content }}</strong>
    <p>{{ $content->where('position','main')->first()->content }}</p>

</x-layout>
