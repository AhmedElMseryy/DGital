<!-- Modal -->
<x-create-modal title="Add New Service">
    <!-- NAME -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error-message field="name"></x-error-message>
    </div>

    <!-- ICON -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="icon" wire:model='icon' />
        <x-error-message field="icon"></x-error-message>
    </div>

    <!-- DESCRIPTION -->
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea type="number" class="form-control" placeholder="Description" wire:model='description'></textarea>
        <x-error-message field="description"></x-error-message>
    </div>
</x-create-modal>
