<!-- Modal -->
<x-create-modal title="Add New Category">
    <!-- NAME -->
    <div class="col-md-12 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error-message field="name"></x-error-message>
    </div>
</x-create-modal>
