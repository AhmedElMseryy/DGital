<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Edit Skill</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent='submit'>
                <div class="modal-body">
                    <div class="row">
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
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
