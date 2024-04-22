<div>
    {{-- Do your work, then step back. --}}
    @foreach ($users as $user)
    <h3>{{ $user->name}}</h3>
    <x-card></x-card>
    @endforeach
</div>