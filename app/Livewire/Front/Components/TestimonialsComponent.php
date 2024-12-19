<?php

namespace App\Livewire\Front\Components;

use App\Models\Testimonial;
use Livewire\Component;

class TestimonialsComponent extends Component
{
    public function render()
    {
        $testimonials = Testimonial::all();
        return view('front.components.testimonials-component', get_defined_vars());
    }
}
