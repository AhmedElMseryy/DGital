<x-edit-modal title="Add New Project">
    <!-- NAME -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='name' />
        <x-error-message field="name"></x-error-message>

    </div>

    <!-- LINK -->
    <div class="col-md-6 mb-0">
        <label class="form-label">Link</label>
        <input type="url" class="form-control" placeholder="Link" wire:model='link' />
        <x-error-message field="link"></x-error-message>
    </div>

    <!-- IMAGE -->
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" wire:model='image' />
        <x-error-message field="image"></x-error-message>
    </div>

    <!-- CATEGORY -->
    <div class="col-md-6 mb-0 mt-2">
        <label class="form-label">Category</label>
        <select class="form-control" wire:model='category_id'>
            <option value="">Select Category</option>
            @if (count($categories) > 0)
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" wire:key="category-{{ $category->id }}">{{ $category->name }}
                    </option>
                @endforeach
            @endif
        </select>
        <x-error-message field="category_id"></x-error-message>
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
</x-edit-modal>
