<div>
    {{-- Do your work, then step back. --}}
    <div class="space-y-2">
        <div class="grid grid-cols-2 gap-4 mt-12">
            @foreach ($users as $user)
            <x-card wire:key='{{ $user->id }}'>
                <div class="flex justify-between">
                    <a href="#" class="text-xl font-bold hover:underline hover:text-blue-500">{{ $user->name }}</a>
                </div>
                <div class="test">
                    {{-- {{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y') }} --}}
                    {{$user->email }}

                </div>
            </x-card>
            @endforeach
        </div>
    </div>
</div>