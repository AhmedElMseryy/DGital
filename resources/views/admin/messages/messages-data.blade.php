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
                        <th width="30%">Name</th>
                        <th width="30%">Email</th>
                        <th width="20%">Subject</th>
                        <th width="10%">Status</th>
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

                            <!-- EMAIL -->
                            <td>{{ $record->email }}</td>
                            <!-- SUBJECT -->
                            <td>{{ $record->subject }}</td>

                            <!-- STATUS -->
                            <td>
                                <span class="{{ $record->status == '0' ? 'text-danger' : 'text-primary' }}">
                                    {{ $record->status == '0' ? 'In Active' : 'Active' }}
                                </span>
                            </td>

                            <!-- *********************ACTIONS********************* -->
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <!-- Delete -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('messageDelete',{ id: {{ $record->id }} })">
                                            <i class="bx bx-trash me-1"></i>
                                            Delete
                                        </a>

                                        <!-- Show -->
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('messageShow',{ id: {{ $record->id }} })">
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
