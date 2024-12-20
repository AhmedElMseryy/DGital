<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;
use Livewire\WithPagination;

class CountersData extends Component
{

    use WithPagination;

    public $search;

    protected $listeners = ['refreshData' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $data = Counter::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('admin.counters.counters-data', get_defined_vars());
    }
}
