<div>
    {{-- Do your work, then step back. --}}
    @foreach ($users as $user)
    <h3>{{ $user->name}}</h3>
    <x-card wire:key='{{ $user->id }}'>
        <div class="flex justify-between">
            <a href="#" class="text-xl font-bold hover:underline hover:text-blue-500">{{ $user->name }}</a>
        </div>
    </x-card>
    @endforeach
</div>