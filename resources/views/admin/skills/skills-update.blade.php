<x-edit-modal title="Edit Skill">
    <!-- NAME -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error-message field="name"></x-error-message>
    </div>

    <!-- PROGRESS -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Progress</label>
        <input type="number" class="form-control" placeholder="10" min="1" max="100"
            wire:model='progress' />
        <x-error-message field="progress"></x-error-message>
    </div>
</x-edit-modal>
