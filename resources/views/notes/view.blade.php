<x-guest-layout>
    <div class="flex justify-between">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $note->title }}
        </h2>
    </div>
    <p class="mt-2">
        {{ $note->body }}
    </p>
    <div class="flex items-center justify-end mt-12 space-x-2">
        <h3 class="text-sm">{{ $user->name }}</h3>
        <livewire:heartreact :note="$note" />
    </div>
</x-guest-layout>