<div>
    {{-- Do your work, then step back. --}}
    @foreach ($users as $user)
    <h3>{{ $user->name}}</h3>
    <x-card wire:key='' {{ $note->id }}></x-card>
    @endforeach
</div>