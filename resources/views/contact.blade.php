<x-layout>
    <x-slot:heading>Contact</x-slot:heading>
    <p>{{ $content->where('position','main')->first()->content }}</p>
    <ul>
        <strong><li>Email:</strong> <a href="mailto:adam.filinger@gmail.com">adam.filinger@gmail.com</a>
        <strong><li>Phone:</strong> 737 584 114
        <strong><li>Instagram</strong> <a href="https://www.instagram.com/adam.filinger/">@adam.filinger</a>
    </ul>

</x-layout>
