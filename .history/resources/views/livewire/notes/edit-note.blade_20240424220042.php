<div>
    <form wire:submit='update' class="space-y-4">

        <x-input wire:model='noteTitle' label='Note Title' />
        <x-textarea wire:model='noteBody' label='Your Note' />
        <x-input icon='user' wire:model='noteRecipient' label='Recipient' placeholder='youerfriend@gmail.com'
            type='email' />
        <x-input icon="calendar" wire:model='noteSendDate' type='date' label='Send Date' />
        <x-checkbox label="Note Published" wire:model='noteIsPublished' />
        <div class="pt-4">
            <x-button type='submit' right-icon="calendar" spinner="Save Note">Update Note</x-button>
            <x-button href="{{ route('notes.index') }}" flat negative>Back to Note</x-button>
        </div>

        <x-action-message on="update" />
        <x-errors />
    </form>

</div>
