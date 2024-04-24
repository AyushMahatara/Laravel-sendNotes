<div>
    {{-- Do your work, then step back. --}}
    <div class="space-y-2">
        @if ($notes->isEmpty())
        <div class="text-center">
            <p class="text-xl font-bold">No Notes Yet</p>
            <p class="text-sm">Let's create your first note to send.</p>
            <x-button icon-right="plus" class="mt-6" href="{{ route('notes.create') }}" wire:navigate>Create
                note</x-button>
        </div>
        @else
        <x-button icon-right="plus" class="mb-6" href="{{ route('notes.create') }}" wire:navigate>Create
            note</x-button>
        <div class="grid grid-cols-3 gap-4 mt-12">
            @foreach ($notes as $note)
            <x-card wire:key='{{ $note->id }}'>
                <div class="flex justify-between">
                    <div>
                        <a href="#" class="text-xl font-bold hover:underline hover:text-blue-500">{{ $note->title }}</a>

                        <p class="mt-2 text-xs">{{ Str::limit($note->body, 50, '...') }}</p>
                    </div>
                    <div class="text-xs text-gray-500">
                        {{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }}
                        {{-- {{$user->email }} --}}

                    </div>
                </div>
                <div class="flex items-end justify-between mt-4 space-x-1">
                    <p class="text-xs">Recipient: <span class="font-semibold">
                            {{ $note->recipient }}
                        </span></p>
                    <div>

                        <x-button.circle icon="eye"></x-button.circle>
                        <x-button.circle icon="trash" wire:click="delete('{{ $note->id }}')"></x-button.circle>
                    </div>
                </div>
            </x-card>
            @endforeach
        </div>
        @endif
    </div>
</div>