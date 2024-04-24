<div>
    <form wire:submit='submit' class="space-y-4">
        <x-input wire:model='noteTitle' label='Note Title' />
        <x-textarea wire:model='noteBody' label='Your Note' />
        <x-input icon='user' wire:model='noteRecipient' label='Recipient' placeholder='youerfriend@gmail.com'
            type='email' />
        <x-input icon="calendar" wire:model='noteSendDate' type='date' label='Send Date' />
        <x-checkbox label="Note Published" wire:model='noteIsPublished' />
        <div class="pt-4">
            <x-button type='submit' right-icon="calendar" spinner>Update Note</x-button>

        </div>

        <x-errors />
    </form>

</div>