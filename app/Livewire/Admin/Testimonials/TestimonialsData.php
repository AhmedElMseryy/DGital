<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialsData extends Component
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
        $data = Testimonial::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        return view('admin.testimonials.testimonials-data', get_defined_vars());
    }
}
