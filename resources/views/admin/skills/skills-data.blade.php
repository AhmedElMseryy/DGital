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
                        <th width="45%">Name</th>
                        <th width="45%">Progress</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($data as $record)
                        <tr>
                            <!-- NAME -->
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $record->name }}</strong>
                            </td>
                            <!-- PROGRESS -->
                            <td>{{ $record->progress }}</td>

                            <!-- ACTIONS -->
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <!-- Edit -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillUpdate',{ id: {{ $record->id }} })">
                                            <i class="bx bx-edit-alt me-1"></i>
                                            Edit
                                        </a>

                                        <!-- Delete -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillDelete',{ id: {{ $record->id }} })">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>

                                        <!-- Show -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('skillShow',{ id: {{ $record->id }} })">
                                            <i class="bx bx-show-alt me-1"></i>
                                            Show
                                        </a>
                                    </div>
                                </div>
                            </td>

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