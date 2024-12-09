<!-- Modal -->
<x-create-modal title="Add New Count">
    <!-- NAME -->
    <div class="col-md-4 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error-message field="name"></x-error-message>
    </div>

    <!-- COUNT -->
    <div class="col-md-4 mb-0">
        <label class="form-label">Count</label>
        <input type="number" class="form-control" placeholder="10" min="1" wire:model='count' />
        <x-error-message field="count"></x-error-message>
    </div>

    <!-- ICON -->
    <div class="col-md-4 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="icon" wire:model='icon' />
        <x-error-message field="icon"></x-error-message>
    </div>
</x-create-modal>
