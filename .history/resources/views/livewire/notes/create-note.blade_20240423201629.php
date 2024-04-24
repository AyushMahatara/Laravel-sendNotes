<div>
    <form wire:submit='submit' class="space-y-4">
        <x-input wire:model='noteTitle' label='Note Title' />
        <x-textarea wire:model='noteBody' label='Your Note' />
        <x-input wire:model='noteRecipient' label='Recipient' placeholder='youerfriend@gmail' />
        <x-input wire:model='noteSendDate' type='date' label='Send Date' />
        <x-button wire:click='submit'>Submit</x-button>
    </form>
</div>