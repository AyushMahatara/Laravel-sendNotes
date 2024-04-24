<div>
    <form wire:submit='submit' class="space-y-4">
        <x-input wire:model='noteTitle' label='Note Title' />
        <x-textarea wire:model='noteBody' label='Your Note' />
        <x-input icon='user' wire:model='noteRecipient' label='Recipient' placeholder='youerfriend@gmail.com'
            type='email' />
        <x-input icon="calendar" wire:model='noteSendDate' type='date' label='Send Date' />

        <div class="pt-4">
            <x-button wire:click='submit' right-icon="calendar">Schedule Note</x-button>

        </div>
    </form>
</div>