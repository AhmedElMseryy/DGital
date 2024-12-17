<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonial;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialsCreate extends Component
{
    use WithFileUploads;

    public $name, $position, $image,  $description;


    public function rules()
    {
        return [
            'name' => 'required',
            'position' => 'required',
            'image' => 'required',
            'description' => 'required|string',
        ];
    }


    public function submit()
    {
        $data = $this->validate($this->rules());
        // save image on my testimonial
        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');
        // save data in db
        $data['image'] = 'storage/images/' . $imageName;
        Testimonial::create($data);
        $this->reset(['name', 'position', 'image', 'description']);
        // hide modal
        $this->dispatch('createModalToggle');
        // refresh skills data component
        $this->dispatch('refreshData')->to(TestimonialsData::class);
    }
    #-------------------------------------------------------------------------
    public function render()
    {
        return view('admin.testimonials.testimonials-create');
    }
}
