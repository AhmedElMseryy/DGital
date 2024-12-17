<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialsDelete extends Component
{
    public $testimonial;

    protected $listeners = ['testimonialDelete'];

    public function testimonialDelete($id)
    {
        // fill $testimonial with the eloquent model of the same id
        $this->testimonial = Testimonial::find($id);
        // show delete modal
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // delete record
        unlink($this->testimonial->image);
        $this->testimonial->delete();
        $this->reset('testimonial');
        // hide modal
        $this->dispatch('deleteModalToggle');
        // refresh testimonials data component
        $this->dispatch('refreshData')->to(testimonialsData::class);
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-delete');
    }
}
