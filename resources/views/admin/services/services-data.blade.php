<div>
    <!-- Search -->
    <div class="mb-3">
        <input type="text" class="form-control w-25" placeholder="search" wire:model.live='search'>
    </div>

    <!-- Table -->
    <div class="table-responsive text-nowrap">
        @if (count($data) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th width="60%">Name</th>
                        <th width="30%">Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                        <tr>
                            <!-- NAME -->
                            <td>
                                <strong>{{ $record->name }}</strong>
                            </td>

                            <!-- Icon -->
                            <td>
                                <i class="{{ $record->icon }} text-secondary mb-3"></i>
                            </td>


                            <!-- *********************ACTIONS********************* -->
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <!-- Edit -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('serviceUpdate',{ id: {{ $record->id }} })">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>

                                        <!-- Delete -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('serviceDelete',{ id: {{ $record->id }} })">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>

                                        <!-- Show -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('serviceShow',{ id: {{ $record->id }} })">
                                            <i class="bx bx-show-alt me-1"></i>
                                            Show
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <!-- *********************/ACTIONS********************* -->

                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        @else
            <span class="text-danger">No Results Found</span>
        @endif
    </div>
</div>
