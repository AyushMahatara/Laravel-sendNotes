<div>
    <form wire:submit='submit'>
        <x-input wire:model='noteTitle' label='Title' />
        <x-textarea wire:model='noteRecipient' label='Recipient' />
        <x-input wire:model='noteSendDate' type='date' label='Send Date' />
        <x-button wire:click='submit'>Submit</x-button>
    </form>
</div>