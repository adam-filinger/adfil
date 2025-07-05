<x-layout>
    <x-slot:heading>About Me</x-slot:heading>
    <p>Welcome to my personal page. Here you can find information about me, my work, and how to contact me.</p>
    <p>This page is built using Laravel and Vue.js, showcasing my skills in modern web development.</p>
    <p>Feel free to explore the different sections to learn more about my projects, interests, and how to get in touch with me.</p>
    <p>Thank you for visiting!</p>

    <h2 class="text-2xl font-bold tracking-tight text-gray-900">My skills</h2>
    <ul>
    @foreach ($skills as $skill)
        <li class="list-disc tracking-tight"><a href="/skill/{{ $skill['id'] }}">{{ $skill['name'] }}</a></li>
    @endforeach
    </ul>

</x-layout>
