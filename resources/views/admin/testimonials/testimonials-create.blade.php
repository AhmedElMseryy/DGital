<!-- Modal -->
<x-create-modal title="Add New Testimonial">
    <!-- NAME -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error-message field="name"></x-error-message>
    </div>

    <!-- POSITION -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" placeholder="Position" wire:model='position' />
        <x-error-message field="position"></x-error-message>
    </div>

    <!-- IMAGE -->
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" wire:model='image' />
        <x-error-message field="image"></x-error-message>
    </div>


    @if ($image)
        <div class="my-4">
            <img src="{{ $image->temporaryUrl() }}" width="100%" height="150px">
        </div>
    @endif

    <!-- DESCRIPTION -->
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea type="number" class="form-control" placeholder="Description" wire:model='description'></textarea>
        <x-error-message field="description"></x-error-message>
    </div>
</x-create-modal>
